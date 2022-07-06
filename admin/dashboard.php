<?php  

// Menghitung pasar tradisonal
$dataTradisonal = mysqli_query($koneksi,"SELECT COUNT(*) AS totalTradisional FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori WHERE kategori.nama_kategori='Tradisional'");
$dx = mysqli_fetch_array($dataTradisonal);
$tradisional = $dx['totalTradisional'];

// Menghitung pasar Moderen
$dataModeren = mysqli_query($koneksi,"SELECT COUNT(*) AS totalModeren FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori WHERE kategori.nama_kategori='Moderen'");
$dx1 = mysqli_fetch_array($dataModeren);
$moderen = $dx1['totalModeren'];


// Menghitung pasar Moderen
$dataAdmin = mysqli_query($koneksi,"SELECT COUNT(*) AS totalAdmin FROM tempat");
$dx2 = mysqli_fetch_array($dataAdmin);
$admin = $dx2['totalAdmin'];

?>


<section class="content">
        <div class="content-block">
            <h2 class="title">DASHBOARD</h2>
        </div>
         <div class="row">

            <?php
                $no=1;
                $data = mysqli_query($koneksi,"SELECT * FROM tempat WHERE status_akun='Baru'");
                while ($d = mysqli_fetch_array($data)) { 
              ?>
            <div class="col s6 m6 l6">
                <a href="?page=tempat/aktif-akun&kode=<?php echo $d['kode_tempat'] ?>" class="card-notif" onclick="return confirm('Yakin ingin mengaktifkan akun ini ?!');">
                    <i class="material-icons">notifications_on</i>
                    <div>
                        <span><?php echo $d['nama_tempat'] ?></span>
                        <p>Baru saja mendaftar akun, dan menunggu konfirmasi !</p>
                    </div>
                </a>
            </div>
        <?php } ?>
        </div>
        <div class="row">
            <div class="col s4 m4 l4">
                <div class="card-info">
                    <i class="material-icons pink darken-1">local_grocery_store</i>
                    <div class="info-sub">
                        <h3 class="text-pink"><?php echo $tradisional ?></h3>
                        <span>TOTAL PASAR TRADISIONAL</span>
                    </div> 
                </div>
            </div>
            <div class="col s4 m4 l4">
                <div class="card-info">
                    <i class="material-icons indigo darken-1">local_grocery_store</i>
                    <div class="info-sub">
                        <h3 class="text-indigo"><?php echo $moderen ?></h3>
                        <span>TOTAL PASAR MODEREN</span>
                    </div> 
                </div>
            </div>
            <div class="col s4 m4 l4">
                <div class="card-info">
                    <i class="material-icons  green darken-1">assignment_ind</i>
                    <div class="info-sub">
                        <h3 class="text-green"><?php echo $admin ?></h3>
                        <span>TOTAL ADMIN</span>
                    </div> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="header">
                        <h2 class="title">LOKASI PESEBARAN PASAR TRADISIONAL DAN MODEREN</h2>
                    </div>
                    <div class="body" style="padding: 0 !important;position: relative;">
                        <div id="info"></div>
                        <div id="map_dashboard" style="width: 100%;height: 400px;position: relative; z-index: 99"></div>
                        

                    </div>
                </div>
            </div>
        </div>

</section>

<script>
   var infoWindow = new google.maps.InfoWindow;
   var bounds = new google.maps.LatLngBounds();
   var myLatLng = { lat: -1.843678, lng: 109.959504 };
   var mapOptions = {
    center: myLatLng,
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};


//create map
var map = new google.maps.Map(document.getElementById('map_dashboard'), mapOptions);

<?php
$no=1;
$data = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori");
while ($d = mysqli_fetch_array($data)) {
    $namaTempat = $d['nama_tempat'];
    $namaKategori = $d['nama_kategori'];
    $alamatTempat = $d['alamat_tempat'];
    $latTempat = $d['lat_tempat'];
    $lngTempat = $d['lng_tempat'];
    $desTempat = $d['des_tempat'];

    ?>
    var $infoWindows = '<div class="maps-location-info" id="mapsBox">' +
    '<div class="location-info-header">' +
    '<button class="btn-close-infoWindow" onclick="CloseInfo();">' +
    '<i class="material-icons">close</i>' +
    '</button>' +
    '<h2><?php echo $namaTempat ?></h2>' +
    '<span class="budge"><?php echo $namaKategori ?></span>' +
    '</div>' +
    '<ul>' +
    '<li>' +
    '<span class="title">' +
    '<i class="material-icons">location_on</i> Alamat' +
    '</span>' +
    '<p><?php echo $alamatTempat ?>' +
    '</li>' +
    '<li>' +
    '<span class="title">' +
    '<i class="material-icons">edit</i> Deskripsi' +
    '</span>' +
    '<?php echo json_encode($desTempat) ?>' +
    '</li>' +
    '</ul>' +
    '</div>';
    addMarker(<?php echo $latTempat ?>, <?php echo $lngTempat ?>, $infoWindows); 


<?php } ?>

function addMarker(Lat,Lng,info) {

    var icon = {
    url: "../images/7025653.png", // url
    scaledSize: new google.maps.Size(38, 38), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor

};
   var lokasi = new google.maps.LatLng(Lat, Lng);

   var marker = new google.maps.Marker({
      map: map,
      position: lokasi,
      icon: icon,
      animation: google.maps.Animation.BOUNCE,
  }); 
   bindInfoWindow(marker, map, info);


}

function bindInfoWindow(marker, map, infoWindow) {
    google.maps.event.addListener(marker, 'click', function () {
        var info = document.getElementById('info');
        info.innerHTML = infoWindow;
    });
}

function CloseInfo(){
    document.getElementById("mapsBox").style.display = 'none';
}

        
</script>