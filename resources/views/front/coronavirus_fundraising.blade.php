@extends('front.layouts.app')
@section('title') Coronavirus Fundraising @endsection
@section('content')
<main>
    <div class="progress-container">
        <div class="progress-bar coronavirusPage" id="progressBar"></div>
    </div>
    <section class="coronavirusFundraising" id="coronavirusFundraising">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-1">
                    <a class="StartAfundly" href="{{ route('home.index') }}"><i class="fa fa-angle-left me-1"></i> Home</a>
                </div>
                <div class="col-lg-8">
                    <a class="StartAfundly" href="javascript:void(0)">Fundraising for Coronavirus Relief: How You Can Help the Fight</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-9">
                    <div class="coronavirusFundraisingBlog">
                        <h3><b>Fundraising for Coronavirus Relief: How You Can Help the Fight</b></h3>
                        <img class="w-100" src="{{ asset('assets/front/Images/') }}/coronavirusFundraising/coronavirusFundraisingImg01.jpg" alt="{{ asset('assets/front/Images/') }}/coronavirusFundraising/coronavirusFundraisingImg01.jpg">
                        <div class="row mt-3">
                            <div class="col-lg-1">
                                <div class="socialMediaIcons">
                                    <a class="text-muted" href="javascript:void(0)"><i class="fab fa-lg fa-facebook-square"></i></a>
                                    <a class="text-muted" href="javascript:void(0)"><i class="fab fa-lg fa-twitter"></i></a>
                                    <a class="text-muted" href="javascript:void(0)"><i class="fab fa-lg fa-pinterest"></i></a>
                                    <a class="text-muted" href="javascript:void(0)"><i class="far fa-lg fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8 position-relative">
                                <div class="row mb-4 date">
                                    <div class="col-lg-6 text-muted">
                                        <h4 class="mb-0">May 6, 2021 | 9 min read</h4>
                                    </div>
                                    <div class="col-lg-4 ms-0 m-auto">
                                        <a class="financialAssistanceBtn shadow" href="{{ url('becomemember') }}"><i class="me-1 fas fa-sm fa-tag"></i> Financial Assistance</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <a class="startedBtn mb-4" href="{{ url('becomemember') }}">Start a coronavirus fundraiser</a>
                                    <h5><b>What is the coronavirus and how can you stay safe?</b></h5>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </p>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, <a href="javascript:void(0)">discovered the undoubtable source.</a>
                                    </p>

                                    <h5><b>Why is it important to support those affected by COVID-19?</b></h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, <a href="javascript:void(0)">discovered the undoubtable source.</a>
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </p>

                                    <h5><b>Ways to provide coronavirus financial relief</b></h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    </p>

                                    <h6><b>1. Directly support individuals impacted by the virus</b></h6>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="shareArticle">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h5 class="mb-0"><b>SHARE ARTICLE</b></h5>
                                        </div>
                                        <div class="col-lg-8">
                                            <a class="text-muted" href="javascript:void(0)"><i class="fab fa-lg me-3 fa-facebook-square"></i></a>
                                            <a class="text-muted" href="javascript:void(0)"><i class="fab fa-lg me-3 fa-twitter"></i></a>
                                            <a class="text-muted" href="javascript:void(0)"><i class="fab fa-lg me-3 fa-pinterest"></i></a>
                                            <a class="text-muted" href="javascript:void(0)"><i class="far fa-lg me-3 fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
</main>
@endsection
