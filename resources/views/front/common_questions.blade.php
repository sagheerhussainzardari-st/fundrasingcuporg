@extends('front.layouts.app')
@section('title') Common Questions @endsection
@section('content')
    @component('front.components.breadcrumb')
        @slot('title') Answers to Common Fundraising Questions @endslot
        @slot('description') Learn more about fundraising, donating, or receiving donations. @endslot
    @endcomponent
<div class="container">
   <div class="row">
      <div class="col-lg-10 m-auto mb-4">
         <img src="{{ asset('assets/front/Images/') }}/common-questions/banner.png" class="w-100" alt="">
      </div>
   </div>
</div>
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 m-auto mb-4 common-questions">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item py-3 border-0">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How does start fundraising work?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           You start your start fundraising by telling your story and setting a goal. You will then receive a fundraising page to accept donations and share your fundraiser. Signing up is easy and every donation is yours to keep, whether or not you reach your goal.
                        </p>
                        <p>
                           start fundraising makes it incredibly easy to raise money online for the things that matter to you most. In just a few minutes, you’ll be able to personalize your fundraiser and share it with the people in your life. In fact, over $9 billion has been raised by individuals on start fundraising.
                        </p>
                        <p>
                           Raising money for yourself or a loved one has never been easier. Plus, we’re here to help. Our Customer Care team will support you with customer service every step of the way.
                        </p>
                        <a href="{{ url('how-it-works') }}" class="see-all">How It Work</a>

                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What can I raise money for?
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           We see people use start fundraising to raise money for themselves, friends and family, or even complete strangers in random acts of kindness. People raise money for just about everything, including medical expenses, education costs, volunteer programs, youth sports, funerals & memorials, and even animals & pets.
                        </p>
                        <p>
                           We’re always amazed at the ways people use start fundraising to raise money. Check out some recent success stories, or see how start fundraising works.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How does start fundraising keep fundraisers safe?
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        start fundraising features the very best in secure payment encryption technology. Your donors’ online payments are safe, and your money is stored securely until you’re ready to request a withdrawal via electronic bank transfer.
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingFour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How do I withdraw funds from my fundraiser?
                     </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           Once your start fundraising starts receiving online donations, you can easily request a withdrawal at any time. Withdrawing money does not affect the progress meter displayed on your fundraiser. Simply click ‘Withdraw’ while logged into your account and follow the instructions. You can withdraw your balance directly to your bank account. Bank transfers take 2-5 business days to arrive.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingFive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Can a friend withdraw the money I raise for them?
                     </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           Yes. start fundraising makes it easy for another friend or family member to securely access the funds you have raised. Through start fundraising, they will receive direct access to the money you have raised. Please note: You will not be able to enter their bank information during the withdrawal process; they will need to do this themselves.
                        </p>
                        <a href="" class="see-all">
                           Learn how to invite a beneficiary
                        </a>
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingSix">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Are there any deadlines or time limits?
                     </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           While there are important withdrawals deadlines you’ll need to observe to avoid donations being refunded to donors, your fundraiser will remain live until you choose to turn off donations or remove the fundraiser altogether. Most organizers leave their fundraisers active indefinitely to refer back to the kind comments and support they received.
                        </p>
                        <a href="" class="see-all">
                           Learn More
                        </a>
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingSeven">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        What if I don't reach my goal?
                     </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           No problem. Reaching your goal is not required. With start fundraising, you keep each and every donation you receive. Your fundraiser will be able to accept donations even after your goal is reached. Once the goal is reached, the progress meter on your fundraiser will show that you have received more than your goal amount. If you’d like to continue raising money, you can keep your fundraiser running for as long as you’d like.
                        </p>
                        <a href="" class="see-all">
                           Learn More About Goals
                        </a>
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingNine">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How do I get donations?
                     </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           start fundraising provides an easy way to raise money from your friends, family, and online community. Our platform makes it simple to share your fundraiser in a variety of ways to bring in donations, track your progress, and post updates to engage your community. Check out our fundraising tips and fundraising ideas for advice on how to raise more donations.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingTen">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Is my country supported?
                     </button>
                  </h2>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           Review our list of supported countries and currencies to ensure that your country is supported.
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
         <div class="col-lg-8 m-auto mb-4 common-questions">
            <h1 class="my-5"><strong>Questions about donations</strong></h1>

            <div class="accordion" id="accordionExample">
               <div class="accordion-item py-3 border-0">
                  <h2 class="accordion-header" id="headingAccordionTwoOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTowOne" aria-expanded="true" aria-controls="collapseTowOne">
                        What is the start fundraising Guarantee?
                     </button>
                  </h2>
                  <div id="collapseTowOne" class="accordion-collapse collapse" aria-labelledby="headingAccordionTwoOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           We are proud to offer the first and only donor protection guarantee in the industry: the start fundraising Guarantee. Every day, thousands of people get the help they need from generous donors. Our team of Trust & Safety specialists work night and day to make sure that funds get to the intended recipient, every time. In the rare case that something isn’t right, we will refund your donation. If funds aren’t delivered to the right person, we will donate the missing amount.
                        </p>

                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingAccordionTwoTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTowTwo" aria-expanded="false" aria-controls="collapseTowTwo">
                        How is my donation protected?
                     </button>
                  </h2>
                  <div id="collapseTowTwo" class="accordion-collapse collapse" aria-labelledby="headingAccordionTwoTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           The start fundraising Guarantee protects your donation. It takes a leap of faith to help someone else. That’s why we make sure to honor your generosity by backing it up with the first and only guarantee for online fundraising. In the rare case that something isn’t right, we will refund your donation.
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
         <div class="col-lg-8 m-auto mb-4 common-questions">
            <h1 class="my-5"><strong>Questions about receiving donations</strong></h1>

            <div class="accordion" id="accordionExample">
               <div class="accordion-item py-3 border-0">
                  <h2 class="accordion-header" id="headingAccordionThreeOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTheeOne" aria-expanded="true" aria-controls="collapseTheeOne">
                        Can someone set up a fundraiser for me?
                     </button>
                  </h2>
                  <div id="collapseTheeOne" class="accordion-collapse collapse" aria-labelledby="headingAccordionThreeOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           Absolutely. With start fundraising, organizers can easily raise money for you and even make sure that donations go directly to your bank account.
                        </p>
                        <a href="" class="see-all">
                           Learn about being a beneficiary
                        </a>

                     </div>
                  </div>
               </div>
               <div class="accordion-item py-3 border-0 border-top ">
                  <h2 class="accordion-header" id="headingAccordionThreeTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTheeTwo" aria-expanded="false" aria-controls="collapseTheeTwo">
                        How will I receive the donated funds?
                     </button>
                  </h2>
                  <div id="collapseTheeTwo" class="accordion-collapse collapse" aria-labelledby="headingAccordionThreeTwo" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           start fundraising gets your funds to you quickly because we know that many fundraising needs are time-sensitive. You can set up withdrawals and add your bank account as soon as you accept the campaign organizer’s invitation to make you a beneficiary. Bank transfers then take 2-5 business days to arrive.
                        </p>
                        <a href="" class="see-all">
                           Learn about being a beneficiary
                        </a>
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
      <div class="col-lg-8 m-auto">
         <div class="card successStoriesCard shadow border-0">
            <div class="row">
               <div class="col-lg-3">
                  <img class="w-100" src="{{ asset('assets/front/Images/') }}/successStories/successStoriesImg01.jpeg" alt="">
               </div>
               <div class="col-lg-5 m-auto">
                  <h6><b>Learn how to become the next Fundraising success story</b></h6>
               </div>
               <div class="col-lg-3 m-auto">
                  <a class="StartAfundly shadow" href="{{ url('becomemember') }}">Crowdfunding lessons </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
