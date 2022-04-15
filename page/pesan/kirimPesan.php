<?php 

$headers = 'From: suken836@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset-utf-8';

$result = mail("suken836@gmail.com", "Hello World", "This is Email Body", $headers);
var_dump($result);

//   include 'backend/koneksi.php';

//   $sql = $mysqli->query("SELECT users.nameU, contacts.nameC, messages.messageID, messages.message, messages.createdAt 
//                           FROM users, contacts, messages
//                           WHERE messages.userID = users.userID
//                           AND messages.contactID = contacts.contactID");
//  $mysqli->query($sql);

//   while ($c = mysqli_fetch_array($sql)) {

//       $to = $_POST['to'];
//       $subject = $_POST['subject'];
//       $message = $_POST['message'];
//       $headers = "From: ".$_POST['from'];

//       mail($to, $subject, $message, $headers);
//       echo "<script>alert('Pesan Berhasil Dikirim');</script>";
//     }

// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
// $from = "suken836@gmail.com";
// $to = "fauzansuken@gmail.com";
// $subject = "Checking PHP mail";
// $message = "PHP mail works just fine";
// $headers = "From:" . $from;
// mail($to,$subject,$message, $headers);
// echo "The email message was sent.";

?>

<!-- <div class="text">Email</div>
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
          
             <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kepada </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">isi pesan </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
          </div>
            <div class="submit">
             <button type="submit" class="btn btn-primary">Kirim</button>
           </div>
          </form>
    </section> -->