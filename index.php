
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>PUSAT PERBELANJAAN</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="images/7025653.png">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/maps.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages">
    <!-- START SECTION HEADINGS -->
    <div class="header head-2">
        <div class="header-top head-2 hidden-sm-down">
            <div class="container">
                <div class="top-info hidden-sm-down">
                
                </div>
                <div class="top-social hidden-sm-down">
                    <div class="login-wrap">
                        <ul class="d-flex">
                            <li><marquee style="color: white;"width="800">Sistem Informasi Geografis Pusat Perbelanjaan Tradisional dan Modern Kabupaten ketapang</marquee></li>
                            <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="daftar.php"><i class="fa fa-sign-in"></i> Register</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="header-bottom heading sticky-header head-2" id="heading">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="images/SIGOpPER-removebg-preview.png" alt="SIGOPPER">
                </a>
                <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                    <!-- <i class="fa fa-search" aria-hidden="true"></i> -->
                </button>
                <div class="get-quote hidden-lg-down">
                    <!-- <a href="add-listing.html">
                        <p>Add Listing</p>
                    </a> -->
                </div>
                <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <nav id="main-menu" class="collapse">
                    <ul>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="<?php error_reporting(0); if($_GET['page']==''){echo 'active';} ?>"><a href="index.php">Beranda</a></li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="<?php error_reporting(0); if($_GET['page']=='pengguna/pusat_perbelanjaan' || $_GET['page']=='pengguna/modern' || $_GET['page']=='pengguna/detail'){echo 'active';} ?>"><a href="?page=pengguna/pusat_perbelanjaan">Pusat Perbelanjaan</a></li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="<?php error_reporting(0); if($_GET['page']=='pengguna/bantuan'){echo 'active';} ?>"><a href="?page=pengguna/bantuan">Bantuan</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

<!-- content -->

 <?php 
 if (isset($_GET['page'])) {
  $page = $_GET['page'];
  $file = "$page.php";

  if (!file_exists($file)) {
    include ("pengguna/home.php");
  }else{
    include ("$page.php");
  }
}else{
  include ("pengguna/home.php");
}
?>

<!-- end content -->

    <!-- START FOOTER -->
    <footer class="first-footer">
     
        <div class="second-footer">
            <div class="container">
                <p>Copyright. ©2020 Sigopper. </p>
                <!-- <ul class="netsocials">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul> -->
            </div>
        </div>
    </footer>

    <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <!--Style Switcher===========================================-->
    <div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
        <div class="theme-colours">
            <p class="font-italic">Choose Colour style</p>
            <ul>
                <li>
                    <a href="#." class="blue" id="blue"></a>
                </li>
                <li>
                    <a href="#." class="pink" id="pink"></a>
                </li>
                <li>
                    <a href="#." class="orange" id="orange"></a>
                </li>
                <li>
                    <a href="#." class="purple" id="purple"></a>
                </li>
                <li>
                    <a href="#." class="green" id="green"></a>
                </li>
                <li>
                    <a href="#." class="red" id="red"></a>
                </li>
                <li>
                    <a href="#." class="cyan" id="cyan"></a>
                </li>
                <li>
                    <a href="#." class="sky-blue" id="sky-blue"></a>
                </li>
                <li>
                    <a href="#." class="gray" id="gray"></a>
                </li>
                <li>
                    <a href="#." class="brown" id="brown"></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ARCHIVES JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/range-slider.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/transition.min.js"></script>
    <script src="js/transition.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fitvids.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/search.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/searched.js"></script>
    <script src="js/forms-2.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/color-switcher.js"></script>

    <!-- Slider Revolution scripts -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- MAIN JS -->
    <script src="js/script.js"></script>
     <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>

    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }

    </script>
    <script type="text/javascript">
   $(document).ready(function() {
    $('#search').on('keyup', function() {
      $.ajax({
        type: 'POST',
        url: 'pengguna/search_tradisional.php',
        data: {
          search: $(this).val()
        },
        cache: true,
        success: function(data) {
          $('.data').html(data);
        }
      });
    });
  });
</script>
<script type="text/javascript">
   $(document).ready(function() {
    $('#search').on('keyup', function() {
      $.ajax({
        type: 'POST',
        url: 'pengguna/search_modern.php',
        data: {
          search: $(this).val()
        },
        cache: true,
        success: function(data) {
          $('.data').html(data);
        }
      });
    });
  });
</script>
</body>

</html>
