<?php 

  include "inc/koneksi.php";
  include "inc/kode.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
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
                <h2 style="">Registrasi <span style="font-size: 35px">Untuk pengguna baru</span></h2>
                <p>Silahkan daftarkan akun anda disini</p>
            </div>
            <div class="box-body">
                <form action="" name="Form" method="POST" onsubmit="return validateForm()">
                    <input name="kode_tempat" type="hidden" class="validate" required="" readonly="" autocomplete="off" value="<?php echo $kdtempat ?>">
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
                            <input id="password" type="password" name="pass_tempat" class="form-control" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-icons">
                            <i class="material-icons">lock</i>
                        </div>
                        <div class="input-field">
                            <input id="retype-password" name="retype-password" type="password" class="form-control" required>
                            <label for="password">Ulangi password</label>
                        </div>
                        <div class="alert">
                            <i class="material-icons">warning</i>
                            <span class="alert-title">Ulangi password salah</span>
                        </div>
                    </div>
                    <button type="submit" name="register" class="btn-sign" >REGISTER</button>
                    <p class="pree-register">Sudah punya akun ?!, <a href="login-page.php">Login disini</a></p>
                </form>
            </div>
        </div>
    </div>



<script src="assets/plugins/materialize/jquery.min.js"></script>
<script src="assets/plugins/materialize/materialize.js"></script>
<script>
  function validateForm() {
    var b = document.forms["Form"]["pass_tempat"].value;
    var c = document.forms["Form"]["retype-password"].value;
    if(b != c){
        $('#retype-password').focus();
        $('.alert').addClass('active');
        return false;
    }
    
  }
</script>
</body>
</html>
<?php 

            if(isset($_POST["register"])) {

              $kode_tempat = $_POST['kode_tempat'];
              $user_tempat = $_POST['user_tempat'];
              $pass_tempat = $_POST['pass_tempat'];


              $simpanData = mysqli_query($koneksi,"INSERT INTO tempat VALUES('','$kode_tempat','','$alamat_tempat','','','','$user_tempat','$pass_tempat','','Baru')");

              if ($simpanData) {
                echo "<script>alert('Registrasi sukse, silahkan login')</script>";
                echo "<meta http-equiv='refresh' content='0; url=login-page.php'>";
              }else{
                echo "<script>alert('Terjadi kesalahan, coba ulangi kembali ...')</script>";
                echo "<meta http-equiv='refresh' content='0; url=register-page.php'>";
              }
             

            }

        ?>