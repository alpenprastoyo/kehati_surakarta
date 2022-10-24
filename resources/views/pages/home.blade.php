<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Horizontal Boxed Layout | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('foxia/assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-topbar="colored" data-layout="horizontal">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header mx-auto">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box d-block d-lg-none">
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                            </a>
                        </div>
           

                        <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <ul class="list-inline d-none d-lg-block mb-0">
                            <li class="list-inline-item me-3 help-number">
                                <span class="font-size-13 header-item">Help : +012 3456 789</span>
                            </li>
                            <li class="list-inline-item">
                                <div class="dropdown d-none d-lg-block">
                                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="14"> United States <span class="mdi mdi-chevron-down"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                
                        </ul>

                    </div>

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search">
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex">

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
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-6.jpg" alt="Header Avatar">
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

                    </div>
                </div>

                <div class="topnav">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box d-none d-lg-block">
                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo.png" alt="" height="20">
                                    </span>
                                </a>
                            </div>

                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">
                                                <i class="dripicons-meter me-2"></i>Dashboard
                                            </a>
                                        </li>
                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-user-Interface" role="button">
                                                <i class="dripicons-briefcase me-2"></i>User Interface
                                                <div class="arrow-down"></div>
                                            </a>
                        
                                            <div class="dropdown-menu mega-dropdown-menu dropdown-mega-menu-xl dropdown-menu-start"
                                                aria-labelledby="topnav-user-Interface">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                            <a href="ui-badge.html" class="dropdown-item">Badge</a>
                                                            <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                            <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                            <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                            <a href="ui-navs.html" class="dropdown-item">Navs</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp; Accordions</a>
                                                            <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                            <a href="ui-images.html" class="dropdown-item">Images</a>
                                                            <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
                                                            <a href="ui-lightbox.html" class="dropdown-item">Lightbox</a>
                                                            <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-popover-tooltips.html" class="dropdown-item">Popover &amp; Tooltips</a>
                                                            <a href="ui-carousel.html" class="dropdown-item">Carousel</a>
                                                            <a href="ui-video.html" class="dropdown-item">Video</a>
                                                            <a href="ui-typography.html" class="dropdown-item">Typography</a>
                                                            <a href="ui-sweet-alert.html" class="dropdown-item">Sweet-Alert</a>
                                                            <a href="ui-grid.html" class="dropdown-item">Grid</a>
                                                        </div>
                                                    </div>
                        
                                                </div>
                        
                                            </div>
                                        </li>
                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                                <i class="dripicons-view-thumb me-2"></i>Components
                                                <div class="arrow-down"></div>
                                            </a>
                        
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button">
                                                        Email <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                                                        <a href="email-read.html" class="dropdown-item">Email Read</a>
                                                        <a href="email-compose.html" class="dropdown-item">Email Compose</a>
                                                    </div>
                                                </div>
                        
                                                <a href="calendar.html" class="dropdown-item">Calendar</a>
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-forms" role="button">
                                                        Forms <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-forms">
                                                        <a href="form-elements.html" class="dropdown-item">Form Elements</a>
                                                        <a href="form-validation.html" class="dropdown-item">Form Validation</a>
                                                        <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                                        <a href="form-editors.html" class="dropdown-item">Form Editors</a>
                                                        <a href="form-uploads.html" class="dropdown-item">Form File Upload</a>
                                                        <a href="form-mask.html" class="dropdown-item">Form Mask</a>
                                                        <a href="form-xeditable.html" class="dropdown-item">Form Xeditable</a>
                                                    </div>
                                                </div>
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons" role="button">
                                                        Icons <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                        <a href="icons-material.html" class="dropdown-item">Material Design</a>
                                                        <a href="icons-ion.html" class="dropdown-item">Ion Icons</a>
                                                        <a href="icons-fontawesome.html" class="dropdown-item">Font Awesome</a>
                                                        <a href="icons-themify.html" class="dropdown-item">Themify Icons</a>
                                                        <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                        <a href="icons-typicons.html" class="dropdown-item">Typicons Icons</a>
                                                    </div>
                                                </div>
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button">
                                                        Charts <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                        <a href="charts-morris.html" class="dropdown-item">Morris Chart</a>
                                                        <a href="charts-chartist.html" class="dropdown-item">Chartist Chart</a>
                                                        <a href="charts-chartjs.html" class="dropdown-item">Chartjs Chart</a>
                                                        <a href="charts-flot.html" class="dropdown-item">Flot Chart</a>
                                                        <a href="charts-c3.html" class="dropdown-item">C3 Chart</a>
                                                        <a href="charts-other.html" class="dropdown-item">Jquery Knob Chart</a>
                                                    </div>
                                                </div>
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tables" role="button">
                                                        Tables <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-tables">
                                                        <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                        <a href="tables-datatable.html" class="dropdown-item">Data Table</a>
                                                        <a href="tables-responsive.html" class="dropdown-item">Responsive Table</a>
                                                        <a href="tables-editable.html" class="dropdown-item">Editable Table</a>
                                                    </div>
                                                </div>
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button">
                                                        Maps <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                        <a href="maps-google.html" class="dropdown-item"> Google Map</a>
                                                        <a href="maps-vector.html" class="dropdown-item"> Vector Map</a>
                                                    </div>
                                                </div>
                        
                                            </div>
                                        </li>
                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advanced-ui" role="button">
                                                <i class="dripicons-archive me-2"></i>Advanced UI
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-advanced-ui">
                                                <a href="advanced-animation.html" class="dropdown-item">Animation</a>
                                                <a href="advanced-highlight.html" class="dropdown-item">Highlight</a>
                                                <a href="advanced-rating.html" class="dropdown-item">Rating</a>
                                                <a href="advanced-nestable.html" class="dropdown-item">Nestable</a>
                                                <a href="advanced-alertify.html" class="dropdown-item">Alertify</a>
                                                <a href="advanced-rangeslider.html" class="dropdown-item">Range Slider</a>
                                                <a href="advanced-sessiontimeout.html" class="dropdown-item">Session Timeout</a>
                                            </div>
                                        </li>
                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                                <i class="dripicons-wallet me-2"></i>Pages
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu mega-dropdown-menu dropdown-mega-menu-lg  dropdown-menu-end"
                                                aria-labelledby="topnav-pages">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                                            <a href="pages-directory.html" class="dropdown-item">Directory</a>
                                                            <a href="pages-login.html" class="dropdown-item">Login</a>
                                                            <a href="pages-register.html" class="dropdown-item">Register</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <a href="pages-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                            <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                                            <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                            <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                                                <i class="dripicons-inbox me-2"></i>Layouts <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti" role="button">
                                                        Vertical <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                                        <a href="layouts-light-sidebar.html" class="dropdown-item">Light Sidebar</a>
                                                        <a href="layouts-compact-sidebar.html" class="dropdown-item">Compact Sidebar</a>
                                                        <a href="layouts-icon-sidebar.html" class="dropdown-item">Icon Sidebar</a>
                                                        <a href="layouts-boxed.html" class="dropdown-item">Boxed Layout</a>
                                                        <a href="layouts-colored-sidebar.html" class="dropdown-item">Colored Sidebar</a>
                                                    </div>
                                                </div>
                        
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori" role="button">
                                                        Horizontal <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                                        <a href="layouts-horizontal.html" class="dropdown-item">Horizontal</a>
                                                        <a href="layouts-hori-full.html" class="dropdown-item">Full Width</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="page-title-box">
                   <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h6 class="page-title">Dashboard</h6>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                            <div class="col-md-4">
                                <div class="float-end d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
    

            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">                        

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-info my-2"> + 11% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">5/8</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Orders</h6>
                                                <h5 class="ms-auto mt-0">1758</h5>
                                            </div>
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-danger my-2"> - 27% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">2/5</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Revenue</h6>
                                                <h5 class="ms-auto mt-0">48259</h5>
                                            </div>    
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-primary my-2"> 0% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">3/8</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Average Price</h6>
                                                <h5 class="ms-auto mt-0">$17.5</h5>
                                            </div>    
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-info my-2"> - 89% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">3/5</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Product Sold</h6>
                                                <h5 class="ms-auto mt-0">2048</h5>
                                            </div>    
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="mt-0 header-title mb-5">Monthly Earning</h1>
                                        <div id="morris-bar-stacked" class="morris-chart-height morris-charts"  data-colors='["#1699dd", "--bs-primary", "#ebeff2"]'></div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Sales Analytics</h4>
            
                                        <div class="row text-center mt-5">
                                            <div class="col-6">
                                                <h5 class="">56241</h5>
                                                <p class="text-muted font-size-14">Marketplace</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="">23651</h5>
                                                <p class="text-muted font-size-14">Total Income</p>
                                            </div>
                                        </div>
            
                                        <div id="morris-donut-example" class="dash-chart morris-charts text-center" data-colors='["#ebeff2", "--bs-primary", "#1699dd"]'></div>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">  
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Weekly Sales</h4>
                                        <div class="py-4">
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(101, 91, 230, 0.3)"],"stroke": ["rgba(101, 91, 230, 0.8)"]}' data-height="60">4,6,8,7,6,7,9,8,6,5,7,5,8,6,4,8,9,8,5,4</span>
                                        </div>
        
        
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="weekly-sale-list text-center">
                                                    <h5>145</h5>
                                                    <p class="text-muted mb-0">This Week</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="weekly-sale-list text-center">
                                                    <h5>132</h5>
                                                    <p class="text-muted mb-0">Last Week</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card product-sales">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-4"><i class="ion-monitor h4 me-2 text-primary"></i> Computers</h5>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-6">
                                                <p class="text-muted">This Month Sales</p>
                                                <h4><sup class="me-1"><small>$</small></sup>14,352</h4>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <span class="peity-pie" data-peity="{ &quot;fill&quot;: [&quot;#655be6&quot;, &quot;#f2f2f2&quot;]}" data-width="65" data-height="65" style="display: none;">70/100</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted mb-3">Top Cities Sales</p>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-muted mb-2">Los Angeles : <b class="text-dark">$ 8,235</b></p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-muted mb-2">San Francisco : <b class="text-dark">$ 7,256</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-xl-4 col-md-6">
                                <div class="card messages">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Latest Messages</h4>

                                        <nav class="mt-4">
                                            <div class="nav nav-tabs latest-messages-tabs nav-justified" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-first-tab" data-bs-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                                    <h4 class="mt-0">12</h4>
                                                    <p class="text-muted mb-0">November</p>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-second-tab" data-bs-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                                    <h4 class="mt-0">13</h4>
                                                    <p class="text-muted mb-0">November</p>
                                                </a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                                <div class="p-2 mt-2">
                                                    <ul class="list-unstyled latest-message-list mb-0">
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-2.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Michael Bowen</h6>
                                                                        <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                        <p class="time text-muted">Just Now</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Danny Benson</h6>
                                                                        <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                        <p class="time text-muted">12 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Brady Smith</h6>
                                                                        <p class="text-muted mb-0">This theme is awesome!</p>
                                                                        <p class="time text-muted">23 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Danny Benson</h6>
                                                                        <p class="text-muted mb-0">Nice to meet you</p>
                                                                        <p class="time text-muted">34 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                                <div class="p-2 mt-2">
                                                    <ul class="list-unstyled latest-message-list mb-0">
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Albert Jones</h6>
                                                                        <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                        <p class="time text-muted">yesterday, 09:42am</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-6.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Danny Benson</h6>
                                                                        <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                        <p class="time text-muted">yesterday, 11:07am</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-7.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Joseph Sanchez</h6>
                                                                        <p class="text-muted mb-0">This theme is awesome!</p>
                                                                        <p class="time text-muted">yesterday, 01:17am</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Daniel Anderson</h6>
                                                                        <p class="text-muted mb-0">Nice to meet you</p>
                                                                        <p class="time text-muted">34 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Recent activity</h4>
                                        
                                        <div class="p-2">
                                            <ul class="list-unstyled rec-acti-list">
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">14 Oct, 09:30am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Meeting For a new Projects</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">14 Oct, 11:05am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Start a new Projects</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">15 Oct, 10:16am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Create Landing Psd template</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">16 Oct, 11:24am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Convert Psd to Html</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">17 Oct, 01:36pm</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Redesign Html template</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-8 rec-acti-input">
                                                    <input type="text" name="rec-input-text" class="form-control" placeholder="Add new Activity">
                                                </div>
                                                <div class="col-4 rec-acti-send">
                                                    <div class="d-grid">
                                                        <button class="btn-primary btn" type="button"><i class="mdi mdi-plus me-1"></i>Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Latest Transactions</h4>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">(#) Id</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col" colspan="2">Amount</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#16252</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2"> Rafael Reardon
                                                            </div>
                                                        </td>
                                                        <td>14/10/2018</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>$80</td>
                                                        <td>1</td>
                                                        <td>$80</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16253</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2"> Thomas Hirsch
                                                            </div>
                                                        </td>
                                                        <td>15/10/2018</td>
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                        <td>$76</td>
                                                        <td>2</td>
                                                        <td>$152</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16254</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2"> Archer Desaillly
                                                            </div>
                                                        </td>
                                                        <td>15/10/2018</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>$86</td>
                                                        <td>1</td>
                                                        <td>$86</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16255</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2"> Michael Flannery
                                                            </div>
                                                        </td>
                                                        <td>16/10/2018</td>
                                                        <td><span class="badge bg-danger">Cancel</span></td>
                                                        <td>$82</td>
                                                        <td>2</td>
                                                        <td>$164</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16256</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2"> Jamie Fishbourne
                                                            </div>
                                                        </td>
                                                        <td>17/10/2018</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>$84</td>
                                                        <td>2</td>
                                                        <td>$84</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>    
                </div>
                <!-- End Page-content -->

                
                
                <footer class="footer text-center">
                    © <script>document.write(new Date().getFullYear())</script> Foxia <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>
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
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
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
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <script src="assets/libs/morris.js/morris.min.js"></script>

        <script src="assets/libs/raphael/raphael.min.js"></script>


        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
