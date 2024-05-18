
<?php
$koneksi = mysqli_connect("localhost", "root", "", "rapat_unbraw");
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>