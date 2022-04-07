<?php 
  include 'backend/koneksi.php';
?>

<?php 
    include 'page/HF/header.php';
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
