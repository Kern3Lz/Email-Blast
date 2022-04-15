<?php 
    $name = htmlspecialchars($_POST['nameU']);
    $email = htmlspecialchars($_POST['email']);
    $level = htmlspecialchars($_POST['level']);
    $password = htmlspecialchars(md5($_POST['password']));

    $sql = "INSERT INTO users (nameU, email, level, password) VALUES ('$name', '$email', '$level', '$password')";

    $mysqli->query($sql);
    
    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    }
?>