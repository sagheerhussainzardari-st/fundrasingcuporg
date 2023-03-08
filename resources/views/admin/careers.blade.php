@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <h1>Add Careers</h1>
    <form action="/admin/careers" method="post" class="d-flex">
        @csrf
        <input type="text" name="position" class="form-control" id="" placeholder="Enter Position Name" required />
        <input type="submit"  class=" btn-primary mx-4 btn-lg" value="Add" />
        
    </form>

    <h1 class="mt-4 mb-2">Open Positions</h1>

    @if(empty($careers))
      <p>No records found.</p>
    @else
        <div class="row">

            @foreach ($careers as $career)
            {{-- <div class="">
                <span></span> <button>Delete</button> <br>
            </div>    --}}
            {{-- <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-body d-flex">
                <h5 class="card-title">{{$career->name}}</h5>
                <button class="btn btn-danger delete-btn" data-url="/admin/careers/{{$career->id}}">Delete</button>
                </div>
            </div> --}}
            <div class=" col-3 card border-light m-2 " style="max-width: 18rem;">
                <div class="card-body">
                <button class="btn btn-danger delete-btn" style="position: absolute; top: 0; right: 0;" onclick="window.location.href='/admin/careers/delete/{{$career->id}}'" >Delete</button>
                <h5 class="card-title">{{$career->name}}</h5>
                </div>
            </div>
            
            @endforeach

        </div>
    @endif

    
@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
@section('script-bottom')
  
@endsection
