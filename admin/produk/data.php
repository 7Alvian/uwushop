<?php include_once('../header.php'); ?>
    
    <div class="box">
        <h1>Produk</h1>
        <h4>
            <small>Data Produk</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="tambah.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
            </div>
        </h4>
        <div style="margin-bottom:20px;">
            <form action="" class="form-inline" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr >
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>ID Supplier</th>
                        <th>Tanggal Terima</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $batas = 5;
                        $hal = @$_GET['hal'];
                        if (empty($hal)) {
                            $posisi = 0;
                            $hal = 1;
                        }else {
                            $posisi = ($hal - 1) * $batas;
                        }
                        $no = 1;
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            $pencarian = trim(mysqli_real_escape_string($con, @$_POST['pencarian']));
                            if($pencarian != ''){
                                $sql = "SELECT * FROM tb_produk WHERE nama_produk LIKE '%$pencarian%'";
                                $query = $sql;
                                $queryJml = $sql;
                            }else{
                                $query = "SELECT * FROM tb_produk LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM tb_produk";
                                $no = $posisi + 1;
                            }
                        }else{
                            $query = "SELECT * FROM tb_produk LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM tb_produk";
                            $no = $posisi + 1;
                        }
                        $query_produk = mysqli_query($con, $query) or die (mysqli_error($con));
                        if(mysqli_num_rows($query_produk) > 0){
                            while ($data = mysqli_fetch_array($query_produk)) { ?>
                                    <tr>
                                        <td><?= $no++?>.</td>
                                        <td><?= $data['nama_produk']?></td>
                                        <td><?= $data['kd_supplier1']?></td>
                                        <td><?= $data['tgl_terima']?></td>
                                        <td><?= $data['stok']?></td>
                                        <td><?= $data['harga']?></td>
                                        <td class="text-center">
                                            <a href="edit.php?id=<?= $data['kd_produk']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a href="hapus.php?id=<?= $data['kd_produk']?>" onclick="return confirm('Yakin ingin menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }else{
                            echo "<tr><td colspan=\"6\" align=\"center\">Data tidak ditemukan</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            if (@$_POST['pencarian'] == '') {
                ?>
                <div style="float:left;">
                    <?php
                        $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                        echo "Jumlah Data : <b>$jml</b>";
                    ?>
                </div>
                <div style="float:right;">
                    <ul class="pagination pagination-sm" style="margin:0;">
                        <?php
                            $jml_hal = ceil($jml/$batas);
                            for($i=1;$i <= $jml_hal; $i++){
                                if($i != $hal){
                                    echo "<li><a href=\"?hal=$i\">$i</a></li>";
                                }else{
                                    echo "<li class=\"active\"><a>$i</a></li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
            <?php
            }else{ 
                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($con, $queryJml));
                echo "Hasil Pencarian : <b>$jml</b>";
                echo "</div>";
            }
        ?>
    </div>

<?php include_once('../footer.php'); ?>