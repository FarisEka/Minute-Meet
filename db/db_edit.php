<?php
include 'koneksi.php';


$tanggal = $_POST['tanggal'];
$awal = $_POST['jam_awal'];
$akhir = $_POST['jam_akhir'];
$id_rapat = $_POST['id_rapat'];
$agenda_rapat = $_POST['agenda_rapat'];
$dokumen = $_POST['dokumen'];


$update_query = "UPDATE daftar_rapat SET tanggal='$tanggal', jam_awal='$awal', jam_akhir='$akhir', agenda_rapat='$agenda_rapat', dokumen='$dokumen' WHERE id_rapat='$id_rapat'";


if (mysqli_query($koneksi, $update_query)) {
  echo "<script>alert('Data berhasil diperbarui'); window.location.href='../index.php?page=dashboard&dashboard=daftar-rapat';</script>";
} else {
  die('Error: ' . mysqli_error($koneksi));
}


mysqli_close($koneksi);
?>
