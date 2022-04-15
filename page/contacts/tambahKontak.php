<?php 
    $name = htmlspecialchars($_POST['nameC']);
    $email = htmlspecialchars($_POST['email']);

    $sql = "INSERT INTO contacts (nameC, email) VALUES ('$name', '$email')";

    $mysqli->query($sql);
    
    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=contacts';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=contacts';</script>";
    }
?>