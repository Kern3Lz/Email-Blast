<!-- HALAMAN INDEX UNTUK ADMIN -->
<?php 
  include 'backend/koneksi.php';

  ob_start();
   session_start();
   if(!isset($_SESSION['email'])) header("location: login.php");
   include "backend/koneksi.php";

  //  var global user session
  $id_log = $_SESSION['email'];
  $id_nama = $_SESSION['nama'];
  $id_status = $_SESSION['level'];
?>

<?php 
    include 'page/HF/header2.php';
?>


    <section class="home">
        <?php 
        // make sure the page is not empty
        if(!empty($_GET['page'])){
            // get the page name
            $page = $_GET['page'];
            // make sure the page exists
            if(file_exists('page/'.$page.'.php')){
                // include the page
                include 'page/'.$page.'.php';
            }else{
            // hide errors
                error_reporting(0);
                include "backend/pages.php"; 
            }
            }else{
                // show the home page
                include 'page/home.php';
            }
        
        ?>
    </section>


<?php 
    include 'page/HF/footer.php';
?>

</body>
</html>
