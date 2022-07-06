<section class="content">
        <div class="content-block">
            <h2 class="title">DATA TEMPAT</h2>
        </div>

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="header">
                        <h2 class="title"></h2>
                        <a href="?page=tempat/add" class="btn btn-success">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table class="table table-bordered dataTable">
                                <thead>
                                    <tr class="danger">
                                        <th><center>No</center></th>
                                        <th><center>Kategori</center></th>
                                        <th><center>Nama Tempat</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1;
                                        $data = mysqli_query($koneksi,"SELECT * FROM tempat JOIN kategori ON tempat.kode_kategori=kategori.kode_kategori");
                                        while ($d = mysqli_fetch_array($data)) { 
                                      ?>
                                    <tr >
                                        <td><center><?php echo $no++ ?></center></td>
                                        <td><center><?php echo $d['nama_kategori'] ?></center></td>
                                        <td><center><?php echo $d['nama_tempat'] ?></center></td>
                                        <td>
                                            <center>
                                                <a href="?page=tempat/view&kode=<?php echo $d['kode_tempat'] ?>" class="btn btn-info">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> VIEW
                                                </a>
                                                <a href="?page=tempat/update&kode=<?php echo $d['kode_tempat'] ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i> EDIT
                                                </a>
                                                <a href="?page=tempat/delete&kode=<?php echo $d['kode_tempat'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!');">
                                                     <i class="fa fa-trash" aria-hidden="true"></i> DELETE
                                                </a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            

        </div>

    </section>