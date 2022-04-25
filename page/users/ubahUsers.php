<?php 
    $edit = $mysqli->query("SELECT * FROM users WHERE userID = '$_GET[no]'");
    $c = mysqli_fetch_array($edit);
    
?>
<form action="index.php?page=updateUsers" method="post">
    <div class="mb-3">
        <input type="hidden" class="form-control" id="exampleInputEmail1" name="userID" value="<?php echo $c['userID']; ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nameU" value="<?php echo $c["nameU"];?>" placeholder="Ketik Nama..">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail2" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail2" name="email" value="<?php echo $c["email"];?>" placeholder="Ketik Email..">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail3" class="form-label">Level</label>
        <select class="form-control" name="level" id="exampleInputEmail3">
            <option value="SuperAdmin" <?php if($c['level'] == 'SuperAdmin'){echo "SELECTED";} ?>>SuperAdmin</option>
            <option value="Admin" <?php if($c['level'] == 'Admin'){echo "SELECTED";} ?>>Admin</option>
        </select>
    </div>
      <div class="mb-3">
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-success">Ubah</button>
        <a href="index.php?page=users">
            <button type="button" class="btn btn-danger">Batal</button>
        </a>
      </div>
      
  </form>