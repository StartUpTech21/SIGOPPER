<?php
    $kode = $_GET['kode'];
    $data = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori WHERE tempat.kode_tempat='$kode'");
    $d = mysqli_fetch_array($data);
 ?>

<section class="content">

    <div class="content-block">
        <h2 class="title">VIEW TEMPAT</h2>
    </div>
    <div class="row">
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="header">
                    <h2 class="title"><?php echo $d['nama_tempat'] ?></h2>
                    <span class="badge"><?php echo $d['nama_kategori'] ?></span>
                </div>
                <div class="body">
                    <ul class="list-view">
                        <li>
                            <span class="header">Alamat</span> 
                            <p><?php echo $d['alamat_tempat'] ?></p>
                        </li>
                        <li>
                            <span class="header">Username</span> 
                            <p><?php echo $d['user_tempat'] ?></p>
                        </li>
                        <li>
                            <span class="header">Password</span> 
                            <p><?php echo $d['pass_tempat'] ?></p>
                        </li>
                        <li>
                            <span class="header">Deskripsi</span> 
                            <p><?php echo $d['des_tempat'] ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="body">
                    <div id="map-view" style="width: 100%;height: 300px"></div>
                    <script>
                        var latitude = <?php echo $d['lat_tempat'] ?>;
                        var longitude = <?php echo $d['lng_tempat'] ?>;
                        var myLatLng = { lat: latitude, lng: longitude };
                        var mapOptions = {
                            center: myLatLng,
                            zoom: 15,
                            mapTypeId: google.maps.MapTypeId.ROADMAP

                        };

                        //create map
                        var map = new google.maps.Map(document.getElementById('map-view'), mapOptions);
                        var icon = {
                            url: "../images/7025653.png", // url
                            scaledSize: new google.maps.Size(38, 38), // scaled size
                            origin: new google.maps.Point(0,0), // origin
                            anchor: new google.maps.Point(0, 0) // anchor

                        };
                        new google.maps.Marker({
                        position: myLatLng,
                        map,
                        icon:icon,
                        title: "<?php echo $d['alamat_tempat'] ?>",
                        animation: google.maps.Animation.BOUNCE,
                      });
                    </script>

                </div>
            </div>
        </div>
        

    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="header">
                    <h2 class="title">GALERI TEMPAT</h2>
                     <button data-target="modal-tambah" class="btn btn-success modal-trigger">TAMBAH GALERI</button>
                </div>
                <div class="body">
                   <div class="box-galeri">
                    <?php
                        $datas = mysqli_query($koneksi,"SELECT * FROM tempat JOIN galeri ON tempat.kode_tempat=galeri.kode_tempat WHERE galeri.kode_tempat='$kode'");
                        while ($dt = mysqli_fetch_array($datas)) {
                     ?>
                      <div class="galeri-body">
                           <div class="galeri-image">
                                <img class="materialboxed" src="tempat/gambar/<?php echo $dt['nama_gambar'] ?>" data-caption="<?php echo $dt['nama_galeri'] ?>">
                               <span class="title"><?php echo $dt['nama_galeri'] ?></span>
                           </div>
                           <div class="galeri-button">
                                 <button data-target="update<?php echo $dt['id_galeri'] ?>" class="btn btn-primary modal-trigger">UPDATE</button>
                                 <button data-target="delete<?php echo $dt['id_galeri'] ?>" class="btn btn-danger modal-trigger">DELETE</button>
                           </div>
                       </div>

                       <!-- Modal updategaleri -->
  <div id="update<?php echo $dt['id_galeri'] ?>" class="modal" style="margin-top: 100px !important">
    <div class="modal-content" >
        <h3 style="font-size: 18px;font-weight: 400;margin-bottom: 24px">FORM UPDATE GALERI</h3>
     <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_galeri" value="<?php echo $dt['id_galeri'] ?>">
        <input type="hidden" name="kode_tempat" value="<?php echo $d['kode_tempat'] ?>">
        <div class="file-field input-field">
          <div class="btn btn-info">
            <span>File</span>
            <input type="file" name="nama_gambar" required="">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Pilih gambar">
          </div>
        </div>
        <div class="input-field">
            <input name="nama_galeri" type="text" class="validate" value="<?php echo $dt['nama_galeri'] ?>" required="" autocomplete="off">
            <label for="first_name">Nama Gambar</label>
        </div>
        <button class="btn modal-close btn-warning">BATAL</button>
        <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
     </form>
    </div>
  </div>

                         <!-- Modal hapus galeri -->
  <div id="delete<?php echo $dt['id_galeri'] ?>" class="modal" style="margin-top: 10% !important;width: 350px">
    <div class="modal-content" >
        <h3 style="font-size: 18px;font-weight: 400;margin-bottom: 24px">YAKIN INGIN MENGHAPUS FILE INI ?</h3>
     <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_galeri" value="<?php echo $dt['id_galeri'] ?>">
        <input type="hidden" name="kode_tempat" value="<?php echo $d['kode_tempat'] ?>">
        <button class="btn modal-close btn-success">BATAL</button>
        <button type="submit" name="delete" class="btn btn-danger">HAPUS</button>
     </form>
    </div>
  </div>

                      <?php } ?>
                   </div>
                </div>
            </div>
        </div>


    </div>

</section>



  <!-- Modal tambah galeri -->
  <div id="modal-tambah" class="modal">
    <div class="modal-content">
     <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="kode_tempat" value="<?php echo $d['kode_tempat'] ?>">
        <div class="file-field input-field">
          <div class="btn btn-info">
            <span>File</span>
            <input type="file" name="nama_gambar" required="">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Pilih gambar">
          </div>
        </div>
        <div class="input-field">
            <input name="nama_galeri" type="text" class="validate" required="" autocomplete="off">
            <label for="first_name">Nama Gambar</label>
        </div>
        <button class="btn modal-close btn-warning">BATAL</button>
        <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
     </form>
    </div>
  </div>



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
     

    $simpanFileLama = move_uploaded_file($uploadedFile, "tempat/gambar/".$namaFileBaru);


    if ($simpanFileLama) {
      
        mysqli_query($koneksi,"INSERT into galeri values('','$kode_tempat','$nama_galeri','$namaFileBaru')");
        echo "<script>alert('Sukses ...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=tempat/view&kode=$kode_tempat'>";
    }else{
        echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
        echo "<meta http-equiv='refresh' content='0; url=??page=tempat/view&kode=$kode_tempat'>";
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
    $simpanFileLama = move_uploaded_file($uploadedFile, "tempat/gambar/".$namaFileBaru);

    if ($simpanFileLama) {
  
        mysqli_query($koneksi,"UPDATE galeri SET nama_galeri='$nama_galeri', nama_gambar='$namaFileBaru' WHERE id_galeri='$id_galeri'");
        echo "<script>alert('Sukses ...')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=tempat/view&kode=$kode_tempat'>";
    }else{
        echo "<script>alert('Terjadi kesalahan, coba ulangi kembali !')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=tempat/view&kode=$kode_tempat'>";
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





 ?>