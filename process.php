<?php
include 'config.php';

if (isset($_POST['imageData'])) {
    $imageData = $_POST['imageData'];

    // Decode base64 data gambar
    $decodedImage = base64_decode(str_replace('data:image/png;base64,', '', $imageData));

    // Nama file gambar
    $imageName = "snapshot_" . time() . ".png";

    // Path untuk menyimpan gambar
    $imagePath = "uploads/" . $imageName;

    // Simpan gambar ke server
    file_put_contents($imagePath, $decodedImage);

    // Simpan informasi gambar ke database
    $sql = "INSERT INTO snapshots (image_path) VALUES ('$imagePath')";
    if ($conn->query($sql) === TRUE) {
        echo "Gambar berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Simpan koordinat ke database
    $sql = "INSERT INTO locations (latitude, longitude) VALUES ('$latitude', '$longitude')";
    if ($conn->query($sql) === TRUE) {
        echo "Lokasi berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $luas_lahan = mysqli_real_escape_string($conn, $_POST['luas_lahan']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nomor_telepon = mysqli_real_escape_string($conn, $_POST['nomor_telepon']);

    $sql = "INSERT INTO data_mitra (judul, luas_lahan, nama, nomor_telepon) VALUES ('$judul', '$luas_lahan', '$nama', '$nomor_telepon')";

    if ($conn->query($sql) === TRUE) {
        // Data berhasil disimpan, redirect to index.php
        header("Location: Kemitraan.php");
        exit(); // Make sure to exit after redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
