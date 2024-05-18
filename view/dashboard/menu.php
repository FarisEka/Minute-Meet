<!-- check if the user is logged or not -->
<?php
session_start();
if (session_status() == PHP_SESSION_NONE) {
  echo "<script>alert('Silahkan login terlebih dahulu'); window.location.href='index.php?page=login';</script>";
} else if (isset($_SESSION['status']) != "login") {
  echo "<script>alert('Silahkan login terlebih dahulu'); window.location.href='index.php?page=login';</script>";
}
?>
<main class="flex min-h-screen">
  <aside class="flex flex-col space-y-8 justify-center items-left w-1/5 p-8 bg-[#263959]">
    <a href="index.php?page=dashboard&dashboard=home" class="text-xl text-white font-semibold">Dashboard</a>
    <a href="index.php?page=dashboard&dashboard=daftar-partisipan"
      class="text-xl text-white font-semibold">Partisipan</a>
    <a href="index.php?page=dashboard&dashboard=daftar-rapat" class="text-xl text-white font-semibold">Daftar Rapat</a>
    <a href="index.php?page=dashboard&dashboard=undangan-rapat" class="text-xl text-white font-semibold">Undangan
      Rapat</a>
      <a href="index.php?page=dashboard&dashboard=notulensi" class="text-xl text-white font-semibold">Buat Notulensi</a>
    <a href="db/db_logout.php" class="text-xl text-white font-semibold">Logout</a>
  </aside>
  <section class="flex flex-col w-4/5 bg-white">
    <?php
    if (isset($_GET['dashboard'])) {
      if ($_GET['dashboard'] == "home") {
        include("dashboard.php");
      } else if ($_GET['dashboard'] == "daftar-rapat") {
        include("daftar_rapat/daftar-rapat.php");
      } else if ($_GET['dashboard'] == "buat-daftar") {
        include("daftar_rapat/buat-daftar.php");
      } else if ($_GET['dashboard'] == "edit-rapat") {
        include("daftar_rapat/edit-rapat.php");
      } else if ($_GET['dashboard'] == "delete-rapat") {
        include("daftar_rapat/delete-rapat.php");
      } else if ($_GET['dashboard'] == "print-rapat") {
        include("daftar_rapat/print-rapat.php");
      } else if ($_GET['dashboard'] == "notulensi") {
        include("notulensi/notulensi.php");
      } else if ($_GET['dashboard'] == "undangan-rapat") {
        include("undangan-rapat/undangan-rapat.php");
      } else if ($_GET['dashboard'] == "daftar-partisipan") {
        include("partisipan/daftar_partisipan.php");
      } else if ($_GET['dashboard'] == "tambah-partisipan") {
        include("partisipan/tambah_partisipan.php");
      } else {
        include("dashboard.php");
      }
    } else {
      include("dashboard.php");
    }
    ?>
  </section>
</main>