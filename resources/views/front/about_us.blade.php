@extends('front.layouts.app')
@section('title') About Us @endsection
@section('content')
    @component('front.components.breadcrumb')
        @slot('title') About Us @endslot
        @slot('description') Fundraisingcup.org Ministry is a Non profit donation-based
funding organization aimed to supporting women and
children in need. The mission of Fundraisingcup.org is to
empower local community programs to support the health
and quality of life of women and children so that no one is
left hungry or isolated. We are excited to welcome our new
Marketing, Communications Coordinator,
who will help us accomplish our goals of raising funds for
local women shelters and children in need of supplies. We
created our platform to help the people who require
assistance globally. Whether that's people suffering from
disasters in Haiti or famine in Africa, we've got plans to aid
them. We believe many people in this world want to make a
palpable change.  @endslot
    @endcomponent
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-9 m-auto mb-5">
            <img src="{{ asset('assets/front/Images/') }}/about-us/banner.jpg" alt="" class="w-100">
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-9 m-auto mb-5">
            <img src="{{ asset('assets/front/Images/') }}/about-us/map.png" alt="" class="w-100">
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container about-details">
      <div class="row">
         <div class="col-lg-9 m-auto mb-5">
            <h4 class="mb-4">The Start Fundraising Difference</h4>
            <div class="row difference-section">
               <div class="col-lg-4 cursor-pointer">
                  <img src="{{ asset('assets/front/Images/') }}/about-us/about-1.jpg" alt="" class="w-100">
                  <div class="d-flex justify-content-between align-items-center mt-3">
                     <span class="ms-3">Start Fundraising Heroes</span>
                     <i class="fa fa-long-arrow-alt-right me-3"></i>
                  </div>
               </div>
               <div class="col-lg-4 cursor-pointer">
                  <img src="{{ asset('assets/front/Images/') }}/about-us/about-2.jpg" alt="" class="w-100">
                  <div class="d-flex justify-content-between align-items-center mt-3">
                     <span class="ms-3">In the news</span>
                     <i class="fa fa-long-arrow-alt-right me-3"></i>
                  </div>
               </div>
               <div class="col-lg-4 cursor-pointer">
                  <img src="{{ asset('assets/front/Images/') }}/about-us/about-3.jpg" alt="" class="w-100">
                  <div class="d-flex justify-content-between align-items-center mt-3">
                     <span class="ms-3">Start Fundraising Heroes</span>
                     <i class="fa fa-long-arrow-alt-right me-3"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>
@endsection
