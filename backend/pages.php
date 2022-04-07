<?php 
    error_reporting( error_reporting() & ~E_NOTICE );

    $mysqli = mysqli_connect("localhost","root","","emailblast");

    include 'backend/koneksi.php';
    if ($_GET['page']=='users') {
        include "page/users/users.php";
    }
    else if ($_GET['page']=='tambahUsers') {
        include "page/users/tambahUsers.php";
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

    else if ($_GET['page']=="contacts") {
        include "page/contacts/contacts.php";
    }

    else if ($_GET['page']=="tambahKontak") {
        include 'page/contacts/tambahKontak.php';
    }

    else if ($_GET['page']=="hapusKontak") {
        include 'page/contacts/hapusKontak.php';
    }

    else if ($_GET['page']=="ubahKontak") {
        include 'page/contacts/ubahKontak.php';
    }

    else if ($_GET['page']=="updateKontak") {
        include 'page/contacts/updateKontak.php';
    }

    else if ($_GET['page']=="pesan") {
        include 'page/pesan/pesan.php';
    }

    else if ($_GET['page']=="kirimPesan") {
        include 'page/pesan/kirimPesan.php';
    }

?>