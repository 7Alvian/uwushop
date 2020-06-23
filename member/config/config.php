<?php

    session_start();

    $con = mysqli_connect('localhost', 'root', '', 'jualposter');
    if(mysqli_connect_errno()){
        echo mysqli_connect_error();
    }

    function base_url($url = null){
        $base_url = "http://localhost/poster/member";
        if($url != null){
            return $base_url."/".$url;
        }else {
            return $base_url;
        }
    }

?>