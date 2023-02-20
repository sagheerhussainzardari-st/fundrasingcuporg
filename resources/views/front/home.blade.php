@extends('front.layouts.app')
@section('title') Home @endsection
@section('content')
<main>
    <section class="homeSection01" id="homeSection01">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-5 m-auto">
                    <div class="mainBannerHeading">
                        <h2>
                            <b>Trusted fundraising for all of life's moments</b>
                        </h2>
                        <h5>
                            <b>Get help. Give kindness. Start in just 5 minutes.</b>
                        </h5>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-5">
                            <a class="startedBtn shadow" href="/becomemember">Start Fundraising</a>
                        </div>
                        <div class="col-lg-1">
                            <div class="verticalLine"></div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <a class="seeHowfundlyworks" href="/becomemember" data-bs-toggle="modal" data-bs-target="#how-start-fund-raising-works"><i class="far fa-play-circle me-2"></i> See how start fundraising works</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mainBannerImg">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/fundlyMainBannerImg01.png" alt="Assets/Images/home/fundlyMainBannerImg01.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection02 mb-5" id="homeSection02">
        <div class="container">
            <div class="topFundraisers newFundraisers">
                <div class="col-lg-9 m-auto">
                    <h2>New Fundraisers</h2>
                    <div class="row">
                        @forelse($fundraisers as $fundraiser)
                        <div class="col-lg-6 mb-4">
                            <a class="fundraisersCards" href="{{ route('fund.detail',[$fundraiser->id]) }}">
                                <div class="card shadow">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img class="w-100" src="{{ asset($fundraiser->image) }}" alt="{{ asset($fundraiser->image) }}">
                                        </div>
                                        <div class="col-lg-6 m-auto">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h6>{{ $fundraiser->users->name }}</h6>
                                                </div>
                                                <div class="cardDetails">
                                                    <h6 class="subHeading">{{ $fundraiser->name }}</h6>
                                                    <p>
                                                        {{ Illuminate\Support\Str::limit($fundraiser->description, 50, $end='...') }}
                                                    </p>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ getPercentage($fundraiser->orders->sum('amount'),$fundraiser->amount) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ getPercentage($fundraiser->orders->sum('amount'),$fundraiser->amount) }}%">
                                                            <span class="sr-only">{{ getPercentage($fundraiser->orders->sum('amount'),$fundraiser->amount) }}% Complete</span>
                                                        </div>
                                                    </div>
                                                    <div class="raisedAmount">
                                                        <h6><strong>${{ number_format($fundraiser->orders->sum('amount')) }} raised</strong> of ${{ number_format($fundraiser->amount) }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                            <p>No fundraising found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Over10000People" id="Over10000People">
        <div class="container">
            <div class="col-lg-8 text-center m-auto">
                <div class="Over10000PeopleHeading">
                    <h2>Over 10,000 people start fundraising every day</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[1]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon01.png" alt="Assets/Images/home/icons/icon01.png">
                                    </div>
                                    <h6><b>Medical</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[7]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon02.png" alt="Assets/Images/home/icons/icon02.png">
                                    </div>
                                    <h6><b>Memorial</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[3]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon03.png" alt="Assets/Images/home/icons/icon03.png">
                                    </div>
                                    <h6><b>Emergency</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[8]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon04.png" alt="Assets/Images/home/icons/icon04.png">
                                    </div>
                                    <h6><b>Nonprofit</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[21]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon05.png" alt="Assets/Images/home/icons/icon05.png">
                                    </div>
                                    <h6><b>Education</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[6]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon06.png" alt="Assets/Images/home/icons/icon06.png">
                                    </div>
                                    <h6><b>Animals</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[9]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon07.png" alt="Assets/Images/home/icons/icon07.png">
                                    </div>
                                    <h6><b>Environment</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[10]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon08.png" alt="Assets/Images/home/icons/icon08.png">
                                    </div>
                                    <h6><b>Business</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[11]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon09.png" alt="Assets/Images/home/icons/icon09.png">
                                    </div>
                                    <h6><b>Community</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[12]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon10.png" alt="Assets/Images/home/icons/icon10.png">
                                    </div>
                                    <h6><b>Competition</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[13]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon11.png" alt="Assets/Images/home/icons/icon11.png">
                                    </div>
                                    <h6><b>Creative</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[14]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon12.png" alt="Assets/Images/home/icons/icon12.png">
                                    </div>
                                    <h6><b>Event</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[15]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon13.png" alt="Assets/Images/home/icons/icon13.png">
                                    </div>
                                    <h6><b>Faith</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[16]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon14.png" alt="Assets/Images/home/icons/icon14.png">
                                    </div>
                                    <h6><b>Family</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[17]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon15.png" alt="Assets/Images/home/icons/icon15.png">
                                    </div>
                                    <h6><b>Sports</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[18]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon16.png" alt="Assets/Images/home/icons/icon16.png">
                                    </div>
                                    <h6><b>Travel</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[19]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon17.png" alt="Assets/Images/home/icons/icon17.png">
                                    </div>
                                    <h6><b>Volunteer</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[20]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon18.png" alt="Assets/Images/home/icons/icon18.png">
                                    </div>
                                    <h6><b>Wishes</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection03" id="homeSection03">
        <div class="container">
            <div class="slider">
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card bg-transparent border-0">
                                <div class="card-body">
                                    <h6>Start fundraising stories</h6>
                                    <h4>Meet Ashley</h4>
                                    <p>
                                        <i>
                                            "I thought about the times in my life when I couldn't even afford $5 for a book. That's when it hit me. Wouldn't it be cool if the price tag said, '5 jumping jacks and a sit-up?'"
                                        </i>
                                    </p>
                                    <p>
                                        Ashley raised $7k to help homeless people in her community.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/sliderImgs/slide01.jpg" alt="Assets/Images/home/sliderImgs/slide01.jpg"></img>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card bg-transparent border-0">
                                <div class="card-body">
                                    <h6>Start fundraising stories</h6>
                                    <h4>Meet Goldin</h4>
                                    <p>
                                        <i>
                                            "I thought about the times in my life when I couldn't even afford $5 for a book. That's when it hit me. Wouldn't it be cool if the price tag said, '5 jumping jacks and a sit-up?'"
                                        </i>
                                    </p>
                                    <p>
                                        Goldin raised $19k to help kids earn books with exercise.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/sliderImgs/slide03.jpg" alt="Assets/Images/home/sliderImgs/slide03.jpg"></img>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card bg-transparent border-0">
                                <div class="card-body">
                                    <h6>Start fundraising stories</h6>
                                    <h4>Meet Chris & Norma</h4>
                                    <p>
                                        <i>
                                            "My life has changed forever because of Norma and what happened. It gave me hope again. Changing someone's life will change your own forever."
                                        </i>
                                    </p>
                                    <p>
                                        Chris raised $70k to help his neighbor Norma stay in her home.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/sliderImgs/slide02.jpg" alt="Assets/Images/home/sliderImgs/slide02.jpg"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="startFundraisingToday">
        <div class="container">
            <div class="col-lg-6 m-auto text-center">
                <div class="startFundraisingTodayHeading">
                    <h2><b>Start fundraising today</b></h2>
                    <p class="text-muted">More money raised online than anywhere else. <a href="/becomemember">Learn about how to start fundraising works.</a></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-3 m-auto">
                    <div class="card worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forAYourself.jpg" alt="Assets/Images/home/forAYourself.jpg">
                        <div class="card-body pb-1">
                            <p>
                                <b>For yourself</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto">
                    <div class="card worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forAFriend.jpg" alt="Assets/Images/home/forAFriend.jpg">
                        <div class="card-body pb-1">
                            <p>
                                <b>For a friend</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto">
                    <div class="card worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forACharity.jpg" alt="Assets/Images/home/forACharity.jpg">
                        <div class="card-body pb-1">
                            <p>
                                <b>For a charity</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

    <section class="homeSection04" id="homeSection04">
        <div class="container">
            <div class="col-lg-12 text-center mb-4">
                <h3><b>The leader in online fundraising</b></h3>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 m-auto mb-4 mt-0">
                    <div class="card worldwideLeader bg-transparent border-0">
                        <div class="card-body">
                            <div class="card-title mt-3">
                                <h6><b>Worldwide leader</b></h6>
                            </div>
                            <p class="text-muted">
                                Start fundraising is trusted around the world for its simple, reliable fundraising platform.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto mb-4 mt-0">
                    <div class="card simpleSetup bg-transparent border-0">
                        <div class="card-body">
                            <div class="card-title mt-3">
                                <h6><b>Simple setup</b></h6>
                            </div>
                            <p class="text-muted">
                                You can personalize and share your fundraising in just a few minutes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto mb-4 mt-0">
                    <div class="card secure bg-transparent border-0">
                        <div class="card-body">
                            <div class="card-title mt-3">
                                <h6><b>Secure</b></h6>
                            </div>
                            <p class="text-muted">
                                Our Trust & Safety team works around the clock to protect against fraud.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 m-auto mb-4 mt-0">
                    <div class="card mobileApp bg-transparent border-0">
                        <div class="card-body">
                            <div class="card-title mt-3">
                                <h6><b>mobileApp</b></h6>
                            </div>
                            <p class="text-muted">
                                Start fundraising app makes it simple to launch and manage your fundraiser on the go.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto mb-4 mt-0">
                    <div class="card socialReach bg-transparent border-0">
                        <div class="card-body">
                            <div class="card-title mt-3">
                                <h6><b>Social reach</b></h6>
                            </div>
                            <p class="text-muted">
                                Harness the power of social media to spread your story and get more support.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto mb-4 mt-0">
                    <div class="card expertAdvice bg-transparent border-0">
                        <div class="card-body">
                            <div class="card-title mt-3">
                                <h6><b>Expert advice</b></h6>
                            </div>
                            <p class="text-muted">
                                Our best-in-class Customer Care Specialists will answer your questions, day or night.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 m-auto">
                <a class="startedBtn shadow" href="{{ url('becomemember') }}">Start Fundraising</a>
            </div>
        </div>
        </div>
    </section>

    <section class="homeSection05" id="homeSection05">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/availableAppImg.jpeg" alt="Assets/Images/home/availableAppImg.jpeg">
                </div>
                <div class="col-lg-4 ms-0 m-auto">
                    <div class="card bg-transparent border-0">
                        <h6 class="text-muted"><b>AVAILABLE NOW</b></h6>
                        <h4><b>The fundraising App</b></h4>
                        <p class="text-muted">Start and manage fundraisers, engage with supporters, and discover important causes — all on the go</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a class="appBtn" href="https://apps.apple.com/us/app/fundraising-cup/id1451553689">
                                    <div class="row">
                                        <div class="col-2 m-auto">
                                            <i class="fab fa-apple"></i>
                                        </div>
                                        <div class="col">
                                            <p class="mb-0 downloadBtn">Download on the</p>
                                            App Store
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a class="appBtn" href="https://play.google.com/store/apps/details?id=com.app.fundraisingcup ">
                                    <div class="row">
                                        <div class="col-2 m-auto">
                                            <i class="fas fa-play"></i>
                                        </div>
                                        <div class="col">
                                            <p class="mb-0 downloadBtn">Get it on</p>
                                            Google Play
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection06" id="homeSection06">
        <div class="container">
            <div class="topFundraisers findFundraising">
                <div class="col-lg-9 m-auto">
                    <h2>Find a Fundraising near you</h2>
                    <div class="row">
                        @forelse($nearYous as $nearYou)
                            <div class="col-lg-4 mb-4">
                                <a class="fundraisersCards" href="{{ route('fund.detail',[$nearYou->id]) }}">
                                    <div class="card shadow h-100">
                                        <img class="w-100" src="{{ asset($nearYou->image) }}" alt="{{ asset($nearYou->image) }}">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h6>{{ $nearYou->users->name }}</h6>
                                            </div>
                                            <div class="cardDetails">
                                                <h6 class="subHeading">{{ $nearYou->name }}</h6>
                                                <p>
                                                    {{ Illuminate\Support\Str::limit($nearYou->description, 50, $end='...') }}
                                                </p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ getPercentage($nearYou->orders->sum('amount'),$nearYou->amount) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ getPercentage($nearYou->orders->sum('amount'),$nearYou->amount) }}%">
                                                        <span class="sr-only">{{ getPercentage($nearYou->orders->sum('amount'),$nearYou->amount) }}% Complete</span>
                                                    </div>
                                                </div>
                                                <div class="raisedAmount">
                                                    <h6><strong>${{ number_format($nearYou->orders->sum('amount')) }} raised</strong> of ${{ number_format($nearYou->amount) }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p>No fundraising found near by you.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection07" id="homeSection07">
        <div class="container">
            <div class="col-lg-6 text-center m-auto">
                <h5>Over Millions Raised To Date</h5>
            </div>
            <div class="col-lg-4 m-auto">
                <a class="startedBtn shadow" href="{{ url('becomemember') }}">
                    <p class="mb-0">Start a Free Fundraiser</p>
                    <span><i>Start Raising Money For Your Cause</i></span>
                </a>
            </div>
        </div>
    </section>
</main>
<div class="modal fade" id="how-start-fund-raising-works" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog bg-light modal-lg">

        <div class="modal-content start-fundraising rounded-0">
            <div>
                <div class="d-flex justify-content-between w-100 align-items-center py-3 px-2">
                    <h6 class="modal-title" id="staticBackdropLabel"><b>How it Works | Start Fundraising</b></h6>
                    <div class="d-flex justify-content-end align-items-center">
                        <a class="startedBtn shadow me-3" href="{{ url('becomemember') }}">Start Fundraising</a>
                        <button type="button" class="btn-close" id=close-button data-bs-dismiss="modal" aria-label="Close me-3"></button>
                    </div>
                </div>
            </div>
            <iframe width="1038" height="584" src="https://www.youtube.com/embed/ncZTxgkDTYU" title="fundraqisingcup org Ending TV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <iframe src="https://www.youtube.com/watch?v=ncZTxgkDTYU&ab_channel=FUNDRAISINGCUP.ORG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        </div>
    </div>
</div>
@endsection
