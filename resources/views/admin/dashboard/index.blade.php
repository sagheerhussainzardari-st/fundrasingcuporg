@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboards @endslot
        @slot('title') Dashboard @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>{{ $setting->title ?? '' }} Dashboard</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">Donator (s)</p>
                                    <h4 class="mb-0">{{ $donation->donation_count }}</h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">Donated Amount</p>
                                    <h4 class="mb-0">${{number_format($donation->donation_amount)}}</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted fw-medium">Total Funds</p>
                                    <h4 class="mb-0">{{ $fund }}</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        @if(Auth::user()->roles[0]->title != "Admin")
        <div class="col-xl-12">
            <div class="row p-3">
                <div class="card ">
                    <div class="card-title mt-3">Bank Details</div>
                    <form method="POST" action="/admin/{{Auth::user()->id}}/updateBankDetails" class="custom-validation"
                        enctype="multipart/form-data">
                      @csrf
               
                      <div class="row mt-3">
                        <div class="mb-3 col-3">
                            <label class="form-label">Bank Title</label>
                            <input type="text" class="form-control" value="{{Auth::user()->bank_title}}" name="bank_title" id="bank_title" placeholder="Bank Title"/>
                            @error('bank_title')
                            @enderror
                        </div>
  
                        <div class="mb-3 col-3">
                          <label class="form-label">Account No</label>
                          <input type="text" class="form-control" value="{{Auth::user()->bank_account_no}}" name="bank_account_no" id="bank_account_no" placeholder="Account Number"/>
                          @error('bank_account_no')
                          @enderror
                      </div>
  
                      <div class="mb-3 col-3">
                          <label class="form-label">IBAN</label>
                          <input type="text" class="form-control" value="{{Auth::user()->bank_iban}}" name="bank_iban" id="bank_iban" placeholder="IBAN"/>
                          @error('bank_iban')
                          @enderror
                      </div>
  
                      <div class="mb-3 col-3">
                          <label class="form-label">SWIFT</label>
                          <input type="text" class="form-control" value="{{Auth::user()->bank_swift}}" name="bank_swift" id="bank_swift" placeholder="SWIFT"/>
                          @error('bank_swift')
                          @enderror
                      </div>
                      </div>

               
                      <div class="d-flex flex-wrap gap-2 mb-3">
                          <button type="submit" class="btn btn-primary waves-effect waves-light">
                              Update
                          </button>
                      </div>
                  </form>
                </div>
            </div>
            <!-- end row -->

        </div>
        @endif
        
    </div>
    <!-- end row -->


@endsection
