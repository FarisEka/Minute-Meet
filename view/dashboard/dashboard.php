<?php
$koneksi = mysqli_connect("localhost", "root", "", "rapat_unbraw");

// Pastikan menggunakan variabel $koneksi yang benar untuk melakukan query
$get1 = mysqli_query($koneksi, "SELECT COUNT(*) AS count_partisipan FROM partisipan");
$row1 = mysqli_fetch_assoc($get1);
$count1 = $row1['count_partisipan'];

$get2 = mysqli_query($koneksi, "SELECT COUNT(*) AS count_rapat FROM daftar_rapat");
$row2 = mysqli_fetch_assoc($get2);
$count2 = $row2['count_rapat'];

$get3 = mysqli_query($koneksi, "SELECT COUNT(*) AS count_sekretaris FROM user");
$row3 = mysqli_fetch_assoc($get3);
$count3 = $row3['count_sekretaris'];
?>
<header class="flex flex-col justify-center w-full h-[100px] bg-[#EAB72C] p-4">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <p class="text-sm">Selamat datang</p>
  </div>
</header>
<section class="flex-col h-full mt-24 bg-[#F0EFEF] p-8">
  <div class="flex flex-wrap justify-center items-center md:gap-4 bg-white rounded-md p-8 h-full">
    <div
      class="h-[150px] w-full max-w-[400px] md:h-[200px] bg-blue-400 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-center">
      <a href="index.php?page=dashboard&dashboard=daftar-partisipan" class="w-full h-full flex flex-col md:flex-row items-center justify-center">
      <aside class="md:w-1/3 text-center">
        <i class="fa-solid fa-users text-4xl md:text-6xl lg:text-8xl text-white"></i>
      </aside>
      <div class="flex-wrap md:space-y-2 md:w-2/3 mx-auto">
        <p class="text-center text-white text-md md:text-2xl lg:text-3xl font-bold">Jumlah <br>Partisipan</p>
        <p class="text-center text-white text-md md:text-2xl lg:text-3xl font-bold"><?=$count1;?></p>
      </div>
      </a>
    </div>

    <div
      class="h-[150px] w-full max-w-[400px] md:h-[200px] bg-orange-400 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-center">
      <a href="index.php?page=dashboard&dashboard=daftar-rapat" class="w-full h-full flex flex-col md:flex-row items-center justify-center">
      <aside class="md:w-1/3 text-center">
        <i class="fa-solid fa-file-invoice text-4xl md:text-6xl lg:text-8xl text-white"></i>
      </aside>
      <div class="flex-wrap md:space-y-2 md:w-2/3 mx-auto">
        <p class="text-center text-white text-md md:text-2xl lg:text-3xl font-bold">Jumlah <br>Rapat</p>
        <p class="text-center text-white text-md md:text-2xl lg:text-3xl font-bold"><?=$count2;?></p>
      </div>
      </a>
    </div>

    <div
      class="h-[150px] w-full max-w-[400px] md:h-[200px] bg-rose-400 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-center">
      <aside class="md:w-1/3 text-center">
        <i class="fa-solid fa-user text-4xl md:text-6xl lg:text-8xl text-white"></i>
      </aside>
      <div class="flex-wrap md:space-y-2 md:w-2/3 mx-auto">
        <p class="text-center text-white text-md md:text-2xl lg:text-3xl font-bold">Jumlah <br>Sekretaris</p>
        <p class="text-center text-white text-md md:text-2xl lg:text-3xl font-bold"><?=$count3;?></p>
      </div>
    </div>
  </div>
</section>
