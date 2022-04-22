<?php 
        ob_start();
        session_start();
    
        include "backend/koneksi.php";
    
        // apabila form melakukan post maka function dijalankan
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $email = htmlspecialchars($_POST['email']);
            $pass = htmlspecialchars($_POST['pass']);
            $sql_login = $mysqli->query("SELECT * FROM users 
                                         WHERE BINARY userID='$email' 
                                         OR BINARY email='$email' 
                                         OR BINARY nameU='$email' 
                                         AND BINARY password='$pass'
                                        ");
    
           if(mysqli_num_rows($sql_login)>0) {
               $_SESSION ["login"] = true;
               $row_akun = mysqli_fetch_array($sql_login);
            //    $_SESSION ['email']=$row_akun['email'];
            //    $_SESSION ['nama']=$row_akun['name'];
            //    $_SESSION ['level']=$row_akun['level'];
    
            //    header ("location:index.php");
        //    }else{
        //        header("location:login.php?gagal");
        //    }
        

            // cek jika user login sebagai SuperAdmin
            if($row_akun['level']=="SuperAdmin"){
        
                // buat session login dan email
                $_SESSION ['user']=$row_akun['userID'];
                $_SESSION ['email']=$row_akun['email'];
                $_SESSION ['nama']=$row_akun['nameU'];
                $_SESSION['level'] = "Super Admin";
                // alihkan ke halaman dashboard SuperAdmin
                header("location:index.php");
            // cek jika user login sebagai Admin
            }else if($row_akun['level']=="Admin"){
                // buat session login dan email
                $_SESSION ['user']=$row_akun['userID'];
                $_SESSION ['email']=$row_akun['email'];
                $_SESSION ['nama']=$row_akun['nameU'];
                $_SESSION ['level'] = "Admin";
                // alihkan ke halaman dashboard Admin
                header("location:index2.php");
            } 
        }else {
                // alihkan ke halaman login kembali
                header("location:login.php?gagal");
            } 
            
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Email Blast | PUSDATIKOM - Login</title>
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
  <style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .h-custom {
        height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
        height: 100%;
        }   
    }

    img {
        border-radius: 10px;
    }
  </style>
</head>
<body>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="assets/img/login-img.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="" method="post">
                <?php if(isset($_GET['gagal'])) {?>
                <tr>
                    <td>
                        <div class="alert alert-danger" role="alert">
                            Sorry, Username / Password doesn't match
                        </div>
                    </td>
                </tr>
                <?php }?>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="text" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="email" autocomplete="off" autofocus required/>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="pass" required/>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                        Remember me
                    </label>
                    </div>
                    <a href="#!" class="text-body">Forgot password?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                        class="link-danger">Register</a></p>
                </div>
                </form>
                
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2022. All rights reserved.
            </div>
            <!-- Copyright -->
        </div>
    </section>
</body>
</html>