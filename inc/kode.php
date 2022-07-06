<?php 


// Kode Tempat
$q = mysqli_query($koneksi, "SELECT max(kode_tempat) AS maxKode FROM tempat");
$y = mysqli_fetch_array($q);
$kodetempat = $y['maxKode'];
$urutan = (int) substr($kodetempat, 1, 4);
$urutan++;
$hurupInitial = "T";
$kdtempat = $hurupInitial . sprintf("%04s", $urutan);

// Kode Tempat
$k = mysqli_query($koneksi, "SELECT max(kode_kategori) AS maxK FROM kategori");
$kt = mysqli_fetch_array($k);
$kdK = $kt['maxK'];
$u1 = (int) substr($kdK, 1, 4);
$u1++;
$iniK = "K";
$kdKategori = $iniK . sprintf("%04s", $u1);


?>
