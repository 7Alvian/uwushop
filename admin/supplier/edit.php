<?php include_once('../header.php'); ?>

<div class="box">
    <h1>Supplier</h1>
    <h4>
        <small>Edit Data Supplier</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
                $id = @$_GET['id'];
                $query_supplier = mysqli_query($con, "SELECT * FROM tb_supplier WHERE kd_supplier = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($query_supplier);
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Supplier</label>
                    <input type = "hidden" name="id" value="<?=$data['kd_supplier']?>">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama_supp']?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?=$data['alamat']?>">
                </div>
                <div class="form-group">
                    <label for="telepon">No Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" value="<?=$data['no_telp']?>">
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>