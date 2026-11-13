<div id="practices" class="max-w-300 mx-auto py-10 lg:py-16 px-4 lg:px-0 reveal mb-6">

    <!-- <div class="grid lg:grid-cols-3 mt-9">
        @each('practices/practice', $practices, 'practice')
    </div> -->


    <!-- <div class="swiper">
        @foreach($practices->chunk(6) as $chunk)
        <div class="grid lg:grid-cols-3">
            @foreach($chunk as $item)
            @include('practices/practice', ['practice' => $item])
            @endforeach
        </div>
        @endforeach
    </div> -->

    <div class="swiper mt-6 pt-10! pb-10! relative">
        <div class="flex justify-between items-end">
            <h2 class="text-4xl lg:text-5xl font-medium">{!! __('practices.title') !!}</h2>
            <div class="flex gap-2">
                <div class="swiper-btn-prev hover:opacity-50 cursor-pointer">
                    <svg class="w-8 h-8 text-(--primary-red)">
                        <use xlink:href="#icon-chevron-left" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
                <div class="swiper-btn-next hover:opacity-50 cursor-pointer">
                    <svg class="w-8 h-8 text-(--primary-red)">
                        <use xlink:href="#icon-chevron-right" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
            </div>
        </div>

        <div class="swiper-wrapper mt-8">
            @foreach($practices->chunk(6) as $chunk)
            <div class="swiper-slide">
                <div class="grid lg:grid-cols-3 pt-px pl-px">
                    @foreach($chunk as $item)
                    @include('practices/practice', ['practice' => $item])
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>