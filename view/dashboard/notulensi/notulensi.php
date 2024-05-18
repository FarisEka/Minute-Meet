<?php $koneksi = mysqli_connect("localhost", "root", "", "rapat_unbraw");?>
<header class="flex flex-col justify-center w-full bg-[#EAB72C] p-4 h-[100px]">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Buat Notulensi</h1>
  </div>
</header>
<section class="flex flex-col h-full">
<form method="post" action="db/db_notulensi.php">
  <div class="flex flex-col h-full bg-white rounded-md p-8">
  <div class="space-y-4">
      <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Judul Rapat</h1>
        </aside>
        <section class="w-4/5">
          <select name="judul" id="judul" class="w-full rounded-lg p-2 bg-neutral-50 border" required>
          <option value="" disabled selected>Pilih Rapat</option>
            <?php
            $query = $koneksi->query("SELECT * FROM daftar_rapat");
            while($daftar_rapat = $query->fetch_assoc()){?>
                <option value="<?= $daftar_rapat['id_rapat'];?>"><?= $daftar_rapat['agenda_rapat']?></option>
      <?php } ?>

          </select>
        </section>
      </div>
      <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Host</h1>
        </aside>
        <section class="w-4/5">
          <input type="text" name="host" id="host" class="w-full rounded-lg p-2 bg-neutral-50 border" placeholder="Host"
          required>
        </section>
      </div>
      <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Lokasi Rapat</h1>
        </aside>
        <section class="w-4/5">
          <input type="text" name="lokas_rapat" id="lokasi_rapat" class="w-full rounded-lg p-2 bg-neutral-50 border"
            placeholder="Lokasi Rapat" required>
        </section>
      </div>
      <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Tanggal & Waktu</h1>
        </aside>
        <div class="flex w-4/5 items-center space-x-2">
          <input type="date" name="tanggal" id="tanggal" class="w-full rounded-lg p-2 bg-neutral-50 border"
            placeholder="mm/dd/yy" required>
          <input type="time" min="07:00" max="21:00" name="jam" id="jam"
            class="w-full rounded-lg p-2 bg-neutral-50 border" placeholder="00:00 PM" required>
          <h1>TO</h1>
          <input type="time" min="07:00" max="21:00" name="optional" id="optional"
            class="w-full rounded-lg p-2 bg-neutral-50 border" placeholder="Optional" required>
        </div>
      </div>
      <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Input Presensi</h1>
        </aside>
        <section class="w-4/5">
        <input class="block w-full text-sm text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 "
            name="dokumen"
          id="dokumen" type="file" placeholder="Optional">
        </section>
      </div>
      <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Upload Dokumentasi</h1>
        </aside>
        <section class="w-4/5">
        <input class="block w-full text-sm text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 "
            name="dokumentasi"
          id="dokumentasi" type="file" placeholder="Optional">
        </section>
      </div>

      <div class="flex flex-col justify-start">
        <label class="text-sm font-semibold text-neutral-400 ">Catatan</label>
        <textarea name="catatan" id="catatan" cols="30" rows="10"
          class="w-full rounded-lg p-2 bg-neutral-50 border"></textarea>
      </div>
      <div>
        <button
          class="fixed bottom-0 right-0 m-10 z-10 flex items-center bg-zinc-200 shadow-md text-black rounded-lg px-6 py-4 space-x-2 hover:bg-zinc-300">
          <span>Simpan</span>
        </button>
      </div>
    </form>
  </div>
</section>