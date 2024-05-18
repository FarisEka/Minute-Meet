<header class="flex flex-col justify-center w-full bg-[#EAB72C] p-4 h-[100px]">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Partisipan</h1>
  </div>
</header>
<section class="flex flex-col h-full bg-[#F0EFEF] p-8">

<table class="w-full h-full mt-8 bg-white rounded-lg">
    <thead class="border-b-4">
      <tr class="text-left">
        <th class="px-8 py-4">No</th>
        <th class="px-8 py-4">Nama</th>
        <th class="px-8 py-4">Nomor Telp</th>
        <th class="px-8 py-4">Departemen</th>
        <th class="px-8 py-4">Jabatan</th>
      </tr>
    </thead>
<body>

  <?php


  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "rapat_unbraw";
  
  $conn = mysqli_connect($host, $username, $password, $database);
  

  $query = "SELECT id_partisipan, nama_partisipan, no_hp, ahli_partisipan, jabatan_partisipan FROM partisipan";
  

  $result = mysqli_query($conn, $query);
  

  if (mysqli_num_rows($result) > 0) {
  

      $data = [];
  
      
      while ($row = mysqli_fetch_assoc($result)) {
  

          $data[] = $row;
      }
  

      $no=1;
  
      foreach ($data as $row) {

          echo "<tr class='border-t border-b border-gray-200'>";
          echo "<td class='px-8 py-4'> $no </td>";
          echo "<td class='px-8 py-4'>{$row['nama_partisipan']}</td>";
          echo "<td class='px-8 py-4'>{$row['no_hp']}</td>";
          echo "<td class='px-8 py-4'>{$row['ahli_partisipan']}</td>";
          echo "<td class='px-8 py-4'>{$row['jabatan_partisipan']}</td>";
          echo "</tr>";
          $no++;
      }
  
      echo "</table>";
  
  } else {
  

      echo "Tidak ada data";
  }
  

  mysqli_close($conn);
  



  ?>
<a href="index.php?page=dashboard&dashboard=tambah-partisipan"
    class="fixed bottom-0 right-0 m-10 z-10 flex items-center bg-white shadow-md text-neutral-400 rounded-lg px-6 py-4 space-x-2 hover:bg-slate-100">
    <i class="fa-solid fa-user-plus text-2xl"></i>
    <span>Tambah Partisipan</span>
  </a>
</body>
</html>









