<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KOMINFO OKI</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- BOOTSTRAP FONT --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- MY CSS --}}
    <link rel="stylesheet" href="{{ asset('mycss/main.css') }}">
</head>

<body>
    <div id="app">
        @include('layouts.navigasi')
        <main class="py-5">
            @yield('content')
        </main>

    </div>
</body>
{{-- WEBCAM JS --}}
<script src="{{ asset('js/webcam.js') }}"></script>
{{-- MY SCRIPT --}}
<script src="{{ asset('js/script.js') }}"></script>
{{-- SWEET ALERT --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</html>
