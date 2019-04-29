<?php
//diinsert ke database

include_once 'db.php';

$username = $_POST['username'];
//yang diseleksi nanti yang hash
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$name = $_POST['nama'];
$email = $_POST['email'];

$sql = "INSERT INTO user (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";

$mysqli->query($sql);
header('Location: login.php');