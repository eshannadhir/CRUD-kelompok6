<?php

//masukkan file koneksi ke file ini
require 'koneksi.php';

//ambil nilai id yang ada di url
$id = $_GET['id'];

//query untuk menampilkan data berdasarkan id yang diambil
$query = "SELECT * FROM products WHERE id = $id";

// jalankan query dan hasil simpan ke variable $result
$result = mysqli_query($connect, $query);

//ubah kedalam bentuk array assosiatif
$show = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Edit Data</h1>

    <form action="edit_proses.php" method="POST"> 
        <input type="hidden" name="id" value="<?php echo $show['id']; ?>">
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" required value ="<?php echo $show['nama_produk']; ?>">
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" name="merek" class="form-control" required value="<?php echo $show['merek']; ?>">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" required value="<?php echo $show['harga']; ?>">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" name="stok" class="form-control" required value="<?php echo $show['stok']; ?>">
        </div>
        <div class="mb-3">
            <label for="experied" class="form-label">Experied</label>
            <input type="date" name="experied" class="form-control" required value="<?php echo $show['experied']; ?>">
        </div>
        
        <button type="submit" class="btn btn-md btn-primary">Simpam</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>