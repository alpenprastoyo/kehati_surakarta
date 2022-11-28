<!doctype html>
<html lang="en" data-theme-mode="green">

    <head>

        <meta charset="utf-8">
        <title>Profil Keanekaragaman Hayati Kota Surakarta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('img/logo/logo-sm.png') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('/foxia/assets/css/bootstrap.min.css')  }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('/foxia/assets/css/icons.min.css')  }}" rel="stylesheet" type="text/css">
        <!-- App Css-->

        @yield('css')

        <link href="{{ asset('/foxia/assets/css/app.min.css')  }}" id="app-style" rel="stylesheet" type="text/css">


    </head>

    <body data-topbar="colored" data-layout="horizontal">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
             @include('template/header')

             @include('template/sidebar')

             @yield('title')


            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

            @yield('pages')
                <!-- End Page-content -->


            @include('template/footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('foxia/assets/images/layouts/layout-1.jpg')  }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('foxia/assets/images/layouts/layout-2.jpg')  }}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{ asset('foxia/assets/css/bootstrap-dark.min.css')  }}" data-appStyle="{{ asset('foxia/assets/css/app-dark.min.css')  }}">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('foxia/assets/images/layouts/layout-3.jpg')  }}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="{{ asset('foxia/assets/css/app-rtl.min.css')  }}">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <h6 class="mt-4">Select Custom Colors</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode"
                            id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                        <label class="form-check-label" for="theme-default">Default</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode"
                            id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                        <label class="form-check-label" for="theme-red">Red</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode"
                            id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                        <label class="form-check-label" for="theme-green">Green</label>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/foxia/assets/libs/jquery/jquery.min.js')  }}"></script>
        <script src="{{ asset('/foxia/assets/libs/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>
        <script src="{{ asset('/foxia/assets/libs/metismenu/metisMenu.min.js')  }}"></script>
        <script src="{{ asset('/foxia/assets/libs/simplebar/simplebar.min.js')  }}"></script>
        <script src="{{ asset('/foxia/assets/libs/node-waves/waves.min.js')  }}"></script>

        {{-- <script src="{{ asset('/foxia/assets/libs/morris.js/morris.min.js')  }}"></script> --}}

        <script src="{{ asset('/foxia/assets/libs/raphael/raphael.min.js')  }}"></script>


        <script src="{{ asset('/foxia/assets/libs/peity/jquery.peity.min.js')  }}"></script>

        {{-- <script src="{{ asset('/foxia/assets/js/pages/dashboard.init.js')  }}"></script> --}}

        <script src="{{ asset('/foxia/assets/js/app.js')  }}"></script>

        @yield('js')

    </body>
</html>
