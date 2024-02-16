<?php
session_start();
require '../config.php';

// Periksa apakah username dan password ada di dalam $_POST
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query_sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    
    $result = mysqli_query($conn, $query_sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login berhasil, ambil data pengguna
        $user_data = mysqli_fetch_assoc($result);

        // Simpan informasi pengguna ke dalam sesi
        $_SESSION['user_id'] = $user_data['user_id'];
        $_SESSION['nama'] = $user_data['nama'];
        $_SESSION['username'] = $user_data['username'];

        // Redirect ke halaman utama atau halaman lain yang sesuai
        header("location: index.php");
        exit;
    } else {
        // Login gagal, tampilkan pesan error menggunakan JavaScript
        echo '<script>alert("Gagal Masuk, Cek kembali username dan password Anda!"); window.location.href = "adminlogin.php";</script>';
    }

    // Menutup koneksi
    mysqli_close($conn);
} 
?>
