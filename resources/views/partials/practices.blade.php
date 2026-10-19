<div id="practices" class="max-w-300 mx-auto py-20 lg:py-30 px-4 lg:px-0">
    <div class="max-w-180">
        <h2 class="text-4xl lg:text-5xl font-medium">{!! __('practices.title') !!}</h2>
        <!-- <div class="flex flex-col gap-3 mt-5 text-lg">{!! __('practices.description') !!}</div> -->
    </div>
    <div class="flex flex-col mt-9">
        @foreach ($practices as $item)
        <a href="/practices/{{ $item->slug }}" class="flex items-center justify-between h-22 lg:h-30 border border-[#B3C1C8] border-b-0 last:border-b px-4 lg:px-8 hover:text-(--primary-red)">
            <div class="text-lg lg:text-2xl font-medium">{{ $item->title }}</div>
            <div>
                <svg class="w-10 h-10 text-(--primary-red)">
                    <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </div>
        </a>
        @endforeach
    </div>
</div>