<?php include_once('../header.php'); ?>
 
    <div class="row">
        <div class="col-lg-12">
            <h1 class="head text-center">Dashboard</h1>
            <p> Selamat datang <b> <?=$_SESSION['user']?></b></p>
            <div class="container mb-3">
                <div class="row text-white text-center">
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url() ?>/assets/black.jpg" alt="the image alt text here">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Barang Favorit</h3>
                                    <p class="card-text">Barang Favorit anda ada 2</p>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url() ?>/assets/black.jpg" alt="the image alt text here">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Progres Belanja</h3>
                                    <p class="card-text">Anda belum belanja apapun</p>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url() ?>/assets/black.jpg" alt="the image alt text here">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">Riwayat Pembelian</h3>
                                    <p class="card-text">Riwayat Pembelian anda 2 barang</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        </div>
    </div>

<?php include_once('../footer.php'); ?>