@extends('layouts.master')
@section('title')Unikit @endsection
@section('css')
@endsection
@section('body-start') <body id="body" class="dark-sidebar"> @endsection
    @section('content')
    <!-- page title-->
    @section('breadcrumb')
    @component('components.breadcrumb')
    @slot('li_1') Apps @endslot
    @slot('title') Contacts @endslot
    @endcomponent
    @endsection

    <div class="row">
        <div class="col-lg-4">
            <div class="card profile-card">
                <div class="card-body p-0">
                    <div class="media p-3  align-items-center">
                        <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                        <div class="media-body ms-3 align-self-center">
                            <h5 class="pro-title m-0">Merri Diamond</h5>
                            <p class="mb-0 text-muted">@SaraHopkins.com</p>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <a href="" class=""><i class="la la-pen text-secondary font-16 "></i></a>
                            <a href="" class=""><i class="la la-trash-alt text-secondary font-16 "></i></a>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-4">
            <div class="card profile-card">
                <div class="card-body p-0">
                    <div class="media p-3  align-items-center">
                        <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                        <div class="media-body ms-3 align-self-center">
                            <h5 class="pro-title m-0">Paul Schmidt</h5>
                            <p class="mb-0 text-muted">@SaraHopkins.com</p>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <a href="" class=""><i class="la la-pen text-secondary font-16 "></i></a>
                            <a href="" class=""><i class="la la-trash-alt text-secondary font-16 "></i></a>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-4">
            <div class="card profile-card">
                <div class="card-body p-0">
                    <div class="media p-3  align-items-center">
                        <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                        <div class="media-body ms-3 align-self-center">
                            <h5 class="pro-title m-0">Harry McCall</h5>
                            <p class="mb-0 text-muted">@SaraHopkins.com</p>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-3 me-3">
                            <a href="" class=""><i class="la la-pen text-secondary font-16 "></i></a>
                            <a href="" class=""><i class="la la-trash-alt text-secondary font-16 "></i></a>
                        </div>
                    </div>
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
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-2.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-3.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
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
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card client-card">
                <div class="card-body text-center">
                    <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                    <h5 class=" client-name fw-bold">Wendy Keen</h5>

                    <p class="text-muted text-center mb-2 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                    <span class="text-muted fw-semibold me-3"><i class="la la-map-marker me-2 text-secondary"></i>New York, USA</span>
                    <span class="text-muted fw-semibold"><i class="la la-phone me-2 text-secondary"></i>+1 123 456 789</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-primary">Project</button>
                        <button type="button" class="btn btn-sm btn-de-secondary">Message</button>
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

    <!-- Javascript -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    @endsection
    @section('body-end')
</body> @endsection
