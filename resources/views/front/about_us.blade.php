@extends('front.layouts.app')
@section('title') About Us @endsection
@section('content')
    @component('front.components.breadcrumb')
        @slot('title') About start fundraising @endslot
        @slot('description') There’s a part of every one of us that dreams of a better world. That spark of inspiration to help a person, fix a neighborhood, or even change a nation. At Start Fundraising, we believe your inspiration should be shared with everyone. Because that is how change happens. That’s why we make it easy to inspire the world and turn compassion into action. By giving people the tools they need to capture and share their story far and wide, we have built a community of more than 50 million donors and helped organizers raise over $5 billion—and we are just getting started. @endslot
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
