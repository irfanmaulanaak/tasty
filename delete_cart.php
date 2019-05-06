<?php
include_once 'db.php';

$idcart = $_POST['idcart'];
$namaproduk = $_POST['namprod'];

$sql = "DELETE FROM cart WHERE id_cart = $idcart";
$result = $mysqli->query($sql);

echo "<script language='javascript' type='text/javascript'>";
echo "confirm(\"Pesanan '.$namaproduk.' telah berhasil dihapus dari cart!\");";
echo "window.history.back();";
echo "</script>";
