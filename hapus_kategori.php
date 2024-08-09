<?php 
    /**
     * NIM : 2257401004
     * NAMA : Abdul Latif
     * KELAS MI22A
     */ 
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM tbl_kategori WHERE nama_kategori = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: kategori.php');

    } else {
        echo "Gagal Hapus Barang";
    }
?>