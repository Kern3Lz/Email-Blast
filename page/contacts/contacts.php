<?php 
  include 'backend/koneksi.php';
  
  
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
    <button type="button" class="btn tombol btn-success" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-plus"></i>&nbsp;Tambah</button>
    <input class="form-control w-25 me-1 d-inline float-right" width="30" type="search" autofocus placeholder="Cari.." autocomplete="off" id="keyword" name="keyword">
    <!-- <button class="btn btn-outline-success" name="cari" id="tombol-cari" type="submit">Search</button> -->
  </form>   

       

  <!-- Modal Tambah Kontak-->
  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Tambah Kontak</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=tambahKontak" method="post">
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nameC" required>
              </div>
    
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
              </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <div id="container1">
    <table class="table table-striped">
      <thead>
        <tr">
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Email</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <br><br>
      <tbody>
      <?php 

          $no = 0;
          $show = $mysqli->query("SELECT * FROM contacts");
          while ($c = mysqli_fetch_array($show)) {
          $no++;
      ?>
      <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $c['nameC']; ?></td>
          <td><?php echo $c['email']; ?></td>
          <td>
              <a href="index.php?page=ubahKontak&no=<?php echo $c['contactID'];?>">
                  <button class="btn btn-warning btn-sm" role="button" role="button"><i class="fa-solid fa-edit"></i>&nbsp;Ubah</button>
              </a>
              <a href="index.php?page=hapusKontak&no=<?php echo $c['contactID'];?>" onclick="return confirm('Yakin ingin menghapus data?')">
                  <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>&nbsp;Hapus</button>
              </a>
          </td>
      </tr>
          <?php } ?>
      
      </tbody>
    </table>
  </div>

      <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
})
      </script>
      <script src="assets/js/scriptContacts.js"></script>
      
</body>
</html>