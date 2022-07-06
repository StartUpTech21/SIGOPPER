<?php 
include 'inc/koneksi.php';
$my = mysqli_query($koneksi, "SELECT * FROM tempat JOIN kategori USING(kode_kategori) WHERE tempat.kode_tempat='$_GET[kode]'");
$data = mysqli_fetch_array($my);
$kd=$data['kode_tempat'];

?>

<div> 
    <div class="swiper-container">

        <div class="swiper-wrapper">
            <?php
            $mys = mysqli_query($koneksi, "SELECT * FROM tempat JOIN galeri USING(kode_tempat) WHERE galeri.kode_tempat='$kd'");
            while ($datax = mysqli_fetch_array($mys)) {
                $kodex = $datax['kode_tanah'];
                ?>
                <div class="swiper-slide">

                    <a href="admin/tempat/gambar/<?php echo $datax['nama_gambar'] ?>" class="grid image-link">
                        <img src="admin/tempat/gambar/<?php echo $datax['nama_gambar'] ?>" class="img-fluid" alt="#" style="height: 250px;">
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-button-next swiper-button-white mr-3"></div>
        <div class="swiper-button-prev swiper-button-white ml-3"></div>
    </div>
</div>

<!-- END SECTION HEADINGS -->

<!-- START SECTION LISTING DETAIL-->
<section class="listing blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <!-- Block heading end -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="detail-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <h3><?php echo $data['nama_tempat'] ?> 
                                        <span class="mrg-l-5 category-tag"><?php echo $data['nama_kategori'] ?></span>
                                    <br>
                                        <a href="https://wa.me/+62089693518338?text=Saya%20tertarik%20dengan%20mobil%20Anda%20yang%20dijual" target="_blank"><?php echo $data['no_hp'] ?? '-' ?></a>
                                    </h3>
                                    <div class="mt-3">
                                        <a href="#listing-location" class="listing-address">
                                            <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i> <?php echo $data['alamat_tempat'] ?>
                                        </a>
                                        <!-- <div class="rating-box mt-3">
                                            <div class="detail-list-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#" class="detail-rating-count">16 Rating</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget_author__header">
                            <div class="widget_author__avatar">
                                <img src="images/testimonials/ts-2.jpg" alt="">
                            </div>
                            <div class="overflow-hidden">
                                <h4 class="widget_author__name mt-4"><?php echo $data['user_tempat'] ?></h4>
                                <span class="widget_author__role role--admin">
                                    <i class="fa fa-cogs mr-2 mt-2"></i> Administrator</span>
                                </div>
                            </div>
                            <div class="blog-info details overview">
                                <h5 class="mb-4">KETERANGAN PUSAT PERBELANJAAN</h5>
                                <p class="mb-3"><?php echo $data['des_tempat'] ?></p>
                                <!-- <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- cars content -->
                    <!-- <div class="homes-content details amenities"> -->
                        <!-- title -->
                        <!-- <h5 class="mb-4">Amenities</h5> -->
                        <!-- cars List -->
                        <!-- <div class="ameneniti">
                            <ul class="homes-list amen clearfix">
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Elevator in building</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Friendly Workspace</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Instant Book</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Wireless Internet</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Events</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Smoking Allowed</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Free Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Door attendant</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Security cameras</span>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="property-location mp">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <div id="map-contact" class="contact-map"></div>
                    </div>
                    
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="widget">
                        <!-- Start: Opening hour -->
                        <div class="widget-boxed">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-clock-o pr-3 padd-r-10"></i>Opening Hours</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="side-list">
                                    <ul>
                                        <li class="pt-0">Monday <span>9 AM - 5 PM</span></li>
                                        <li>Tuesday <span>9 AM - 5 PM</span></li>
                                        <li>Wednesday <span>9 AM - 5 PM</span></li>
                                        <li>Thursday <span>9 AM - 5 PM</span></li>
                                        <li>Friday <span>9 AM - 5 PM</span></li>
                                        <li>Saturday <span>9 AM - 3 PM</span></li>
                                        <li>Sunday <span>Closed</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- End: Opening hour -->
                    </div>
                    <div>
                            <a href="?page=pengguna/pusat_perbelanjaan" class="btn btn-warning btn-block mt-3">Kembali</a>
                        </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- END SECTION LISTING DETAIL -->
    <script>
        var latitude = <?php echo $data['lat_tempat'] ?>;
        var longitude = <?php echo $data['lng_tempat'] ?>;
        var myLatLng = { lat: latitude, lng: longitude };
        var mapOptions = {
            center: myLatLng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP

        };
        var icon = {
        url: "images/7025653.png", // url
            scaledSize: new google.maps.Size(38, 38), // scaled size
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };

        //create map
        var map = new google.maps.Map(document.getElementById('map-contact'), mapOptions);

        new google.maps.Marker({
        position: myLatLng,
        map,
        title: "<?php echo $data['alamat_tempat'] ?>",
        icon:icon,
        animation: google.maps.Animation.BOUNCE,
      });
    </script>