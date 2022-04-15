<?php
    $mysqli->query("DELETE FROM messages WHERE messageID = '$_GET[no]'");

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        echo "<script>document.location='index.php?page=pesan';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');</script>";
        echo "<script>document.location='index.php?page=pesan';</script>";
    }
?>
