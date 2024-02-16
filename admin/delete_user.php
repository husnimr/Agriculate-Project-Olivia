<?php
// Include file konfigurasi database
require '../config.php';

// Periksa apakah data POST 'id' sudah ada
if (isset($_POST['id'])) {
  // Ambil ID pengguna dari data POST
  $id = $_POST['id'];

  // Buat query hapus
  $deleteQuery = "DELETE FROM users WHERE id = $id";

  // Eksekusi query hapus
  $result = mysqli_query($conn, $deleteQuery);

  // Periksa apakah penghapusan berhasil
  if (!$result) {
    // Jika gagal, dapatkan pesan kesalahan
    echo "Gagal menghapus pengguna: " . mysqli_error($koneksi);
  }
} else {
  // Jika ID pengguna tidak valid
  echo " ";
}

?>