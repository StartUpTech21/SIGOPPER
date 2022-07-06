<?php 

error_reporting(0);
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['id_admin'])){
echo '<script language="javascript">
                alert ("Maaf, Anda belum login silahkan login terlebih dahulu.");
                window.location="index.php";
     </script>';//jika belum login jangan lanjut..
}else{

    include '../inc/koneksi.php';
    include '../inc/kode.php';

$sqll = mysqli_query($koneksi, "SELECT * FROM admin where id_admin='$_SESSION[id_admin]'");
$data = mysqli_fetch_array($sqll);

$id = $data['id_admin'];
$nama = $data['nama_admin'];
$username = $data['username_admin'];
$password = $data['password_admin'];
$foto = $data['gambar_admin'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN || SIG</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="../images/7025653.png">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&libraries=places"></script>
       <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="../assets/plugins/font/font.css" rel="stylesheet">
    <link href="../assets/plugins/materialize/materialize.css" rel="stylesheet">
    <link href="../assets/css/ckeditor.css" rel="stylesheet">
    <link href="../assets/css/admin.css" rel="stylesheet">
</head>
<body>


    <nav class="nav-bar">
        <span class="brand">
            <a href="#" class="brand-lg">GIS PUSAT BELANJA</a>
            <button class="btn-collapse-navbar">
                <i class="material-icons">menu</i>
            </button>
        </span>
        <div class="nav-right">
            <a href="#" class="user-dropdown"  data-target="dropdown-menu">
                <img src="profil/gambar/<?php echo $foto ?>" alt="">
                <span><?php echo $nama ?></span>
            </a>
             <!-- Dropdown Structure -->
            <ul id="dropdown-menu" class="dropdown-content nav-menu-dropdown">
                <li>
                    <a href="?page=profil/profil">
                        <i class="material-icons">person</i>
                        <span>Profile</span>
                    </a>
                    <a href="logout.php" onclick="return confirm('Yakin ingin keluar dari sistem ini ?!');">
                        <i class="material-icons">power_settings_new</i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <aside class="left-bar">
        <div class="leftbar-user">
            <img src="profil/gambar/<?php echo $foto ?>" alt="">
            <div class="left-user-title">
                <h2 class="title"><?php echo $nama ?></h2>
                <h3 class="status">Super Admin</h3>
            </div>
        </div>
        <ul class="menu collapsible">
            <li class="menu-item">
              <a href="web.php" class="item <?php if ($_GET['page'] == '') {echo 'active';} ?>">
                  <i class="material-icons">dashboard</i>
                  <span>Dashboard</span>
              </a>
            </li>
            <!-- <li class="menu-item">
              <a href="?page=kategori/index" class="item <?php if ($_GET['page'] == 'kategori/index' || $_GET['page'] == 'kategori/add' || $_GET['page'] == 'kategori/update') {echo 'active';} ?>">
                  <i class="material-icons">list</i>
                  <span>Data Kategori</span>
              </a>
            </li> -->
            <li class="menu-item">
              <a href="?page=tempat/index" class="item <?php if ($_GET['page'] == 'tempat/index' || $_GET['page'] == 'tempat/add' || $_GET['page'] == 'tempat/view' || $_GET['page'] == 'tempat/update') {echo 'active';} ?>">
                  <i class="material-icons">home</i>
                  <span>Data Tempat</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="?page=faq/index" class="item <?php if ($_GET['page'] == 'faq/index' || $_GET['page'] == 'faq/add' || $_GET['page'] == 'faq/update') {echo 'active';} ?>">
                  <i class="material-icons">priority_high</i>
                  <span>Data FAQ</span>
              </a>
            </li>
            <!-- <li class="menu-item">
                <a href="#" class="item collapsible-header">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
                <ul class="collapsible-body">
                    <li>
                        <a href="">Menu1</a>
                    </li>
                </ul>
              </li> -->
           
          </ul>
    </aside>

    <?php

        if(isset($_GET['page'])){
            $page=$_GET['page'];
            $file="$page.php";

            if (!file_exists($file)){
            include ("dashboard.php");
            }else{
            include ("$page.php");
            }
        }else{
            include ("dashboard.php");
        }
       
    ?>
    <!-- /.content -->
    
    <!-- Summernote -->
     <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script src="../assets/plugins/materialize/jquery.min.js"></script>
    <script src="../assets/plugins/materialize/materialize.js"></script>
<!--     <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script> -->
    <script src="../assets/plugins/dataTable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTable/dataTables.bootstrap.js"></script>

    
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/add-map.js"></script>
    <script>
        var textarea = document.getElementById('textarea1');
        CKEDITOR.replace(textarea);
    </script>
</body>
</html>

<?php } ?>