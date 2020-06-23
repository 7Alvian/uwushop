<?php include_once('../header.php'); ?>

<div class="box">
    <h1>Produk</h1>
    <h4>
        <small>Edit Data Produk</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
                $id = @$_GET['id'];
                $query_produk = mysqli_query($con, "SELECT * FROM tb_produk WHERE kd_produk = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($query_produk);
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="produk">Nama Produk</label>
                    <input type = "hidden" name="id" value="<?=$data['kd_produk']?>">
                    <input type="text" name="produk" id="produk" class="form-control" value="<?=$data['nama_produk']?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" name="stok" id="stok" class="form-control" value="<?=$data['stok']?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control" value="<?=$data['harga']?>">
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>