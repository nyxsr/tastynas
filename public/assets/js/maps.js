var map = L.map("map").setView([-6.568770281710396, 107.75550508947148], 13);

var tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
        '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

var marker = L.marker([-6.568770281710396, 107.75550508947148])
    .addTo(map)
    .bindPopup(
        "<center><h1>Delipel - Tastynas</h1><hr/><img src='assets/images/place.jpeg' width='150' height='150'/><br/><p style='font-size:1rem;'>Jalan Kh Agus Salim &, Gg. Jenaka, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat 41211</p><p style='text-align:center; font-size:1rem;'>Atau lihat kami di <a href='https://goo.gl/maps/8qgSprNAv6dAujke8' target='_blank'>Google Maps</a></p></center>"
    )
    .openPopup();

var marker = L.marker([-6.562590571530914, 107.76736349173387])
    .addTo(map)
    .bindPopup(
        "<center><h1>Yogya Grand Subang</h1><hr/><img src='assets/images/yogya-place.png' width='150' height='150'/><br/><p style='font-size:1rem;'>Jl. Otto Iskandardinata No.75 - 77, Karanganyar, Kec. Subang, Kabupaten Subang, Jawa Barat 41211</p><p style='text-align:center; font-size:1rem;'>Atau lihat kami di <a href='https://goo.gl/maps/p2e9vjE1FBEP9qCH8'  target='_blank'>Google Maps</a></p></center>"
    );

var marker = L.marker([-6.534128970778893, 107.78514281431251])
    .addTo(map)
    .bindPopup(
        "<center><h1>Rest Area Rosalia Indah (Out Gate Tol Subang)</h1><hr/><img src='assets/images/rosin-place.png' width='150' height='150'/><br/><p style='font-size:1rem;'>Jl. Otto Iskandardinata, Cisaga, Kec. Cibogo, Kabupaten Subang, Jawa Barat 41285</p><p style='text-align:center; font-size:1rem;'>Atau lihat kami di <a href='https://g.page/rosinsubang?share' target='_blank'>Google Maps</a></p></center>"
    );
map.on("click", onMapClick);
