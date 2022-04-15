<?php 
require '../../backend/koneksi.php';

$keyword = $_GET["keyword"];

// fungsi ini untuk menjalankan fungsi live search pada database, statement ini tidak boleh dihapus supaya live search bekerja
$sql = "SELECT * FROM contacts
            WHERE
          nameC LIKE '%$keyword%' OR
          email LIKE '%$keyword%'
        ";
$mysqli->query($sql);
?>
<?php if ($mysqli->affected_rows < 1): ?>
    <div class="alert alert-danger mt-3" role="alert">
        Data tidak ditemukan
    </div>
<?php else: ?>

<table class="table table-striped">
      <thead>
        <tr>
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

          // fungsi ini harus diberi statement LIKE agar live search ajax bisa bekerja 
          $show = $mysqli->query("SELECT * FROM contacts
          WHERE
        nameC LIKE '%$keyword%' OR
        email LIKE '%$keyword%'");
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
<?php endif ?>