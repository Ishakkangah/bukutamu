<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KOMINFO OKI</title>
    @extends('links.link_header')
</head>

<body>
    <div id="app">
        {{-- @include('layouts.navigasi') --}}
        <main>
            @yield('content')
        </main>

    </div>
</body>
@extends('links.link_footer')

</html>
