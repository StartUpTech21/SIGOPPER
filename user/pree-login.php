<?php

error_reporting(0);

include '../inc/koneksi.php';
$kode = $_GET['kode'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LENGKAPI DATA</title>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script> -->
    <link href="../assets/plugins/font/font.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/user.css" rel="stylesheet">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pree-header mt-5 mb-5">
                <h2>SELAMAT DATANG ! <!-- <span>Sri Rahayu Ningsih</span> --></h2>
                <p>Silahkan lengkapi data anda, dengan mengisi form dibawah ini</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST" class="form-pree mb-5">
                <input name="kode_tempat" type="hidden" value="<?php echo $kode ?>">
                <input id="lat" name="lat_tempat" type="hidden">
                <input id="lng" name="lng_tempat" type="hidden">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-field">
                                <input id="nama" name="nama_tempat" type="text" class="form-control" autocomplete="off" autofocus required>
                                <label for="username">Nama tempat</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            
                            <div class="input-field">
                                
                                <input id="alamat" name="alamat_tempat" type="text" class="form-control" required>
                                <label for="username">Alamat</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-field">
                                <select name="kode_kategori" id="select" autocomplete="off" required>
                                    <option value="">--- Pilih kategori</option>
                                    <?php   

                                            $no=1;
                                            $data = mysqli_query($koneksi,"SELECT * from kategori");
                                            while ($d = mysqli_fetch_array($data)) { 
                                        ?>
                                        <option value="<?php echo $d['kode_kategori'] ?>"><?php echo $d['nama_kategori'] ?></option>
                                    <?php } ?>
                                </select>
                                <label for="username" id="label">Kategori tempat</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="username">Deskripsi tempat</label>
                        <textarea id="nama" name="des_tempat" type="text" class="form-control" autocomplete="off" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-5">
                        <button type="submit" name="kirim" class="btn btn-primary btn-submit">KIRIM</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script>
<script src="../assets/plugins/materialize/jquery.min.js"></script>
<script src="../assets/plugins/materialize/materialize.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'des_tempat' );
    
    $("select#select").change(function(){
        var select = $('select#select');
        if(select.val() == 0) {
           select.removeClass('active');
        }else{
            select.addClass('active');
        }
    });

    var alamat = document.getElementById('alamat');
    var lat = document.getElementById('lat');
    var lng = document.getElementById('lng');

    var alamatAutocomlete = new google.maps.places.Autocomplete(alamat);

    google.maps.event.addListener(alamatAutocomlete, 'place_changed', function() {
        var pl = alamatAutocomlete.getPlace();
        lat.value = pl.geometry.location.lat();
        lng.value = pl.geometry.location.lng();
    });
</script>

</body>
</html>

    <?php 

if(isset($_POST["kirim"])) {

  $kode_tempat = $_POST['kode_tempat'];
  $nama_tempat = $_POST['nama_tempat'];
  $alamat_tempat = $_POST['alamat_tempat'];
  $lat_tempat = $_POST['lat_tempat'];
  $lng_tempat = $_POST['lng_tempat'];
  $des_tempat = $_POST['des_tempat'];
  $kode_kategori = $_POST['kode_kategori'];


// query untuk mengecek apakah user_tempat_user yang dimaksud ada didalam database
    $s1 = mysqli_query($koneksi, "SELECT * FROM tempat WHERE nama_tempat='$nama_tempat'");
    $count1 = mysqli_num_rows($s1);


    if ($count1 == 1) {
        echo "<script>alert('Data Sudah Ada, Silahkan Input Data Yang Lain.')</script>";
        echo "<meta http-equiv='refresh' content='0; url=pree-login.php?kode=$kode_tempat'>";
    }else{
        $simpanData = mysqli_query($koneksi,"UPDATE tempat SET nama_tempat='$nama_tempat', alamat_tempat='$alamat_tempat', lat_tempat='$lat_tempat', lng_tempat='$lng_tempat', des_tempat='$des_tempat', kode_kategori='$kode_kategori' WHERE kode_tempat='$kode_tempat'");

          if ($simpanData) {
             session_start();
                $_SESSION['kode_tempat'] = $kode_tempat;
            echo "<script>alert('Terimakasih telah melengkapi data anda.')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
          }else{
            echo "<script>alert('Terjadi kesalahan, coba ulangi kembali ...')</script>";
            echo "<meta http-equiv='refresh' content='0; url=pree-login.php?kode=$kode_tempat'>";
          }
         

    }

}





 ?>