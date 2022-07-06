    
    <nav class="header">
        <div class="header-brand">
            <h2 class="brand">PUSAT PERBELANJAAN</h2>
        </div>
        <button class="btn-colapse-header">
            <i class="material-icons">menu</i>
        </button>
        <div class="header-right">
            <ul>
                <li>
                    <a href="#home">HOME</a>
                </li>
                <li>
                    <a href="#feature">FITUR</a>
                </li>
                <li>
                    <a href="#pusat-belanja">PUSAT BELANJA</a>
                </li>
                <li>
                    <a href="#contact">KONTAK</a>
                </li>
                <li>
                    <a href="login-page.php">REGISTER & LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container-slide">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="slide-left">
                        <h2 class="title">SISTEM INFORMASI GEOGRAFIS</h2>
                        <h3 class="title-child">PUSAT PERBELANJAAN</h3>
                        <p>Menyeajikan berbagai informasi pusat perbelanjaan, mulai dari pusat perbelanjaan moderen dan traditional</p>
                        <a href="login-page.php" class="btn btn-cta">REGISTRASI</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="assets/image/slide1.svg" alt="" class="slide-image">
                </div>
            </div>
        </div>
    </section>

    <section class="feature" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-header">
                        <h2>FITUR SISTEM INFORMASI GEOGRAFIS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-feature">
                        <div class="header-icons blue">
                            <i class="material-icons">search</i>
                        </div>
                        <h2 class="title">PENCARIAN</h2>
                        <p>Memudahkan anda untuk mencari pusat perbelanjaan, tanpa harus scrol lagi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-feature">
                        <div class="header-icons green">
                            <i class="material-icons">location_on</i>
                        </div>
                        <h2 class="title">GOOGLE MAPS</h2>
                        <p>Anda dapat mengetahui lokasi dan alamat serta informasi tentang pasar melalui google map</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-feature">
                        <div class="header-icons orange">
                            <i class="material-icons">timer</i>
                        </div>
                        <h2 class="title">WAKTU AKSES</h2>
                        <p>Menghemat waktu anda dalam mencari informasi pusat perbelanjaan kapanpun dan dimanapun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pusat-belanja" id="pusat-belanja">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="block-header" style="float: left;">
                        <h2>PUSAT PERBELANJAAN</h2>
                    </div>
                </div>
                <div class="col-md-3">
                   <a href="?page=lokasi-terdekat" class="btn btn-primary" style="margin-top: 100px">Lihat lokasi terdekat</a>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" class="form-search" style="margin-top: 10px">
                        <div class="form-group">
                            <div class="input-field">
                                <input id="search" type="text" class="form-control" required>
                                <label for="cari">Cari pusat perbelanjaan</label>
                            </div>
                        </div>
                    </form>
                </div>
             </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="collection with-header" style="min-height: 400px;overflow-y: auto;max-height: 400px">
                        <li class="collection-header">
                           <h4>PUSAT PERBELANJAAN</h4>
                        </li>
                        <div id="tamPilkan">
                        <?php
                            $ambilData = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori");
                            while ($tampilData = mysqli_fetch_array($ambilData)) {
                                $nama = $tampilData['nama_tempat'];
                                $kategori = $tampilData['nama_kategori'];
                                $alamat = $tampilData['alamat_tempat'];
                                $lat = $tampilData['lat_tempat'];
                                $lng = $tampilData['lng_tempat'];
                                $des = $tampilData['des_tempat'];

                        ?>
                        <li class="collection-item">
                              <a href="#!" onclick="kesini(<?php echo $lat ?>,<?php echo $lng ?>,'<?php echo $nama ?>');">
                                  <span class="title" style="font-weight: 700"><?php echo $nama ?></span>
                                  <p><?php echo $kategori ?></p>
                              </a>
                        </li>
                         <?php } ?>
                         </div>
                      </ul>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="body" style="padding: 0 !important;position: relative;">
                            <div id="info"></div>
                            <div id="map_user" style="width: 100%;height: 400px;position: relative; z-index: 99"></div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

     <footer class="page-footer teal" id="contact">

        <div class="footer-copyright">
          <div class="container" style="text-align: center;">
          Copy-Right &copy; <?php echo date('Y') ?>
          <a class="grey-text text-lighten-4" href="#!">Sri Rahayu Ningsih
          </div>
        </div>
      </footer>

          <script type="text/javascript">
function initMap() {
        function kesini(lat,lng,info){
             // Ambil data dari database
            <?php  
                $mysqli = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori WHERE tempat.nama_tempat='info'");
                $datas = mysqli_fetch_array($mysqli);
                $n1 = $datas['nama_tempat'];
                $n2 = $datas['nama_kategori'];
                $n3 = $datas['alamat_tempat'];
                $n4 = $datas['lat_tempat'];
                $n5 = $datas['lng_tempat'];
                $n6 = $datas['des_tempat'];
            ?>
            var ambilLatLng = { 
                lat: lat, 
                lng: lng
            };
               var option = {
                center: ambilLatLng,
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            };
            //create map
            var map = new google.maps.Map(document.getElementById('map_user'), option);

            var icon = {
                url: "assets/image/marker/marker-red.svg", // url
                scaledSize: new google.maps.Size(32, 32), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 0) // anchor
            };

           
            var $inWind =  '<div class="maps-location-info" id="mapsBox">' +
                                    '<div class="location-info-header">' +
                                        '<button class="btn-close-infoWindow" onclick="CloseInfo();">' +
                                            '<i class="material-icons">close</i>' +
                                        '</button>' +
                                        '<h2><?php echo $n1 ?></h2>' +
                                        '<span class="budge"><?php echo $n2 ?></span>' +
                                    '</div>' +
                                    '<ul>' +
                                        '<li>' +
                                            '<span class="title">' +
                                                '<i class="material-icons">location_on</i> Alamat' +
                                            '</span>' +
                                            '<p><?php echo $n3 ?>' +
                                        '</li>' +
                                        '<li>' +
                                            '<span class="title">' +
                                                '<i class="material-icons">edit</i> Deskripsi' +
                                            '</span>' +
                                            '<?php echo json_encode($n6) ?>' +
                                        '</li>' +
                                    '</ul>' +
                                '</div>';
            var marker = new google.maps.Marker({
              map: map,
              position: ambilLatLng,
              icon: icon,
              // animation: google.maps.Animation.BOUNCE,
            }); 



        
    }
}
    </script>

    
