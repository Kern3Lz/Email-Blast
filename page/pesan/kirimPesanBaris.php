<?php 
    include 'backend/koneksi.php';
  
    $eselect = $mysqli->query("SELECT contacts.email, contacts.nameC, messages.messageID, messages.subject, messages.message, messages.createdAt, messages.status 
    FROM contacts, messages
    WHERE contacts.contactID = messages.contactID AND
          messages.messageID = '$_GET[no]'
    ORDER BY messages.createdAt ASC");

    // $c = mysqli_fetch_array($edit);
  
    ini_set("SMTP","localhost");
    ini_set("smtp_port","25");
    ini_set("sendmail_from","suken836@gmail.com");
    ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t");
  
  while ($row_data = mysqli_fetch_assoc($eselect)) {
    // $to = $_POST['to'];
    $to = $row_data['email'];
    $subject = $row_data['subject'];
    $message = $row_data['message'];
    $headers = 'From: Zundera <suken836@gmail.com>' . "\r\n" .
               'Reply-To: suken836@gmail.com' . "\r\n" .
               'MIME-Version: 1.0' . "\r\n" .
               'Content-type: text/html; charset-utf-8';
  
    $result = mail("$to", "$subject", "$message", $headers);
  }
    if ($result) {
      echo "<script>alert('Pesan Berhasil Dikirim');</script>";
      echo "<script>document.location='index.php?page=pesan';</script>";
      // make change status from draft to success
      $mysqli->query("UPDATE messages SET status = 'success' WHERE messageID = '$_GET[no]'");
    } else {
      echo "<script>alert('Pesan Gagal Dikirim');</script>";
      echo "<script>document.location='index.php?page=pesan';</script>";
    }
    var_dump($result);
?>