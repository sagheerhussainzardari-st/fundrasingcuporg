@extends('front.layouts.app')
@section('title') Help Center @endsection
@section('content')
<section class="help-center">
   <div class="container">
      <div class="row">
         <div class="col-lg-4"></div>
         <div class="text-center col-lg-4 m-auto help-center-form">
            <h2 class="">How can we help?</h2>
            <div class="search mb-5">
               <i class="fa fa-search"></i>
               <input type="text" class="form-control bg-transparent rounded-0" placeholder="Search the Start Fundraising Help Center">
            </div>
         </div>
         <div class="col-lg-4">
            <img src="{{ asset('assets/front/Images/') }}/help-center/banner.png" alt="" class="w-100">
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-9 m-auto">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">

               <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-pill bg-transparent border-0  disabled" id="home-tab" data-bs-toggle="tab" data-bs-target="#organizing-a-fundraiser" type="button" role="tab" aria-controls="a" aria-selected="true">You are:</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-pill border-0 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#organizing-a-fundraiser" type="button" role="tab" aria-controls="a" aria-selected="true">Organizing a fundraiser</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-pill border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#fund-as-beneficiary" type="button" role="tab" aria-controls="b" aria-selected="false">Receiving funds as a beneficiary</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-pill border-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#donating-a-fundraiser" type="button" role="tab" aria-controls="c" aria-selected="false">Donating to a fundraiser</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link rounded-pill border-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#raising-funds-for-a-charity" type="button" role="tab" aria-controls="d" aria-selected="false">Raising funds for a charity</button>
               </li>
            </ul>
            <div class="tab-content my-4" id="myTabContent">
               <div class="tab-pane fade show active" id="organizing-a-fundraiser" role="tabpanel" aria-labelledby="home-tab">
                  <div>
                     <div class="row">
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              How Start Fundraising works ?
                           </h5>
                           <p class="text-muted">Whether you’ve already created your fundraiser, or haven’t gotten started yet, there are a few things to keep in mind along...</p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              What to consider when adding a beneficiary
                           </h5>
                           <p class="text-muted">If your fundraiser was created to raise money for someone else, you will have the option to add that person as the beneficiary...</p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              How to transfer funds
                           </h5>
                           <p class="text-muted">
                              This article provides a step by step guide for setting up bank transfers from your fundraiser to a bank account. Here...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Creating a Start Fundraising from start to finish
                           </h5>
                           <p class="text-muted">
                              This article will walk you through each step of the process, from creating your Start Fundraising account, to sharing your fundraiser...
                           </p>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="text-center my-3">
                     <a href="javascript:void(0)" class="see-all text-center">Read More <i class="ms-2 fa fa-angle-down"></i> </a>
                  </div> -->
               </div>
               <div class="tab-pane fade" id="fund-as-beneficiary" role="tabpanel" aria-labelledby="profile-tab">
                  <div>
                     <div class="row">
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              How to transfer funds
                           </h5>
                           <p class="text-muted">
                              This article provides a step by step guide for setting up bank transfers from your fundraiser to a bank account. Here...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Changing the beneficiary of a fundraiser
                           </h5>
                           <p class="text-muted">We recommend only changing the beneficiary if they can no longer receive the funds. Some common reasons for this include...</p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Beneficiary’s name and privacy
                           </h5>
                           <p class="text-muted">
                              Adding a beneficiary is the most efficient and secure way for the funds to be transferred to someone else, but there are...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              What to know about being added as a beneficiary
                           </h5>
                           <p class="text-muted">
                              This article will walk you through some of the things that are really important for beneficiaries to know, and our support...
                           </p>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="text-center my-3">
                     <a href="javascript:void(0)" class="see-all text-center">Read More <i class="ms-2 fa fa-angle-down"></i> </a>
                  </div> -->
               </div>
               <div class="tab-pane fade" id="donating-a-fundraiser" role="tabpanel" aria-labelledby="contact-tab">
                  <div>
                     <div class="row">
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Choosing a tip amount
                           </h5>
                           <p class="text-muted">
                              When making a donation, you have the option of leaving a tip for Start Fundraising, but leaving a tip is certainly not mandatory,...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              How to make a donation
                           </h5>
                           <p class="text-muted">Thank you for choosing to support a Start Fundraising. You are making a big difference for someone in need. We’ve outlined some...</p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Trouble making a donation
                           </h5>
                           <p class="text-muted">
                              We truly appreciate your generosity in donating to a Start Fundraising fundraiser, and we’re sorry if you’re having trouble with that...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Start Fundraising donations and taxes
                           </h5>
                           <p class="text-muted">
                              Is My Donation Tax-Deductible? Donations made to a personal Start Fundraising fundraiser, rather than a charity fundraiser, are...
                           </p>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="text-center my-3">
                     <a href="javascript:void(0)" class="see-all text-center">Read More <i class="ms-2 fa fa-angle-down"></i> </a>
                  </div> -->
               </div>
               <div class="tab-pane fade" id="raising-funds-for-a-charity" role="tabpanel" aria-labelledby="contact-tab">
                  <div>
                     <div class="row">
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              How to add your charity to the Start Fundraising database
                           </h5>
                           <p class="text-muted">
                              Please visit the applicable link below to see if your charity is already listed in our database, and search by the tax ID...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Receiving charity fundraiser payouts
                           </h5>
                           <p class="text-muted">
                              Start Fundraising offers two different types of fundraisers for organizations. One is a standard Start Fundraising fundraiser, and the other...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              How do I access my charity’s data?
                           </h5>
                           <p class="text-muted">
                              In order to access a charity's donor data, we will first need to verify that you work for the charity. To get access to the...
                           </p>
                        </div>
                        <div class="col-lg-6 mb-4">
                           <h5 class="mb-0">
                              Withdrawing on behalf of a charity
                           </h5>
                           <p class="text-muted">
                              If you are planning for your fundraiser to benefit a charity organization, you have a couple of options to get the money...
                           </p>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="text-center my-3">
                     <a href="javascript:void(0)" class="see-all text-center">Read More <i class="ms-2 fa fa-angle-down"></i> </a>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-9 m-auto">
            <h2 class="text-center my-3">
               Browse by topic
            </h2>
            <div class="row">
               <div class="col-lg-3 mb-4">
                  <div class="card worldwideLeader bg-transparent border-0 position-relative">

                     <div class="card-body m-0">
                        <img class="category-images text-start" src="{{ asset('assets/front/Images/') }}/help-center/star.svg" height="20px" width="20px" alt="">
                        <h4>Get Started</h4>
                        <p class="mt-3">
                           Welcome! Discover how Start Fundraising works, and how to create a successful fundraiser.
                        </p>
                        <i class="fa fa-long-arrow-alt-right position-absolute card-arrow-icon"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 mb-4">
                  <div class="card worldwideLeader bg-transparent border-0 position-relative">

                     <div class="card-body m-0">
                        <img class="category-images text-start" src="{{ asset('assets/front/Images/') }}/help-center/setting.svg" height="20px" width="20px" alt="">
                        <h4>Manage Account</h4>
                        <p class="mt-3">
                           Learn how to make changes to your account and manage donations you've received.
                        </p>
                        <i class="fa fa-long-arrow-alt-right position-absolute card-arrow-icon"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 mb-4">
                  <div class="card worldwideLeader bg-transparent border-0 position-relative">

                     <div class="card-body m-0">
                        <img class="category-images text-start" src="{{ asset('assets/front/Images/') }}/help-center/home.svg" height="20px" width="20px" alt="">
                        <h4>Transfer funds</h4>
                        <p class="mt-3">
                           Learn how to set up and troubleshoot bank transfers for a personal or company bank account.
                        </p>
                        <i class="fa fa-long-arrow-alt-right position-absolute card-arrow-icon"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 mb-4">
                  <div class="card worldwideLeader bg-transparent border-0 position-relative">

                     <div class="card-body m-0">
                        <img class="category-images text-start" src="{{ asset('assets/front/Images/') }}/help-center/checkmark.svg" height="20px" width="20px" alt="">
                        <h4>Safety & Security</h4>
                        <p class="mt-3">
                           Your safety is our priority. Find out how to report a fundraiser or remove a hold from your account.
                        </p>
                        <i class="fa fa-long-arrow-alt-right position-absolute card-arrow-icon"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container my-5">
      <h2 class="text-center">
         We're here for you
      </h2>
      <div class="col-lg-7 m-auto text-center">
         <p>
            Still need help? Just click the button below and we'll provide you with personalized support and connect you with one of our Customer Care agents if needed
         </p>
         <a href="suggest.php" class="see-all">Get Help</a>
      </div>

   </div>
</section>
@endsection
