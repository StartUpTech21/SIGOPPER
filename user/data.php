<?php
    include '../inc/koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori");
    while ($d = mysqli_fetch_array($data)) { 

        $myJSON = json_encode($d);
        echo $myJSON;
    }
?>