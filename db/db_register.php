<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama_lengkap'];
$departemen = $_POST['departemen'];
$email = $_POST['email'];

$check = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' OR email_user='$email'");

if (mysqli_num_rows($check) > 0) {
  echo "<script>alert('Username atau Email sudah terdaftar!'); window.location.href='../index.php?page=register';</script>";
  exit();
} else {
  $insert_query = "INSERT INTO user (nama_lengkap, email_user, username, password_user, department) VALUES ('$nama', '$email', '$username', '$password', '$departemen')";


  if (mysqli_query($koneksi, $insert_query)) {
    echo "<script>alert('Register successful!'); window.location.href='../index.php?page=login';</script>";
  } else {
    die('Error: ' . mysqli_error($koneksi));
  }
}
?>