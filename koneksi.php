<?php 
    /**
     * NIM : 2257401004
     * NAMA : Abdul Latif
     * KELAS MI22A
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_abdullatif";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>