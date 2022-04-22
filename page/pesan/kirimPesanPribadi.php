<?php 
  include 'backend/koneksi.php';

  $eselect = $mysqli->query("SELECT contactID, email FROM contacts");

  ini_set("SMTP","localhost");
  ini_set("smtp_port","25");
  ini_set("sendmail_from","suken836@gmail.com");
  ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");

  // ambil data dari form
  $getContactID = $_POST['contactID'];

  // ubah data contactID yang diambil dari $getContactID menjadi data email supaya bisa dikirim 
  $getEmail = $mysqli->query("SELECT email FROM contacts WHERE contactID = '$getContactID'");

  // ambil data email dari $getEmail
  $getEmail = $getEmail->fetch_assoc();
  
  // menampilkan email sesuai dengan contactID yang dipilih
  $to = $getEmail['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = 'From: Zundera <suken836@gmail.com>' . "\r\n" .
             'Reply-To: suken836@gmail.com' . "\r\n" .
             'MIME-Version: 1.0' . "\r\n" .
             'Content-type: text/html; charset-utf-8';

  $result = mail("$to", "$subject", "$message", $headers);
  var_dump($to);
//}
  if ($result) {
    echo "<script>alert('Pesan Berhasil Dikirim');</script>";
    $userID = $_SESSION ['user'];
    $contactID = $_POST['contactID'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'success';
    
    $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
                              VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");
    echo "<script>document.location='index.php?page=pesan';</script>";
  } else {
    echo "<script>alert('Pesan Gagal Dikirim');</script>";
    $userID = $_SESSION ['user'];
    $contactID = $_POST['contactID'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'draft';
    
    $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
                              VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");
    echo "<script>document.location='index.php?page=pesan';</script>";
  }
?>
