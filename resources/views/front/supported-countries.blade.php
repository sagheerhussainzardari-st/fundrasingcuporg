@extends('front.layouts.app')
@section('title') Home @endsection
@section('content')

<main>

    <section class="discoverSection01 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5 mb-5 pt-5">
                    <div class="discoverMainBanner">
                        <a class="backBtn" href="index.php"><i class="fa fa-angle-left"></i> Home</a>
                        <h2><b>Countries supported on Start Fundraising</b></h2>
                        <h6 class="text-muted mt-4 mb-4">March 7, 2022 Updated</h6>
                        <p>
                            There are currently 19 countries that we can send funds to, and the person withdrawing the funds must meet the withdrawal requirements from that country. The location of a fundraiser is chosen during the fundraiser creation process, and once the fundraiser is published, it cannot be changed.
                        </p>
                        <div class="col-lg-3">
                            <a class="startedBtn shadow" href="{{ url('becomemember') }}">Start Fundraising</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-auto">
                        <p>
                            We are working to expand our services to more countries in the future, but for now, your fundraiser must be created in one of the following countries :
                        </p>
                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/supported-countries/supported-countriesImg01.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection02 " id="homeSection02">
        <div class="container">
            <div class="topFundraisers newFundraisers">
                <div class="col-lg-9 m-auto">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4><b>*United States Territories</b></h4>
                            <p>Start Fundraising is not supported in the following US territories:</p>
                            <ul>
                                <li>
                                    - American Samoa
                                </li>
                                <li>
                                    - Guam
                                </li>
                                <li>
                                    - Northern Mariana Islands
                                </li>
                                <li>
                                    - Puerto Rico
                                </li>
                                <li>
                                    - U.S. Virgin Islands
                                </li>
                            </ul>
                            <p>
                                If you do not meet the withdrawal requirements for one of these supported countries, then please do not create an account and/or fundraiser. If a fundraiser is created by an organizer who does not meet supported country requirements, it is likely that all money raised will be refunded and the account will be removed from Start Fundraising.
                            </p>
                            <p>
                                If you accidentally created a fundraiser from an unsupported country or territory and raised funds, please contact us by clicking "Get help". You will need to ask someone in one of the supported countries above to raise money for you instead.
                            </p>
                            <h4><b>Get notified when we are live in your country</b></h4>
                            <p>
                                If you're thinking about setting up a Start Fundraising fundraiser for an important cause in your life, we'd love to help. While we’re not yet available in every country, we should be in the future. If you’d like, you can leave your contact information in this form, and we’ll reach out when we’re live.
                            </p>
                        </div>
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



</main>

@endsection
