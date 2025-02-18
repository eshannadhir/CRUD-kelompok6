<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Namaproduk = htmlspecialchars($_POST["nama_produk"]);
    $Merek = htmlspecialchars($_POST["merek"]);
    $Harga = htmlspecialchars($_POST["harga"]);
    $Stok = htmlspecialchars($_POST["stok"]);
    $Experied = htmlspecialchars($_POST["experied"]);
        // query nambah data data

    $query = "INSERT INTO products (nama_produk, merek, harga, stok, experied) VALUES ('$Namaproduk','$Merek','$Harga','$Stok','$Experied')";
        // eksekusi query
        $result = mysqli_query($connect, $query);



        //cek apakah query berhasil disimpan
        if ($result) {
            //jika berhasil kembalikan ke halaman index

            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
            } else {
                //jika gagal tampilkan pesan error
                echo mysqli_error($connect);
            }

            // tutup koneksi

            mysqli_close($connect);

}
?>