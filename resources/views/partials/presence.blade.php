@php
    $items = [
        [
            'title' => __('presence.tamchy'),
            'description' => __('presence.tamchy_desc'),
        ],
        [
            'title' => __('presence.munich'),
            'description' => __('presence.munich_desc'),
        ],
        [
            'title' => __('presence.dubai'),
            'description' => __('presence.dubai_desc'),
        ],
        [
            'title' => __('presence.newyork'),
            'description' => __('presence.newyork_desc'),
        ],
    ];
@endphp

<div class="bg-[#FAFAFA] bg-no-repeat bg-cover bg-top-right" style="background-image: url('/images/map.svg')">

<div id="presence" class="max-w-300 mx-auto py-30">
    <div class="max-w-245">
        <h2 class="text-[52px] leading-13 font-medium"> {!! __('presence.title') !!}</h2>
        <!-- <p class="mt-5 text-lg">{!! __('presence.description') !!}</p> -->
    </div>
    <div class="grid lg:grid-cols-4 gap-8 mt-9">
       @foreach ($items as $item)
            <div class="flex flex-col h-70 lg:h-90 px-8 pb-8 pt-14 relative bg-white">
                <div class="text-3xl lg:text-3xl font-medium">{{ $item['title'] }}</div>
                <div class="mt-auto">{{ $item['description'] }}</div>
            </div>
        @endforeach
    </div>
</div>
</div>
