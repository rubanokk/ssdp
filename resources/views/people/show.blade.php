@extends('layouts.web')

@section('title', $person->name . ' | SSD partners')
@section('description', '')

@section('content')
<div class="bg-[#F2F2F2] px-4 lg:px-0">
    <div class="max-w-300 mx-auto py-10 lg:py-24 flex flex-col lg:flex-row gap-12">
        @if (!$person->getMedia('person')->isEmpty())
        <img src="{{ $person->getMedia('person')[0]->getUrl('300x600') }}" class="lg:max-w-65 w-full" alt="">
        @endif
        <div>
            <div>{{ $person->type }}</div>
            <h1 class="max-w-160 text-3xl lg:text-5xl font-medium">{{ $person->name }}</h1>
            <div class="flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-6 mt-6">
                @if ($person->phone)
                <a href="tel:{{ str_replace(' ', '', $person->phone)  }}" class="flex items-center gap-2 ">
                    <svg class="w-4 h-4">
                        <use xlink:href="#icon-phone" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    {{ $person->phone }}
                </a>
                @endif
                @if ($person->email)
                <a href="mailto:{{ $person->email }}" class="flex items-center gap-2">
                    <svg class="w-4 h-4">
                        <use xlink:href="#icon-mail" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    {{ $person->email }}
                </a>
                @endif
                @if ($person->linkedin)
                <a href="{{ $person->linkedin }}" target="_blank" class="flex items-center gap-1">
                    <svg class="w-4 h-4">
                        <use xlink:href="#icon-linkedin" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                    LinkedIn
                </a>
                @endif
            </div>
             <div class="max-w-160 mt-8">{!! $person->description !!}</div>
        </div>
    </div>
</div>
<div class="max-w-300 mx-auto px-4 lg:px-0">
    <div class="max-w-180 mt-8 content-text">{!! $person->content !!}</div>
</div>
@include('partials/people')

@endsection