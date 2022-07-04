<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index" class="logo">
            <span>
                <img src="{{ URL::asset('assets/images/jelou.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ URL::asset('assets/images/jelou.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">
        <div class="position-relative mx-auto">
            <img src="{{ URL::asset('assets/images/user-profile-default-image.png') }}" alt="user"
                class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">User </h5>
        </div>
    </div>

    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="nav-item">
                        <a class="nav-link" href="register-brand"><i class="ti ti-home menu-icon"></i><span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register-brand-personal-data"><i
                                class="ti ti-message menu-icon"></i><span>Mis datos</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register-brand-brand-data"><i
                                class="ti ti-message menu-icon"></i><span>Marca</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register-brand-payment-method"><i class="ti ti-currency-dollar menu-icon"></i><span>
                            Método de pago
                        </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register-brand-indicators"><i class="ti ti-movie menu-icon"></i><span>
                                Indicadores
                            </span></a>
                    </li>
                    <!--end nav-item-->
                </ul>
            </div>
            <!--end sidebarCollapse-->
        </div>
    </div>
</div>
<!-- end left-sidenav-->
