<?php 
require '../../backend/koneksi.php';

$keyword = $_GET["keyword"];

// fungsi ini untuk menjalankan fungsi live search pada database, statement ini tidak boleh dihapus supaya live search bekerja
$sql = "SELECT * FROM users
            WHERE
          nameU LIKE '%$keyword%' OR
          email LIKE '%$keyword%' OR
          level LIKE '%$keyword%'
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
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <br><br>
        
        <?php 
          $no = 0;
          $show = $mysqli->query("SELECT * FROM users
            WHERE
            nameU LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            level LIKE '%$keyword%'
          ");
            while ($c = mysqli_fetch_array($show)) {
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $c['nameU']; ?></td>
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
<?php endif ?>