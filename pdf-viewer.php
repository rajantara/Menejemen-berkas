<?php

include "server/koneksi.php";


// Ambil data file PDF dari database
$query = "SELECT * FROM files WHERE id = 1"; // Ganti 1 dengan ID berkas yang ingin ditampilkan
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);

$filename = $row['filename'];
$filepath = $row['filepath'];

// Simpan file PDF ke disk
$fileLocation = "berkas/file.pdf"; // Tentukan lokasi dan nama file PDF yang akan disimpan
file_put_contents($fileLocation, $filepath);

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html>

<head>
  <title>PDF Viewer</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    p {
      margin-bottom: 20px;
    }

    .btn-container {
      text-align: center;
    }
  </style>
</head>

<body>
  <h1>PDF Viewer</h1>

  <iframe src="berkas/" width="100%" height="600px"></iframe>
  <div class="content-error">
    <a href="index.php">Kembali</a>
    <a href="#">Report Problem</a>
  </div>

</body>


</html>