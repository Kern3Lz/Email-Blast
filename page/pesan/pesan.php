
<?php 
  include 'backend/koneksi.php';
  
  $mShow = $mysqli->query("SELECT * FROM contacts");
  $eShow = mysqli_fetch_array($mShow);
  
?>

    <!-- <style>
.pesan {
  overflow-y: scroll;
  height: 100px;
  display: block;
  margin: 0;
}

.pesan p {
  width: 400px;
  
} -->
      </style>
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

   <!-- Modal Kirim Pesan Banyak-->
   <div class="modal fade" id="modalKirimPesanBanyak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKirimPesanBanyakLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalKirimPesanBanyakLabel">Kirim Pesan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=kirimPesan" action="index.php?page=tambahPesan" method="post">
              <!-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dari</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="from" required></input>
              </div> -->
              

              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">List Email Tujuan</label>
                  <!-- make foreach input with alll value email visible -->
                  <select class="form-control" name="email" id="">
                  <option disabled selected> Lihat List Email </option>
                  <?php 
                    $mShow = $mysqli->query("SELECT * FROM contacts");
                    while ($eShow = mysqli_fetch_array($mShow)) {
                  ?>
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" name="to" 
                    value=""></input> -->
                    <option value="<?= $eShow['email'] ?>"><?= $eShow['email'] ?></option>
                    <?php } ?>
                  </select>
                  
                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" required value="<?php //echo $eShow['email']; ?>"> -->
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
                  <a href="index.php?page=draftPesan">
                    <button type="button" class="btn btn-primary">Draft</button>
                  </a>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
       

  <!-- Modal Kirim Pesan-->
  <div class="modal fade" id="modalKirimPesanIndividu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKirimPesanIndividuLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalKirimPesanIndividuLabel">Kirim Pesan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=kirimPesanPribadi" method="post">
              <!-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dari</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="from" required></input>
              </div> -->
              <div class="mb-3">
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="userID" value="<?= $id_user; ?>">
              </div>
              
              

              <!-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Pilih Email</label>
                  <select class="form-control" name="contactID" id="">
                  <option disabled selected> Lihat List Email </option>
                  <?php 
                    //$mShow = $mysqli->query("SELECT * FROM contacts");
                    //while ($eShow = mysqli_fetch_array($mShow)) {
                  ?>
                    <option value="<?php //$eShow//['contactID'] ?>"><?php //$eShow['email'] ?></option>
                    <?php //} ?>
                  </select>
              </div> -->

              <div class="mb-3">
              <label for="" class="form-label">Email Tujuan</label>
              <select class="form-control" name="email" id="email">
                <option disabled selected> Pilih </option>
                <?php
                // make variable for list explode
                
                $showcontact = $mysqli->query("SELECT * FROM contacts");
                while ($dataC = mysqli_fetch_array($showcontact)) {
                ?>
                  <option value="<?= $dataC['contactID'].$dataC['email']?>"><?= $dataC['email']?></option>
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
                  <a href="index.php?page=draftPesan">
                    <button type="button" class="btn btn-primary">Draft</button>
                  </a>
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
          ORDER BY messages.createdAt ASC");
          while ($c = mysqli_fetch_array($show)) {
          $no++;
      ?>
      <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $c['nameU']; ?></td>
          <td><?php echo $c['nameC']; ?></td>
          <td><?php echo $c['email']; ?></td>
          <!-- <td class="pesan"><div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0"><p><?php //echo $c['message']; ?></p></div></td> -->
          <td class="pesan"><b><?php echo $c['subject'];?></b><p><?php echo $c['message']; ?></p></td>
          <td><?php echo $c['createdAt']; ?></td>
          <td><?php echo $c['status']?></td>
          <td>
              <!-- make if else for status draft and success  -->
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
              <!-- make if else for status success -->
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
<!-- <div class="text">Email</div>
        <a href="index.php?page=kirimPesan"><button type="button" class="btn tombol btn-success"><i class="fa-solid fa-file-circle-plus"></i>&nbsp;Kirim Email</button></a>

      <table class="table table-striped">
        <thead>
          <tr style="text-align: center;">
            <th scope="col">No</th>
            <th scope="col">Admin</th>
            <th scope="col">Nama Kontak</th>
            <th scope="col">Pesan</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td class="max-title" style="   max-width: 350px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, soluta quo labore animi beatae, necessitatibus voluptatibus dicta saepe esse eos ipsam facere possimus ab quis temporibus, exercitationem ad iusto? Magni voluptatem similique aspernatur deleniti perspiciatis, provident vitae numquam obcaecati quas. Error asperiores eveniet, obcaecati dignissimos sed eos et mollitia enim.</td>
            <td>01/04/2022</td>
            <td>
                <div class="draft"><i class="fa-solid fa-scroll icon"></i>&nbsp;Draft</div>
                <div class="terkirim"><i class="fa-solid fa-paper-plane icon"></i>&nbsp;Terkirim</div>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td class="max-title" style="   max-width: 350px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident temporibus libero et commodi quam placeat ad iste laudantium delectus, quas cum nihil aut nam sed! Odit dolor assumenda optio vel magni a accusamus sapiente velit, at delectus temporibus consequuntur, omnis magnam cumque error quas rem repudiandae architecto ab blanditiis laborum quam eaque. Perferendis corporis amet dolor dolorem temporibus, magnam nulla iste recusandae. Accusamus vero sequi totam, dolor commodi eligendi earum error nemo neque. Qui repellat illo amet architecto, quisquam mollitia, ad ut dolores eum, quam molestiae nemo magnam. Asperiores expedita numquam eveniet totam repudiandae. Earum deleniti consequuntur architecto molestiae sequi!</td>
            <td>04/05/2022</td>
            <td>
                <div class="draft"><i class="fa-solid fa-scroll icon"></i>&nbsp;Draft</div>
                <div class="terkirim"><i class="fa-solid fa-paper-plane icon"></i>&nbsp;Terkirim</div>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>larry</td>
            <td>larry</td>
            <td>03/04/2022</td>
            <td>
                <div class="draft"><i class="fa-solid fa-scroll icon"></i>&nbsp;Draft</div>
                <div class="terkirim"><i class="fa-solid fa-paper-plane icon"></i>&nbsp;Terkirim</div>
            </td>
          </tr>
        </tbody>
      </table> -->

      