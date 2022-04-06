<?php 
    $mysqli = mysqli_connect("localhost","root","","emailblast");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " . mysqli_connect_error(), E_USER_ERROR;
    }
?>