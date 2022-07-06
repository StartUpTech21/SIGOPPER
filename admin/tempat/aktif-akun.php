<?php
    $kode = $_GET['kode'];
    $data = mysqli_query($koneksi,"UPDATE tempat SET status_akun='Aktif' WHERE kode_tempat='$kode'");
    
    if ($data) {
    echo "<script>alert('Akun telah diaktivasi')</script>";
    echo "<meta http-equiv='refresh' content='0; url=web.php'>";
  }else{
    echo "<script>alert('Terjadi kesalahan, coba ulangi kembali ...')</script>";
    echo "<meta http-equiv='refresh' content='0; url=web.php'>";
  }
 ?>