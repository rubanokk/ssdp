@extends('layouts.web')

@section('title', $post->title)
@section('description', '')

@section('content')
    <div class="bg-[#F2F2F2] px-4 lg:px-0">
            <div class="max-w-300 mx-auto py-10 lg:py-24">
                <h1 class="max-w-180 text-3xl lg:text-6xl font-medium">{{ $post->title }}</h1>
                <div class="flex items-center gap-6 mt-2 lg:mt-2 text-sm">
                    <div>{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</div>
                    <div class="flex items-center gap-1">
                        <svg class="icon-svg h-4 w-4">
                            <use xlink:href="#icon-eye" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                    </div>
                </div>
            </div>
    </div>
    <div class="max-w-300 mx-auto px-4 lg:px-0">
        <div class="max-w-180 mt-8 content-text">{!! $post->content !!}</div>
    </div>

    <div class="max-w-300 mx-auto py-20 lg:py-30 px-4 lg:px-0">
        <div class="max-w-245">
            <h2 class="text-3xl lg:text-4xl font-medium">{!! __('common.read_also') !!}</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 mt-10">
            @each('posts/post', $posts, 'post')
        </div>
    </div>
@endsection
