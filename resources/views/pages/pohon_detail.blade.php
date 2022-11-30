@extends('/template/main')

@section('title')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">DETAIL POHON</h6>
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
                                            <li data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active"></li>

                                </ol>
                                <div class="carousel-inner galery" role="listbox">

                                            <div class="carousel-item active">
                                                <img height="500" class="d-block img-fluid"
                                                    src="{{ asset('/img/pohon/'.$pohon->image) }}" alt="0">
                                            </div>

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

                            <h4 class="card-title">DATA POHON</h4>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Jenis</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $pohon->nama_jenis }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Spesies</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $pohon->spesies }}" type="text"
                                        placeholder="Artisanal kale" id="example-text-input" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">IUCN</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $pohon->iucn }}" type="text"
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

                            <h4 class="card-title">LOKASI DITEMUKAN</h4>

                            <table id="datatable-pohon" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($rth as $r)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $r->nama_rth }}</td>
                                            <td><a target="_blank" id="detail" href="/map/{{ $r->id_rth }}"> <button type="button"
                                                class="btn btn-success">Lihat Peta</button></a></td>
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
