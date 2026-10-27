@extends('layouts.web')

@section('title', $page->title)
@section('description', '')

@section('content')
    <div class="bg-[#F2F2F2] px-4 lg:px-0">
            <div class="max-w-300 mx-auto py-10 lg:py-24">
                <h1 class="max-w-180 text-3xl lg:text-6xl font-medium">{{ $page->title }}</h1>
            </div>
    </div>
    <div class="max-w-300 mx-auto px-4 lg:px-0 mb-40">
        <div class="max-w-180 mt-8 content-text">{!! $page->content !!}</div>
    </div>
@endsection
