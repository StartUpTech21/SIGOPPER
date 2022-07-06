<section class="content">


        <div class="row">
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="header">
                        <h2 class="title">FORM TAMBAH TEMPAT</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <form action="" method="post">
                                    
                                    <table class="table table-form">
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="kode_tempat" type="text" class="validate" required="" readonly="" autocomplete="off" value="<?php echo $kdtempat ?>">
                                                    <label for="first_name">Kode Tempat</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <select class="select" name="kode_kategori">
                                                        <option value="" disabled selected>--- Pilih ---</option>
                                                        <?php
                                                            $no=1;
                                                            $data = mysqli_query($koneksi,"SELECT * from kategori");
                                                            while ($d = mysqli_fetch_array($data)) { 
                                                        ?>
                                                        <option value="<?php echo $d['kode_kategori'] ?>"><?php echo $d['nama_kategori'] ?></option>
                                                    <?php } ?>
                                                      </select>
                                                      <label>Kategori</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="nama_tempat" type="text" class="validate" required="" autocomplete="off">
                                                    <label for="first_name">Nama</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="alamat_tempat" type="text" class="validate" required="" id="alamat">
                                                    <label for="first_name">Alamat</label>

                                                    <input name="lng_tempat" type="hidden" id="lng">
                                                    <input name="lat_tempat" type="hidden" id="lat" >
                                                </div>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>
                                                <label for="textarea1">Deskripsi Tempat</label>
                                                <textarea id="textarea1" class="materialize-textarea" name="des_tempat"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="user_tempat" type="text" class="validate" required="" autocomplete="off">
                                                    <label for="first_name">Username</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="pass_tempat" type="text" class="validate" required="" autocomplete="off">
                                                    <label for="first_name">Password</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <select class="select" name="status_akun">
                                                        <option value="" disabled selected>--- Pilih ---</option>
                                                         <option value="Baru">Baru</option>
                                                         <option value="Aktif">Aktif</option>
                                                      </select>
                                                      <label>Status Akun</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button type="submit" name="simpan" class="btn btn-primary">
                                                    SIMPAN
                                                </button>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            

        </div>

    </section>


    <?php 

if(isset($_POST["simpan"])) {

  $kode_tempat = $_POST['kode_tempat'];
  $nama_tempat = $_POST['nama_tempat'];
  $alamat_tempat = $_POST['alamat_tempat'];
  $lat_tempat = $_POST['lat_tempat'];
  $lng_tempat = $_POST['lng_tempat'];
  $des_tempat = $_POST['des_tempat'];
  $user_tempat = $_POST['user_tempat'];
  $pass_tempat = $_POST['pass_tempat'];
  $kode_kategori = $_POST['kode_kategori'];
  $status_akun = $_POST['status_akun'];


  $simpanData = mysqli_query($koneksi,"INSERT INTO tempat VALUES('','$kode_tempat','$nama_tempat','$alamat_tempat','$lat_tempat','$lng_tempat','$des_tempat','$user_tempat','$pass_tempat','$kode_kategori', '$status_akun')");

  if ($simpanData) {
    echo "<script>alert('Sukses ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tempat/index'>";
  }else{
    echo "<script>alert('Terjadi kesalahan, coba ulangi kembali ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=tempat/add'>";
  }
 

}





 ?>