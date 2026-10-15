@extends('layouts.web')

@section('title', 'ssdp')
@section('description', '')

@section('content')
<div class="max-w-300 mx-auto px-4 lg:px-0">
    <h1 class="text-5xl lg:text-6xl font-medium mt-20">{!! __('common.publications') !!}</h1>
   <div class="grid lg:grid-cols-2 gap-12 mt-16">
       @each('posts/post', $posts, 'post')
    </div>
</div>
@endsection