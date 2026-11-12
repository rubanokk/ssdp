<a href="/people/{{ $person->slug }}" class="group flex items-start gap-6 p-4 relative lg:-ml-px -mt-px border border-[#B3C1C8] last:border-b-[#B3C1C8]  lg:border-b-[#B3C1C8]">
    @if (!$person->getMedia('person')->isEmpty())
        <img src="{{ $person->getMedia('person')[0]->getUrl('300x600') }}" class="w-full max-w-[80px] lg:max-w-[180px]" alt="">
    @endif
    <div>
        <div class="text-lg lg:text-xl font-medium">{{ $person->name }}</div>
        <div class="opacity-50 text-sm">{{ $person->type }}</div>
        <div class="mt-2 text-sm">{!! $person->description !!}</div>
    </div>
    <div>
        <svg class="w-8 h-8 text-(--primary-red) absolute right-2 bottom-2 rotate-0 lg:-rotate-45 group-hover:rotate-0 transition-transform">
            <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
    </div>
</a>