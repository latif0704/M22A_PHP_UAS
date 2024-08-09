<?php
 /**
     * NIM : 2257401004
     * NAMA : Abdul Latif
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['tbl_user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>