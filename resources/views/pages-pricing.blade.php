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
    @slot('li_1') Pages @endslot
    @slot('title') Pricing @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <h6 class="title1 pt-3 pb-2 m-0">Basic plan</h6>
                        <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                        <div class="p-3">
                            <h3 class="amount amount-border d-inline-block">$39.00</h3>
                            <small class="font-12 text-muted">/month</small>
                        </div>
                        <hr class="hr-dashed">
                        <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                            <li>30GB Disk Space</li>
                            <li>30 Email Accounts</li>
                            <li>30GB Monthly Bandwidth</li>
                            <li>06 Subdomains</li>
                            <li>10 Domains</li>
                        </ul>

                        <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Sign up</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <span class="badge bg-pink a-animate-blink mt-0">POPULAR</span>
                    <div class="pricingTable1 text-center">
                        <h6 class="title1 pt-3 pb-2 m-0">Premium Plan</h6>
                        <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                        <div class="p-3">
                            <h3 class="amount amount-border d-inline-block">$49.00</h3>
                            <small class="font-12 text-muted">/month</small>
                        </div>
                        <hr class="hr-dashed">
                        <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                            <li>30GB Disk Space</li>
                            <li>30 Email Accounts</li>
                            <li>30GB Monthly Bandwidth</li>
                            <li>06 Subdomains</li>
                            <li>10 Domains</li>
                        </ul>
                        <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Sign up</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <h6 class="title1 pt-3 pb-2 m-0">Plus Plan</h6>
                        <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                        <div class="p-3">
                            <h3 class="amount amount-border d-inline-block">$69.00</h3>
                            <small class="font-12 text-muted">/month</small>
                        </div>
                        <hr class="hr-dashed">
                        <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                            <li>30GB Disk Space</li>
                            <li>30 Email Accounts</li>
                            <li>30GB Monthly Bandwidth</li>
                            <li>06 Subdomains</li>
                            <li>10 Domains</li>
                        </ul>

                        <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Sign up</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <h6 class="title1 pt-3 pb-2 m-0">Master Plan</h6>
                        <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                        <div class="p-3">
                            <h3 class="amount amount-border d-inline-block">$799.00</h3>
                            <small class="font-12 text-muted">/year</small>
                        </div>
                        <hr class="hr-dashed">
                        <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                            <li>30GB Disk Space</li>
                            <li>30 Email Accounts</li>
                            <li>30GB Monthly Bandwidth</li>
                            <li>06 Subdomains</li>
                            <li>10 Domains</li>
                        </ul>

                        <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Sign up</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->


    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <img src="{{URL::asset('assets/images/small/p-1.png')}}" alt="" class="" height="120">
                        <h6 class="title1 py-3 mt-2 mb-0">Basic plan <small class="text-muted font-12">Per Month</small></h6>
                        <ul class="list-unstyled pricing-content-2">
                            <li>30GB Disk Space</li>
                            <li>30 Email Accounts</li>
                            <li>30GB Monthly Bandwidth</li>
                            <li>06 Subdomains</li>
                            <li>10 Domains</li>
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                            <h3 class="amount">$39.00<small class="font-12 text-muted">/month</small></h3>
                        </div>
                        <div class="d-grid">
                            <a href="#" class="btn btn-primary btn-skew btn-outline-dashed py-2"><span>sign up</span></a>
                        </div>

                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <span class="badge bg-warning ml-auto a-animate-blink">POPULAR</span>
                        <img src="{{URL::asset('assets/images/small/p-2.png')}}" alt="" class="d-block mx-auto" height="120">

                        <h6 class="title1 py-3 mt-2 mb-0">Premium plan <small class="text-muted font-12">Per Month</small></h6>
                        <ul class="list-unstyled pricing-content-2">
                            <li>50GB Disk Space</li>
                            <li>50 Email Accounts</li>
                            <li>50GB Monthly Bandwidth</li>
                            <li>10 Subdomains</li>
                            <li>15 Domains</li>
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                            <h3 class="amount">$49.00<small class="font-12 text-muted">/month</small></h3>
                        </div>
                        <div class="d-grid">
                            <a href="#" class="btn btn-primary btn-skew btn-outline-dashed py-2"><span>sign up</span></a>
                        </div>
                    </div>
                    <!--end pricingTable1-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <img src="{{URL::asset('assets/images/small/p-3.png')}}" alt="" class="" height="120">
                        <h6 class="title1 py-3 mt-2 mb-0">Plus plan <small class="text-muted font-12">Per Month</small></h6>
                        <ul class="list-unstyled pricing-content-2">
                            <li>80GB Disk Space</li>
                            <li>80 Email Accounts</li>
                            <li>80GB Monthly Bandwidth</li>
                            <li>15 Subdomains</li>
                            <li>20 Domains</li>
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                            <h3 class="amount">$69.00<small class="font-12 text-muted">/month</small></h3>
                        </div>
                        <div class="d-grid">
                            <a href="#" class="btn btn-primary btn-skew btn-outline-dashed py-2"><span>sign up</span></a>
                        </div>
                    </div>
                    <!--end pricingTable1-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                        <img src="{{URL::asset('assets/images/small/p-4.png')}}" alt="" class="" height="120">
                        <h6 class="title1 py-3 mt-2 mb-0">Master plan <small class="text-muted font-12">Per year</small></h6>
                        <ul class="list-unstyled pricing-content-2">
                            <li>180GB Disk Space</li>
                            <li>180 Email Accounts</li>
                            <li>180GB Yearly Bandwidth</li>
                            <li>50 Subdomains</li>
                            <li>40 Domains</li>
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                            <h3 class="amount">$199.00<small class="font-12 text-muted">/One year</small></h3>
                        </div>
                        <div class="d-grid">
                            <a href="#" class="btn btn-primary btn-skew btn-outline-dashed py-2"><span>sign up</span></a>
                        </div>
                    </div>
                    <!--end pricingTable1-->
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

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
