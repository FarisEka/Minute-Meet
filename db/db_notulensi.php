<?php
include 'koneksi.php';
$catatan = $_POST['catatan'];
$dokumen = $_POST['dokumen'];
$dokumentasi = $_POST['dokumentasi'];

  $insert_query = "INSERT INTO notulensi (dokumen, catatan) VALUES ('$dokumen', '$catatan')";

  if (mysqli_query($koneksi, $insert_query)) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='../index.php?page=dashboard&dashboard=notulensi';</script>";
  } else {
    die('Error: ' . mysqli_error($koneksi));
}
?>