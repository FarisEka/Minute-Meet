<main class="flex h-screen bg-[#263959]">
  <aside class="justify-center items-center hidden lg:flex lg:w-3/4">
    <figure>
      <img src="assets/web/logo.png" class="p-8" alt="">
    </figure>
  </aside>
  <section class="mx-auto w-full p-8 lg:w-2/4 lg:p-16 bg-white">
    <form action="db/db_login.php" method="post" class="my-28">
      <header>
        <h2 class="text-5xl font-bold mb-24 text-center text-black">LOGIN</h2>
      </header>
      <div class="mb-4">
        <label class="block text-black mb-2" for="username">Username / Email</label>
        <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="username"
          id="username" type="text" placeholder="Masukan email atau username" required>
      </div>
      <div class="mb-6">
        <label class="block text-black mb-2" for="password">Password</label>
        <input class="w-full px-3 py-2 text-black placeholder-[#A0A0A0] bg-[#D9D9D9] rounded" name="password"
          id="password" type="password" placeholder="Masukan password" required>
      </div>
      <div class="text-center">
        <button class="px-24 py-2 text-white bg-[#263959] hover:bg-slate-700 rounded-lg" type="submit">Login</button>
        <a href="index.php?page=register" class="block text-slate-500 hover:text-slate-600 mt-4 underline"
          href="register.php">Buat Akun Baru</a>
      </div>
    </form>
  </section>
</main>