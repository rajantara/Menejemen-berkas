<?php
include "server/koneksi.php";

// Cek apakah parameter id telah dikirimkan
$fileId = isset($_GET['id']) ? $_GET['id'] : '';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang diinputkan oleh pengguna
    $filename = $_POST['filename'];

    // Query untuk mengupdate data berkas berdasarkan id
    $updateQuery = "UPDATE files SET filename = '$filename' WHERE id = '$fileId'";

    if ($koneksi->query($updateQuery) === TRUE) {
        echo "Perubahan berhasil disimpan.";

        // Redirect kembali ke halaman index.php
        header("Location: library-assets.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menyimpan perubahan: " . $koneksi->error;
    }
}

// Query untuk mengambil data berkas berdasarkan id
$sql = "SELECT * FROM files WHERE id = '$fileId'";
$result = $koneksi->query($sql);

// Inisialisasi variabel
$filename = '';

// Cek apakah data berkas ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filename = $row['filename'];
} else {
    die("Berkas tidak ditemukan.");
}

$koneksi->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Berkas</title>
    <!-- Tambahkan link CSS dari Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    <div class="container">
        <h1>Edit Berkas</h1>
        <form method="POST" action="">
            <label for="filename">Nama File:</label>
            <input type="text" name="filename" id="filename" value="<?php echo $filename; ?>" required>
            <br><br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="library-assets.php" class="btn btn-danger">Batal</a>
        </form>
    </div>
</body>

</html>