@extends('layouts.master')
@section('title')Unikit @endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Charts @endslot
    @slot('title') Chartjs @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line Chart</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <canvas id="lineChart" width="300" height="300"></canvas>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Donut Chart</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <canvas id="doughnut" height="300"></canvas>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bar Chart</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <canvas id="bar" height="300"></canvas>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Polar Chart</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <canvas id="polarArea" height="300"> </canvas>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pie Chart</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <canvas id="pie" height="300"></canvas>
                </div>
                <!--end card-body-->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Radar Chart</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <canvas id="radar" height="300"></canvas>
                </div>
                <!--end card-body-->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/chartjs.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
