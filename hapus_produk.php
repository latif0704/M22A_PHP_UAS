<?php 
    /**
     * NIM : 2257401004
     * NAMA : Abdul Latif
     * KELAS MI22A
     */ 
    session_start();
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM tbl_produk WHERE tbl_produk. kode_produk = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "Barang Berhasil dihapus";
        header('location: produk.php');

    } else {
        $_SESSION['error'] = "Barang Gagal dihapus";
        header('location: produk.php');
    }
?>