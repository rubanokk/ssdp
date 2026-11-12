<a href="/people/{{ $person->slug }}" class="flex flex-col">
    @if (!$person->getMedia('person')->isEmpty())
        <img src="{{ $person->getMedia('person')[0]->getUrl('300x600') }}" class="w-full" alt="">
    @endif
    <div class="text-lg lg:text-xl font-medium mt-4">{{ $person->name }}</div>
    <div class="">{{ $person->type }}</div>
    <!-- <div>
        <svg class="w-8 h-8 text-(--primary-red) absolute right-2 bottom-2 rotate-0 lg:-rotate-45">
            <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
    </div> -->
</a>