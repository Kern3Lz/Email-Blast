<!-- FILE UNTUK NAVBAR LEVEL SUPER ADMIN -->
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
    <link rel="stylesheet" href="assets/bootstrap/css/all.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/solid.min.css">
    
    <link rel="icon" href="assets/img/logo1.png">
    <title>Email Blast | PUSDATIKOM</title> 

    <style>
        i {
            font-style: normal;
        }
    </style>
</head>
<body>
    

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="assets/img/logo1.png" alt="Logo">
                </span>

                <div class="text logo-text">
                    <span class="name">Email Blast</span>
                    <span class="profession">PUSDATIKOM</span>
                </div>
            </div>

            <i class="fa-solid fa-angle-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="nav-link1">
                    <i class="fa-solid fa-circle-user icon"></i>
                    <span class="text nav-text"><?php echo $id_nama;?> <br> <?php echo $id_status?></span>
                </li>

                <div class="pemisah">
                    <!-- untuk memisahkan profil dan menu beranda -->
                    <br>
                </div>

                <!-- <li class="search-box">
                    <i class="fa-solid fa-magnifying-glass icon"></i>
                </li> -->

                <div class="menu-links">
                    <li class="nav-link1">
                        <a href="index.php">
                            <i class="fa-solid fa-house icon"></i>
                            <span class="text nav-text">Beranda</span>
                        </a>
                    </li>

                    <li class="nav-link1">
                        <a href="index.php?page=contacts">
                            <i class="fa-solid fa-address-card icon"></i>
                            <span class="text nav-text">Kontak</span>
                        </a>
                    </li>

                    <li class="nav-link1">
                        <a href="index.php?page=pesan">
                            <i class="fa-solid fa-envelope-open-text icon"></i>
                            <span class="text nav-text">Pesan</span>
                        </a>
                    </li>


                    <li class="nav-link1">
                        <a href="index.php?page=users">
                            <i class="fa-solid fa-user icon"></i>
                            <span class="text nav-text">Pengguna</span>
                        </a>
                    </li>

                    
                </div>
                
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class="fa-solid fa-right-from-bracket icon"></i>
                        <span class="text nav-text">Keluar</span>
                    </a>
                </li>



                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>