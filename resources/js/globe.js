import Globe from 'globe.gl';

function pointInRing(lng, lat, ring) {
    // ray casting
    let inside = false;
    for (let i = 0, j = ring.length - 1; i < ring.length; j = i++) {
        const xi = ring[i][0], yi = ring[i][1];
        const xj = ring[j][0], yj = ring[j][1];
        if ((yi > lat) !== (yj > lat) &&
            lng < (xj - xi) * (lat - yi) / (yj - yi) + xi) {
            inside = !inside;
        }
    }
    return inside;
}

function samplePolygon(rings, density, out) {
    let minLng = 180, maxLng = -180, minLat = 90, maxLat = -90;
    for (const p of rings[0]) {
        if (p[0] < minLng) minLng = p[0];
        if (p[0] > maxLng) maxLng = p[0];
        if (p[1] < minLat) minLat = p[1];
        if (p[1] > maxLat) maxLat = p[1];
    }
    const target = Math.round((maxLng - minLng) * (maxLat - minLat) * density);
    let placed = 0, attempts = 0;
    while (placed < target && attempts < target * 40) {
        attempts++;
        const lng = minLng + Math.random() * (maxLng - minLng);
        const lat = minLat + Math.random() * (maxLat - minLat);
        if (lat < -60) continue;
        if (!pointInRing(lng, lat, rings[0])) continue;
        let inHole = false;
        for (let k = 1; k < rings.length; k++) {
            if (pointInRing(lng, lat, rings[k])) { inHole = true; break; }
        }
        if (inHole) continue;
        out.push({ lat, lng });
        placed++;
    }
}

const geo = await fetch('/images/globe-points.json').then(r => {
    if (!r.ok) throw new Error('HTTP ' + r.status);
    return r.json();
});

const landPoints = [];
for (const f of geo.features) {
    const g = f.geometry;
    const polys = g.type === 'Polygon' ? [g.coordinates]
        : g.type === 'MultiPolygon' ? g.coordinates
            : [];
    for (const rings of polys) {
        samplePolygon(rings, 0.1, landPoints); // density: ~точек на кв. градус
    }
}


const world = Globe({ rendererConfig: { antialias: true, alpha: true } })
    (document.getElementById('globe'))
    .width(500)
    .height(500)
    .backgroundColor('rgba(0,0,0,0)')
    .showAtmosphere(false)
    .pointsData(landPoints)
    .pointLat('lat')
    .pointLng('lng')
    .pointColor(() => 'rgba(190, 215, 255, 0.75)')
    .pointAltitude(0.004)
    .pointRadius(0.5)
    .pointsMerge(true)
    .labelLat('lat')
    .labelLng('lng')
    .labelText('name')
    .labelSize(0.9)
    .labelDotRadius(0.5)
    .labelColor(() => '#7dd3fc')
    .labelAltitude(0.01);

const mat = world.globeMaterial();
mat.transparent = true;
mat.opacity = 0;
mat.color.set('#33415e');
mat.shininess = 40;
mat.needsUpdate = true;


world.pointOfView({ lat: 20, lng: 0, altitude: 2.1 });

const controls = world.controls();
controls.enableZoom = false;
controls.enablePan = false;
controls.enableRotate = true;

controls.autoRotate = !matchMedia('(prefers-reduced-motion: reduce)').matches;
controls.autoRotateSpeed = 0.6;

const el = document.getElementById('globe');
el.addEventListener('pointerenter', () => controls.autoRotate = false);
el.addEventListener('pointerleave', () => {
    if (!matchMedia('(prefers-reduced-motion: reduce)').matches) controls.autoRotate = true;
});

