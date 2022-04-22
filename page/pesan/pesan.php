<?php 
  include 'backend/koneksi.php';
  
  $mShow = $mysqli->query("SELECT * FROM contacts");
  $eShow = mysqli_fetch_array($mShow);
  
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/nativeCss/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

<body>
    
  <div class="text">Dashboard Sidebar</div>
  
  <form class="" method="post">
    <button type="button" class="btn tombol btn-success" data-bs-toggle="modal" data-bs-target="#modalKirimPesanBanyak"><i class="fa-solid fa-plus"></i>&nbsp;Kirim Banyak Pesan</button>

    <button type="button" class="btn tombol btn-success" data-bs-toggle="modal" data-bs-target="#modalKirimPesanIndividu"><i class="fa-solid fa-plus"></i>&nbsp;Kirim Pesan Individu</button>

    <input class="form-control w-25 me-1 d-inline float-right" width="30" type="search" autofocus placeholder="Cari.." autocomplete="off" id="keyword" name="keyword">
    <!-- <button class="btn btn-outline-success" name="cari" id="tombol-cari" type="submit">Search</button> -->
  </form>   

   <!-- Modal Kirim Pesan untuk Banyak Orang-->
   <div class="modal fade" id="modalKirimPesanBanyak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKirimPesanBanyakLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalKirimPesanBanyakLabel">Kirim Pesan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=kirimPesan" action="index.php?page=tambahPesan" method="post">

              <!-- untuk mengambil ID User dari Session -->
              <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="userID" value="<?= $id_user; ?>">
              </div>
              
              <!-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">List Email Tujuan</label>
                   make foreach input with alll value email visible -->
                  <!-- <select class="form-control" name="email" id="">
                  <option disabled selected> Lihat List Email </option> -->
                  <?php 
                    //$mShow = $mysqli->query("SELECT * FROM contacts");
                    //while ($eShow = mysqli_fetch_array($mShow)) {
                  ?>
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" name="to" 
                    value=""></input> -->

                    <!-- jangan lupa tag phpnya ganti jadi <,?= ?> tanda koma hapus-->
                    <!-- <option value="<?php //$eShow//['email'] ?>"><?php //$eShow['email'] ?></option> -->
                    <?php //} ?>
                  <!-- </select> -->
                  
                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php //echo $eShow['email']; ?>"> 
              </div> -->

              <!-- untuk mengambil data dari ContactID -->
              <div class="mb-3">
                <label for="email" class="form-label">Email Tujuan</label>
                <select class="form-control" name="contactID" id="email">
                  <option disabled selected> Lihat List Email </option>
                  <?php
                    $showcontact = $mysqli->query("SELECT * FROM contacts");
                    while ($dataC = mysqli_fetch_array($showcontact)) {
                  ?>
                  <option value="<?= $dataC['contactID']; ?>" readonly><?= $dataC['email']; ?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
    
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Subjek</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="subject" required>
              </div>

              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Pesan</label>
                  <textarea class="form-control" id="exampleInputEmail1" name="message" required></textarea>
              </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Kirim</button>
                  <button class="btn btn-primary" formaction="index.php?page=draftPesan">Draft</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
       

  <!-- Modal Kirim Pesan untuk Kirim Perorangan-->
  <div class="modal fade" id="modalKirimPesanIndividu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKirimPesanIndividuLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalKirimPesanIndividuLabel">Kirim Pesan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=kirimPesanPribadi" method="post">

              <!-- untuk mengambil ID User dari Session -->
              <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="userID" value="<?= $id_user; ?>">
              </div>
              
              <!-- untuk mengambil data dari ContactID -->
              <div class="mb-3">
              <label for="" class="form-label">Email Tujuan</label>
              <select class="form-control" name="contactID" id="email">
                <option disabled selected> Pilih </option>
                <?php
                $showcontact = $mysqli->query("SELECT * FROM contacts");
                while ($dataC = mysqli_fetch_array($showcontact)) {
                ?>
                // make option value for get email and contactID
                <option value="<?= $dataC['contactID'] ?>"><?= $dataC['email'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
              
              <!-- untuk input Subject -->
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Subjek</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="subject" required>
              </div>
              
              <!-- untuk input message -->
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Pesan</label>
                  <textarea class="form-control" id="exampleInputEmail1" name="message" required></textarea>
              </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Kirim</button>
                  <button class="btn btn-primary" formaction="index.php?page=draftPesan">Draft</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div id="container1">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Pengirim</th>
          <th scope="col">Penerima</th>
          <th scope="col">Email Penerima</th>
          <th scope="col">Subject & Pesan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <br><br>
      <tbody>
      <?php 

          $no = 0;
          $show = $mysqli->query("SELECT users.nameU, contacts.email, contacts.nameC, messages.messageID, messages.subject, messages.message, messages.createdAt, messages.status 
          FROM users, contacts, messages
          WHERE messages.userID = users.userID
          AND messages.contactID = contacts.contactID
          ORDER BY messages.createdAt DESC");
          while ($c = mysqli_fetch_array($show)) {
          $no++;
      ?>
      <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $c['nameU']; ?></td>
          <td><?php echo $c['nameC']; ?></td>
          <td><?php echo $c['email']; ?></td>
          <td class="pesan"><b><?php echo $c['subject'];?></b><p><?php echo $c['message']; ?></p></td>
          <td><?php echo $c['createdAt']; ?></td>
          <td><?php echo $c['status']?></td>
          <td>

              <!-- jika status draft maka actionnya ada ubah, hapus dan kirim  -->
              <?php if ($c['status'] == 'draft') { ?>
                <a href="index.php?page=ubahPesan&no=<?php echo $c['messageID'];?>">
                  <button class="btn btn-warning btn-sm" role="button" role="button"><i class="fa-solid fa-edit"></i></button>
              </a>
              <a href="index.php?page=hapusPesan&no=<?php echo $c['messageID'];?>" onclick="return confirm('Yakin ingin menghapus data?')">
                  <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
              </a>
              <a href="index.php?page=kirimPesanBaris&no=<?php echo $c['messageID'];?>">
                  <button class="btn btn-success btn-sm" role="button" role="button"><i class="fa-solid fa-paper-plane"></i></button>
              </a>
              <?php } ?>

              <!-- jika status success maka actionnya hanya ada status Terkirim dan juga Hapus -->
              <?php if ($c['status'] == 'success') { ?>
                  <button class="btn btn-success btn-sm" style="cursor: default;">Terkirim</button>
                <a href="index.php?page=hapusPesan&no=<?php echo $c['messageID'];?>" onclick="return confirm('Yakin ingin menghapus data?')">
                  <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                </a>
              <?php } ?>
          </td>
      </tr>
          <?php } ?>
      
      </tbody>
    </table>
  </div>

      <script src="assets/js/scriptPesan.js"></script>
      
</body>
</html>

      