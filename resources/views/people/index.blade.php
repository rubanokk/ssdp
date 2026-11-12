@extends('layouts.web')

@section('title', __('practices.title') )
@section('description', '')

@section('content')
<div class="max-w-300 mx-auto py-10 lg:py-20 px-4 lg:px-0">
    <div class="flex justify-between items-end">
        <h2 class="text-4xl lg:text-5xl font-medium">{!! __('common.people') !!}</h2>
    </div>
    <div class="grid lg:grid-cols-2 mt-4 lg:mt-8">
        @each('people/person', $people, 'person')
    </div>
</div>

@endsection