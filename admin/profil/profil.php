<section class="content">

    <div class="row">
        <div class="col s12 m12 l4">
            <div class="card" style="margin-top: 50px">
                <div class="header">
                    <h2 class="title">PROFIL</h2>
                    <button type="button" class="btn btn-info modal-trigger"  data-target="modal-update">UPDATE PROFIL</button>
                </div>
                <div class="body">
                   <ul class="list-profil">
                       <li class="image">
                           <img src="profil/gambar/<?php echo $foto ?>" alt="Image ...">
                       </li>
                       <li class="item">
                           <span>Nama</span>
                           <p><?php echo $nama ?></p>
                       </li>
                       <li class="item">
                           <span>Username</span>
                           <p><?php echo $username ?></p>
                       </li>
                       <li class="item">
                           <span>Password</span>
                           <p><?php echo $password ?></p>
                       </li>
                   </ul>
                </div>
            </div>
        </div>
    </div>

</section>

                       <!-- Modal updategaleri -->
  <div id="modal-update" class="modal" style="margin-top: 100px !important;width: 400px !important">
    <div class="modal-content" >
        <h3 style="font-size: 18px;font-weight: 400;margin-bottom: 24px">FORM UPDATE PROFIL</h3>
     <form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_admin" value="<?php echo $id ?>">
        <div class="input-field">
            <input name="nama_admin" type="text" class="validate" value="<?php echo $nama ?>" required="" autocomplete="off">
            <label for="first_name">Nama</label>
        </div>
        <div class="input-field">
            <input name="username_admin" type="text" class="validate" value="<?php echo $username ?>" required="" autocomplete="off">
            <label for="first_name">Username</label>
        </div>
        <div class="input-field">
            <input name="password_admin" type="text" class="validate" value="<?php echo $password ?>" required="" autocomplete="off">
            <label for="first_name">Nama</label>
        </div>
        <div class="file-field input-field">
          <div class="btn btn-info">
            <span>File</span>
            <input type="file" name="gambar_admin">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Update gambar">
          </div>
        </div>
       
        <div style="display: flex;align-items: center;justify-content: center;padding: 12px 0">
            <button class="btn modal-close btn-warning">BATAL</button>
            <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
        </div>
     </form>
    </div>
  </div>

  <?php


// ----------------   Update Armada ------------------
if (isset($_POST['update'])) {

    $id_admin = $_POST['id_admin'];
    $nama_admin = $_POST['nama_admin'];
    $username_admin = $_POST['username_admin'];
    $password_admin = $_POST['password_admin'];

    $namaFotoAdmin = $_FILES['gambar_admin']['name'];
    $tmpFotoAdmin = $_FILES['gambar_admin']['tmp_name'];

    if (empty($namaFotoAdmin)) {
        mysqli_query($koneksi, "UPDATE admin SET nama_admin='$nama_admin', username_admin='$username_admin', password_admin='$password_admin' WHERE id_admin='$id_admin'");
        echo "<script>alert('Data berhasil diupdate:)')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=profil/profil'>";
    } else {
        $image = mysqli_query($koneksi, "UPDATE admin SET nama_admin='$nama_admin', username_admin='$username_admin', password_admin='$password_admin', gambar_admin='$namaFotoAdmin' WHERE id_admin='$id_admin'");
        if ($image) {
            $u=mysqli_query($koneksi,"SELECT * FROM admin WHERE id_admin='$id_admin'");
        $us=mysqli_fetch_array($u);
        file_exists("profil/gambar/".$us['gambar_admin']);
        unlink("profil/gambar/".$us['gambar_admin']);
        move_uploaded_file($tmpFotoAdmin, "profil/gambar/".$namaFotoAdmin);
        echo "<script>alert('Data berhasil diupdate:)')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=profil/profil'>";
        }else{
            echo "<script>alert('Terjadi kesalahan, coba ulangi kembali')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=profil/profil'>";
        }
    }
    
}
// -------------------------------------------------------------------------



?>