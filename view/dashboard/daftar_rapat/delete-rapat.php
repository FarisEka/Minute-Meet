<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rapat_unbraw";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
  $id_to_delete = $_GET['id'];

  $delete_query = "DELETE FROM daftar_rapat WHERE id_rapat = '$id_to_delete'";
  $delete_result = mysqli_query($conn, $delete_query);

  if ($delete_result) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php?page=dashboard&dashboard=daftar-rapat';</script>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
} else {
  echo "Tidak ada ID yang dipilih untuk dihapus.";
}

mysqli_close($conn);
?>
