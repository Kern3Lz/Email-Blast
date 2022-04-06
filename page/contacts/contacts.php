<?php 
  include 'backend/koneksi.php';
?>

<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
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
    
    <!--<title>Dashboard Sidebar Menu</title>--> 

    <style>
    </style>
</head>
<body>
    

    <section class="home">
        <div class="text">Dashboard Sidebar</div>
        <button type="button" class="btn tombol btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus"></i>&nbsp;Tambah</button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Kontak</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php?page=tambahKontak" method="post">
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name">
              </div>
    
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email">
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
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <br><br>
        
        <?php 
            
            $no = 0;
            $show = $mysqli->query("SELECT * FROM contacts");
            while ($c = mysqli_fetch_array($show)) {
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $c['name']; ?></td>
            <td><?php echo $c['email']; ?></td>
            <td>
                <a href="index.php?page=ubahKontak&no=<?php echo $c['contactID'];?>">
                    <button class="btn btn-warning btn-sm"  role="button"><i class="fa fa-edit"></i></button>
                </a>
                <a href="index.php?page=hapusKontak&no=<?php echo $c['contactID'];?>" onclick="return confirm('Yakin akan menghapus data?')">
                    <button class="btn btn-danger btn-sm"  role="button"><i class="fa fa-edit"></i></button>
                </a>
            </td>
        </tr>
            <?php } ?>
        <tbody>
        </tbody>
      </table>
    </section>


    <script src="assets/bootstrap/js/bootstrap.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>