<?php
     /**
     * NIM : 2257401004S
     * NAMA : Abdul Latif 
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>