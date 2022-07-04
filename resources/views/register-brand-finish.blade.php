@extends('layouts.master')
@section('title')
    Unikit
@endsection
@section('body-start')

    <body id="body" class="dark-sidebar">
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12 col-lg-10">


                <div class="card mt-5">
                    <div class="card-body mt-5 p-5">

                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <h2 class="mb-4 text-primary">Todo Listo !</h2>
                                <div class="card text-center shadow-md p-3 mb-5 border bg-body rounded">
                                    <div class="card-body">
                                        <p class="card-text text-muted ">Haz terminado el registro de tu marca con Jelou Mom, en este momento la información esta siendo verificada por nuestro personal, en caso de ser o no verificada veras la información en la pestaña de notificaciones ubicada en la esquina superior derecha de nuestro dashboard.</p>
                                    </div><!--end card-body-->
                                </div>
                                <a class="btn btn-jelou-secondary float-end">Finalizar Registro</a>

                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    @endsection
    @section('script')
        <!-- apexcharts -->
        <script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
        <!-- polarareacharts init -->
        <script src="{{ URL::asset('assets/pages/analytics-index.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    @endsection
    @section('body-end')
    </body>
@endsection
