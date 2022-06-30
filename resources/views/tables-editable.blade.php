@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
<link href="{{ URL::asset('assets/plugins/tabulator/bootstrap/tabulator_bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Tables @endslot
    @slot('title') Editable @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editable Data </h4>
                    <p class="text-muted mb-0">Using the editable setting on each column, you can make a user editable table.
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="mb-2">
                            <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-add">Add New Row</button>
                            <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-delete">Remove Row</button>
                            <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-update">Update First Row Name</button>
                        </div>
                        <div id="editable"></div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection
    @section('script')

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/plugins/tabulator/tabulator.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/editable.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
