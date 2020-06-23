<?php include_once('../header.php'); ?>
 
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Dashboard</h1>
            <p> Selamat datang <b> <?=$_SESSION['user']?></b></p>
            <p>Di halaman ini akan menampilkan banyak member dan produk</p>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        </div>
    </div>

<?php include_once('../footer.php'); ?>