<?php include_once('../header.php'); ?>

<div class="box">
    <h1>Member</h1>
    <h4>
        <small>Edit Data Member</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
                $id = @$_GET['id'];
                $query_member = mysqli_query($con, "SELECT * FROM tb_member WHERE kd_member = '$id'") or die (mysqli_error($con));
                $data = mysqli_fetch_array($query_member);
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="user">User</label>
                    <input type = "hidden" name="id" value="<?=$data['kd_member']?>">
                    <input type="text" name="user" id="user" class="form-control" value="<?=$data['user']?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?=$data['email']?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" value="<?=$data['password']?>">
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../footer.php'); ?>