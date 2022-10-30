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
    <link href="{{ asset('lezir/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('lezir/css/style.min.css') }}" rel="stylesheet" type="text/css" />
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
