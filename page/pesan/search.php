<?php 
require '../../backend/koneksi.php';

$keyword = $_GET["keyword"];

// fungsi ini untuk menjalankan fungsi live search pada database, statement ini tidak boleh dihapus supaya live search bekerja

$sql = "SELECT users.nameU, contacts.email, contacts.nameC, messages.messageID, messages.subject, messages.message, messages.createdAt, messages.status 
        FROM 
        users, contacts, messages
        WHERE
        users.userID = messages.userID AND
        contacts.contactID = messages.contactID AND
        (
          users.nameU LIKE '%$keyword%' OR
          contacts.email LIKE '%$keyword%' OR
          contacts.nameC LIKE '%$keyword%' OR
          messages.subject LIKE '%$keyword%' OR
          messages.message LIKE '%$keyword%' OR
          messages.createdAt LIKE '%$keyword%' OR
          messages.status LIKE '%$keyword%'
        )
        ORDER BY messages.createdAt ASC";

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
        //   $show = $mysqli->query("SELECT users.nameU, contacts.email, contacts.nameC, messages.messageID, messages.message, messages.createdAt, messages.status 
        //   FROM users, contacts, messages
        //   WHERE messages.userID = users.userID
        //   AND messages.contactID = contacts.contactID
        //   ORDER BY messages.createdAt ASC");
        $show = $mysqli->query($sql);
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
              <?php } ?>
          </td>
      </tr>
          <?php } ?>
      
      </tbody>
    </table>
<?php endif ?>