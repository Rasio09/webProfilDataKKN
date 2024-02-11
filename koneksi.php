<?php
$host = "localhost"; //nama host
$user = "root"; //nama user
$password = "root"; //password
$database = "db_profildata"; //nama database

// membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>