@extends('layouts.master')
@section('title')Unikit @endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title') Analytics @endslot
    @endcomponent
    @endsection
    <!--end page title-->

    <div class="row">
        <div class="col-lg-12 order-md-1 order-sm-1">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_mis_datos.png')}}" alt="Inicio Mis datos personales" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Mis datos personales
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña realizaras el registro de tus datos personales, así como Nombre, Apellido, Correo y otros.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_mi_marca.png')}}" alt="Inicio Mi Marca" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Mi Marca
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña te pediremos todos los datos relacionados con tu marca, así como razón social, ventas, contacto y demás.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_metodo_pago.png')}}" alt="Inicio Método de pago" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Método de pago
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña registraras los datos de tu tarjeta para así realizar quincenalmente los pagos por nuestros servicios.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_integracion_whatsapp.png')}}" alt="Inicio Integración Whatsapp" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Integración Whatsapp
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña encontrarás todo lo necesario para conectar tu número de WhatsApp con nuestra plataforma.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <i class="ti ti-users font-36 align-self-center text-warning"></i>
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Parámetros registro cliente
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña podrás elegir cuales son los datos que deseas pedirle a tus clientes al momento de su registro.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_productos.png')}}" alt="Inicio Productos o Servicios" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Productos o Servicios
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    Podrás configurar los productos o servicios que ofreces con tu marca ya sea directamente con nosotros o integrarla desde tu plataforma.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_integracion.png')}}" alt="Inicio Integración" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Integración
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    Podrás configurar todo lo relacionado con documentación e integración de tu marca, te recomendamos tener tu desarrollador cerca en este paso.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_modulos_cursos.png')}}" alt="Inicio Módulos de Curso" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Módulos de Curso
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña podrás subir videos que expliquen como funciona tu marca y las mejores maneras de ofrecerla al público.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <i class="ti ti-users font-36 align-self-center text-warning"></i>
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Mom´s
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña encontrarás a nuestras Mom´s , la fuerza de venta más grande u podrás elegir con quienes te gustaría trabajar.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <i class="ti ti-users font-36 align-self-center text-warning"></i>
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Usuarios
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña podrás poner los usuarios de tu empresa que tendrán acceso a nuestra plataforma.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <img src="{{URL::asset('assets/images/inicio_verificacion_url.png')}}" alt="Inicio Verificación URL" height="26" alt="" class="mr-1">
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Verificación URL
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña podrás verificar cada uno de las ULR´s que tienes en la pagina y verificar su correcta integración.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row d-flex">
                                <div class="col-3">
                                    <i class="ti ti-users font-36 align-self-center text-warning"></i>
                                </div>
                                <div class="col-9 px-2 text-warning fs-4 text-center">
                                    Desarrollo e Integración
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                    En esta pestaña encontrarás toda la parte de documentación e integración con nuestra plataforma a nivel de desarrollo.
                                </div>
                                <!--end col-->
                                <div class="col-12 ms-auto align-self-center">
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->


        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">

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
    @section('body-end')</body> @endsection
