@extends('front.layouts.app')
@section('title') How it Works @endsection
@section('content')
<main>
    <section class="howItWorks pt-5 mt-5 text-center">
        <div class="container">
            <div class="col-lg-6 m-auto mb-4">
                <h2><b>How Start Fundraising Works</b></h2>
                <p><b>Start Fundraising is the best place to fundraise, whether you are an individual, group, or organization.</b></p>
            </div>
            <div class="col-lg-11 m-auto">
                <img class="w-100 mb-4" src="{{ asset('assets/front/Images/') }}/howItWorks/howItWorkImg01.png" alt="Assets/Images/howItWorks/howItWorkImg01.png">
                <div class="row">
                    <div class="col-lg-3 m-auto text-start mb-4 mt-0">
                        <div class="card worldwideLeader bg-transparent border-0">
                            <div class="card-body">
                                <h6><b>1. Start your fundraiser</b></h6>
                                <p class="text-muted mb-0">
                                    - Set your fundraiser goal
                                </p>
                                <p class="text-muted mb-0">
                                    - Tell your story
                                </p>
                                <p class="text-muted mb-0">
                                    - Add a picture or video
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-auto text-start mb-4 mt-0">
                        <div class="card worldwideLeader bg-transparent border-0">
                            <div class="card-body">
                                <h6><b>2. Share with friends</b></h6>
                                <p class="text-muted mb-0">
                                    - Send emails
                                </p>
                                <p class="text-muted mb-0">
                                    - Send text messages
                                </p>
                                <p class="text-muted mb-0">
                                    - Share on social media
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-auto text-start mb-4 mt-0">
                        <div class="card worldwideLeader bg-transparent border-0">
                            <div class="card-body">
                                <h6><b>3. Manage donations</b></h6>
                                <p class="text-muted mb-0">
                                    - Accept donations
                                </p>
                                <p class="text-muted mb-0">
                                    - Thank donors
                                </p>
                                <p class="text-muted mb-0">
                                    - Withdraw funds
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 m-auto mt-3 mb-5">
                    <a class="startedBtn mt-0 mb-0 text-light" href="{{ url('becomemember') }}">Start Fundraising</a>
                </div>
            </div>
        </div>
    </section>
    <content-section>
        <div class="container">
            <div class="row row-reverse-1-section">
                <div class="col-lg-6 align-text">
                    <h1>What is Crowdfunding?</h1>
                    <br>
                    <p>
                        Although crowdfunding has existed for decades, if not centuries, the internet has made it easier than ever to raise money for great ideas from other people. Crowdfunding enables you to bypass traditional funding avenues. Instead, you can rely on the community’s power to fund something you wish to start.
                        <br>
                        <br>
                        Fundraisingcup.org Ministry is a donation-based funding platform. That means our platform is well-suited for people looking to raise money for causes close to their hearts. If there’s a cause that’s dear to you, you can start a campaign for it on our platform. Other like-minded individuals will see your campaign and pitch in for it. As time passes, the donations you receive will continue to grow. Together, you can harvest the community’s power to make a change that really matters.
                        <br>
                        <br>
                        We created our platform to help the people who require assistance globally. Whether that’s people suffering from disasters in Haiti or famine in Africa, we’ve got plans to aid them. We believe many people in this world want to make a palpable change. Hence, that’s what we’ve designed our platform to do.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="image-section-set">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/howItWorks/what-is-crowd-funding.jpg" alt="Assets/Images/howItWorks/what-is-crowd-funding.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-section-set-1">
                        <img class="w-100 " src="{{ asset('assets/front/Images/') }}/howItWorks/donation.png" alt="Assets/Images/howItWorks/donation.png">
                    </div>
                </div>
                <div class="col-lg-6 align-text">
                    <h1>How Donation-based Crowdfunding Works</h1>
                    <br>
                    <p>
                        As we’ve stated, we’re a donation-based crowdfunding platform. As a result, you can use our platform to raise money without any obligations to the donors. The people who donate to your cause – donors – are doing so without expecting anything in return. There are no caveats to our platform. Likewise, there aren’t any strings attached either. You can think of their contributions to your campaigns as gifts. We want our community to come together to raise funds for common donation-based causes like medical expenses, disaster relief, and philanthropy.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-reverse-1-section">
                <div class="col-lg-6 align-text">
                    <h1>Why Fundraisingcup.org Ministry?</h1>
                    <br>
                    <p>
                        If you’re looking to make a change for a cause that’s close to your heart, you can’t go wrong with fundraisingcup.org Ministry. That’s because we’re a hassle-free platform that enables you to create campaigns quickly. Many people often believe creating an online campaign for their cause can be a time-consuming process. That might be true for other platforms. However, that’s not the case on our platform. We’ve designed our platform to ensure the process is as straightforward as possible. In addition, you don’t have to worry about any red tape on our platform. We operate under a straightforward principle. It doesn‘t matter what your cause or goal is. You’ll find helping hands to support you in your charitable endeavor. Hence, we believe in supporting our community every step of the way.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="image-section-set">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/howItWorks/fundraising.png" alt="Assets/Images/howItWorks/fundraising.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12 for-mobile-responsive">
                <h1>
                The Top Crowdfunding Causes
                </h1>
                <br>
                <p>
                One of the reasons crowdfunding platforms have become so popular in the past few years is because they allow you to raise money for virtually anything. Let’s assume you’ve got a loved one who’s battling a disease. They need help with covering their expenses. Using our platform, you can rely on the community to help raise funds to cover their medical bills. Likewise, let’s assume you’ve heard about a recent disaster in Central America. You would like to make a difference. Therefore, you try to devise ways to help the people there through these trying times. However, the impact you can make yourself is negligible. Now, imagine if you got a thousand like-minded individuals to join you in your endeavor. You could make a world of difference. 
                <br>
                <br>
                People use crowdfunding platforms for various reasons. We’ve included some of the most popular reasons to use our platform. They include:
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row row-reverse-1-section">
                <div class="col-lg-6 align-text">
                    <ul class="list-styling">
                       <li>
                       Animal Causes: Everyone loves pets. However, they often overlook stray animals. You can use our platform to raise awareness and funds for abused animals. Likewise, if an animal requires medical attention, our platform’s the right fit for it.
                       </li>
                       <br>
                      <li>
                        Cancer treatment and awareness: Cancer is a disease we wish we could eradicate. Unfortunately, we haven’t managed to do that just yet. If you know someone currently battling cancer, you’ll know their medical bills are piling up. You can use our platform to help them with their cancer treatment. In addition, creating campaigns about cancer treatments can also help raise awareness. Likewise, you can also create campaigns for awareness like breast cancer awareness, skin cancer awareness, etc.
                        </li>
                        <br>
                        <li>
                        Medical Expenses: During emergencies, medical expenses often pile up. Likewise, surgeries and other medical treatments can also force many people to pay out-of-pocket bills. Statistics show that nearly 68 percent of people who declare bankruptcy do so because of medical expenses. You can use our platform to raise funds for medical expenses, particularly for people who can’t afford the necessary medical treatments.

                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="image-section-set">
                        <img class="w-100 " src="{{ asset('assets/front/Images/') }}/howItWorks/people-taking-care-together-donations-1024x683-1.jpg" alt="Assets/Images/howItWorks/people-taking-care-together-donations-1024x683-1.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-section-set-1">
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/howItWorks/last-sec-image.jpg" alt="Assets/Images/howItWorks/last-sec-image.jpg">
                    </div>
                </div>
                <div class="col-lg-6 align-text">
                    <ul class="list-styling">
                       <li>
                       Memorials and Funerals: Losing a loved one is always hard. Funerals are our way of bidding farewell to our loved ones. Unfortunately, funeral expenses can often spiral out of control.
                       </li>
                       <br>
                       <li>
                        Military and Veterans: Our platform enables you to raise funds for military members and veterans. Veterans often have difficulties adjusting to life post-service. You can help them through our platform. 
                        </li>
                        <br>
                        <li>
                        Nonprofit Causes: As a donation-based crowdfunding platform, we encourage you to create campaigns for nonprofit causes that are close to your heart. 
                        </li>
                        <br>
                        <li>
                        Schools and Education: We believe that children are the leaders of tomorrow. Therefore, we should do everything in our power to facilitate their growth and development. We urge our community to join together to help children get the education they deserve.
                        </li>
                   </ul>
                </div>
            </div>
        </div>
    </content-section>
    <section class="howItWorksSection02">
        <div class="container">
            <div class="col-lg-6 text-center m-auto">
                <h4>
                    <b>This website rocks! I raised close to $10,000 in less than 48 hours for my nephew’s medical needs, and your customer service was so prompt and helpful.”</b>
                </h4>
                <div class="col-2 col-lg-1 mt-3 mb-3 m-auto">
                    <img class="w-100" src="{{ asset('assets/front/Images/') }}/howItWorks/monica-s-testimonial1-1.png" alt="Assets/Images/howItWorks/monica-s-testimonial1-1.png">
                </div>
                <h5><b>– Monica S.</b></h5>
                <p class="text-muted"><b>Raised $16,000 on Start Fundraising</b></p>
            </div>
        </div>
    </section>

    <section class="howItWorks mt-3 mb-5">
        <div class="container">
            <div class="col-lg-6 text-center m-auto">
                <h4>
                    <b>Fast and safe</b>
                </h4>
                <p class="text-muted"><b>Millions trust Start Fundraising as the #1 online fundraising expert. That’s why more people start fundraisers on Start Fundraising than any other platform.</b></p>
                <div class="col-lg-3 m-auto">
                    <a class="startedBtn mt-0 mb-0 text-light" href="{{ url('becomemember') }}">Learn more</a>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection