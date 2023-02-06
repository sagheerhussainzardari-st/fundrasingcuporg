@extends('front.layouts.app')
@section('title') Pricing @endsection
@section('content')
    @component('front.components.breadcrumb')
        @slot('title') Easy Fundraising Ideas @endslot
        @slot('description') Getting creative with your fundraiser can inspire donors to give more. These easy fundraising ideas can add unique and fresh elements to the long list of established fundraising ideas. Here’s your guide to leading the fundraising charge with proven ideas that will grab the attention of donors, inspire donations, and boost social shares in your community. @endslot
    @endcomponent

    <section>
        <div class="container">
            <div class="row video-container">
                <div class="col-lg-8 m-auto mb-4">
                    <h2 class="text-center mt-4">You belong here</h2>
                    <p class="text-center">
                        Start Fundraising is a platform that exists to serve people from all backgrounds and
                        experiences. We believe that our teams should uphold all unique voices and ethnicities in a way
                        that represents the diversity of our world. We are strongest when everyone feels empowered to
                        bring their whole self to work knowing that they will be included and treated equally. As we
                        continue to change the way the world gives, we are committed to celebrating and uplifting the
                        broad spectrum of human experiences within our company.
                    </p>
                </div>
            </div>
        </div>
    </section>
            <section class="homeSection02" id="homeSection02">
            <div class="container">
                <div class="topFundraisers newFundraisers">
                    <div class="row mt-5">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 m-auto">
                            <a href="fund_detail.blade.php">
                                <div class="card text-dark worldwideLeader bg-transparent border-0 pe-0 ps-0 pt-0">
                                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/home/forAYourself.jpeg"
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
                            <a href="fund_detail.blade.php">
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
                            <a href="fund_detail.blade.php">
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

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-10 m-auto mb-4">
                    <img src="{{ asset('assets/front/Images/') }}/careers/banner.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto mb-4 common-questions">
                    <h2 class="mb-3">
                        Working and thriving
                    </h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item py-3 border-0">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Health and wellness
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Start Fundraising offers a wide range of health insurance options, including
                                        medical, dental, and vision, and covers 100% of employee premiums and 80% of
                                        spouse and dependents. All employees are eligible for a $600 annual fitness and
                                        wellness reimbursement.
                                    </p>


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3 border-0 border-top ">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Well-being at work
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        With weekly massages, standing desks, fully-stocked kitchens, daily lunches,
                                        team off-sites, and monthly social events, we ensure employees are fueled for
                                        the good fight while offering opportunities to connect and learn from each
                                        other. Plus, many of our offices are dog friendly.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3 border-0 border-top ">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Time off and leave
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    With 10 paid holidays, 17 days of accrued vacation per year, unlimited sick time,
                                    three volunteer days, and enhanced parental leaves, we encourage employees to take
                                    the time they need to reenergize.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3 border-0 border-top ">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    Commuter perks
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Start Fundraising contributes $50/month to employees commuting to and from work
                                        (public transit and/or parking). We also offer Caltrain GoPasses for our Bay
                                        Area commuters.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3 border-0 border-top ">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    Giving back
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We are proud to have a Gives Back program where employees nominate fundraisers
                                        weekly for donations from Start Fundraising. Additionally, we organize quarterly
                                        volunteer events in each office to give back to our local communities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3 border-0 border-top ">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Investing in you
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Start Fundraising wants to invest in its employees’ financial futures, which is
                                        why we offer competitive salaries and a 401(k) retirement plan with company
                                        matching.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item py-3 border-0 border-top ">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                    Learning and development
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Grow your career and feed your curiosity with access to learning tools and
                                        resources, including a subscription to Udemy, guest speakers, and internal brown
                                        bag sessions.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection
