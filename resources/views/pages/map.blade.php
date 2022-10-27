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


            <div style="padding-bottom: 20px" class="row">
                <div id="map" class="map map-home" style="height: 600px; margin-top: 50px"></div>
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

        var satellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });


        //LOAD MAP
        let map = L.map('map', {
            center: [-7.5592076, 110.8257925],
            zoom: 13,
            layers: [satellite]
        });

        var baseLayers = {
            'OpenStreetMap': osm,
            'Streets': streets
        };

        var layerControl = L.control.layers(baseLayers).addTo(map);
        layerControl.addBaseLayer(satellite, 'Satellite');



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
        //create an empty geojsonkecamatan layer
        //with a style and a popup on click
        var geojsonkecamatan = L.topoJson(null, {
            style: function(feature) {
                return {
                    color: "yellow",
                    weight: 3,
                    opacity: 1,
                    fillOpacity: 0,
                    dashArray: 3
                }
            }
            ,
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

        //Polygon Kelurahan Surakarta
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
                            dashArray: 3
                        }
                    }
                }).addTo(map);
                layerControl.addOverlay(geojsonkelurahan, "Kelurahan");
            })

        //Polygon RTH Publik Surakarta
        let url_rth_publik = '/geojson/geo_rth_publik.geojson';
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
                        layer.bindPopup(
                            '<div style="text-align: center;"> ' + '<p>' + feature.properties.Nama +
                            '</p>' +
                            '<img style="padding-bottom:10px" src="https://greencampus.uns.ac.id/wp-content/uploads/elementor/thumbs/child-worried-about-the-environment-caresses-a-la-2022-05-04-00-26-52-utc-1-ppreuyrwwje3ekish3me7jeboqxwibhmkmlibyners.jpg" class="rounded float-left img-fluid" >' +
                            '<button type="button" class="btn btn-success">Lihat Detail</button>' +
                            '</div>'
                        )
                    }
                }).addTo(map);
                layerControl.addOverlay(geojsonrthpublik, "RTH Publik");
            })

        //Polygon RTH Privat Surakarta
        let url_rth_privat = '/geojson/geo_rth_privat.geojson';
        const response_rth_privat = fetch(url_rth_privat).then(response_rth_privat => response_rth_privat.json()).then(
            response_rth_privat => {
                var geojsonrthprivat = L.geoJson(response_rth_privat, ).addTo(map);
                layerControl.addOverlay(geojsonrthprivat, "RTH Privat");
            })

        //Polygon Sungai
        let url_sungai = '/geojson/geo_sungai.geojson';
        const response_sungai = fetch(url_sungai).then(response_sungai => response_sungai.json()).then(response_sungai => {
            var geojsonsungai = L.geoJson(response_sungai, {
                style: function(feature) {
                    return {
                        color: "blue",
                        weight: 3,
                        opacity: 1,
                        fillOpacity: 0,
                    }
                }
            }).addTo(map);
            layerControl.addOverlay(geojsonsungai, "Sungai");
        })

        //Polygon Rel
        let url_rel = '/geojson/geo_rel.geojson';
        const response_rel = fetch(url_rel).then(response_rel => response_rel.json()).then(response_rel => {
            var geojsonrel = L.geoJson(response_rel, {
                style: function(feature) {
                    return {
                        color: "red",
                        weight: 3,
                        opacity: 1,
                        fillOpacity: 0,
                    }
                }
            }).addTo(map);
            layerControl.addOverlay(geojsonrel, "Rel");
        })
    </script>
@endsection
