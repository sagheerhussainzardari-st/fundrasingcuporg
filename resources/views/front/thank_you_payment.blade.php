@extends('front.layouts.app')
@section('title') Payment Success @endsection
@section('content')
    @component('front.components.breadcrumb')
        @slot('title') Payment Success @endslot
        @slot('description') Thank You!, Your Payment Successfull  @endslot
    @endcomponent

@endsection
