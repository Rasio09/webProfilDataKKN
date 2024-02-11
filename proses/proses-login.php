<?php
session_start();
include '../koneksi.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user dengan username dan password yang sesuai
$query = "SELECT * FROM tb_login WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

// Mengecek apakah data ditemukan
if (mysqli_num_rows($result) == 1) {
    // Jika ditemukan, set session dan redirect ke halaman dashboard
    $_SESSION['username'] = $username;
    header("Location: ../dashboard.php");
} else {
    // Jika tidak ditemukan, kembali ke halaman login dengan pesan error
    $_SESSION['login_error'] = "LOGIN GAGAL! PERIKSA USERNAME DAN PASSWORD";
    header("Location: ../login.php");
}

mysqli_close($koneksi);
?>
