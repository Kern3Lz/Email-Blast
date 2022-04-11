<?php 
    $contactID = htmlspecialchars($_POST['contactID']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    $sql = "UPDATE contacts SET name = '$name', email = '$email' WHERE contactID = '$contactID'";

    $mysqli->query($sql);

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>document.location='index.php?page=contacts';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>document.location='index.php?page=contacts';</script>";
    }
    


?>