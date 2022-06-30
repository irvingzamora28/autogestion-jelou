@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
<link href="{{ URL::asset('assets/plugins/animate/magic.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Maps @endslot
    @slot('title') Google Maps @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Default Map</h4>
                    <p class="text-muted mb-0">Example of google maps.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="gmaps-basic" class="gmaps"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Map With Marker</h4>
                    <p class="text-muted mb-0">Example of google maps.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="gmaps-marker" class="gmaps"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Overlays Map</h4>
                    <p class="text-muted mb-0">Example of google maps.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="gmaps-overlay" class="gmaps"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Map Types</h4>
                    <p class="text-muted mb-0">Example of google maps.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="gmaps-types" class="gmaps"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Layer Map</h4>
                    <p class="text-muted mb-0">Example of google maps.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="gmaps-layers" class="gmaps"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('https://maps.google.com/maps/api/js?') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gmaps/gmaps.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/gmaps.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
