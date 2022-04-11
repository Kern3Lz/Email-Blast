<?php 
    $mysqli->query("DELETE FROM users WHERE userID = '$_GET[no]'");

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    }
?>