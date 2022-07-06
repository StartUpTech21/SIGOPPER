<?php 

  include "../inc/koneksi.php";
  include "../inc/kode.php";
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUPSAT PERBELANJAAN</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/image/marker/marker-teal.svg" type="image/x-icon">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script>
    <link href="../assets/plugins/font/font.css" rel="stylesheet">
    <link href="../assets/plugins/materialize/materialize.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/ckeditor.css" rel="stylesheet">
    <link href="../assets/css/user.css" rel="stylesheet">
    <style type="text/css">
        .span-galeri{
            display: grid;
            grid-template-columns: auto auto auto;
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }
        .span-galeri img{
            width: 100px;
            height: 100px
        }
    </style>
</head>
<body id="home" onload="initMap()">



  <?php

        if(isset($_GET['page'])){
            $page=$_GET['page'];
            $file="$page.php";

            if (!file_exists($file)){
            include ("home.php");
            }else{
            include ("$page.php");
            }
        }else{
            include ("home.php");
        }
       
    ?>


    

    <script src="../assets/plugins/materialize/jquery.min.js"></script>
    <script src="../assets/plugins/materialize/materialize.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/user.js"></script>
    <script type="text/javascript">
        $('#search').keyup(function(){
                $('#tamPilkan').load('cari-pasar.php?search=' + $('#search').val());
        });
        
    </script>
   <script>
    function initMap() {
   var infoWindow = new google.maps.InfoWindow;
   var bounds = new google.maps.LatLngBounds();
   var myLatLng = { lat: -1.843678, lng: 109.959504 };
   var mapOptions = {
    center: myLatLng,
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};


//create map
var map = new google.maps.Map(document.getElementById('map_user'), mapOptions);
}
<?php
$no=1;
$data = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori");
while ($d = mysqli_fetch_array($data)) {
    $kodeTempat = $d['kode_tempat'];
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
        '<li>' +
            '<span class="span-galeri">' +
            <?php
                $mygaleri = mysqli_query($koneksi,"SELECT * FROM galeri WHERE kode_tempat='$kodeTempat'");
                while ($dGaleri = mysqli_fetch_array($mygaleri)) {
                $gambarGaleri = $dGaleri['nama_gambar'];
            ?>
                '<img src="admin/tempat/gambar/<?php echo $gambarGaleri?>">' +
            <?php } ?>
            '</span>' +
        '</li>' +
        '</ul>' +
        '</div>';
    addMarker(<?php echo $latTempat ?>, <?php echo $lngTempat ?>, $infoWindows); 


<?php  } ?>

function  addMarker(Lat,Lng,info) {

    var icon = {
    url: "../assets/image/marker/marker-red.svg", // url
    scaledSize: new google.maps.Size(32, 32), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
};
   var lokasi = new google.maps.LatLng(Lat, Lng);

   var marker = new google.maps.Marker({
      map: map,
      position: lokasi,
      icon: icon,
      animation: google.maps.Animation.DROP,
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

</body>
</html>