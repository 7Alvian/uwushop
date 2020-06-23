<?php   
    require_once "../config/config.php";
    require_once "../assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if(isset($_POST['tambah'])){ 
        $kd = Uuid::uuid4()->toString();
        $user = trim(mysqli_real_escape_string($con, $_POST['nama_produk']));
        $email = trim(mysqli_real_escape_string($con, $_POST['email']));
        $password = trim(mysqli_real_escape_string($con, $_POST['password']));
        $query = "INSERT INTO tb_member (kd_member, user, email, password) VALUES ('$kd','$user','$email','$password')";

        mysqli_query($con, $query) or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }else if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $produk = trim(mysqli_real_escape_string($con, $_POST['produk']));
        $stok = trim(mysqli_real_escape_string($con, $_POST['stok']));
        $harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
        $query = "UPDATE tb_produk SET nama_produk = '$produk', stok = '$stok', harga ='$harga' WHERE kd_produk = '$id'";

        mysqli_query($con, $query) or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }

?>