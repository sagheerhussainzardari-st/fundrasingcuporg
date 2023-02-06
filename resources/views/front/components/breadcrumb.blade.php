<section class="discoverSection01">
    <div class="container">
        <div class="col-lg-10 mt-5 mb-5 pt-5">
            <div class="discoverMainBanner">
                <a class="backBtn" href="{{ route('home.index') }}"><i class="fa fa-angle-left"></i> Home</a>
                <h3 class="mb-0"><b>{{ $title }}</b></h3>
                <h6 class="text-muted mt-3 mb-3">{{ $description }}</h6>
                <div class="col-lg-3">
                    <a class="startedBtn shadow" href="{{ url('becomemember') }}">Start Fundraising</a>
                </div>
            </div>
        </div>
    </div>
</section>
