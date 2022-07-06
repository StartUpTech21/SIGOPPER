
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-IN || SIG</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/7025653.png">
    <link href="../assets/plugins/font/font.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/admin.css" rel="stylesheet">
</head>
<body>


<div class="sign-in-box">
    <div class="box">
        <div class="header">
            <h2 class="brand">SIG <span>PUSAT PERBELANJAAN</span></h2>
            <small>Silahkan login menggunakan akun anda</small>
        </div>
        <div class="body">
            <form action="" method="POST">
                <div class="form-group">
                    <div class="input-icons">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="input-inline">
                        <input name="username_admin" type="text" class="form-control" required="" autocomplete="off">
                        <label for="first_name">Username</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icons">
                        <i class="material-icons">lock</i>
                    </div>
                    <div class="input-inline">
                        <input name="password_admin" type="password" class="form-control" required="" autocomplete="off">
                        <label for="first_name">Password</label>
                    </div>
                </div>
                <div class="box-btn">
                    <button type="submit" name="login" class="btn btn-primary btn-sign-in">SIGN-IN</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../assets/plugins/materialize/jquery.min.js"></script>
<script src="../assets/plugins/materialize/materialize.js"></script>

</body>
</html>

<?php

date_default_timezone_set("Asia/Jakarta");

// error_reporting();

include "../inc/koneksi.php";


if (isset($_POST['login'])) {

    $username_admin = $_POST['username_admin'];
    $password_admin = $_POST['password_admin'];

// query untuk mengecek apakah username_admin_user yang dimaksud ada didalam database
    $s1 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username_admin='$username_admin' AND password_admin='$password_admin'");
    $d = mysqli_fetch_array($s1);
    $count1 = mysqli_num_rows($s1);


    if ($count1==1) {

        session_start();
        $_SESSION['id_admin'] = $d['id_admin'];
        echo "<script>alert('Selamat bertugas Admin')</script>";
        echo "<meta http-equiv='refresh' content='0; url=web.php'>";
    }else{
        echo "<script>alert('Maaf username $username_admin atau password_admin $password_admin, Tidak Valid...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";

    }


}





?>