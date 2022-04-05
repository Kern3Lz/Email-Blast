<?php 
    error_reporting( error_reporting() & ~E_NOTICE );
    include "functions.php";

    if ($_GET['page']=='users') {
        include "page/users/users.php";
    }
    else if ($_GET['page']=='create_users') {
        include "page/users/create_users.php";
    }
    else if ($_GET['page']=='edit_users') {
        include "page/users/edit_users.php";
    }
    else if ($_GET['page']=='update_user') {
        include "page/users/update_users.php";
    }
    else if ($_GET['page']=='delete_user') {
        include "page/users/delete_users.php";
    }


    else if ($_GET['page']=='contacts') {
        include "../pages/contacts.php";
    }
    else if ($_GET['page']=='create_contacts') {
        include "../pages/create_contacts.php";
    }

    else if ($_GET['page']=='data_transaksi') {
        include "page/transaksi/data_transaksi.php";
    }

?>