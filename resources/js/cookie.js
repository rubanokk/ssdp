var banner = document.getElementById('cookie-message');
var btn = document.getElementById('cookie-message-accept');

if (!localStorage.getItem('cookieConsent')) {
    banner.classList.remove('hidden');
}

btn.addEventListener('click', function () {
    localStorage.setItem('cookieConsent', 'accepted');
    banner.classList.add('hidden');
});