<?php 
include '../inc/koneksi.php';
$search = $_POST['search'];
$per_laman = 9;
$laman_sekarang = 1;
if (isset($_GET['laman'])) {
    $laman_sekarang = $_GET['laman'];
    $laman_sekarang = ($laman_sekarang > 1) ? $laman_sekarang : 1;
}
$total_data = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tempat ORDER BY kode_tempat DESC"));
$total_laman = ceil($total_data/$per_laman);
$awal = ($laman_sekarang - 1) * $per_laman;

$my = mysqli_query($koneksi, "SELECT * FROM tempat JOIN kategori USING(kode_kategori) JOIN galeri USING(kode_tempat) WHERE kategori.nama_kategori='Tradisional' AND (tempat.nama_tempat LIKE '%$search%' OR tempat.alamat_tempat  LIKE '%$search%' OR kategori.nama_kategori LIKE '%$search%') GROUP BY tempat.kode_tempat ASC LIMIT $per_laman OFFSET $awal");
?>
<?php if(mysqli_num_rows($my)) { ?>
    <?php while ($d = mysqli_fetch_array($my)) { ?>
        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
            <div class="project-single">
                <div class="project-inner project-head">
                    <div class="homes">
                        <!-- homes img -->
                        <a href="?page=pengguna/detail&kode=<?php echo $d['kode_tempat'] ?>" class="homes-img hover-effect">
                            <div class="homes-tag button alt featured"><?php echo $d['nama_kategori'] ?></div>
                                    <!-- <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                        <p>163</p>
                                    </div> -->
                                    <!-- <div class="homes-price">
                                        <ul class="starts text-left mb-0">
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="mb-0"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="ml-3">(6 Reviews)</li>
                                        </ul>
                                    </div> -->
                                    <img src="admin/tempat/gambar/<?php echo $d['nama_gambar'] ?>" alt="home-1" class="img-responsive" style="width: 100%;height: 200px;">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                        </div>

                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <a href="?page=pengguna/detail&kode=<?php echo $d['kode_tempat'] ?>"><h3><?php echo $d['nama_tempat'] ?></h3></a>
                            <p class="homes-address">
                                <a href="?page=pengguna/detail&kode=<?php echo $d['kode_tempat'] ?>">
                                    <i class="fa fa-map-marker"></i><span><?php echo $d['alamat_tempat'] ?></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <nav aria-label="..." class="pt-2">
        <?php if (isset($total_laman)) { ?>
            <?php if ($total_laman > 1) { ?>
                <ul class="pagination mt-0">
                    <?php if ($laman_sekarang > 1) {?>
                        <li class="page-item">
                            <a class="page-link" href="index.php?page=pengguna/pusat_perbelanjaan&laman=<?php echo $laman_sekarang - 1 ?>" tabindex="-1">Previous</a>
                        </li>
                    <?php }else{ ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                    <?php } ?>

                    <?php 
                    for($x=1;$x<=$total_laman;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?page=pengguna/pusat_perbelanjaan&laman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                        <?php
                    }
                    ?>
                    <!-- <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li> -->
                    <?php if ($laman_sekarang < $total_laman) {?>
                        <li class="page-item">
                            <a class="page-link" href="index.php?page=pengguna/pusat_perbelanjaan&laman=<?php echo $laman_sekarang + 1 ?>">Next</a>
                        </li>
                    <?php }else{ ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        <?php } ?>
    </nav>