<section class="content">
        <div class="content-block">
            <h2 class="title">DATA KATEGORI</h2>
        </div>

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table class="table table-bordered dataTable">
                                <thead>
                                    <tr class="danger">
                                        <th><center>No</center></th>
                                        <th><center>Kategori</center></th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1;
                                        $data = mysqli_query($koneksi,"SELECT * from kategori");
                                        while ($d = mysqli_fetch_array($data)) { 
                                    ?>
                                    <tr >
                                        <td><center><?php echo $no++ ?></center></td>
                                        <td><center><?php echo $d['nama_kategori'] ?></center></td>
                                        <td>
                                            <center>
                                                <a href="?page=kategori/update&kode=<?php echo $d['kode_kategori'] ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit" aria-hidden="true"></i> UPDATE
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