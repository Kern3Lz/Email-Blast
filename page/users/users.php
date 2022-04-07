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
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">

<body>
    
        <div class="text">Data User</div>
        <button type="button" class="btn tombol btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>&nbsp;Tambah</button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=tambahUsers" method="post">
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name">
              </div>
    
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Level</label>
                  <select name="level" id="exampleInputEmail1" class="form-select">
                        <option selected="">Pilih Level</option>
						<?php $show = $mysqli->query("SELECT * FROM users"); ?>
						<?php foreach( $show as $row ) : ?>
							<option value="<?= $row["level"]; ?>"><?= $row["level"]; ?></option>
						<?php endforeach; ?>
					</select>
              </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <br><br>
        
        <?php 
            
            $no = 0;
            $show = $mysqli->query("SELECT * FROM users");
            while ($c = mysqli_fetch_array($show)) {
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $c['name']; ?></td>
            <td><?php echo $c['email']; ?></td>
            <td><?php echo $c['level']?></td>
            <td>
                <a href="index.php?page=ubahUsers&no=<?php echo $c['userID'];?>">
                    <button class="btn btn-warning btn-sm"  role="button"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                </a>
                <a href="index.php?page=hapusUsers&no=<?php echo $c['userID'];?>" onclick="return confirm('Yakin akan menghapus data?')">
                    <button class="btn btn-danger btn-sm"  role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Hapus</button>
                </a>
            </td>
        </tr>
            <?php } ?>
        <tbody>
        </tbody>
      </table>

</body>
</html>