<?php 
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $level = htmlspecialchars($_POST['level']);

    $sql = "INSERT INTO users (name, email, level) VALUES ('$name', '$email', $level)";

    $mysqli->query($sql);
    
    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    }
?>