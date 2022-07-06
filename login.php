<?php

date_default_timezone_set("Asia/Jakarta");

// error_reporting();

include "inc/koneksi.php";


if (isset($_POST['signin'])) {

    $user_tempat = $_POST['user_tempat'];
    $pass_tempat = $_POST['pass_tempat'];

// query untuk mengecek apakah user_tempat_user yang dimaksud ada didalam database
    $s1 = mysqli_query($koneksi, "SELECT * FROM tempat WHERE user_tempat='$user_tempat' AND pass_tempat='$pass_tempat'");
    $d = mysqli_fetch_array($s1);
    $count1 = mysqli_num_rows($s1);


    if ($count1==1) {
        if ($d['status_akun']=='Aktif') {
            session_start();
            $_SESSION['kode_tempat'] = $d['kode_tempat'];
            echo "<script>alert('Login sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=user/'>";
        }elseif ($d['status_akun']=='Baru') {
            echo "<script>alert('Akun anda belum diaktifasi admin.')</script>";
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        }

        
    }else{
        echo "<script>alert('Maaf username $username_admin atau password_admin $password_admin, Tidak Valid...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";

    }

}


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>FORM LOGIN</title>
    <!-- FAVICON -->
     <link rel="shortcut icon" type="image/x-icon" href="images/7025653.png">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages">
    <!-- START SECTION HEADINGS -->
    <div class="header">
        <div class="header-top">
           <div class="container">
                <div class="top-info hidden-sm-down">
                
                </div>
                <div class="top-social hidden-sm-down">
                    <div class="login-wrap">
                        <ul class="d-flex">
                            <li><marquee style="color: white;"width="800">Sistem Informasi Geografis Pusat Perbelanjaan Tradisional dan Modern Kabupaten ketapang</marquee></li>
                            <!-- <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="daftar.php"><i class="fa fa-sign-in"></i> Register</a></li> -->
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="header-bottom heading vid sticky-header" id="heading">
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
                        <li><a href="index.php">Beranda</a></li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li><a href="?page=user/pusat_perbelanjaan">Pusat Perbelanjaan</a></li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li><a href="?page=user/bantuan">Bantuan</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Login</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; login</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION LOGIN -->
    <div id="login" style="background-color:skyblue;">
        <div class="card mt-5 mb-5">
            <div class="login">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="user_tempat">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass_tempat">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="fl-wrap filter-tags clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <!-- <div class="filter-tags-wrap">
                            <input id="check-b" type="checkbox" name="check">
                            <label for="check-b">Remember me</label>
                        </div> -->
                    </div>
                    <!-- <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div> -->
                </div>
                <div>
                     <button type="submit" class="btn_1 rounded full-width" name="signin"> Login </button>
                </div>
              
                <div class="text-center add_top_10">Belum Punya Akun? <strong><a href="daftar.php">Daftar Disini!</a></strong></div>

            </form>
        </div>
        </div>
    </div>
    <!-- END SECTION LOGIN -->

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
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/inner.js"></script>
    <script src="js/color-switcher.js"></script>
</body>

</html>
