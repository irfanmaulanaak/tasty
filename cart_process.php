<?php
//diinsert ke database

include_once 'db.php';
global $mysqli;

$namaproduk = $_GET['namaprod'];
$hargaproduk = $_GET['hargaprod'];
$fotoproduk = $_GET['fotoprod'];
$uname = $_GET['username'];

$sql = "INSERT INTO cart (nama_produk, harga_produk, foto_produk, username) VALUES ('$namaproduk', $hargaproduk, '$fotoproduk', '$uname')";
$mysqli->query($sql);

echo "<script language='javascript' type='text/javascript'>";
echo "confirm(\"Pesanan '.$namaproduk.' telah berhasil ditambahkan kedalam cart!\");";
echo "window.history.back();";
echo "</script>";

// header("location:javascript://history.back(confirm(\"Pesanan '.$namaproduk.' telah berhasil ditambahkan kedalam cart!\"))");

// // echo '<script type="text/javascript">alert("Pesanan '.$namaproduk.' telah berhasil ditambahkan kedalam cart!");</script>';
// // sleep(1);
// header("location:javascript://history.back(alert(\"Pesanan '.$namaproduk.' telah berhasil ditambahkan kedalam cart!\"))");

