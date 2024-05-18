
<?php $koneksi = mysqli_connect("localhost", "root", "", "rapat_unbraw");?><header class="flex flex-col justify-center w-full bg-[#EAB72C] p-4 h-[100px]">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Undangan Rapat</h1>
  </div>
</header>
<section class="h-full">
<form method="post" action="db/db_undangan.php">
  <div class="flex flex-col w-full h-full bg-white p-8 rounded-md space-y-3">
    <form action="">
      <div class="flex flex-row">
        <div class="w-2/3 pr-4 space-y-2">
          <label for="judul" class="block text-sm font-semibold text-black">Judul</label>
          <select name="judul" id="judul" class="w-full rounded-lg p-2 bg-neutral-50 border" required>
            <option value="" disabled selected>Pilih Rapat</option>
            <!-- Add more options as needed --><?php
            $query = $koneksi->query("SELECT * FROM daftar_rapat");
            while($daftar_rapat = $query->fetch_assoc()){?>
                <option value="<?= $daftar_rapat['id_rapat'];?>"><?= $daftar_rapat['agenda_rapat']?></option>
      <?php } ?>
          </select>
        </div>

        <div class="w-1/2 space-y-2">
          <label for="lokasi" class="block text-sm font-semibold text-black">Lokasi</label>
          <input type="text" name="lokasi_rapat" id="lokasi_rapat" class="w-full rounded-lg p-2 bg-neutral-50 border"
            placeholder="Lokasi Rapat" required>
        </div>
      </div>

      <div class="flex flex-col space-y-2">
        <label for="host" class="block text-sm font-semibold text-black">Host</label>
        <input type="text" name="host" id="host" class="w-full rounded-lg p-2 bg-neutral-50 border" placeholder="Host"
          required>
      </div>

      <div class="flex flex-col space-y-2">
  <label for="partisipan" class="block text-sm font-semibold text-black">Partisipan</label>
  <button id="partisipan" data-dropdown-toggle="dropdownDefaultCheckbox"
    class="w-full rounded-lg p-2 bg-neutral-50 border border-slate-700 text-left text-slate-500"
    type="button">Umum
  </button>

  <div id="dropdownDefaultCheckbox"
    class="hidden w-full max-w-[600px] max-h-[100px] overflow-y-auto bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
    <ul class="flex flex-col p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
    <li>
                  <div class="flex items-center">
                    <input id="checkAll" type="checkbox"
                      class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkAll"
                      class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Check All</label>
                  </div>
                </li>
      <?php
      $query = $koneksi->query("SELECT * FROM partisipan");
      while ($daftar_partisipan = $query->fetch_assoc()) {
      ?>
        <li>
          <div class="flex items-center">
            <input id="checkbox-item-<?php echo $daftar_partisipan['id_partisipan']; ?>" type="checkbox" name="partisipan[]" value="<?= $daftar_partisipan['id_partisipan']; ?>"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="checkbox-item-<?php echo $daftar_partisipan['id_partisipan']; ?>" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
              <?= $daftar_partisipan['nama_partisipan']; ?>
            </label>
              </div>
            </li>
      <?php } ?>
          </ul>
        </div>

        <div class="flex flex-row items-center">
        <aside class="w-1/5">
          <h1 class="text-xl font-semibold text-neutral-400 ">Tanggal & Waktu</h1>
        </aside>
        <div class="flex w-4/5 items-center space-x-2">
          <input type="date" name="tanggal" id="tanggal" class="w-full rounded-lg p-2 bg-neutral-50 border"
            placeholder="mm/dd/yy" required>
          <input type="time" name="jam" id="jam"
            class="w-full rounded-lg p-2 bg-neutral-50 border" placeholder="00:00 PM" required>
          <h1>TO</h1>
          <input type="time" name="optional" id="optional"
            class="w-full rounded-lg p-2 bg-neutral-50 border" placeholder="Optional" required>
        </div>
      </div>

          <div class="w-1/2 space-y-2 pl-2">
            <label for="lokasi" class="block text-sm font-semibold text-black">Download</label>
            <a href="path_to_file" download="nama_file"
              class="block w-full p-2 rounded-lg bg-slate-300 border text-slate-400 text-center hover:bg-slate-400 hover:text-slate-500 transition ease-in-out duration 300">Download</a>
          </div>
        </div>

        <div class="flex flex-col space-y-4 border-t-2 pt-4 mt-4">
          <label for="detail_acara" class="block text-sm font-semibold text-black">Detail Acara</label>
          <div class="flex flex-row items-start">
            <div class="flex-shrink-0">
              <i class="fa-solid fa-video fa-xl"></i>
            </div>
            <textarea id="detail_acara" name="detail_acara" rows="1"
              class="mx-4 p-2 w-[200px] max-h-[200px] overflow-y-auto text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Tautan Zoom" placeholder="optional"></textarea>
          </div>
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen-elemen yang dibutuhkan
    const checkAll = document.getElementById('checkAll');
    const checkboxes = document.querySelectorAll('input[name="partisipan[]"]');

    // Tambahkan event listener untuk checkbox "Check All"
    checkAll.addEventListener('change', function() {
      checkboxes.forEach((checkbox) => {
        checkbox.checked = checkAll.checked;
      });
    });

    // Tambahkan event listener untuk checkbox partisipan
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener('change', function() {
        // Periksa apakah semua checkbox partisipan telah dicentang
        const allChecked = [...checkboxes].every((cb) => cb.checked);
        checkAll.checked = allChecked;
      });
    });
  });
</script>