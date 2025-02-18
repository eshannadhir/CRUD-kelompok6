<?php

$host="Localhost";
$user = "root";
$pass = "";
$db = "kelompokenam_toko";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect){
    die("koneksi gagal: " . mysqli_connect_error());
}