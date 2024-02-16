<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah kunci "user_id" ada di dalam array $_POST
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        
        // Dapatkan data formulir lainnya
        $new_nama = isset($_POST['edit-nama']) ? $_POST['edit-nama'] : '';
        $new_email = isset($_POST['edit-email']) ? $_POST['edit-email'] : '';
        $new_password = isset($_POST['edit-password']) ? $_POST['edit-password'] : '';

        // Lakukan validasi/sanitasi jika diperlukan

        // Perbarui data di database
        $update_query = "UPDATE users SET nama='$new_nama', email='$new_email', password='$new_password' WHERE id=$user_id";
        mysqli_query($conn, $update_query);

        // Redirect atau berikan respons JSON jika diperlukan
        header("Location: user.php");
        exit();
    } else {
        // Tangani kasus ketika "user_id" tidak ada
        echo "Error: Kunci user_id tidak ditemukan dalam permintaan POST.";
        // Anda mungkin ingin mengalihkan atau menangani kesalahan dengan benar
        exit();
    }
} else {
    // Tangani kasus ketika metode permintaan bukan POST
    echo "Error: Metode permintaan tidak valid.";
    // Anda mungkin ingin mengalihkan atau menangani kesalahan dengan benar
    exit();
}
?>
