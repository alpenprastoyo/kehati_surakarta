<div class="topnav">
    <div class="container-fluid">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box d-none d-lg-block">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('img/logo/logo.png')  }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('img/logo/logo-sm.png')  }}" alt="" height="40">
                    </span>
                </a>
            </div>

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="dripicons-meter me-2"></i>Beranda
                            </a>
                        </li>
        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advanced-ui" role="button">
                                <i class="dripicons-archive me-2"></i>RTH & Pohon
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-advanced-ui">
                                <a href="{{ route('rth') }}" class="dropdown-item">RTH</a>
                                <a href="{{ route('ktppohon') }}" class="dropdown-item">KTP Pohon</a>
                            </div>
                        </li>
        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advanced-ui" role="button">
                                <i class="dripicons-archive me-2"></i>Statistik
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-advanced-ui">
                                <a href="{{ route('rthtotal') }}" class="dropdown-item">RTH Total</a>
                                <a href="{{ route('rthpublik') }}" class="dropdown-item">RTH Publik</a>
                                <a href="{{ route('rthprivat') }}" class="dropdown-item">RTH Privat</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('map') }}">
                                <i class="dripicons-meter me-2"></i>Peta Spasial
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kontakkami') }}">
                                <i class="dripicons-meter me-2"></i>Kontak Kami
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>