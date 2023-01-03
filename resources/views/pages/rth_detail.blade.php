@extends('/template/main')

@section('title')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">DETAIL RTH</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="{{ asset('/foxia/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('pages')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators slider">
                                    @php $x = 0 @endphp
                                    @foreach ($rth->image as $i)
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
                                    @foreach ($rth->image as $i)
                                        @if ($x == 1)
                                            <div class="carousel-item active">
                                                <img height="500" class="d-block img-fluid"
                                                    src="{{ asset('/img/rth/'.$rth->id.'/'. $i) }}" alt="{{ $x++ }}">
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="{{ asset('/img/rth/'.$rth->id.'/'. $i) }}"
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
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">DATA RTH</h4>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->lokasi }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Kategori RTH</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->kategori }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis RTH</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->jenis }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->kecamatan }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->kelurahan }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Luas</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->luas }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->keterangan_luas }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Latitude</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->latitude }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Longitude</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $rth->longitude }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">DATA POHON</h4>

                            <table id="datatable-pohon" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Jenis</th>
                                        <th>Spesies</th>
                                        <th>IUCN</th>
                                        <th>Keterangan</th>
                                        <th>Tinggi</th>
                                        <th>Keliling</th>
                                        <th>Diameter</th>
                                        <th>Jarak Pohon</th>
                                        <th>Panjang Coverage</th>
                                        <th>Lebar Coverage</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($pohon as $r)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="zoom-gallery">
                                                    <a class="pull-left" href="/img/pohon/{{ $r->image }}"
                                                        title="{{ $r->nama_jenis }} - <i>{{ $r->spesies }}</i> "><img
                                                            class="img-thumbnail" src="/img/pohon/{{ $r->image }}"
                                                            alt="" width="275"></a>
                                                </div>
                                            </td>
                                            <td>{{ $r->nama_jenis }}</td>
                                            <td><i>{{ $r->spesies }}</i></td>
                                            <td><i>{{ $r->iucn }}</i></td>
                                            <td>{{ $r->keterangan }}</td>
                                            <td>{{ $r->tinggi }}</td>
                                            <td>{{ $r->keliling }}</td>
                                            <td>{{ $r->diameter }}</td>
                                            <td>{{ $r->jarak_pohon }}</td>
                                            <td>{{ $r->panjang_coverage }}</td>
                                            <td>{{ $r->lebar_coverage }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">DATA BURUNG</h4>

                            <table id="datatable-burung" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Jenis</th>
                                        <th>Spesies</th>
                                        <th>Jumlah</th>
                                        <th>IUCN</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($burung as $r)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="zoom-gallery">
                                                    <a class="pull-left" href="/img/burung/{{ $r->image }}"
                                                        title="{{ $r->nama_jenis }} - <i>{{ $r->spesies }}</i> "><img
                                                            class="img-thumbnail" src="/img/burung/{{ $r->image }}"
                                                            alt="" width="275"></a>
                                                </div>
                                            </td>
                                            <td>{{ $r->nama_jenis }}</td>
                                            <td><i>{{ $r->spesies }}</i></td>
                                            <td>{{ $r->jumlah }}</td>
                                            <td><i>{{ $r->iucn }}</i></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/foxia/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/foxia/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/foxia/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>

    <script>
        var jquery_datatable_pohon = $('#datatable-pohon').DataTable({
            "language": {
                "url": "{{ asset('foxia/assets/libs/datatables.net-bs4/js/dataTables.Indonesian.json') }}"
            }
        });

        var jquery_datatable_burung = $('#datatable-burung').DataTable({
            "language": {
                "url": "{{ asset('foxia/assets/libs/datatables.net-bs4/js/dataTables.Indonesian.json') }}"
            }
        });
    </script>
    <script>
        (function(e) {

            e(".zoom-gallery").magnificPopup({
                delegate: "a",
                type: "image",
                closeOnContentClick: !1,
                closeBtnInside: !1,
                mainClass: "mfp-with-zoom mfp-img-mobile",
                image: {
                    verticalFit: !0,
                    titleSrc: function(e) {
                        return (
                            e.el.attr("title") +
                            ' &middot; <a href="'
                        );
                    },
                },
                gallery: {
                    enabled: !0
                },
                zoom: {
                    enabled: !0,
                    duration: 300,
                    opener: function(e) {
                        return e.find("img");
                    },
                },
            });
        }.apply(this, [jQuery]));
    </script>
@endsection
