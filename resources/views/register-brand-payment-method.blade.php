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
                        <h2 class="mb-4">Método de pago</h2>
                        <div class="d-flex flex-row">
                            <div class="col-6">
                                <p>Registra los datos de la tarjeta con la cual realizaras los pagos por nuestros servicios</p>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Agrega método de pago</label>
                                </div>
                                <div class="row">
                                    <div class="col-6">

                                        <div class="mb-3">
                                            <img src="assets/images/card.png" alt="" class="rounded float-start">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <form>
                                            <div class="mb-3">
                                                <label for="brand_card_number" class="form-label">Número de tarjeta</label>
                                                <input type="brand_card_number" class="form-control" name="brand_card_number" id="brand_card_number"
                                                    placeholder="Número de tarjeta">
                                            </div>
                                            <div class="mb-3">
                                                <label for="brand_card_holder" class="form-label">Nombre del titular</label>
                                                <input type="text" class="form-control" name="brand_card_holder" id="brand_card_holder"
                                                    placeholder="Nombre del titular">
                                            </div>

                                            <div class="form-group row mb-3">
                                                <div class="col-sm-8">
                                                    <label for="brand_card_expiration_date" class="form-label">Fecha de expiración MM/AA</label>
                                                    <input type="text" class="form-control" name="brand_card_expiration_date" id="brand_card_expiration_date" placeholder="Fecha de expiración MM/AA">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="brand_card_cvv" class="form-label">CVV/CSC</label>
                                                    <input type="text" class="form-control" name="brand_card_cvv" id="brand_card_cvv" placeholder="CVV/CSC">
                                                </div>
                                            </div>
                                            <a href="register-brand-indicators" class="btn btn-jelou-secondary float-end">Guardar y Continuar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                                <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="chart-demo m-0">
                                            <div id="apex_radialbar1" class="apex-charts" style="min-height: 298.7px;"><div id="apexcharts9rng2pbqi" class="apexcharts-canvas apexcharts9rng2pbqi apexcharts-theme-light" style="width: 494px; height: 298.7px;"><svg id="SvgjsSvg5774" width="494" height="298.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG5776" class="apexcharts-inner apexcharts-graphical" transform="translate(100, 0)"><defs id="SvgjsDefs5775"><clipPath id="gridRectMask9rng2pbqi"><rect id="SvgjsRect5778" width="302" height="320" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask9rng2pbqi"></clipPath><clipPath id="nonForecastMask9rng2pbqi"></clipPath><clipPath id="gridRectMarkerMask9rng2pbqi"><rect id="SvgjsRect5779" width="300" height="322" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG5780" class="apexcharts-radialbar"><g id="SvgjsG5781"><g id="SvgjsG5782" class="apexcharts-tracks"><g id="SvgjsG5783" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 148 38.247560975609744 A 109.75243902439026 109.75243902439026 0 1 1 147.98084458586652 38.24756264723497" fill="none" fill-opacity="1" stroke="rgba(185,193,212,0.85)" stroke-opacity="0.5" stroke-linecap="butt" stroke-width="15.285780487804882" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 148 38.247560975609744 A 109.75243902439026 109.75243902439026 0 1 1 147.98084458586652 38.24756264723497"></path></g></g><g id="SvgjsG5785"><g id="SvgjsG5790" class="apexcharts-series apexcharts-radial-series" seriesName="CRICKET" rel="1" data:realIndex="0"><path id="SvgjsPath5791" d="M 148 38.247560975609744 A 109.75243902439026 109.75243902439026 0 1 1 43.61922768656714 181.91536883263677" fill="none" fill-opacity="0.85" stroke="rgba(74,138,246,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="15.758536585365857" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" selected="false" index="0" j="0" data:pathOrig="M 148 38.247560975609744 A 109.75243902439026 109.75243902439026 0 1 1 43.61922768656714 181.91536883263677"></path></g><circle id="SvgjsCircle5786" r="97.10954878048781" cx="148" cy="148" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG5787" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText5788" font-family="Helvetica, Arial, sans-serif" x="148" y="168" text-anchor="middle" dominant-baseline="auto" font-size="48px" font-weight="600" fill="#4a8af6" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">30%</text></g></g></g></g><line id="SvgjsLine5799" x1="0" y1="0" x2="296" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine5800" x1="0" y1="0" x2="296" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG5777" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        </div>
                                    </div><!--end card-body-->
                                    <div class="card-footer">
                                        En esta barra podrás ver tu progreso para la inscripción de tu marca
                                    </div>
                                </div>

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
