@extends('template/main')

@section('title')
    {{-- <div class="page-title-box">
    <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-md-8">
                 <h6 class="page-title">Home</h6>
             </div>
         </div>
    </div>
 </div> --}}
@endsection

@section('css')
    {{-- <link href="{{ asset('lezir/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('lezir/css/style.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('pages')
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">

                <!-- Hero Start -->
                <section style="padding-top: 10px" class="hero-1-bg" style="background-image: url({{ asset('images/hero-1-bg-img.png') }})" id="home">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <h1 class="hero-1-title text-dark fw-bold text-shadow mb-4">Selamat Datang di
                                    Profil Keanekaragaman Hayati Kota Surakarta</h1>
                                    <a href="{{ route('map')}}" class="btn btn-success mt-4">Lihat Peta</a>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class=" mt-5 mt-lg-0">
                                    <img src="{{ asset('lezir/images/banner.png') }}" alt="" class="img-fluid d-block mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero End -->
                {{-- <section class="section feather-bg-img" style="background-image: url(images/features-bg-img-1.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <p class="font-weight-medium text-uppercase mb-2"><i class="mdi mdi-chart-bubble h2 text-primary me-1 align-middle"></i> Creative Features</p>
                                <h3 class="font-weight-semibold line-height-1_4 mb-4">SAMBUTAN KEPALA DINAS DLH KOTA SURAKARTA</h3>
                                <!-- <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b> with our suite of <b>social tool</b></h3> -->
                                <p class="text-muted font-size-15 mb-4 text-justify">UU Nomor 26 tahun 2007 tentang Penataan Ruang, ketentuan dan pengaturan 
                                    ruang terbuka hijau menjadi bagian yang tidak terpisahkan dalam proses penataan ruang kawasan perkotaan. Setiap wilayah 
                                    diwajibkan untuk mengalokasikan sedikitnya 30% dari ruang atau wilayahnya untuk RTH, dimana 20% diperuntukan bagi RTH publik yang merupakan ruang 
                                    terbuka hijau yang dimiliki dan dikelola oleh pemerintah kota dan digunakan untuk kepentingan masyarakat secara umum, serta 10% diperuntukan bagi 
                                    RTH private pada lahan-lahan yang dimiliki oleh swasta atau masyarakat.</p>
                                
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="mt-4 mt-lg-0">
                                    <img src="{{ asset('img/kepaladinas.jpg') }}" alt="" class="img-fluid d-block mx-auto rounded-circle" width="600" height="600">
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            </div>

        </div>
    </div>
@endsection

@section('js')
    <!-- javascript -->
    <script src="{{ asset('lezir/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lezir/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('lezir/js/gumshoe.polyfills.min.js') }}"></script>
    <!-- feather icon -->
    <script src="{{ asset('lezir/js/feather.js') }}"></script>
    <!-- unicons icon -->
    <script src="{{ asset('lezir/js/unicons.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('lezir/js/app.js') }}"></script>
@endsection
