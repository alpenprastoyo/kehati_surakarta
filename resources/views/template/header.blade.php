<div class="navbar-header mx-auto">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box d-block d-lg-none">
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('foxia/assets/images/logo-sm.png')  }}" alt="" height="22">
                </span>
            </a>
        </div>


        <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="mdi mdi-menu"></i>
        </button>

        <ul style="padding-top: 10px" class="list-inline d-none d-lg-block mb-0">
            <li class="list-inline-item me-3 help-number">
                <span class="font-size-13 header-item">No HP : +012 3456 789</span>
                {{-- <span class="font-size-13 header-item">Alamat : Jalan Ir. Sutami 36 Kentingan, Jebres, Surakarta, Jawa Tengah. Indonesia 57126                </span> --}}
            </li>
            <li class="list-inline-item">
                {{-- <div class="dropdown d-none d-lg-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="me-2" src="{{ asset('foxia/assets/images/flags/us_flag.jpg')  }}" alt="Header Language" height="14"> United States <span class="mdi mdi-chevron-down"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('foxia/assets/images/flags/french_flag.jpg')  }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('foxia/assets/images/flags/germany_flag.jpg')  }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('foxia/assets/images/flags/italy_flag.jpg')  }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('foxia/assets/images/flags/spain_flag.jpg')  }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                        </a>
                    </div>
                </div> --}}
            </li>

        </ul>

    </div>

    <!-- Search input -->
    {{-- <div class="search-wrap" id="search-wrap">
        <div class="search-bar">
            <input class="search-input form-control" placeholder="Search">
            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                <i class="mdi mdi-close-circle"></i>
            </a>
        </div>
    </div> --}}

    {{-- <div class="d-flex">

        <div class="dropdown d-none d-lg-block">
            <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                <i class="mdi mdi-magnify"></i>
            </button>
        </div>


        <div class="dropdown d-inline-block ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="badge bg-danger rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="m-0 font-size-16"> Notification (3) </h5>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                    <i class="mdi mdi-cart-outline"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-danger rounded-circle font-size-16">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">You have 87 unread messages</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-info rounded-circle font-size-16">
                                    <i class="mdi mdi-glass-cocktail"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">It is a long established fact that a reader will</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">You have 87 unread messages</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                    <i class="mdi mdi-cart-outline"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </a>


                </div>
                <div class="p-2 border-top">
                    <a class="btn btn-sm btn-link font-size-14 btn-block" href="javascript:void(0)">
                        View all
                    </a>
                </div>
            </div>
        </div>

        <div class="dropdown d-inline-block ms-2">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="{{ asset('foxia/assets/images/users/avatar-6.jpg')  }}" alt="Header Avatar">
                <span class="d-none d-md-inline-block ms-1">Donald T. <i class="mdi mdi-chevron-down"></i> </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle me-2 text-muted"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle me-2 text-muted"></i> My Wallet</a>
                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">5</span><i class="dripicons-gear font-size-16 align-middle me-2 text-muted"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="dripicons-lock font-size-16 align-middle me-2 text-muted"></i> Lock screen</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="dripicons-exit font-size-16 align-middle me-2 text-muted"></i> Logout</a>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                <i class="mdi mdi-spin mdi-cog"></i>
            </button>
        </div>

    </div> --}}
</div>
