<?php 
    $edit = $mysqli->query("SELECT * FROM messages WHERE messageID = '$_GET[no]'");
    $c = mysqli_fetch_array($edit);
    
?>
<form action="index.php?page=updatePesan" method="post">
    <div class="mb-3">
        <input type="hidden" class="form-control" id="exampleInputEmail1" name="userID" value="<?= $id_user; ?>">
    </div>
    <div class="mb-3">
        <input type="hidden" class="form-control" id="exampleInputEmail1" name="messageID" value="<?php echo $c['messageID']; ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email Tujuan</label>
            <select class="form-control" name="contactID" id="email">
                <?php
                $showcontact = $mysqli->query("SELECT * FROM contacts");
                while ($dataC = mysqli_fetch_array($showcontact)) {
                ?>
                <!-- make dropdown select for UPDATE contactID -->
                <option value="<?= $dataC['contactID']; ?>" <?php if($c['contactID'] == $dataC['contactID']){echo "SELECTED";} ?>><?= $dataC['email']; ?></option>
                <?php } ?>
            </select>
    </div>

    <!-- untuk input Subject -->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Subjek</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="subject" required value="<?php echo $c['subject']?>">
    </div>
    
    <!-- untuk input message -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pesan</label>
        <input style="overflow: scroll;" class="form-control" id="exampleInputEmail1" name="message" required value="<?php echo $c['message'];?>"></input>
    </div>

    <!-- untuk ambil status success dan draft -->
    <input class="form-control" type="hidden" name="status" value="<?php echo $c['status'];?>">

      <div class="mb-3">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-success">Ubah</button>
        <a href="index.php?page=pesan">
            <button type="button" class="btn btn-danger">Batal</button>
        </a>
      </div>
  </form>