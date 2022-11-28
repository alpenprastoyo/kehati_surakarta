@extends('template/main')

@section('title')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">DATA POHON PADA AREA STUDI <span style="text-transform:uppercase">{{ $rth->lokasi }}</span> </h6>
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

                            <h4 class="card-title">DATA POHON PADA AREA STUDI <span style="text-transform:uppercase">{{ $rth->lokasi }}</span> </h4>


                            {{-- <div class=" row mb-3">
                                <label class="col-sm-2 col-form-label">Nama RTH</label>
                                <div class="col-sm-5">
                                    <select onchange="filter_rth(this);" class="form-select"
                                        aria-label="Default select example">
                                        <option selected="" value="">Pilih RTH</option>
                                        @foreach ($nama_rth as $r)
                                            <option value="{{ $r->nama_rth }}">{{ $r->nama_rth }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class=" row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis Pohon</label>
                                <div class="col-sm-5">
                                    <select onchange="filter_jenis(this);" class="form-select"
                                        aria-label="Default select example">
                                        <option selected="" value="">Pilih Jenis Pohon</option>
                                        @foreach ($nama_jenis as $k)
                                            <option value="{{ $k->nama_jenis }}">{{ $k->nama_jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            {{-- <p class="card-title-desc">DataTables has most features enabled by
                                default, so all you need to do to use it with your own tables is to call
                                the construction function: <code>$().DataTable();</code>.
                            </p> --}}
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jenis</th>
                                        <th>Spesies</th>
                                        <th>IUCN</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($pohon as $r)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $r->nama_jenis }}</td>
                                            <td>{{ $r->spesies }}</td>
                                            <td>{{ $r->iucn }}</td>
                                            <td>  <a target="_blank" id="detail" href="/pohon/{{ $r->id }}"> <button type="button"
                                                class="btn btn-success">Lihat Detail</button></a></td>
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
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });

        // function filter_rth(filter) {
        //     // console.log(filter.value);
        //     jquery_datatable.column(1).search(filter.value).draw();
        // }

        // function filter_jenis(filter) {
        //     jquery_datatable.column(2).search(filter.value).draw();
        // }
    </script>
@endsection
