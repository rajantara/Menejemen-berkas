<?php
include "server/koneksi.php";
// Cek apakah parameter id telah dikirimkan
$fileId = isset($_GET['id']) ? $_GET['id'] : '';

// Query untuk mengambil data berkas berdasarkan id
$sql = "SELECT * FROM files WHERE id = '$fileId'";
$result = $koneksi->query($sql);

// Inisialisasi variabel
$filename = '';
$filepath = '';

// Cek apakah data berkas ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filename = $row['filename'];
    $filepath = $row['filepath'];
} else {
    die("Berkas tidak ditemukan.");
}

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Hapus file dari folder
    if (file_exists($filepath)) {
        unlink($filepath);
    }

    // Hapus data berkas dari database
    $deleteQuery = "DELETE FROM files WHERE id = '$fileId'";
    if ($koneksi->query($deleteQuery) === TRUE) {
        echo "Berkas berhasil dihapus.";

        // Redirect kembali ke halaman index.php
        header("Location: library-assets.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat menghapus berkas: " . $koneksi->error;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Hapus Berkas</title>
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

        <h1>Hapus Berkas</h1>

        <form method="POST" action="">
            <div class="container">
                <div class="btn-container">
                    <p>Anda yakin ingin menghapus berkas "<?php echo $filename; ?>"?</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                    <a href="library-assets.php" class="btn btn-secondary">Batal</a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Anda yakin ingin menghapus berkas "<?php echo $filename; ?>"?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Tambahkan script JavaScript dari Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php
$koneksi->close();
?>