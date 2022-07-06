<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM faq WHERE id_faq='$id'");
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
                                    <input type="hidden" name="id_faq" value="<?php echo $d['id_faq'] ?>">
                                    <tr>
                                        <td>
                                            <div class="input-field">
                                                <input name="pertanyaan" type="text" class="validate" required="" readonly="" autocomplete="off" value="<?php echo $d['pertanyaan'] ?>">
                                                <label for="first_name">Pertanyaan</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <label for="textarea1">Jawaban</label>
                                           <textarea id="textarea1" class="materialize-textarea" name="jawaban"><?php echo $d['jawaban'] ?></textarea>

                                       </td>
                                   </tr>
                                   <tr>
                                    <td class="text-center">
                                        <button type="submit" name="simpan" class="btn btn-primary" style="margin-top:20px;">
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

if (isset($_POST['simpan'])) {
  $id_faq = $_POST['id_faq'];
  $pertanyaan = $_POST['pertanyaan'];
  $jawaban = $_POST['jawaban'];

  $Simpanfaq = mysqli_query($koneksi, "UPDATE faq SET pertanyaan='$pertanyaan', jawaban='$jawaban' WHERE id_faq='$id_faq'");

  if ($Simpanfaq){
    echo "<script>alert('Data Faq Berhasil Dirubah')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=faq/index'></script>";
  }else{
    echo "<script>alert('Terjadi kesalahan, coba ulangi kembali')</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=faq/index'></script>";
  }

}


?>