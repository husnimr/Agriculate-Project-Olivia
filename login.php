<?php
session_start();
require 'config.php';

// Periksa apakah email dan password ada di dalam $_POST
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perbaikan: Ganti "tbl-users" dengan "tbl_users"
    $query_sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    
    $result = mysqli_query($conn, $query_sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login berhasil, ambil data pengguna
        $user_data = mysqli_fetch_assoc($result);

        // Simpan informasi pengguna ke dalam sesi
        $_SESSION['user_id'] = $user_data['user_id'];
        $_SESSION['nama'] = $user_data['nama'];
        $_SESSION['email'] = $user_data['email'];

        // Redirect ke halaman utama atau halaman lain yang sesuai
        header("location: index.php");
        exit;
    } else {
        // Login gagal, tampilkan pesan error menggunakan JavaScript
        echo '<script>alert("Gagal Masuk, Cek kembali email dan password Anda!"); window.location.href = "index.php";</script>';
    }

    // Menutup koneksi
    mysqli_close($conn);
} 
?>
