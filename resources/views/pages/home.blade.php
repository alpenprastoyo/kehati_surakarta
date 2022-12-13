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



            <!-- Hero Start -->
            <section style="padding-top: 10px; padding-bottom: 10px" class="hero-1-bg"
                style="background-image: url({{ asset('images/hero-1-bg-img.png') }})" id="home">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <h1 class="hero-1-title text-dark fw-bold text-shadow mb-4">Selamat Datang di
                                Profil Keanekaragaman Hayati Kota Surakarta</h1>
                            <a href="{{ route('map') }}" class="btn btn-success mt-4">Lihat Peta</a>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class=" mt-5 mt-lg-0">
                                <img src="{{ asset('lezir/images/banner.png') }}" alt=""
                                    class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="row">
                <div class="col-lg-4">
                    <div class="card  mb-4">
                        <div class="bg-succes card-header text-white text-center" style="background-color: #4ac18e">Jumlah
                            Titik Lokasi</div>
                        <div class="card-body">
                            <h1 class="display-1 text-center"><strong>{{ $jumlah_area }}</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  mb-4">
                        <div class="bg-succes card-header text-white text-center" style="background-color: #4ac18e">Jumlah
                            Spesies Pohon</div>
                        <div class="card-body">
                            <h1 class="display-1 text-center"><strong>{{ $jumlah_pohon }}</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card  mb-4">
                        <div class="bg-succes card-header text-white text-center" style="background-color: #4ac18e">Jumlah
                            Spesies Burung</div>
                        <div class="card-body">
                            <h1 class="display-1 text-center"><strong>{{ $jumlah_burung }}</strong></h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            GALERI POHON
                        </div>

                        <div class="card-body">


                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators slider">
                                    @php $x = 0 @endphp
                                    @foreach ($pohon as $i)
                                        @if ($x == 0)
                                            <li data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="{{ $x++ }}" class="active"></li>
                                        @else
                                            <li data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="{{ $x++ }}"></li>
                                        @endif
                                    @endforeach
                                </ol>
                                <div class="carousel-inner galery" role="listbox">
                                    @php $x = 1 @endphp
                                    @foreach ($pohon as $i)
                                        @if ($x == 1)
                                            <div class="carousel-item active">
                                                <img style="width:100%;height: 50vh"  class="d-block img-fluid" src="{{ asset('/img/pohon/' . $i->image) }}"
                                                    alt="{{ $x++ }}">
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <img style="width:100%;height: 50vh" class="d-block img-fluid" src="{{ asset('/img/pohon/' . $i->image) }}"
                                                    alt="{{ $x++ }}">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-lg-6">

                </div> <!-- end col -->

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
    {{-- <script src="{{ asset('lezir/js/app.js') }}"></script> --}}

    <script>
        // $('#carouselburung').carousel({
        //     touch: false
        // });
        // $('#carouselpohon').carousel({
        //     touch: false
        // });
    </script>
@endsection
