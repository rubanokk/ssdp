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
$countries = [ __('countries.Argentina'), __('countries.Uruguay'), __('countries.United Kingdom'), __('countries.France'), __('countries.Netherlands'), __('countries.Belgium'), __('countries.Portugal'), __('countries.Spain'), __('countries.Austria'), __('countries.Cyprus'), __('countries.Serbia'), __('countries.Bulgaria'), __('countries.Hungary'), __('countries.Israel'), __('countries.Russia'), __('countries.Romania'), __('countries.Armenia'), __('countries.Kazakhstan'), __('countries.Turkey'), __('countries.China'), __('countries.Indonesia'), __('countries.Thailand'), __('countries.Singapore'), __('countries.Australia'), __('countries.New Zealand')];
@endphp

<div class="bg-[#F2F2F2] bg-no-repeat lg:bg-cover bg-top-right" style="background-image: url('/images/map.svg')">
    <div id="presence" class="max-w-300 mx-auto py-16 lg:py-30 px-4 lg:px-0">
        <div class="max-w-245 px-4 lg:px-0">
            <h2 class="text-4xl lg:text-5xl font-medium"> {!! __('presence.title') !!}</h2>
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
        <div class="mt-10">{{ __('countries.description') }}</div>
        <div class="flex gap-3 items-start flex-wrap mt-4">
        @foreach ($countries as $country)
            <div class="px-2 py-1.5 bg-white">
                {{ $country }}
            </div>
            @endforeach
        </div>
        
    </div>
</div>