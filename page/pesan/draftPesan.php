<?php 
    include 'backend/koneksi.php';

    $userID = $_SESSION ['user'];
    $contactID = $_POST['contactID'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'draft';
    
    $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
                              VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Pesan Berhasil Dsimpan di Draft');</script>";
        // echo "<script>document.location='index.php?page=pesan';</script>";
    } else {
        echo "<script>alert('Pesan Gagal Disimpan di Draft');</script>";
        // echo "<script>document.location='index.php?page=pesan';</script>";
    }
    var_dump($_POST);
    var_dump($insert);
    var_dump($mysqli->affected_rows);
?>