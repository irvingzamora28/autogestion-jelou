@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
<link href="{{ URL::asset('assets/plugins/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Maps @endslot
    @slot('title') Leaflet @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Leaflet Quick Start Guide</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="Leaf_default" class="" style="height: 400px"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bounds Extend</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="Bounds_Extend" class="" style="height: 400px"></div>
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
                    <h4 class="card-title">Vector Bounds</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="Vector_bounds" class="" style="height: 400px"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Moov Canvas</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="Moov_Canvas" class="" style="height: 400px"></div>
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
                    <h4 class="card-title">Array Map</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="Array_Map" class="" style="height: 400px"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Simple Vector Map</h4>
                    <p class="text-muted mb-0">Example of Leaflet map.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div id="V_Simple" class="" style="height: 400px"></div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/plugins/leaflet/leaflet.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/leaflet-map.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
