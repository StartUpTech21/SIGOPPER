
<?php
include'../inc/koneksi.php';
 
$query = mysqli_query($koneksi, 'SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori');
 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$responsistem = array();
	$responsistem["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json

		$data['namaTempat'] = $row['nama_tempat'];
        $data['namaKategori'] = $row['nama_kategori'];
        $data['AlamatTempat'] = $row['alamat_tempat'];
        $data['latTempat'] = $row['lat_tempat'];
        $data['lngTempat'] = $row['lng_tempat'];
        $data['desTempat'] = $row['des_tempat'];


		array_push($responsistem["data"], $data);
		echo json_encode($responsistem["data"]);
 
	}
	
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$responsistem["message"]="tidak ada data";
	echo json_encode($responsistem);
}
?>