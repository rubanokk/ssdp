@extends('layouts.web')

@section('title', 'SSD Partners | Cross-Border Legal Advisory')
@section('description', '')

@section('content')

<div class="bg-[#F2F2F2] relative">
    <div class="max-w-300 mx-auto pt-30 pb-25">
        <h1 @class(["text-5xl lg:text-[80px] lg:leading-21 font-medium mt-4", 'max-w-200'=> app()->getLocale() === 'en',
            'max-w-280'=> app()->getLocale() === 'ru'])>
            {!! __('hero.title') !!}
        </h1>
        <p class="max-w-180 mt-5 text-xl">
            {!! __('hero.description') !!}
        </p>
        <!-- <img src="/images/hero.svg" alt="" class="absolute right-0 bottom-0"> -->
    </div>
</div>
@include('partials/expertise')
@include('partials/practices')
@include('partials/presence')
@include('partials/posts')

@endsection