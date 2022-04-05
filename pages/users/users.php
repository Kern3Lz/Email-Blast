<?php 
    require '../backend/functions.php';
    $user = query ("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1px" cellpadding="10" cellspacing="0">
<thead>
                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="ID User: activate to sort column ascending">Nama</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama User: activate to sort column ascending">Email</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Password: activate to sort column ascending">Password</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Level: activate to sort column ascending">Level</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr></thead>

        <?php $idbuku = 1; ?>
        <?php foreach($user as $row) {?>
        <tr>
            <td><?= $idbuku; ?></td>
            <td><?= $row ["name"]; ?></td>
            <td><?= $row ["email"]; ?></td>
            <td><?= $row ["password"]; ?></td>
            <td><?= $row ["level"]; ?></td>
            <td>
                <a href="ubahBuku.php?userID=<?= $row["userID"]; ?>">Ubah</a> |
                <a href="hapusBuku.php?userID=<?= $row["userID"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
        </tr>
        <?php $idbuku++; ?>
	    <?php } ?>
    </table>
</body>
</html>