<?php 
  include 'backend/koneksi.php';
  
  $eselect = $mysqli->query("SELECT contactID, email FROM contacts");

  ini_set("SMTP","localhost");
  ini_set("smtp_port","25");
  ini_set("sendmail_from","suken836@gmail.com");
  ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");

while ($row_data = mysqli_fetch_assoc($eselect)) {
  // $to = $_POST['to'];
  $to = $row_data['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = 'From: Zundera <suken836@gmail.com>' . "\r\n" .
             'Reply-To: suken836@gmail.com' . "\r\n" .
             'MIME-Version: 1.0' . "\r\n" .
             'Content-type: text/html; charset-utf-8';

  $result = mail("$to", "$subject", "$message", $headers);
  if ($result) {

    echo "<script>alert('Pesan Berhasil Dikirim');</script>";
    $userID = $_SESSION ['user'];
    $contactID = $row_data['contactID'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'success';
    
    $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
                              VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");
    echo "<script>document.location='index.php?page=pesan';</script>";
  } else {
    echo "<script>alert('Pesan Gagal Dikirim');</script>";
    $userID = $_SESSION ['user'];
    $contactID = $row_data['contactID'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'draft';
    
    $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
                              VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");
    echo "<script>document.location='index.php?page=pesan';</script>";
  }
}
  var_dump($result);
?>