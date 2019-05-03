<?php
//diinsert ke database

include_once 'db.php';
global $mysqli;

$namaproduk = $_GET['namaprod'];
$hargaproduk = $_GET['hargaprod'];
$fotoproduk = $_GET['fotoprod'];
$uname = $_GET['username'];

$sql = "INSERT INTO cart (nama_produk, harga_produk, foto_produk, username) VALUES ('$namaproduk', $hargaproduk, '$fotoproduk', '$uname')";
echo($namaproduk);
$mysqli->query($sql);

echo '<script type="text/javascript">alert("Pesanan '.$namaproduk.' telah berhasil ditambahkan kedalam cart!");</script>';
sleep(1);
// header("location:javascript://history.go(-1)");
