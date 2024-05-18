<header class="flex flex-col justify-center w-full bg-[#EAB72C] p-4 h-[100px]">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Buat Daftar</h1>
  </div>
</header>
<section class="flex-col h-full bg-[#F0EFEF] p-8">
<form method="post" action="db/db_edit.php">
  <div class="flex flex-col bg-white shadow-md">
    <header class="border-b-2 p-8">
      <h1 class="text-3xl font-semibold">Edit Rapat</h1>
    </header>
    <section>
      <form action="">
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">ID Rapat</h1>
          </aside>
          <section class="w-4/5">
          <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rapat_unbraw";

$conn = mysqli_connect($host, $username, $password, $database);


if (isset($_GET['id'])) {
  $id_rapat = $_GET['id'];


  $query = "SELECT * FROM daftar_rapat WHERE id_rapat = '$id_rapat'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $id_rapat = $row['id_rapat'];
    $tanggal = $row['tanggal'];
    $jam_awal = $row['jam_awal'];
    $jam_akhir = $row['jam_akhir'];
    $agenda_rapat = $row['agenda_rapat'];

    // ...
  } else {

    echo "Data tidak ditemukan";
  }
}

mysqli_close($conn);
?>
          <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="id_rapat"
          id="id_rapat" type="text" placeholder="ID Rapat" value="<?php echo isset($id_rapat) ? $id_rapat : ''; ?>" required>
          </section>
        </div>
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Tanggal & Waktu</h1>
          </aside>
          <div class="flex w-4/5 items-center space-x-2">
            <input type="date" 
          name="tanggal" 
          id="tanggal" class="w-full rounded-lg p-2 bg-neutral-50 border"placeholder="mm/dd/yy" value="<?php echo isset($tanggal) ? $tanggal : ''; ?>" required>
            <input type="time" min="07:00" max="21:00" 
            name="jam_awal" 
            id="jam_awal"
              class="w-full rounded-lg p-2 bg-neutral-50 border" value="07:00" placeholder="00:00 PM" value="<?php echo isset($jam_awal) ? $jam_awal : ''; ?>" placeholder="optional">
            <h1>TO</h1>
            <input type="time" min="07:00" max="21:00" 
            name="jam_akhir" 
            id="jam_akhir"
              class="w-full rounded-lg p-2 bg-neutral-50 border" value="07:00" placeholder="00:00 PM" value="<?php echo isset($jam_akhir) ? $jam_akhir : ''; ?>" placeholder="optional">
          </div>
        </div>
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Judul Rapat</h1>
          </aside>
          <section class="w-4/5">
          <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="agenda_rapat"
          id="agenda_rapat" type="text" placeholder="Judul Rapat" value="<?php echo isset($agenda_rapat) ? $agenda_rapat : ''; ?>" required>
          </section>
        </div>
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Dokumen</h1>
          </aside>
          <section class="w-4/5">
            <input class="block w-full text-sm text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 "
            name="dokumen"
          id="dokumen" type="file" placeholder="Optional">
          </section>
        </div>
        <div class="border-b p-8 flex justify-end">
          <button class="text-right px-4 py-2 font-semibold bg-zinc-300 hover:bg-zinc-400 rounded">Update</button>
        </div>
      </form>
    </section>
  </div>
</section>


<?php
function generateUniqueId()
{
  // Generate a unique ID using current time
  $uniqueID = "RAPAT" . date("His");
  return $uniqueID;
}
?>