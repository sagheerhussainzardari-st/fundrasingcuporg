@extends('front.layouts.app')
@section('title') {{ $fund->name }} @endsection
@section('fundDetail') {{ asset($fund->image) }} @endsection
@section('meta')
<meta property="og:title" content="{{ $fund->name }}" />
<meta property="og:image" content="{{ asset($fund->image) }}" />
<meta property="og:type" content="{{ $fund->description }}" />
@endsection
@section('content')
    <main>
        <!-- Modal -->
        <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header d-block sharingModal">
                        <h2 class="modal-title" id="shareModalLabel">Help by sharing</h2>
                        <p>Fundraisers shared on social networks raise up to 5 times more!</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-2 text-center">
                                <a class="text-muted" target="_blank" href="{{ $socialShare['facebook'] }}">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </div>
                            <div class="col-2 text-center">
                                <a class="text-muted" target="_blank" href="{{ $socialShare['twitter'] }}">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                            <div class="col-2 text-center">
                                <a class="text-muted" target="_blank" href="{{ $socialShare['instagram'] }}">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                            </div>
                            <div class="col-2 text-center">
                                <a class="text-muted" target="_blank" href="{{ $socialShare['linkedin'] }}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                            
                            <div class="col-2 text-center">
                                <a class="text-muted"
                                   href="mailto:?subject=Have you seen &quot;{{ '"'.$fund->name.'"' }}&quot;?&amp;body=Hello

 I thought you might be interested in supporting this GoFundMe, {{ url()->current() }}.

                                       Even a small donation could help Catherine Abbot reach their fundraising goal. And if you can't make a donation, it would be great if you could share the fundraiser to help spread the word.

                                       Thanks for having a look!">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                            <div class="col-2 text-center">
                                <a class="text-muted" target="_blank" href="{{ $socialShare['whatsapp'] }}">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="detailsPageMainBanner pt-5 pb-5"></section>
        <section class="detailsCardSection">
            <div class="container mt-5">
                <div class="col-lg-10 mt-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card bg-transparent border-0">
                                <h3><b>{{ $fund->name }}</b></h3>
                                <img class="w-100" src="{{ asset($fund->image) }}" alt="{{ asset($fund->image) }}">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-11">
                                        <div class="detailPageIcon">
                                            {{ $fund->users->name }} is organizing this fundraiser.
                                        </div>
                                        <div class="postedOn">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="createdBorderRight">
                                                        Created {{ \Carbon\Carbon::parse($fund->created_at)->diffInDays() }}
                                                        days ago.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detailpageDonaterDiscribtion mt-4">
                                            <p>{{ $fund->description }}</p>
                                            <div class="row mt-4 mb-4">
                                                <div class="col-lg-6">
                                                    <a class="StartAfundly p-2"
                                                       href="{{ route('donation',[$fund->id]) }}">Donate</a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#shareModal"
                                                            class="startedBtn mt-0 mb-0 text-light p-2"
                                                            href="javascript:void(0)">Share
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="card sideCard shadow">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4><b>${{ number_format($donations->donation_amount) }}</b> <span class="goal">USD raised of ${{ number_format($fund->amount) }} goal</span>
                                        </h4>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar percent" role="progressbar"
                                             aria-valuenow="{{ getPercentage($donations->donation_amount,$fund->amount) }}"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="max-width: {{ getPercentage($donations->donation_amount,$fund->amount) }}%"></div>
                                    </div>
                                    <p class="text-muted">
                                        {{ $donations->donation_count }} donations
                                    </p>
                                    <div class="col-lg-12 mb-3">
                                        <a class="StartAfundly p-2" href="{{ route('donation',[$fund->id]) }}">Donate
                                            Now</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#shareModal"
                                                class="startedBtn mt-0 mb-0 text-light p-2"
                                                href="javascript:void(0)">Share
                                        </button>
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

