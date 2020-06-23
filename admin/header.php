<?php   
    require_once "config/config.php";
    require_once "assets/libs/vendor/autoload.php";
    if(!isset($_SESSION['user'])){
        echo "<script>window.location='".base_url('auth/login.php')."';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Toko Uhuyposter</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/simple-sidebar.css">
    <link rel="icon" href="<?=base_url() ?>/assets/poster.png">
</head>
<body>
    <script src="<?=base_url('/assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('/assets/js/bootstrap.min.js')?>"></script>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><span class="text-primary"><b>ADMINISTRATOR</b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('member/data.php')?>">Data Member</a>
                </li>
                <li>
                    <a href="<?=base_url('produk/data.php')?>">Data Produk</a>
                </li>
                <li>
                    <a href="<?=base_url('supplier/data.php')?>">Data Supplier</a>
                </li>
                <li>
                    <a href="<?=base_url('penjualan/data.php')?>">Data Penjualan</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>  
        <div id="page-content-wrapper">
        <div class="container-fluid">