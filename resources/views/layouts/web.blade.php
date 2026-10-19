<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen bg-woodsmoke-1000">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="" />
    <meta name="google-site-verification" content="" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    @include('common/header')
    <main id="top">
        @yield('content')
    </main>
    @include('common/footer')
    @include('common/form')
    @include('common/icons')
    @env('production')
        @include('common/metrika')
    @endenv
</body>

</html>
