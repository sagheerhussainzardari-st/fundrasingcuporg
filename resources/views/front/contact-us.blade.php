@extends('front.layouts.app')
@section('title') Home @endsection
@section('content')

<main>

    <section class="discoverSection01 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <H1>Contact US!</H1>
                    <p>For General inquiries or Technical support</p>
                    <p>For media relations or the prayer line 
                        contact us @ 
                        <br>
                        <br>
                        phone: 877-246-1984
                        <br>
                        
                        email: Info@fundfraisingcup.org
                        </p>
                </div>
                <div class="col-lg-6 mt-5 mb-5 pt-5">
                    <form method="POST" action="{{route('sendMessage')}}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}

                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control " name="first_name" id="first_name" placeholder=""  required/>
                            </div>   
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control " name="last_name" id="last_name"   required/>
                            </div>   
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control " name="email" id="email"   required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control " name="phone" id="phone"   required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <input type="text" class="form-control " name="message" id="message"   required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <Select class="form-control" name="country" required>
                                <option value="United States of America" selected>United States of America</option>
                                <option value="Pakistan" >Pakistan</option>
                            </Select>
                        </div>
                        

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>




</main>

@endsection
