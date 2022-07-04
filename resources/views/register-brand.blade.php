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
                <div class="card-body">
                    <h2 class="mb-4">Realiza el registro de tu marca con Jelou</h2>
                    <div class="d-flex flex-column">
                        <div class="col-6">
                            <p>Tardaras solo unos minutos en completar el formulario y los datos que te solicitamos.
                                Podrás ver en una ventana tu avance en el proceso para la configuración de tu marca.</p>
                        </div>
                        <div class="col-6">
                            <a href="register-brand-personal-data" class="btn btn-jelou-secondary w-25">Iniciar Registro</a>
                        </div>
                    </div>
                    <!--end /div-->
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
