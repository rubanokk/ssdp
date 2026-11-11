@extends('layouts.web')

@section('title', __('practices.title') )
@section('description', '')

@section('content')
<div class="max-w-300 mx-auto py-20 lg:py-30 px-4 lg:px-0">
    <div class="max-w-180">
        <h2 class="text-4xl lg:text-5xl font-medium">{!! __('practices.title') !!}</h2>
    </div>
    <div class="grid lg:grid-cols-3 mt-9 border-b-[#B3C1C8] lg:border-b-0">
        @each('practices/practice', $practices, 'practice')
    </div>
</div>
@endsection