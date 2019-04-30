<?php
//diinsert ke database

include_once 'db.php';

$nama_produk = $_GET['namaprod'];
$harga_produk = $_GET['hargaprod'];
$foto_produk = $_GET['fotoprod'];
$username = $_GET['username'];
$id_restaurant = $_GET['idres'];

$sql = "INSERT INTO cart (nama_produk, harga_produk, foto_produk, username) VALUES ('$nama_produk', '$harga_produk', '$foto_produk', '$username')";

$mysqli->query($sql);
header("Location: menu.php?id_restaurant=$id_restaurant");