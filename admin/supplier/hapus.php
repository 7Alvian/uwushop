<?php
    require_once "../config/config.php";
    
    $id = @$_GET['id'];
    $query = "DELETE FROM tb_supplier WHERE kd_supplier = '$id'";
    
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo "<script>window.location='data.php'</script>";
?>