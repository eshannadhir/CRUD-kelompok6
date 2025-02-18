<?php
// masukkan file koneksi.php 
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];

    // lakukan query delete  ke database
    $query = "DELETE FROM products WHERE id = $id";

    if (mysqli_query($connect, $query)) {
        //jika berhasil melakukan hapus data di database kembali ke index.php
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    } else {
        // jika gagal tampilkan pesan error
        myqli_error($connect);
        echo "<meta http-equiv='refresh' content=5;url=index.php'>";
    }
}

mysqli_close($connect);
?>