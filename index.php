<?php 
  include 'backend/koneksi.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/nativeCss/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/fontawesome/newCss/all.css">
    <link rel="stylesheet" href="assets/fontawesome/newCss/all.min.css">
    
    <!--<title>Dashboard Sidebar Menu</title>--> 

    <style>
        
    </style>
</head>
<body>
    

<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Email Blast</span>
                    <span class="profession">PUSDATIKOM</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class="fa-solid fa-magnifying-glass icon"></i>
                    <input type="text" placeholder="Search...">
                </li>

                <div class="menu-links">
                    <li class="nav-link1">
                        <a href="#">
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
                        <a href="index.php?page=email.php">
                            <i class="fa-solid fa-envelope-open-text icon"></i>
                            <span class="text nav-text">Email</span>
                        </a>
                    </li>


                    <li class="nav-link1">
                        <a href="index.php?page=users.php">
                            <i class="fa-solid fa-user icon"></i>
                            <span class="text nav-text">Pengguna</span>
                        </a>
                    </li>

                    
                </div>
                
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
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

    <section class="content-wrapper">
        <?php 
          // hide errors
          error_reporting(0);
          include "backend/pages.php"   
        ?>
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
