
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/image/marker/marker-teal.svg" type="image/x-icon">
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script> -->
    <link href="assets/plugins/font/font.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="assets/css/user.css" rel="stylesheet">
</head>
<body class="login-page">


    <div class="page-left">
        <div class="left-nav">
            <a href="index.php" class="btn-back">HOME</a>
        </div>
        <div class="left-content">
            <img src="assets/image/slide1.svg" alt="Login image ...">
            <h1>SISTEM INFORMASI GEOGRAFIS</h1>
            <h2>PUSAT PERBELANJAAN</h2>
        </div>
    </div>
    <div class="page-right">
        <div class="box-right">
            <div class="box-header">
                <h2>Halo ! <span>Selamat datang</span></h2>
                <p>Silahkan login menggunakan akun anda</p>
            </div>
            <div class="box-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <div class="form-icons">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="input-field">
                            <input id="username" name="user_tempat" type="text" class="form-control" autocomplete="off" autofocus required>
                            <label for="username">Username or email</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-icons">
                            <i class="material-icons">lock</i>
                        </div>
                        <div class="input-field">
                            <input id="password" name="pass_tempat" type="password" class="form-control" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn-sign" name="signin">SIGN-IN</button>
                    <p class="pree-register">Belum punya akun ?!, <a href="register-page.php">Registrasi disini</a></p>
                </form>
            </div>
        </div>
    </div>



<script src="assets/plugins/materialize/jquery.min.js"></script>
<script src="assets/plugins/materialize/materialize.js"></script>

</body>
</html>
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
            echo "<meta http-equiv='refresh' content='0; url=login-page.php'>";
        }

        
    }else{
        echo "<script>alert('Maaf username $username_admin atau password_admin $password_admin, Tidak Valid...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login-page.php'>";

    }


}





?>