<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rapat_unbraw";

$conn = mysqli_connect($host, $username, $password, $database);


?>

<header class="flex flex-col justify-center w-full bg-[#EAB72C] p-4 h-[100px]">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Daftar Rapat</h1>
  </div>
</header>

<section class="flex flex-col h-full bg-[#F0EFEF] p-8">
  <form method="POST">
    <input type="text" name="search" id="search" class="w-[400px] h-[50px] rounded-lg p-4 bg-neutral-50"
      placeholder="Cari Judul Rapat">
    <input type="submit" value="Search" class="px-4 py-2 bg-blue-500 text-white rounded-lg mt-4">
  </form>

    <table class="w-full h-full  mt-8 bg-white rounded-lg">
      <thead class="border-b-4">
        <tr class="border-b border-gray-200">
          <th class="px-8 py-4">Nomor Rapat</th>
          <th class="px-8 py-4">Waktu</th>
          <th class="px-8 py-4">Judul Rapat</th>
          <th class="px-8 py-4">Notulensi Rapat</th>
          <th class="px-8 py-4">Aksi</th>
        </tr>
      </thead>

      <tbody>

        <?php

        if (isset($_POST['search'])) {
          $search = $_POST['search'];
          $query = "SELECT id_rapat, tanggal, agenda_rapat, dokumen FROM daftar_rapat WHERE agenda_rapat LIKE '%$search%'";
        } else {
          $query = "SELECT id_rapat, tanggal, agenda_rapat, dokumen FROM daftar_rapat";
        }

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='border-b border-gray-200'>";
            echo "<td class='px-8 py-4'>{$row['id_rapat']}</td>";
            echo "<td class='px-8 py-4'>{$row['tanggal']}</td>";
            echo "<td class='px-8 py-4'>{$row['agenda_rapat']}</td>";
            echo "<td class='px-8 py-4'>{$row['dokumen']}</td>";
            echo "<td>";
            echo "<a href='index.php?page=dashboard&dashboard=edit-rapat&id={$row['id_rapat']}' class='px-5 py-2 bg-blue-500 text-white hover:bg-blue-600 rounded-md mr-7'>Edit</a>";
            echo "<a href='index.php?page=dashboard&dashboard=delete-rapat&id={$row['id_rapat']}' class='px-4 py-2 bg-red-600 text-white hover:bg-red-700 rounded-md'>Delete</a>";
            echo "<a href='index.php?page=dashboard&dashboard=print-rapat&id={$row['id_rapat']}' class='px-5 py-2 bg-blue-500 text-white hover:bg-blue-600 rounded-md mr-7'>Print</a>";
            echo "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='4'>Tidak ada hasil yang cocok</td></tr>";
        }

        mysqli_close($conn);
        ?>

        <a href="index.php?page=dashboard&dashboard=buat-daftar"
          class="fixed bottom-0 right-0 m-10 z-10 flex items-center bg-white shadow-md text-neutral-400 rounded-lg px-6 py-4 space-x-2 hover:bg-slate-100">
          <i class="fa-solid fa-file-circle-plus text-2xl"></i>
          <span>Buat Rapat</span>
        </a>
      </tbody>

      </html>