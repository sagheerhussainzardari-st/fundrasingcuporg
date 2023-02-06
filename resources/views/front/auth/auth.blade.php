<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') | {{ $setting->title }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset($setting->favico) }}">
    @include('front.layouts.css')
</head>
<body>
<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 m-auto ms-0">
                <a class="brandong-logo" href="{{ route('home.index') }}"><img class="w-100" src="{{ asset($setting->logo) }}"
                                                                    alt="{{ asset($setting->logo) }}"></a>
            </div>
            <div class="col-6 col-lg-4 text-end me-0 m-auto">
                @guest
                <div>
                    Don't have an account?
                    <a href="{{ url('sign-up') }}" class="see-all">Sign Up</a>
                </div>
                @endguest
            </div>
        </div>
    </div>
</section>
@yield('content')
@yield('appJs')
</body>
</html>
