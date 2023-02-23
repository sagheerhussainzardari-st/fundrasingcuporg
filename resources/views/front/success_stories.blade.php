@extends('front.layouts.app')
@section('title') Success Stories @endsection
@section('content')
    <main>

        @component('front.components.breadcrumb')
            @slot('title') Success Stories @endslot
            @slot('description') Fundraising is a platform built on the generosity of individuals around the world.
            Together, the Fundraising community has changed the lives of millions of people. With over $9 billion raised
            from more than 120 million donations, we’re just getting started. Below are a few Fundraising success
            stories to help inspire you to start a fundraiser of your own. @endslot
        @endcomponent

        <section class="homeSection02" id="homeSection02">
            <div class="container">
                <div class="topFundraisers newFundraisers">
                    <div class="row mt-5">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 m-auto">
                            <a href="/">
                                <div class="card text-dark worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forAYourself.jpg"
                                         alt="Assets/Images/home/forAYourself.jpeg">
                                    <div class="card-body pb-1">
                                        <p>
                                            Want a Successful Fundraiser? Avoid These Common Mistakes
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 m-auto">
                            <a href="/">
                                <div class="card text-dark worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forAFriend.jpg"
                                         alt="Assets/Images/home/forAFriend.jpg">
                                    <div class="card-body pb-1">
                                        <p>
                                            Top Fundraising Tips
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 m-auto">
                            <a href="/">
                                <div class="card text-dark worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forACharity.jpg"
                                         alt="Assets/Images/home/forACharity.jpg">
                                    <div class="card-body pb-1">
                                        <p>
                                            Easy Fundraising Ideas
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="successStory">
            <div class="container">
                <div class="col-lg-9 m-auto">
                    <div class="card successStoriesCard shadow border-0">
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="w-100"
                                     src="{{ asset('assets/front/Images/') }}/successStories/successStoriesImg01.jpeg"
                                     alt="">
                            </div>
                            <div class="col-lg-5 my-auto">
                                <h6><b>Learn how to become the next Fundraising success story</b></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
