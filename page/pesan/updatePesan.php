<?php 
    // make update php
    $userID = htmlspecialchars($_POST['userID']);
    $messageID = htmlspecialchars($_POST['messageID']);
    $contactID = htmlspecialchars($_POST['contactID']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = $_POST['message'];
    $status = htmlspecialchars($_POST['status']);

    // make update query 
    $sql = "UPDATE messages SET contactID = '$contactID', subject = '$subject', message = '$message', status = '$status' WHERE messages.messageID = '$messageID'";

    $mysqli->query($sql);

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Pesan Berhasil Diubah');</script>";
        echo "<script>document.location='index.php?page=pesan';</script>";
    } else {
        echo "<script>alert('Data Pesan Gagal Diubah');</script>";
        echo "<script>document.location='index.php?page=pesan';</script>";
    }
    var_dump($_POST)
?>