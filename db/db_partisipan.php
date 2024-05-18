<?php
include 'koneksi.php';
$ahli = $_POST['ahli_partisipan'];
$jabatan = $_POST['jabatan_partisipan'];
$nama = $_POST['nama_partisipan'];
$no_hp = $_POST['no_hp'];

  $insert_query = "INSERT INTO partisipan (nama_partisipan, no_hp, ahli_partisipan, jabatan_partisipan) VALUES ('$nama', '$no_hp', '$ahli', '$jabatan')";


  if (mysqli_query($koneksi, $insert_query)) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='../index.php?page=dashboard&dashboard=daftar-partisipan';</script>";
  } else {
    die('Error: ' . mysqli_error($koneksi));
  }

?>