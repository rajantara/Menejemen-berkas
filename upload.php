<?php
include "server/koneksi.php";

// Lokasi penyimpanan file yang diunggah
$uploadDirectory = "berkas/";

// Fungsi untuk menghasilkan nama unik untuk file yang diunggah
function generateUniqueFileName($filename)
{
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $basename = pathinfo($filename, PATHINFO_FILENAME);
    $unique = uniqid();
    return $basename . '_' . $unique . '.' . $extension;
}

// Proses upload file
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pastikan ada file yang diunggah
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];

        // Ambil informasi file yang diunggah
        $filename = $file['name'];
        $tempFilePath = $file['tmp_name'];

        // Generate nama unik untuk file
        $newFileName = generateUniqueFileName($filename);

        // Mendapatkan tahun dari input form
        $year = $_POST['year'];

        // Tentukan lokasi penyimpanan file yang diunggah
        $destination = $uploadDirectory . $year . '/' . $newFileName;

        // Buat direktori tahun jika belum ada
        if (!is_dir($uploadDirectory . $year)) {
            mkdir($uploadDirectory . $year);
        }

        // Pindahkan file yang diunggah ke lokasi penyimpanan
        if (move_uploaded_file($tempFilePath, $destination)) {
            // Simpan informasi file ke dalam database
            $sql = "INSERT INTO files (filename, filepath, year) VALUES ('$filename', '$destination', '$year')";

            if ($koneksi->query($sql) === TRUE) {
                header("Location: library-assets.php");
                exit;
            } else {
                echo "Terjadi kesalahan saat menyimpan informasi file ke dalam database: " . $koneksi->error;
            }
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}

$koneksi->close();
