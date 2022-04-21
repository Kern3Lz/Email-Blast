<?php 
    // make insert data to messages
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $createdAt = date('Y-m-d H:i:s');
    $status = 'draft';

    $mysqli->query("INSERT INTO messages (email, subject, message, createdAt, status) VALUES ('$email', '$subject', '$message', '$createdAt', '$status')");

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Pesan Berhasil Dikirim');</script>";
        echo "<script>document.location='index.php?page=pesan';</script>";
    } else {
        echo "<script>alert('Pesan Gagal Dikirim');</script>";
        echo "<script>document.location='index.php?page=pesan';</script>";
    }
?>