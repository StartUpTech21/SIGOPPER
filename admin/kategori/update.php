<?php
    $kode = $_GET['kode'];
    $data = mysqli_query($koneksi,"SELECT * FROM kategori WHERE kode_kategori='$kode'");
    $d = mysqli_fetch_array($data);
 ?>
 <section class="content">


        <div class="row">
            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="header">
                        <h2 class="title">FORM UPDATE KATEGORI</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <form action="" method="post">
                                    <table class="table table-form">
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="kode_kategori" type="text" class="validate" required="" readonly="" autocomplete="off" value="<?php echo $d['kode_kategori'] ?>">
                                                    <label for="first_name">Kode Kategori</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="input-field">
                                                    <input name="nama_kategori" type="text" class="validate" required="" autocomplete="off" value="<?php echo $d['nama_kategori'] ?>">
                                                    <label for="first_name">Nama Kategori</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <button type="submit" name="simpan" class="btn btn-primary">
                                                    UPDATE
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

  $kode_kategori = $_POST['kode_kategori'];
  $nama_kategori = $_POST['nama_kategori'];


  $simpanData = mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama_kategori' WHERE kode_kategori='$kode_kategori'");

  if ($simpanData) {
    echo "<script>alert('Sukses ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=kategori/update&kode=$kode_kategori'>";
  }else{
    echo "<script>alert('Terjadi kesalahan, coba ulangi kembali ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=kategori/update&kode=$kode_kategori'>";
  }
 

}





 ?>