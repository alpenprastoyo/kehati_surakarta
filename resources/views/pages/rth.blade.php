@extends('template/main')

@section('title')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Area Studi</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pages')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">DATA AREA STUDI</h4>


                            <div class=" row mb-3">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-5">
                                    <select onchange="filter_kecamatan(this);" class="form-select"
                                        aria-label="Default select example">
                                        <option selected="" value="">Pilih Kecamatan</option>
                                        @foreach ($kecamatan as $k)
                                            <option value="{{ $k->kecamatan }}">{{ $k->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class=" row mb-3">
                                <label class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-5">
                                    <select onchange="filter_kelurahan(this);" class="form-select"
                                        aria-label="Default select example">
                                        <option selected="" value="" >Pilih Kelurahan</option>
                                        @foreach ($kelurahan as $k)
                                            <option value="{{ $k->kelurahan }}">{{ $k->kelurahan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class=" row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis RTH </label>
                                <div class="col-sm-5">
                                    <select onchange="filter_jenis_rth(this);" class="form-select"
                                        aria-label="Default select example">
                                        <option selected="" value="">Pilih Jenis RTH</option>
                                        @foreach ($jenis as $j)
                                            <option value="{{ $j->jenis }}">{{ $j->jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <p class="card-title-desc">DataTables has most features enabled by
                                default, so all you need to do to use it with your own tables is to call
                                the construction function: <code>$().DataTable();</code>.
                            </p> --}}
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori RTH</th>
                                        <th>Jenis RTH</th>
                                        <th>Lokasi</th>
                                        <th>Kecamatan</th>
                                        <th>Keluarahan</th>
                                        <th>Luas</th>
                                        <th>Detail</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($rth as $r)
                                        <tr>
                                            <td>{{ $r->id }}</td>
                                            <td>{{ $r->kategori }}</td>
                                            <td>{{ $r->jenis }}</td>
                                            <td>{{ $r->lokasi }}</td>
                                            <td>{{ $r->kecamatan }}</td>
                                            <td>{{ $r->kelurahan }}</td>
                                            <td>{{ $r->luas }} M<sup>2</sup></td>
                                            <td style="align-content: center">
                                                {{-- <a target="_blank" id="detail" href="/rth/detail/{{ $r->id }}"> <button type="button"
                                                class="btn btn-success">Lihat Detail</button></a>
                                                </br></br> --}}
                                                <a target="_blank" id="detail" href="/map/{{ $r->id }}"> <button type="button"
                                                    class="btn btn-success">Lihat Peta</button></a>
                                            </td>

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
    <script src="{{ asset('foxia/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('foxia/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>

    <script>
        var jquery_datatable = $('#datatable').DataTable({
            "language": {
                "url": "{{ asset('foxia/assets/libs/datatables.net-bs4/js/dataTables.Indonesian.json') }}"
            },
            responsive: true
        });

        function filter_kecamatan(filter) {
            // console.log(filter.value);
            jquery_datatable.column(4).search(filter.value).draw();
        }

        function filter_kelurahan(filter) {
            jquery_datatable.column(5).search(filter.value).draw();
        }

        function filter_jenis_rth(filter) {
            jquery_datatable.column(2).search(filter.value).draw();
        }
    </script>
@endsection
