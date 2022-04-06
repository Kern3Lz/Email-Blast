<?php 
    $mysqli->query("DELETE FROM contacts WHERE contactID = '$_GET[no]'");

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        echo "<script>document.location='index.php?page=contacts';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');</script>";
        echo "<script>document.location='index.php?page=contacts';</script>";
    }
?>