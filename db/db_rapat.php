<?php
include 'koneksi.php';
$tanggal = $_POST['tanggal'];
$awal = $_POST['jam_awal'];
$akhir = $_POST['jam_akhir'];
$id_rapat = $_POST['id_rapat'];
$agenda_rapat = $_POST['agenda_rapat'];
$dokumen = $_POST['dokumen'];

  $insert_query = "INSERT INTO daftar_rapat (id_rapat, tanggal, jam_awal, jam_akhir, agenda_rapat, dokumen) VALUES ('$id_rapat', '$tanggal', '$awal', '$akhir', '$agenda_rapat', '$dokumen')";


  if (mysqli_query($koneksi, $insert_query)) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='../index.php?page=dashboard&dashboard=daftar-rapat';</script>";
  } else {
    die('Error: ' . mysqli_error($koneksi));
  }

?>

