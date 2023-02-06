@extends('layouts.master')
@section('title') Create {{ $title }} @endsection
@section('css')
    <!-- Plugins css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"/>
@endsection
@section('content')
    @php
        if (request()->segment(3) == 'create') {
            $action = route("admin.categories.store");
            $page = 'Create';
        } elseif (request()->segment(4) == 'edit') {
            $action = route("admin.categories.update", [$category->id]);
            $page = 'Edit';
        }
    @endphp
    @component('components.breadcrumb')
        @slot('li_1') {{ $title }} @endslot
        @slot('title') {{ $page." ".$title }} @endslot
    @endcomponent

    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ $action }}" class="custom-validation" enctype="multipart/form-data">
                        @csrf
                        @if(request()->segment(4) == 'edit')
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','name')) }}</label>
                            <input type="text" class="form-control @error('name') parsley-error @enderror"
                                   value="{{ $category->name ?? '' }}" name="name" id="name"
                                   placeholder="{{ ucwords(str_replace('_',' ','name')) }}" required/>
                            @error('name')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','heading')) }}</label>
                            <input type="text" class="form-control @error('heading') parsley-error @enderror"
                                   value="{{ $category->heading ?? '' }}" name="heading" id="heading"
                                   placeholder="{{ ucwords(str_replace('_',' ','heading')) }}" required/>
                            @error('heading')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','description')) }}</label>
                            <textarea class="form-control @error('description') parsley-error @enderror"
                                   name="description" id="description"
                                   placeholder="{{ ucwords(str_replace('_',' ','description')) }}" required/>{{ $category->description ?? '' }}</textarea>
                            @error('description')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','section_heading1')) }}</label>
                            <input type="text" class="form-control @error('section_heading1') parsley-error @enderror"
                                   value="{{ $category->section_heading1 ?? '' }}" name="section_heading1" id="section_heading1"
                                   placeholder="{{ ucwords(str_replace('_',' ','section_heading1')) }}" required/>
                            @error('section_heading1')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','section_left_text1')) }}</label>
                            <input type="text" class="form-control @error('section_left_text1') parsley-error @enderror"
                                   value="{{ $category->section_left_text1 ?? '' }}" name="section_left_text1" id="section_left_text1"
                                   placeholder="{{ ucwords(str_replace('_',' ','section_left_text1')) }}" required/>
                            @error('section_left_text1')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','section_left_text2')) }}</label>
                            <input type="text" class="form-control @error('section_left_text2') parsley-error @enderror"
                                   value="{{ $category->section_left_text2 ?? '' }}" name="section_left_text2" id="section_left_text2"
                                   placeholder="{{ ucwords(str_replace('_',' ','section_left_text2')) }}" required/>
                            @error('section_left_text2')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','section_right_text1')) }}</label>
                            <input type="text" class="form-control @error('section_right_text1') parsley-error @enderror"
                                   value="{{ $category->section_right_text1 ?? '' }}" name="section_right_text1" id="section_right_text1"
                                   placeholder="{{ ucwords(str_replace('_',' ','section_right_text1')) }}" required/>
                            @error('section_right_text1')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','section_right_text2')) }}</label>
                            <input type="text" class="form-control @error('section_right_text2') parsley-error @enderror"
                                   value="{{ $category->section_right_text2 ?? '' }}" name="section_right_text2" id="section_right_text2"
                                   placeholder="{{ ucwords(str_replace('_',' ','section_right_text2')) }}" required/>
                            @error('section_right_text2')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>{{ ucwords(str_replace('_',' ','image')) }}</label>
                            <input type="file" id="image" class="dropify" name="image" data-height="200">
                            @error('image')
                            <span class="text-red">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
@endsection
@section('script-bottom')
    <script>
        $(function () {
            $('#image').dropify({
                defaultFile: "{{ asset($category->image ?? '') }}",
                messages: {
                    'default': 'Drop a file OR click',
                }
            });
        })
    </script>
@endsection
