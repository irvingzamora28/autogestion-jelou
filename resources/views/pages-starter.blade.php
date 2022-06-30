@extends('layouts.master')
@section('title')Unikit @endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
@section('content')
<!-- page title-->
@section('breadcrumb')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Starter @endslot
@endcomponent
@endsection



@endsection
@section('script')

<!-- Javascript -->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
@section('body-end')</body> @endsection
