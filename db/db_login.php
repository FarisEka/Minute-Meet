<?php
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi, "select * from user where username='$username' and password_user='$password' or email_user='$username' and password_user='$password'");
$cek = mysqli_num_rows($data);
if ($cek > 0) {
  $row = mysqli_fetch_assoc($data);
  $_SESSION['username'] = $row['username'];
  $_SESSION['email'] = $row['email_user'];
  $_SESSION['status'] = "login";
  echo "<script>alert('Login successful!'); window.location.href='../index.php?page=dashboard';</script>";
} else {
  echo "<script>alert('Username atau Password Salah!'); window.location.href='../index.php?page=login';</script>";
}
?>