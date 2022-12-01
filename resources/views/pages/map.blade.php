@extends('template/main')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
@endsection




@section('title')
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Peta Spasial</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pages')
    <div class="page-content">
        <div class="container-fluid">



            <div class="row">

                <div class="col-xl-3">
                    <div class="card">
                        {{-- <img id="image" class="card-img-top img-fluid"
                            src="https://greencampus.uns.ac.id/wp-content/uploads/elementor/thumbs/child-worried-about-the-environment-caresses-a-la-2022-05-04-00-26-52-utc-1-ppreuyrwwje3ekish3me7jeboqxwibhmkmlibyners.jpg"
                            alt="Card image cap"> --}}
                        <div style="padding:10px;" class="row align-items-center">
                            <div class="col">
                                <button onclick="previous_rth()" type="button" class="btn btn-success">
                                    < Sebelumnya</button>
                            </div>
                            <div class="col">
                                <div class="float-end d-md-block">
                                    <button onclick="next_rth()" type="button" class="btn btn-success">Selanjutnya
                                        ></button>
                                </div>
                            </div>
                        </div>
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
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/img/rth/' . $rth->id . '/' . $i) }}"
                                                alt="{{ $x++ }}">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid"
                                                src="{{ asset('/img/rth/' . $rth->id . '/' . $i) }}"
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
                        <div class="card-body">
                            <h3 id="title">{{ $rth->lokasi }}</h3>
                            <h4 class="card-title">Kategori</h4>
                            <p id="keterangan" class="card-text">{{ $rth->kategori }}</p>
                            <h4 class="card-title">Luas</h4>
                            <p id="luas" class="card-text">{{ $rth->luas }} M<sup>2</sup></p>
                            <h4 class="card-title">Jumlah Burung</h4>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p id="jumlah_burung" class="card-text">{{ $rth->jumlah_burung }} </p>
                                </div>
                                <div class="col-lg-10">
                                    <a target="_blank" id="detail_burung" href="/burung/list/{{ $rth->id }}"> <button
                                            type="button" class="btn btn-success">Lihat Detail Burung</button></a>
                                </div>
                            </div>
                            </br>
                            <h4 class="card-title">Jumlah Pohon</h4>
                            <div class="row">
                                <div class="col-lg-2">
                                    <p id="jumlah_pohon" class="card-text">{{ $rth->jumlah_pohon }} </p>
                                </div>
                                <div class="col-lg-10">
                                    <a target="_blank" id="detail_pohon" href="/pohon/list/{{ $rth->id }}"> <button
                                            type="button" class="btn btn-success">Lihat Detail Pohon</button></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-9">
                    <div class="card">
                        <div id="map" class="map map-home" style="height: 600px;"></div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.8.0/proj4.min.js"
        integrity="sha512-pLnzlcFjcj9A9ggTfXZyscd+BWAV9pHdDrLekEoTimItxZI3uOAi7CSLXAHGZu7zRgG9Xyhl9bG3A1uRSJJOJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

    <script>
        ACCESS_TOKEN =
            "pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw";
        MB_ATTR =
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
        MB_URL =
            "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=" +
            ACCESS_TOKEN;
        OSM_URL = "https://tile.openstreetmap.org/{z}/{x}/{y}.png";
        OSM_ATTRIB =
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/topojson@3.0.2/dist/topojson.min.js"></script>

    <script>
        //CAROUSEL
        // $('.carousel').carousel()

        //GET RTH API
        function get_rth(id) {
            $.get("/rth/get/" + id, function(data, status) {
                rth = $.parseJSON(data);
                $("#title").text(rth.lokasi);
                $("#keterangan").text(rth.kategori);
                $("#luas").html(rth.luas + " M<sup>2</sup>");
                $("#jumlah_pohon").html(rth.jumlah_pohon );
                $("#jumlah_burung").html(rth.jumlah_burung );

                // $("#image").attr("src", dummy[Math.floor(Math.random() * 3)]);
                $("#detail_burung").attr("href", "/burung/list/" + rth.id);
                $("#detail_pohon").attr("href", "/pohon/list/" + rth.id);
                var slide = ""
                var galery = ""
                rth.image.forEach((value, index) => {
                    if (index == 0) {
                        slide = slide +
                            '<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' + index +
                            '" class="active"></li>'
                        galery = galery +
                            '<div class="carousel-item active"><img class="d-block img-fluid" src="/img/rth/' +
                            rth.id + '/' + value + '" alt="' + index + '"></div>'
                    } else {
                        slide = slide +
                            '<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' + index +
                            '" ></li>'
                        galery = galery +
                            '<div class="carousel-item"><img class="d-block img-fluid" src="/img/rth/' + rth
                            .id + '/' + value + '"></div>'
                    }
                });
                $(".slider").html(slide);
                $(".galery").html(galery);
                map.flyTo([rth.latitude.replace(",", "."), rth.longitude.replace(",", ".")], 18);
            });
        }

        //NEXT PAGE RTH
        var id_rth = {{ $rth->id }}

        function next_rth() {
            if (id_rth == 51) {
                id_rth = 1;
            }
            id_rth = id_rth + 1;
            get_rth(id_rth)
        }

        function previous_rth() {
            if (id_rth == 1) {
                id_rth = 51;
            }
            id_rth = id_rth - 1;
            get_rth(id_rth)
        }



        //SET MAP
        var mbAttr =
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
        var mbUrl =
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });
        var streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

        googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });


        //LOAD MAP
        let map = L.map('map', {
            center: [{{ $rth->latitude }}, {{ $rth->longitude }}],
            zoom: 15,
            layers: [googleSat]
        });

        var baseLayers = {
            'OpenStreetMap': osm,
            'Streets': streets,
            'Satellite' : googleSat
        };

        var layerControl = L.control.layers(baseLayers).addTo(map);
        // layerControl.addBaseLayer(satellite, 'Satellite');

        ///// Show Detail
        function showDetail(e) {
            // alert('sadf')
            //dummy image data
            // var dummy = [
            //     '{{ asset('img/rth') }}/1.jpg',
            //     '{{ asset('img/rth') }}/2.jpg',
            //     '{{ asset('img/rth') }}/3.jpg'
            // ]

            get_rth(e.sourceTarget.feature.properties.Kode_Baru)




        }



        ////////////////////////////Polygon Kecamatan Surakarta
        getGeoData('http://mapgeo.id:8844/peta/topojson_kec').then(data => geojsonkecamatan.addData(data));
        L.TopoJSON = L.GeoJSON.extend({
            addData: function(data) {
                var geojsonkecamatan, key;
                if (data.type === "Topology") {
                    for (key in data.objects) {
                        if (data.objects.hasOwnProperty(key)) {
                            geojsonkecamatan = topojson.feature(data, data.objects[key]);
                            L.GeoJSON.prototype.addData.call(this, geojsonkecamatan);
                        }
                    }
                    return this;
                }
                L.GeoJSON.prototype.addData.call(this, data);
                return this;
            }
        });

        L.topoJson = function(data, options) {
            return new L.TopoJSON(data, options);
        };
        // create an empty geojsonkecamatan layer
        //with a style and a popup on click
        var geojsonkecamatan = L.topoJson(null, {
            style: function(feature) {
                return {
                    color: "yellow",
                    weight: 3,
                    opacity: 1,
                    fillOpacity: 0,
                    dashArray: 3,
                    interactive: false
                }
            },
            // onEachFeature: function(feature, layer) {
            //     layer.bindPopup('<p>' + feature.properties.kecamatan + '</p>')
            // }
        }).addTo(map);
        //fill: #317581;
        //define a function to get and parse geojsonkecamatan from URL
        async function getGeoData(url) {
            let response = await fetch(url);
            let data = await response.json();
            console.log(data)
            return data;
        }

        layerControl.addOverlay(geojsonkecamatan, "Kecamatan");

        // Polygon Kelurahan Surakarta
        let url_kelurahan = '/geojson/geo_kelurahan_surakarta.geojson';
        const response_kelurahan = fetch(url_kelurahan).then(response_kelurahan => response_kelurahan.json()).then(
            response_kelurahan => {
                var geojsonkelurahan = L.geoJson(response_kelurahan, {
                    style: function(feature) {
                        return {
                            color: "white",
                            weight: 3,
                            opacity: 1,
                            fillOpacity: 0,
                            dashArray: 3,
                            interactive: false
                        }
                    }
                }).addTo(map);
                layerControl.addOverlay(geojsonkelurahan, "Kelurahan");
            })


        // Polygon RTH Publik Surakarta
        let url_rth_publik = '/geojson/geo_rth.geojson';
        const response_rth_publik = fetch(url_rth_publik).then(response_rth_publik => response_rth_publik.json()).then(
            response_rth_publik => {
                var geojsonrthpublik = L.geoJson(response_rth_publik, {
                    style: function(feature) {
                        return {
                            color: "green",
                            weight: 3,
                            opacity: 1,
                            fillOpacity: 0.3,
                        }
                    },
                    onEachFeature: function(feature, layer) {

                        layer.on({
                            click: showDetail
                        });

                    }
                }).addTo(map);
                layerControl.addOverlay(geojsonrthpublik, "RTH");
            })
    </script>
@endsection
