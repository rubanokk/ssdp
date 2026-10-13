@php
$items = [
[
'title' => __('practices.corporate'),
'description' => __('practices.corporate_desc'),
],
[
'title' => __('practices.banking'),
'description' => __('practices.banking_desc'),
],
[
'title' => __('practices.estate'),
'description' => __('practices.estate_desc'),
],
[
'title' => __('practices.capital'),
'description' => __('practices.capital_desc'),
],
[
'title' => __('practices.investment'),
'description' => __('practices.investment_desc'),
],
[
'title' => __('practices.digital'),
'description' => __('practices.digital_desc'),
],
[
'title' => __('practices.regulatory'),
'description' => __('practices.regulatory_desc'),
],
[
'title' => __('practices.intellectual'),
'description' => __('practices.intellectual_desc'),
],
[
'title' => __('practices.disputes'),
'description' => __('practices.disputes_desc'),
],
];
@endphp

<div id="practices" class="max-w-300 mx-auto py-30">
    <div class="max-w-180">
        <h2 class="text-[52px] leading-13 font-medium">{!! __('practices.title') !!}</h2>
        <!-- <div class="flex flex-col gap-3 mt-5 text-lg">{!! __('practices.description') !!}</div> -->
    </div>
    <div class="flex flex-col mt-9">
        @foreach ($items as $item)
        <div class="flex items-center justify-between h-30 border border-[#B3C1C8] border-b-0 last:border-b  px-8">
            <div class="text-3xl lg:text-2xl font-medium">{{ $item['title'] }}</div>
            <div>
                <svg class="w-10 h-10 text-(--primary-red)">
                    <use xlink:href="#icon-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                </svg>
            </div>
        </div>
        @endforeach
    </div>
</div>