<?php 
    require '../../backend/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
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
            <td><?= $c ["name"]; ?></td>
            <td><?= $c ["email"]; ?></td>
            <td><?= $c ["password"]; ?></td>
            <td><?= $c ["level"]; ?></td>
            <td>
                <a href="<?= $c["userID"]; ?>">Ubah</a> |
                <a href="<?= $c["userID"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>s
        </tr>
            <?php } ?>
        <tbody>
        </tbody>
      </table>
</body>
</html>