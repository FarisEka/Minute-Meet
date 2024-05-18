<header class="flex flex-col justify-center w-full bg-[#EAB72C] p-4 h-[100px]">
  <div class="text-white">
    <h1 class="text-2xl font-bold">Partisipan</h1>
  </div>
</header>
<section class="flex-col h-full bg-[#F0EFEF] p-8">
<form method="post" action="db/db_partisipan.php">
  <div class="flex flex-col bg-white shadow-md">
    <header class="border-b-2 p-8">
      <h1 class="text-3xl font-semibold">Data Partisipan</h1>
    </header>
    <section>
      <form action="">
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Nama Lengkap</h1>
          </aside>
          <section class="w-4/5">
          <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="nama_partisipan"
          id="nama_partisipan" type="text" placeholder="Masukan Nama Lengkap" required>
        </div>
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Nomor Telp</h1>
          </aside>
          <section class="w-4/5">
          <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="no_hp"
          id="no_hp" type="text" placeholder="Masukan no hp" required>
          </section>
        </div>
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Departemen</h1>
          </aside>
          <section class="w-4/5">
          <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="ahli_partisipan" id="email"
          type="ahli_partisipan" placeholder="departemen" required>
          </section>
        </div>
        <div class="border-b p-8 flex flex-row items-center">
          <aside class="w-1/5">
            <h1 class="text-xl font-semibold text-neutral-400 ">Jabatan</h1>
          </aside>
          <section class="w-4/5">
          <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="jabatan_partisipan"
          id="jabatan_partisipan" type="text" placeholder="Jabatan" required>
          </section>
        </div>
        <div class="border-b p-8 flex justify-end">
          <button class="px-24 py-2 text-white bg-[#263959] hover:bg-slate-700 rounded-lg" type="submit">Sign Up</button>
        </div>
      </form>
    </section>
  </div>
</section>