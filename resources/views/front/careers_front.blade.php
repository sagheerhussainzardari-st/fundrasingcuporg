@extends('front.layouts.app')
@section('title') Home @endsection
@section('content')

<main>

    <section class="discoverSection01 pb-0">
        {{-- <div class="container "> --}}
            <h1 class="text-center">Current Job Openings</h1>
            <div class="row m-1">

                @foreach ($careers as $career)
                <div class=" col-6 card text-white bg-dark border-light  " >
                    <div class="card-body">
                    <h5 class="card-title text-center">{{$career->name}}</h5>
                    </div>
                </div>
                
                @endforeach
    
            </div>

        {{-- </div> --}}
        <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Contact us for further details regarding the job descriptions and forward your resume to info@fundraisingcup.org.</p>
              <p class="card-text">Fundraisingcup.org is proud to be an equal opportunity employer that actively pursues candidates of diverse backgrounds and experiences. We are committed to providing diversity, equity, and inclusion training to all employees, and we do not discriminate on the basis of race, color, religion, ethnicity, nationality or national origin, sex, sexual orientation, gender, gender identity or expression, pregnancy status, marital status, age, medical condition, mental or physical disability, or military or veteran status.</p>
            </div>
          </div>
    </section>




</main>

@endsection
