<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rapat_unbraw";

?>

<body onload="print()">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="frmedit">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Notulensi Rapat</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .rapat-container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
  }
    h1 {
      color: #333;
      text-align: center;
      border-bottom: 2px solid #333;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
    }

    .info div {
      flex: 1;
      padding: 0 10px;
    }

    .notulensi,
    .dokumentasi {
      margin-top: 20px;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <div class="rapat-container">
    <h1>Hasil Notulensi Rapat</h1>

    <div class="info">
      <div>
        <strong>Judul Rapat:</strong>
        <p>Lomba</p>
      </div>
      <div>
        <strong>Jam:</strong>
        <p>09:00 - 11:00 WIB</p>
      </div>
      <div>
        <strong>Lokasi:</strong>
        <p>Vokasi Dieng</p>
      </div>
      <div>
        <strong>Host:</strong>
        <p>Faris</p>
      </div>
    </div>

    <div class="notulensi">
      <h2>Notulensi Rapat</h2>
      <p>
      Untuk memperingati dan juga memeriahkan Hari Kemerdekaan Indonesia Tahun 2021, maka akan diselenggarakan serangkaian acara yang akan dimulai di tanggal 16 Agustus 2021 hingga 19 Agustus 2021 dengan rincian kegiatan sebagai berikut:

Tanggal 16 Juni 2021: Acara lomba untuk anak-anak (siang), malam wungon serta doa bersama
Tanggal 17 Juni 2021: Upacara bendera
Tanggal 18 Juni 2021: Acara lomba untuk remaja & orang dewasa
Tanggal 19 Juni 2021: Karnaval
Yang akan diurus oleh kepanitiaan dengan susunan sebagai berikut:

Ketua pelaksana: Fatkhuri
Sekretaris: Nelisa Hidayati
Bendahara: Ana Nur Fadlilah
Koordinator seksi acara: Bayun Matsani
Koordinator HUMAS: Ahmad Setiawan
Koordinator seksi kebersihan: Ulul Azmi
Koordinator seksi konsumsi: Lilis Kholisoh
Koordinator seksi perlengkapan: Mushlikh
Kegiatan ditutup oleh Sustiyono sebagai pemimpin rapat pukul 16.00 WIB
      </p>
      <!-- Tambahkan konten notulensi sesuai kebutuhan -->
    </div>

    <div class="dokumentasi">
      <h2>Dokumentasi Rapat</h2>
      <!-- Tambahkan gambar atau konten dokumentasi sesuai kebutuhan -->
      <img src="dokumentasi1.jpg" alt="Dokumentasi 1">
      <img src="dokumentasi2.jpg" alt="Dokumentasi 2">
    </div>
  </div>

</body>