<?php
require 'config.php';

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (nama, email, password)
                VALUES ('$nama','$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    // Pendaftaran berhasil, arahkan ke halaman utama dengan pesan sukses
    echo '(<script>alert("Pendaftaran berhasil! Silahkan masuk."); window.location.href = "index.php";</script>)';
    exit();
} else {
    // Pendaftaran gagal, tampilkan pesan error
    echo "Pendaftaran gagal!: " . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
