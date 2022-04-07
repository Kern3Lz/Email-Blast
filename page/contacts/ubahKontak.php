<?php 
    $edit = $mysqli->query("SELECT * FROM contacts WHERE contactID = '$_GET[no]'");
    $c = mysqli_fetch_array($edit);
?>
<form action="index.php?page=updateKontak" method="post">
    <div class="mb-3">
        <input type="hidden" class="form-control" id="exampleInputEmail1" name="contactID" value="<?php echo $c['contactID']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $c["name"];?>" placeholder="Ketik Nama..">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $c["email"];?>" placeholder="Ketik Email..">
    </div>
      <div class="mb-3">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-success">Ubah</button>
      </div>
  </form>


  
