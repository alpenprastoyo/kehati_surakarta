<div class="topnav">
    <div class="container-fluid">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box d-none d-lg-block">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('foxia/assets/images/logo-sm.png')  }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('foxia/assets/images/logo.png')  }}" alt="" height="20">
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