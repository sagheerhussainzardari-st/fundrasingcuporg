@extends('front.auth.auth')
@section('title') Sign Up @endsection
@section('content')
    <section class="login-container">
        <div class="container">
            <div class="col-lg-7 m-auto text-center">
                <div class="card worldwideLeader bg-transparent border-0">
                    <div class="card-header bg-transparent">
                        <h1>Sign Up</h1>
                    </div>
                    <div class="card-body my-5">
                        <form action="{{ route('user.signUp') }}" method="post">
                            @csrf
                        <div class="col-lg-5 m-auto">
                            <input type="text" class="form-control bg-transparent shadow-sm border @error('name') is-invalid @enderror"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="Full Name" id="name" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-5 m-auto my-3">
                            <input type="text" class="form-control bg-transparent shadow-sm border @error('email') is-invalid @enderror"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="Email address" id="email" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-5 m-auto my-3">
                            <input type="password" class="form-control bg-transparent shadow-sm border @error('password') is-invalid @enderror"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="Password" id="password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-5 m-auto my-4">
                            <button type="submit" class="see-all btn-lg login-button">
                                Sign Up to Start Fundraising
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
