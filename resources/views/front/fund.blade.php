@extends('front.layouts.app')
@section('title') {{ $category->name }} @endsection
@section('content')
    <main>

        <section class="discoverSection01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-5 mb-5 pt-5">
                        <div class="discoverMainBanner">
                            <a class="backBtn" href="{{ route('home.index') }}"><i class="fa fa-angle-left"></i>
                                Home</a>
                            <h2 class="mb-0"><b>{{ $category->heading }}</b></h2>
                            <h5 class="text-muted">{{ $category->description }}</h5>
                            <div class="col-lg-3">
                                <a class="startedBtn shadow" href="{{ url('becomemember') }}">Start Fundraising</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="w-100" src="{{ asset($category->image) }}" alt="{{ asset($category->image) }}">
                    </div>
                </div>
            </div>
        </section>

        <section class="medicalFundraising">
            <div class="container">
                <div class="col-lg-6 m-auto text-center">
                    <h3><b>{{ $category->section_heading1 }}</b></h3>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <div class="card bg-transparent border-0 border-end border-secondary rounded-0 text-center">
                            <div class="card-body">
                                <p class="mb-0">{{ $category->section_left_text1 }}</p>
                                <p class="mb-0">{{ $category->section_left_text2 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-transparent border-0 text-center">
                            <div class="card-body">
                                <p class="mb-0">{{ $category->section_right_text1 }}</p>
                                <p class="mb-0">{{ $category->section_right_text2 }}</p>
                            </div>
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
                                                "I thought about the times in my life when I couldn't even afford $5 for
                                                a book. That's when it hit me. Wouldn't it be cool if the price tag
                                                said, '5 jumping jacks and a sit-up?'"
                                            </i>
                                        </p>
                                        <p>
                                            Ashley raised $7k to help homeless people in her community.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/sliderImgs/slide01.jpg"
                                     alt="Assets/Images/home/sliderImgs/slide01.jpg"></img>
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
                                                "I thought about the times in my life when I couldn't even afford $5 for
                                                a book. That's when it hit me. Wouldn't it be cool if the price tag
                                                said, '5 jumping jacks and a sit-up?'"
                                            </i>
                                        </p>
                                        <p>
                                            Goldin raised $19k to help kids earn books with exercise.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/sliderImgs/slide03.jpg"
                                     alt="Assets/Images/home/sliderImgs/slide03.jpg"></img>
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
                                                "My life has changed forever because of Norma and what happened. It gave
                                                me hope again. Changing someone's life will change your own forever."
                                            </i>
                                        </p>
                                        <p>
                                            Chris raised $70k to help his neighbor Norma stay in her home.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/sliderImgs/slide02.jpg"
                                     alt="Assets/Images/home/sliderImgs/slide02.jpg"></img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homeSection02 mb-5" id="homeSection02">
            <div class="container">
                <div class="topFundraisers newFundraisers">
                    <div class="col-lg-9 m-auto">
                        <h2>Trending in {{ $category->name }}</h2>
                        <div class="row">
                            @forelse($category->funds as $fund)
                                <div class="col-lg-6 mb-4">
                                    <a class="fundraisersCards" href="{{ route('fund.detail',[$fund->id]) }}">
                                        <div class="card shadow">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img class="w-100" src="{{ asset($fund->image) }}"
                                                         alt="{{ asset($fund->image) }}">
                                                </div>
                                                <div class="col-lg-6 m-auto">
                                                    <div class="card-body">
                                                        <div class="card-title">
                                                            <h6>{{ $fund->users->name }}</h6>
                                                        </div>
                                                        <div class="cardDetails">
                                                            <h6 class="subHeading">{{ $fund->name }}</h6>
                                                            <p>
                                                                {{ Illuminate\Support\Str::limit($fund->description, 50, $end='...') }}

                                                            </p>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                     aria-valuenow="{{ getPercentage($fund->orders->sum('amount'),$fund->amount) }}"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width:{{ getPercentage($fund->orders->sum('amount'),$fund->amount) }}%">
                                                                    <span class="sr-only">{{ getPercentage($fund->orders->sum('amount'),$fund->amount) }}% Complete</span>
                                                                </div>
                                                            </div>
                                                            <div class="raisedAmount">
                                                                <h6>
                                                                    <strong>${{ number_format($fund->orders->sum('amount')) }}
                                                                        raised</strong> of
                                                                    ${{ number_format($fund->amount) }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <p>No fundraising found on selected category.</p>
                            @endforelse
                        </div>
                        <div class="col-lg-3 mt-4 float-end text-end">
                            <a class="seeMore" href="javascript:void(0)">See more <i
                                    class="fas fa-chevron-right ms-2"></i></a>
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
                                        <h6>Meet a customer care specialist</h6>
                                        <h4>Leah</h4>
                                        <p>
                                            <i>
                                                "Leah was wonderful!! She not only answered my question, and pushed my
                                                withdrawal through, she expressed concern about my dog, who’s surgery I
                                                am raising money for. What a sweet young lady."
                                            </i>
                                        </p>
                                        <p>
                                            James - Buffalo, New York
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100"
                                     src="{{ asset('assets/front/Images/') }}/medicalFundraising/agentLeah.jpg"
                                     alt="Assets/Images/medicalFundraising/agentLeah.jpg"></img>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="row">
                            <div class="col-lg-6 m-auto">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <h6>Meet a customer care specialist</h6>
                                        <h4>Jenna</h4>
                                        <p>
                                            <i>
                                                "I had the help of Jenna in a very shattered moment in my life, the
                                                compassion and kindness went above and beyond. I needed that! Thank
                                                you!"
                                            </i>
                                        </p>
                                        <p>
                                            Theresa - Belen, New Mexico
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100"
                                     src="{{ asset('assets/front/Images/') }}/medicalFundraising/agentJenna.jpg"
                                     alt="Assets/Images/medicalFundraising/agentJenna.jpg"></img>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-6 m-auto text-center mt-4">
                    <h5>
                        Our Customer Care team is ready to answer your questions.
                    </h5>
                    <div class="col-lg-4 m-auto">
                        <div class="loadMore">
                            <a class="shadow" href="/contact-us">Contact us</a>
                        </div>
                    </div>
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
                                    Start fundraising is trusted around the world for its simple, reliable fundraising
                                    platform.
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
                                    Start fundraising app makes it simple to launch and manage your fundraiser on the
                                    go.
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
                                    Our best-in-class Customer Care Specialists will answer your questions, day or
                                    night.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 m-auto">
                    <a class="startedBtn shadow" href="/becomemember">Start Fundraising</a>
                </div>
            </div>
            </div>
        </section>


    </main>
@endsection
