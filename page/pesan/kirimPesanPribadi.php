<?php 
  include 'backend/koneksi.php';
  
  // $userID = $_SESSION['user'];
  // $contactID = $_POST['email'];
  // $subject = $_POST['subject'];
  // $message = $_POST['message'];
  // $status = 'draft';

  // // explode untuk memisahkan data email dan contactID dari file pesan.php bagian kirim pesan individual
  // $explode = explode(",", $contactID);
  // $email = $explode[0];
  // $contactID = $explode[0];

  // $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
  //                           VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");

  // if ($insert) {
  //   echo "<script>alert('Pesan Berhasil Dikirim');</script>";
  //   // echo "<script>document.location='index.php?page=pesan';</script>";
  // } else {
  //   echo "<script>alert('Pesan Gagal Dikirim');</script>";
  //   // echo "<script>document.location='index.php?page=pesan';</script>";
  // }
  // var_dump($email)


  $eselect = $mysqli->query("SELECT email FROM contacts");

  ini_set("SMTP","localhost");
  ini_set("smtp_port","25");
  ini_set("sendmail_from","suken836@gmail.com");
  ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");

//while ($row_data = mysqli_fetch_assoc($eselect)) {
  // $to = $_POST['to'];
  $to = $_POST['email'];
  // make explode to get email from contacts
  $explode = explode(".", $to);
  $email = $explode[0];
  //$contactID = $explode[0];

  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = 'From: Zundera <suken836@gmail.com>' . "\r\n" .
             'Reply-To: suken836@gmail.com' . "\r\n" .
             'MIME-Version: 1.0' . "\r\n" .
             'Content-type: text/html; charset-utf-8';

  $result = mail("$email", "$subject", "$message", $headers);
  var_dump($email);
//}
  if ($result) {
    echo "<script>alert('Pesan Berhasil Dikirim');</script>";
    // echo "<script>document.location='index.php?page=pesan';</script>";
    $userID = $_SESSION['user'];
    $contactID = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'draft';

    // explode untuk memisahkan data email dan contactID dari file pesan.php bagian kirim pesan individual
    $explode = explode(".", $contactID);
    $email = $explode[1];
    $contactID = $explode[0];

    $insert = $mysqli->query("INSERT INTO messages (userID, contactID, subject, message, status) 
                              VALUES ('$userID', '$contactID', '$subject', '$message', '$status')");
    
  } else {
    echo "<script>alert('Pesan Gagal Dikirim');</script>";
    // echo "<script>document.location='index.php?page=pesan';</script>";
  }
?>
