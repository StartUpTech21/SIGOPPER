<?php 

error_reporting(0);
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['kode_tempat'])){
echo '<script language="javascript">
                alert ("Maaf, Anda belum login silahkan login terlebih dahulu.");
                window.location="../login-page.php";
     </script>';//jika belum login jangan lanjut..
}else{

    include '../inc/koneksi.php';
    include '../inc/kode.php';

$sqll = mysqli_query($koneksi, "SELECT * FROM tempat WHERE kode_tempat='$_SESSION[kode_tempat]'");
$data = mysqli_fetch_array($sqll);

$k = $data['kode_tempat'];
$namae = $data['nama_tempat'];

if ($namae == "") {
    echo "<meta http-equiv='refresh' content='0; url=pree-login.php?kode=$k'>";
}else{
    $sqlls = mysqli_query($koneksi, "SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori where tempat.kode_tempat='$_SESSION[kode_tempat]'");
    $datas = mysqli_fetch_array($sqlls);

    $kode = $datas['kode_tempat'];
    $nama = $datas['nama_tempat'];
    $alamat = $datas['alamat_tempat'];
    $lat = $datas['lat_tempat'];
    $lng = $datas['lng_tempat'];
    $des = $datas['des_tempat'];
    $user = $datas['user_tempat'];
    $pass = $datas['pass_tempat'];
    $kategori = $datas['nama_kategori'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER || SIG</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/7025653.png">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script>
    <link href="../assets/plugins/font/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/ckeditor.css" rel="stylesheet">
    <link href="../assets/css/user-dashboard.css" rel="stylesheet">
</head>
<body>

<nav class="navbar">
    <a href="#" class="brand">GIS PUSAT BELANJA</a>
    <a href="logout.php" class="btn-nav-logout" onclick="return confirm('Yakin ingin keluar dari sistem ini ?!');">
        <i class="material-icons">power_settings_new</i>
        <span>Logout</span>
    </a>
</nav>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-block">
                    <h2>SELAMAT DATANG</h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateInfo">
                        Update info
                    </button>

<!-- Modal -->
<div class="modal fade" id="updateInfo" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">UPDATE INFORMASI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="lat_tempat" id="lat" value="<?php echo $lat ?>">
        <input type="hidden" name="lng_tempat" id="lng" value="<?php echo $lng ?>">
            <input type="hidden" name="kode_tempat" value="<?php echo $kode ?>">
            <div class="input-group">
                <div class="inline">
                    <input type="text" name="nama_tempat" value="<?php echo $nama ?>" class="form-control" required="">
                    <label>Nama Tempat</label>
                </div>
            </div>
            <div class="input-group mb-5">
                <div class="inline">
                    <input type="text" name="alamat_tempat" id="alamat" value="<?php echo $alamat ?>" class="form-control" required="">
                    <label>Alamat</label>
                </div>
            </div>
            <label>Deskripsi</label>
            <textarea name="des_tempat" id="textarea1" class="form-control"><?php echo $des ?></textarea> 
            <div class="input-group">
                <div class="inline">
                    <input type="text" name="user_tempat" id="alamat" value="<?php echo $user ?>" class="form-control" required="">
                    <label>Username</label>
                </div>
            </div>
            <div class="input-group">
                <div class="inline">
                    <input type="text" name="pass_tempat" value="<?php echo $pass ?>" class="form-control" required="">
                    <label>Username</label>
                </div>
            </div>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">BATAL</button>
            <button type="submit" name="updateTempat" class="btn btn-primary">UPDATE</button>
        </form>
        <script>
            var alamat = document.getElementById('alamat');
var lat = document.getElementById('lat');
var lng = document.getElementById('lng');

var alamatAutocomlete = new google.maps.places.Autocomplete(alamat);

google.maps.event.addListener(alamatAutocomlete, 'place_changed', function() {
	var pl = alamatAutocomlete.getPlace();
		lat.value = pl.geometry.location.lat();
		lng.value = pl.geometry.location.lng();
})
        </script>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-list-content">
                        <ul class="card-list">
                            <span class="status"><?php echo $kategori; ?></span>
                            <li>
                                <span class="title"><?php echo $nama; ?></span>
                            </li>
                            <li>
                                <span>
                                    <i class="material-icons">location_on</i> Alamat
                                </span>
                                <p><?php echo $alamat; ?></p>
                            </li>
                            <li>
                                <span>
                                    <i class="material-icons">info</i> Deskripsi
                                </span>
                                <p><?php echo $des; ?></p>
                            </li>
                            <li>
                                <span>
                                    <i class="material-icons">person</i> Username
                                </span>
                                <p><?php echo $user; ?></p>
                            </li>
                            <li>
                                <span>
                                    <i class="material-icons">lock</i> Password
                                </span>
                                <p><?php echo $pass; ?></p>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div id="map_user" style="width: 100%;height: 350px;"></div>
                    <script>
                        var latitude = <?php echo $lat ?>;
                        var longitude = <?php echo $lng ?>;
                        var myLatLng = { lat: latitude, lng: longitude };
                        var mapOptions = {
                            center: myLatLng,
                            zoom: 15,
                            mapTypeId: google.maps.MapTypeId.ROADMAP

                        };

                        //create map
                        var map = new google.maps.Map(document.getElementById('map_user'), mapOptions);

                        new google.maps.Marker({
                        position: myLatLng,
                        map,
                        title: "<?php echo $alamat ?>",
                      });
                    </script>


                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="header-block mt-5">
                        <h2>Galeri</h2>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahGaleri">
                             <i class="fa fa-plus"></i> Tambah Galeri
                        </button>
                        <!-- Modal -->
<div class="modal fade" id="tambahGaleri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">TAMBAH GALERI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">

            <input type="hidden" name="kode_tempat" value="<?php echo $kode ?>">
            <div class="input-group mb-5">
            <label>File gambar</label>
                <div class="inline">
                    <input type="file" name="nama_gambar" class="form-control" required="">
                    
                </div>
            </div>
            <div class="input-group">
                <div class="inline">
                    <input type="text" name="nama_galeri" class="form-control" required="">
                    <label>Nama galeri</label>
                </div>
            </div>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">BATAL</button>
        <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
        </form>
      </div>

    </div>
    
  </div>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                        $datas = mysqli_query($koneksi,"SELECT * FROM tempat JOIN galeri ON tempat.kode_tempat=galeri.kode_tempat WHERE galeri.kode_tempat='$kode' GROUP BY tempat.kode_tempat");
                        while ($dt = mysqli_fetch_array($datas)) {
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../admin/tempat/gambar/<?php echo $dt['nama_gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $dt['nama_galeri'] ?></h5>
                          <div class="card-btn">
                            <a href="#update<?php echo $dt['id_galeri'] ?>" class="btn btn-primary" data-bs-toggle="modal"> 
                                <i class="fa fa-edit" aria-hidden="true"></i> UPDATE
                            </a>
                            <a href="#delete<?php echo $dt['id_galeri'] ?>" class="btn btn-danger" data-bs-toggle="modal">
                             <i class="fa fa-trash" aria-hidden="true"></i>  DELETE
                         </a>
                          </div>
                        </div>
                    </div>
                </div>
                                        <!-- Modal -->
<div class="modal fade" id="update<?php echo $dt['id_galeri'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">UPDATE GALERI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">

            <input type="hidden" name="kode_tempat" value="<?php echo $kode ?>">
            <input type="hidden" name="id_galeri" value="<?php echo $dt['id_galeri'] ?>">
            <div class="input-group mb-5">
            <label>File gambar</label>
                <div class="inline">
                    <input type="file" name="nama_gambar" class="form-control" required="">
                    
                </div>
            </div>
            <div class="input-group">
                <div class="inline">
                    <input type="text" name="nama_galeri" value="<?php echo $dt['nama_galeri'] ?>" class="form-control" required="">
                    <label>Nama galeri</label>
                </div>
            </div>
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">BATAL</button>
            <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
        </form>
      </div>

    </div>
    
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete<?php echo $dt['id_galeri'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Yakin ingin menghaus galeri ini</h5>

      </div>
      <div class="modal-body">
        <form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="kode_tempat" value="<?php echo $kode ?>">
            <input type="hidden" name="id_galeri" value="<?php echo $dt['id_galeri'] ?>">

            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">BATAL</button>
            <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
        </form>
      </div>

    </div>
    
  </div>
</div>
                <?php } ?>
            </div>

    </div>
</section>

<?php 

if(isset($_POST["simpan"])) {

    $kode_tempat = $_POST['kode_tempat'];
    $nama_galeri = $_POST['nama_galeri'];

    $namaFile = $_FILES['nama_gambar']['name'];
    $uploadedFile = $_FILES['nama_gambar']['tmp_name'];

    $namaFileLama = pathinfo($namaFile,PATHINFO_BASENAME);
    $pisahNamaFileLama = explode(".", $namaFileLama);
    $ambilNamaFile = $pisahNamaFileLama[0];
    $ambilTypeFile = $pisahNamaFileLama[1];

    $namaFileBaru = $nama_galeri.".".$ambilTypeFile;
     

    $simpanFileLama = move_uploaded_file($uploadedFile, "../admin/tempat/gambar/".$namaFileBaru);


    if ($simpanFileLama) {
      
        mysqli_query($koneksi,"INSERT into galeri values('','$kode_tempat','$nama_galeri','$namaFileBaru')");
        echo "<script>alert('Sukses ...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }else{
        echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }


}

if(isset($_POST["update"])) {

    $id_galeri = $_POST['id_galeri'];
    $kode_tempat = $_POST['kode_tempat'];
    $nama_galeri = $_POST['nama_galeri'];

    $namaFile = $_FILES['nama_gambar']['name'];
    $uploadedFile = $_FILES['nama_gambar']['tmp_name'];

    $namaFileLama = pathinfo($namaFile,PATHINFO_BASENAME);
    $pisahNamaFileLama = explode(".", $namaFileLama);
    $ambilNamaFile = $pisahNamaFileLama[0];
    $ambilTypeFile = $pisahNamaFileLama[1];
    $namaFileBaru = $nama_galeri.".".$ambilTypeFile;
    $simpanFileLama = move_uploaded_file($uploadedFile, "../admin/tempat/gambar/".$namaFileBaru);

    if ($simpanFileLama) {
  
        mysqli_query($koneksi,"UPDATE galeri SET nama_galeri='$nama_galeri', nama_gambar='$namaFileBaru' WHERE id_galeri='$id_galeri'");
        echo "<script>alert('Sukses ...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }else{
        echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
    


}

if(isset($_POST["delete"])) {

    $id_galeri = $_POST['id_galeri'];
    $kode_tempat = $_POST['kode_tempat'];
   
    $hapus = mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$id_galeri'");
    if ( $hapus) {
  
        
        echo "<script>alert('Sukses ...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=tempat/view&kode=$kode_tempat'>";
    }else{
        echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=tempat/view&kode=$kode_tempat'>";
    }
    


}

if(isset($_POST["updateTempat"])) {

  $kode_tempat = $_POST['kode_tempat'];
  $nama_tempat = $_POST['nama_tempat'];
  $alamat_tempat = $_POST['alamat_tempat'];
  $lat_tempat = $_POST['lat_tempat'];
  $lng_tempat = $_POST['lng_tempat'];
  $des_tempat = $_POST['des_tempat'];
  $user_tempat = $_POST['user_tempat'];
  $pass_tempat = $_POST['pass_tempat'];



  $simpanData = mysqli_query($koneksi,"UPDATE tempat SET nama_tempat='$nama_tempat', alamat_tempat='$alamat_tempat', lat_tempat='$lat_tempat', lng_tempat='$lng_tempat', des_tempat='$des_tempat', user_tempat='$user_tempat', pass_tempat='$pass_tempat' WHERE kode_tempat='$kode_tempat'");

  if ($simpanData) {
    echo "<script>alert('Sukses ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }else{
    echo "<script>alert('Terjadi kesalahan, coba ulangi kembali ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  }
 
}



 ?>

    <!-- Summernote -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script src="../assets/plugins/materialize/jquery.min.js"></script>
    
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/plugins/materialize/materialize.js"></script>
    <script>
        var textarea = document.getElementById('textarea1');
        CKEDITOR.replace(textarea);


    </script>
</body>
</html>
<?php } }?>