<?php
include 'inc/koneksi.php';
$search = $_GET['search'];
$ambilData = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori WHERE tempat.nama_tempat LIKE '%$search%' OR tempat.alamat_tempat  LIKE '%$search%' OR kategori.nama_kategori LIKE '%$search%'");
while ($tampilData = mysqli_fetch_array($ambilData)) {
	$nama = $tampilData['nama_tempat'];
	$kategori = $tampilData['nama_kategori'];
	$alamat = $tampilData['alamat_tempat'];
	$lat = $tampilData['lat_tempat'];
	$lng = $tampilData['lng_tempat'];
	$des = $tampilData['des_tempat'];

	?>
	<li class="collection-item">
		<a href="#!" onclick="kesini(<?php echo $lat ?>,<?php echo $lng ?>,'<?php echo $nama ?>');">
			<span class="title" style="font-weight: 700"><?php echo $nama ?></span>
			<p><?php echo $kategori ?></p>
		</a>
	</li>
	<?php } ?>