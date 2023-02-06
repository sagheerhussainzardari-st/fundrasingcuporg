@extends('front.auth.auth')
@section('title') Sign In @endsection
@section('content')
    <section class="login-container">
        <div class="container">
            <div class="col-lg-7 m-auto text-center">
                <div class="card worldwideLeader bg-transparent border-0">
                    <div class="card-header bg-transparent">
                        <h1>Sign in</h1>
                    </div>
                    <div class="card-body my-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-lg-5 m-auto">
                                <input type="email" class="form-control bg-transparent shadow-sm border @error('email') is-invalid @enderror"
                                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                       placeholder="Email address" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-5 m-auto my-3">
                                <input type="password" class="form-control bg-transparent shadow-sm border @error('password') is-invalid @enderror"
                                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                       placeholder="Password" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-5 m-auto my-4">
                                <button type="submit" class="see-all btn-lg login-button">
                                    Sign In to Start Fundraising
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
