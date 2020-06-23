<?php   
    require_once "../config/config.php";
    require_once "../assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if(isset($_POST['tambah'])){ 
        $kd = Uuid::uuid4()->toString();
        $nama_supp = @$_POST['nama'];
        $alamat =  @$_POST['alamat'];
        $telepon =  @$_POST['telepon'];
        // var_dump($nama_supp);
        $query = "INSERT INTO tb_supplier (kd_supplier, nama_supp, alamat, no_telp) VALUES ('$kd','$nama_supp','$alamat','$telepon')";

        mysqli_query($con, $query) or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }else if(isset($_POST['edit'])){
        $id = @$_POST['id'];
        $nama_supp = @$_POST['nama'];
        $alamat =  @$_POST['alamat'];
        $telepon =  @$_POST['telepon'];
        $query = "UPDATE tb_supplier SET nama_supp = '$nama_supp', alamat = '$alamat', no_telp ='$telepon' WHERE kd_supplier = '$id'";

        mysqli_query($con, $query) or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }

?>