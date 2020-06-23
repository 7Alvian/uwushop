<?php   
    require_once "../config/config.php";
    require_once "../assets/libs/vendor/autoload.php";

    use Ramsey\Uuid\Uuid;
    use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

    if(isset($_POST['tambah'])){ 
        $kd = Uuid::uuid4()->toString();
        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
        $email = trim(mysqli_real_escape_string($con, $_POST['email']));
        $password = trim(mysqli_real_escape_string($con, $_POST['password']));
        $query = "INSERT INTO tb_member (kd_member, user, email, password) VALUES ('$kd','$user','$email','$password')";

        mysqli_query($con, $query) or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }else if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
        $email = trim(mysqli_real_escape_string($con, $_POST['email']));
        $password = trim(mysqli_real_escape_string($con, $_POST['password']));
        $query = "UPDATE tb_member SET user = '$user', email = '$email', password ='$password' WHERE kd_member = '$id'";

        mysqli_query($con, $query) or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }

?>