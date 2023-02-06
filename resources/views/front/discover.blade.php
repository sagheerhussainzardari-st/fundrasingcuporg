@extends('front.layouts.app')
@section('title') Discover @endsection
@section('content')
<main>
    @component('front.components.breadcrumb')
        @slot('title') Browse fundraisers @endslot
        @slot('description') People around the world are raising money for what they are passionate about. @endslot
    @endcomponent

    <section class="homeSection02" id="homeSection02">
        <div class="container">
            <div class="topFundraisers newFundraisers">
                <div class="col-lg-9 m-auto">
                    <h2>New Fundraisers</h2>
                    <div class="row">
                        @forelse($fundraisers as $fundraiser)
                            <div class="col-lg-6 mb-4">
                                <a class="fundraisersCards" href="{{ route('fund.detail',[$fundraiser->id]) }}">
                                    <div class="card shadow">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img class="w-100" src="{{ asset($fundraiser->image) }}" alt="{{ asset($fundraiser->image) }}">
                                            </div>
                                            <div class="col-lg-6 m-auto">
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        <h6>{{ $fundraiser->users->name }}</h6>
                                                    </div>
                                                    <div class="cardDetails">
                                                        <h6 class="subHeading">{{ $fundraiser->name }}</h6>
                                                        <p>
                                                            {{ Illuminate\Support\Str::limit($fundraiser->description, 50, $end='...') }}
                                                        </p>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ getPercentage($fundraiser->orders->sum('amount'),$fundraiser->amount) }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ getPercentage($fundraiser->orders->sum('amount'),$fundraiser->amount) }}%">
                                                                <span class="sr-only">{{ getPercentage($fundraiser->orders->sum('amount'),$fundraiser->amount) }}% Complete</span>
                                                            </div>
                                                        </div>
                                                        <div class="raisedAmount">
                                                            <h6><strong>${{ number_format($fundraiser->orders->sum('amount')) }} raised</strong> of ${{ number_format($fundraiser->amount) }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p>No fundraising found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="Over10000People" id="Over10000People">
        <div class="container">
            <div class="col-lg-8 text-center m-auto">
                <div class="Over10000PeopleHeading">
                    <h2>Browse fundraisers by category</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <a href="fund.blade.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon01.png" alt="Assets/Images/home/icons/icon01.png">
                                    </div>
                                    <h6><b>Medical</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="memorial-fundraising.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon02.png" alt="Assets/Images/home/icons/icon02.png">
                                    </div>
                                    <h6><b>Memorial</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="emergency-fundraising.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon03.png" alt="Assets/Images/home/icons/icon03.png">
                                    </div>
                                    <h6><b>Emergency</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="non-profit.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon04.png" alt="Assets/Images/home/icons/icon04.png">
                                    </div>
                                    <h6><b>Nonprofit</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="education-fundraising.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon05.png" alt="Assets/Images/home/icons/icon05.png">
                                    </div>
                                    <h6><b>Education</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="animal-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon06.png" alt="Assets/Images/home/icons/icon06.png">
                                    </div>
                                    <h6><b>Animals</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="environment-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon07.png" alt="Assets/Images/home/icons/icon07.png">
                                    </div>
                                    <h6><b>Environment</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="business-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon08.png" alt="Assets/Images/home/icons/icon08.png">
                                    </div>
                                    <h6><b>Business</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="community-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon09.png" alt="Assets/Images/home/icons/icon09.png">
                                    </div>
                                    <h6><b>Community</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="competition-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon10.png" alt="Assets/Images/home/icons/icon10.png">
                                    </div>
                                    <h6><b>Competition</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="creative-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon11.png" alt="Assets/Images/home/icons/icon11.png">
                                    </div>
                                    <h6><b>Creative</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="event-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon12.png" alt="Assets/Images/home/icons/icon12.png">
                                    </div>
                                    <h6><b>Event</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="faith-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon13.png" alt="Assets/Images/home/icons/icon13.png">
                                    </div>
                                    <h6><b>Faith</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="family-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon14.png" alt="Assets/Images/home/icons/icon14.png">
                                    </div>
                                    <h6><b>Family</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="sports-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon15.png" alt="Assets/Images/home/icons/icon15.png">
                                    </div>
                                    <h6><b>Sports</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="travel-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon16.png" alt="Assets/Images/home/icons/icon16.png">
                                    </div>
                                    <h6><b>Travel</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="volunteer-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon17.png" alt="Assets/Images/home/icons/icon17.png">
                                    </div>
                                    <h6><b>Volunteer</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="wishes-fundraiser.php">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon18.png" alt="Assets/Images/home/icons/icon18.png">
                                    </div>
                                    <h6><b>Wishes</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="Over10000People" id="Over10000People">
        <div class="container">
            <div class="col-lg-8 text-center m-auto">
                <div class="Over10000PeopleHeading">
                    <h2>Over 10,000 people start fundraising every day</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[1]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon01.png" alt="Assets/Images/home/icons/icon01.png">
                                    </div>
                                    <h6><b>Medical</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[7]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon02.png" alt="Assets/Images/home/icons/icon02.png">
                                    </div>
                                    <h6><b>Memorial</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[3]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon03.png" alt="Assets/Images/home/icons/icon03.png">
                                    </div>
                                    <h6><b>Emergency</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[8]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon04.png" alt="Assets/Images/home/icons/icon04.png">
                                    </div>
                                    <h6><b>Nonprofit</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[21]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon05.png" alt="Assets/Images/home/icons/icon05.png">
                                    </div>
                                    <h6><b>Education</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[6]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon06.png" alt="Assets/Images/home/icons/icon06.png">
                                    </div>
                                    <h6><b>Animals</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[9]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon07.png" alt="Assets/Images/home/icons/icon07.png">
                                    </div>
                                    <h6><b>Environment</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[10]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon08.png" alt="Assets/Images/home/icons/icon08.png">
                                    </div>
                                    <h6><b>Business</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[11]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon09.png" alt="Assets/Images/home/icons/icon09.png">
                                    </div>
                                    <h6><b>Community</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[12]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon10.png" alt="Assets/Images/home/icons/icon10.png">
                                    </div>
                                    <h6><b>Competition</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[13]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon11.png" alt="Assets/Images/home/icons/icon11.png">
                                    </div>
                                    <h6><b>Creative</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[14]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon12.png" alt="Assets/Images/home/icons/icon12.png">
                                    </div>
                                    <h6><b>Event</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[15]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon13.png" alt="Assets/Images/home/icons/icon13.png">
                                    </div>
                                    <h6><b>Faith</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[16]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon14.png" alt="Assets/Images/home/icons/icon14.png">
                                    </div>
                                    <h6><b>Family</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[17]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon15.png" alt="Assets/Images/home/icons/icon15.png">
                                    </div>
                                    <h6><b>Sports</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[18]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon16.png" alt="Assets/Images/home/icons/icon16.png">
                                    </div>
                                    <h6><b>Travel</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[19]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon17.png" alt="Assets/Images/home/icons/icon17.png">
                                    </div>
                                    <h6><b>Volunteer</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('fund',[20]) }}">
                            <div class="card text-dark Over10000PeopleCards bg-transparent">
                                <div class="card-body">
                                    <div class="card-title">
                                        <img src="{{ asset('assets/front/Images/') }}/home/icons/icon18.png" alt="Assets/Images/home/icons/icon18.png">
                                    </div>
                                    <h6><b>Wishes</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @forelse($categories as $category)
        <section class="homeSection02 mb-5" id="homeSection02">
            <div class="container">
                <div class="topFundraisers newFundraisers">
                    <div class="col-lg-9 m-auto">
                        <h2>{{ $category->name }}</h2>
                        <div class="row">
                            @forelse($category->funds->take(4) as $fund)
                                <div class="col-lg-6 mb-4">
                                    <a class="fundraisersCards" href="{{ route('fund.detail',[$fund->id]) }}">
                                        <div class="card shadow">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img class="w-100" src="{{ asset($fund->image) }}"
                                                         alt="{{ asset($fund->image) }}">
                                                </div>
                                                <div class="col-lg-6 m-auto">
                                                    <div class="card-body">
                                                        <div class="card-title">
                                                            <h6>{{ $fund->users->name }}</h6>
                                                        </div>
                                                        <div class="cardDetails">
                                                            <h6 class="subHeading">{{ $fund->name }}</h6>
                                                            <p>
                                                                {{ Illuminate\Support\Str::limit($fund->description, 50, $end='...') }}

                                                            </p>
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar"
                                                                     aria-valuenow="{{ getPercentage($fund->orders->sum('amount'),$fund->amount) }}"
                                                                     aria-valuemin="0" aria-valuemax="100"
                                                                     style="width:{{ getPercentage($fund->orders->sum('amount'),$fund->amount) }}%">
                                                                    <span class="sr-only">{{ getPercentage($fund->orders->sum('amount'),$fund->amount) }}% Complete</span>
                                                                </div>
                                                            </div>
                                                            <div class="raisedAmount">
                                                                <h6>
                                                                    <strong>${{ number_format($fund->orders->sum('amount')) }}
                                                                        raised</strong> of
                                                                    ${{ number_format($fund->amount) }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <p>No Fund found on this category</p>
                            @endforelse
                        </div>
                        <div class="col-lg-3 mt-4 float-end text-end">
                            <a class="seeMore" href="{{ route('fund',[$category->id]) }}">See more <i class="fas fa-chevron-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @empty
        <p>No Category Found</p>
    @endforelse
</main>
@endsection
