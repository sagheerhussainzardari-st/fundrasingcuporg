@extends('front.layouts.app')
@section('title') Pricing @endsection
@section('content')
    <main>

    <section class="discoverSection01 pb-0">
        <div class="container">
            <div class="col-lg-10 mt-5 mb-5 pt-5 m-auto">
                <div class="discoverMainBanner">
                    <div class="selectCountry mb-5 pb-5">
                        <div class="selectCountryHeading">
                            <h2 class="mb-0"><b>Our pricing & fees in</b></h2>
                        </div>
                        <div class="col-lg-3 col-12 m-auto ms-0 p-0">
                            <div class="countryDropDown position-relative">
                                <select class="form-select">
                                    <option selected>United States</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="BE">Belgium</option>
                                    <option value="CA">Canada</option>
                                    <option value="DE">Denmark</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GE">Germany</option>
                                    <option value="IR">Ireland</option>
                                    <option value="IT">Italy</option>
                                    <option value="LU">Luxembourg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div class="row">
                                    <div class="col-3 m-auto">
                                        <div class="tabIcon">
                                            <i class="fas fa-business-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        Fundraise for an individual/business
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <div class="row">
                                    <div class="col-3 m-auto">
                                        <div class="tabIcon">
                                            <i class="fas fa-hand-holding-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        Fundraise for a charity
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection02" id="homeSection02">
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <div class="card charityPricingCard">
                                <div class="card-body">
                                    <div class="vlBorder">
                                        <h6><b>Start Fundraising platform fee</b></h6>
                                        <h3><b>0%</b></h3>
                                    </div>
                                    <div class="discribtion vlBorder mt-5 position-relative">
                                        <p class="text-muted"><b>There is no fee to start a Fundraising</b></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card charityPricingCard">
                                <div class="card-body">
                                    <div class="vlBorder">
                                        <h6><b>Transaction fee</b></h6>
                                        <h3 class="mb-0"><b>2.9% + $ USD 0.30</b></h3>
                                        <h6 class="text-muted">Per Donation</h6>
                                    </div>
                                    <div class="discribtion minus position-relative">
                                        <p class="text-muted"><b>Including debit and credit charges</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <div class="card charityPricingCard">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h6><b>Total fees</b></h6>
                                        <h3 class="mb-0"><b>2.9% + $ USD 0.30</b></h3>
                                        <h6 class="text-muted">Per Donation</h6>
                                    </div>
                                    <div class="total position-relative">
                                        <p class="text-muted"><b>Beneficiaries receive the amount donated, minus total fees</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card bg-transparent border-0">
                                    <h5><b>Still have questions?</b></h5>
                                    <p>
                                        Learn more about Start Fundraising and how it can help you fundraise.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a class="nav-link StartAfundly" href="/becomemember">Learn more</a>
                            </div>
                        </div>
                        <div class="col-lg-3 m-auto mt-5">
                            <a class="startedBtn mt-0 mb-0 text-light" href="/becomemember">Start Fundraising </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <div class="card charityPricingCard">
                                <div class="card-body">
                                    <div class="vlBorder">
                                        <h6><b>Start Fundraising platform fee</b></h6>
                                        <h3><b>0%</b></h3>
                                    </div>
                                    <div class="discribtion vlBorder mt-5 position-relative">
                                        <p class="text-muted"><b>There is no fee to start a Fundraising</b></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card charityPricingCard">
                                <div class="card-body">
                                    <div class="vlBorder">
                                        <h6><b>Transaction fee</b></h6>
                                        <h3 class="mb-0"><b>2.2% + $ USD 0.30</b></h3>
                                        <h6 class="text-muted">Per Donation</h6>
                                    </div>
                                    <div class="discribtion minus position-relative">
                                        <p class="text-muted"><b>Including debit and credit charges</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <div class="card charityPricingCard">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h6><b>Total fees</b></h6>
                                        <h3 class="mb-0"><b>2.2% + $ USD 0.30</b></h3>
                                        <h6 class="text-muted">Per Donation</h6>
                                    </div>
                                    <div class="total position-relative">
                                        <p class="text-muted"><b>Beneficiaries receive the amount donated, minus total fees</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 m-auto mb-4">
                        <div class="card charity p-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h6><b>How does charity fundraising work?</b></h6>
                                    </div>
                                    <div class="col-lg-9">
                                        <p>
                                            <b>
                                                Tax-deductible donations are processed by PayPal Giving Fund and securely sent directly to a registered charity. <a href="javascript:void(0)">Learn more about how PayPal Giving Fund works.</a>
                                            </b>
                                        </p>
                                        <p>
                                            <b>
                                                Pricing applies to donations on fundraisers and direct-to-charity pages on Fundraising.org that are processed by PayPal Giving Fund.
                                            </b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 m-auto mt-5">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card bg-transparent border-0">
                                    <h5><b>Still have questions?</b></h5>
                                    <p>
                                        Learn more about Start Fundraising and how it can help you fundraise.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a class="nav-link StartAfundly" href="/becomemember">Learn more</a>
                            </div>
                        </div>
                        <div class="col-lg-3 m-auto mt-5">
                            <a class="startedBtn mt-0 mb-0 text-light" href="/becomemember">Start Fundraising </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>
@endsection
