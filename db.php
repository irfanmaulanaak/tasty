<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = 'root';
$dbname = 'restaurant';
//i adalah improve. komponen yang ada di php untuk membuat koneksi ke mysql
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
//Jika koneksi DB gagal
if($mysqli->connect_errno){
    die("Database Connection Fails!");
};
