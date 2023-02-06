<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') | {{ $setting->title }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="@if(request()->segment(1) == 'fund-detail')  @yield('fundDetail') @else {{ asset($setting->favico) }} @endif">
    @yield('meta')
    @include('front.layouts.css')
</head>
    <body>
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    <!-- JAVASCRIPT -->
    @include('front.layouts.js')
    @include('sweetalert::alert')
    </body>
</html>
