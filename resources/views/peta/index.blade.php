<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style>
        #map { height: 600px; }
    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <div style ="text-align:center">
<h1> Data Provinsi di Indonesia</h1>
            <!-- @foreach ($list_provinsi as $prov )
            {{$prov->name}} - {{$prov->latitude}} - {{$prov->longitude}} |
            @endforeach -->

        </div>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 5,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            let provinces = @json($list_provinsi);
            console.log(provinces);

            provinces.forEach(function(province) {
            
            L.marker([province.latitude, province.longitude]).addTo(map)
             .bindPopup(province.name);
            });
        </script>
    </body>
</html>