@extends('front.layouts.app')
@section('title') Pricing @endsection
@section('content')
    @component('front.components.breadcrumb')
        @slot('title') Start Fundraising careers: Help turn compassion into action @endslot
        @slot('description') There are a billion good intentions tucked inside each and every one of us. At Start Fundraising, we believe that the impulse to help a person, fix a neighborhood, or change a nation should never be ignored. In fact, it should be shared with the entire world. Check out current job openings, join our team, and be a part of the change. @endslot
    @endcomponent

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto mb-4">
                    <img src="{{ asset('assets/front/Images/') }}/careers/banner.png" alt="" class="w-100 position-relative rounded">
                </div>
            </div>
        </div>
    </section>
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
    <section>
        <div class="container">
            <div class="row blob-container">
                <div class="col-lg-8 m-auto mb-4">
                    <h2 class="text-center mb-3">
                        Core values
                    </h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/front/Images/') }}/careers/blob1.png" alt="" class="w-100">
                            <p class="text-center mb-4">
                                Consider everything
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/front/Images/') }}/careers/blob1.png" alt="" class="w-100">
                            <p class="text-center mb-4">
                                Do the right thing
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/front/Images/') }}/careers/blob3.png" alt="" class="w-100">
                            <p class="text-center mb-4">
                                Spread empathy
                            </p>

                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/front/Images/') }}/careers/blob4.png" alt="" class="w-100">
                            <p class="text-center mb-4">
                                Delight the customer
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('assets/front/Images/') }}/careers/blob5.png" alt="" class="w-100">
                            <p class="text-center mb-4">
                                Give back
                            </p>
                        </div>
                    </div>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto text-center my-3">
                    <div class="h4">We love it here</div>
                    <p>
                        Our people consistently vote Start Fundraising a Great Place to Work®.
                    </p>
                    <img src="{{ asset('assets/front/Images/') }}/careers/welove.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
