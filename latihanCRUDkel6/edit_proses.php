<?php
// masukkan file koneksi koneksi.php ke file ini
require 'koneksi.php';

// cek apakah proses dijalankan menggunakan methodde POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ambil smeua nilai yang ada di input edit.php 
    $id = $_POST['id'];
    $Namaproduk = $_POST['nama_produk'];
    $Merek = $_POST['merek'];
    $Harga = $_POST['harga'];
    $Stok = $_POST['stok'];
    $Experied = $_POST['experied'];

    // lakukan qwuery update ke table users
    $query = "UPDATE products SET nama_produk='$Namaproduk',merek='$Merek',harga='$Harga',stok='$Stok',experied='$Experied' WHERE id = $id";

    // jalankan query upadate di atas
    if (mysqli_query($connect, $query)) {
        // jika berhasil melakukan update ke database kembali ke halaman index.php
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";

    }else{
        // jika gagal melakukan update
        echo mysqli_erorr($connect);
        echo "<meta http-equiv='refresh' content='5;url=edit.php?id=$id'>";

    }
}

mysqli_close($connect);
?>