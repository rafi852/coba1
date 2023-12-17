    <div id="map" style="height: 400px;"></div>
    <script>

        // ini mmunculin peta di halaman webnya
        const map = L.map('map').setView([-5.358540604454673, 105.31483764545486], 13);
        

        // ini fungsi-fungsi masukin data spasial ke map

        // l.marker fungsi masukin titik
        const titik = L.marker([-5.359083242828643, 105.3143872491048]
            ).addTo(map).bindPopup('Ini Embung ITERA');
        
        // l.polyline fungsi masukin garis
        const garis = L.polyline([
            [-5.358572, 105.307549],
            [-5.354709, 105.321387],
            [-5.372334, 105.321387],
            [-5.372334, 105.308518]
            ]).addTo(map).bindPopup('Ini batas itera');

        // L.polygon fungsi masukin polygon
        const area = L.polygon([
            [-5.358572, 105.307549],
            [-5.354709, 105.321387],
            [-5.372334, 105.321387],
            [-5.372334, 105.308518]
            ]).addTo(map);

        // ini cara manggil geojson dan masukin ke map
        fetch('template/assets/geojson/lamsel.geojson')
    .then(response => response.json())
    .then(data => {
        L.geoJSON(data, {
            onEachFeature: function (feature, layer) {
                // Cek apakah properti 'PROVINSI' dan 'KABUPATEN' ada dalam data GeoJSON
                if (feature.properties && feature.properties.Shape_Leng && feature.properties.KABUPATEN) {
                    // Membuat isi popup dengan properti 'PROVINSI' dan 'KABUPATEN'
                    let popupContent = '<b>Provinsi:</b> ' + feature.properties.Shape_Leng + '<br>' +
                                        '<b>Kabupaten:</b> ' + feature.properties.KABUPATEN;
                    // Bind popup dengan menggunakan isi yang sudah dibuat
                    layer.bindPopup(popupContent);
                }
            }
        }).addTo(map);
    });


        // ini cara masukin basemap openstreet map
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // ini cara masukin basemap google satellite
        var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}',{
        maxZoom : 22,
        attribution : 'Matakuliah WebGIS'
        }).addTo(map)


    </script>