<?php include_once('../header.php'); ?>
    
    <div class="box">
        <h1>Penjualan</h1>
        <h4>
            <small>Data Penjualan</small>
        </h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Penjualan</th>
                        <th>ID Produk</th>
                        <th>ID Member</th>
                        <th>Jumlah Terjual</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query_penjualan = mysqli_query($con, "SELECT * FROM tb_penjualan") or die (mysqli_error($con));
                        if(mysqli_num_rows($query_penjualan) > 0){
                            while ($data = mysqli_fetch_array($query_penjualan)) { ?>
                                    <tr>
                                        <td><?= $data['kd_penjualan']?></td>
                                        <td><?= $data['kd_produk1']?></td>
                                        <td><?= $data['kd_member1']?></td>
                                        <td><?= $data['jumlah_terjual']?></td>
                                    </tr>
                                <?php
                            }
                        }else{
                            echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once('../footer.php'); ?>