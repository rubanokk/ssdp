@extends('layouts.web')

@section('title', 'SSD Partners | Cross-Border Legal Advisory')
@section('description', '')

@section('content')

<div class="bg-[#F2F2F2] ">
    <div class="max-w-300 mx-auto py-24 lg:pt-30 lg:pb-25 px-4 lg:px-4 relative overflow-hidden">
        <h1 @class(["text-5xl lg:text-[80px] lg:leading-21 font-medium mt-4 relative z-20", 'max-w-200'=> app()->getLocale() === 'en',
            'max-w-280'=> app()->getLocale() === 'ru'])>
            {!! __('hero.title') !!}
        </h1>
        <p class="max-w-180 mt-5 text-xl">
            {!! __('hero.description') !!}
        </p>
        <div id="globe" class="w-20 h-20 lg:w-125 lg:h-125 absolute top-0 lg:right-0"></div>
        <!-- <img src="/images/hero.svg" alt="" class="absolute right-0 bottom-0"> -->
    </div>
</div>
@include('partials/expertise')
@include('partials/practices', ['practices' => $practices])
@include('partials/presence')
@include('partials/posts')

@endsection