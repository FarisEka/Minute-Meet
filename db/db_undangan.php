<?php
include 'koneksi.php';
$host = $_POST['host'];
$lokasi_rapat = $_POST['lokasi_rapat'];
$detail_acara = $_POST['detail_acara'];


  $insert_query = "INSERT INTO undangan_rapat (lokasi_rapat, host, detail_acara) VALUES ('$lokasi_rapat', '$host','$detail_acara')";

  if (mysqli_query($koneksi, $insert_query)) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='../index.php?page=dashboard&dashboard=undangan-rapat;'</script>";
  } else {
    die('Error: ' . mysqli_error($koneksi));
  }

?>