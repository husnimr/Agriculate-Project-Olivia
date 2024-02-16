<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);
    $rating = (int)$_POST['rating'];  
    $testi = mysqli_real_escape_string($conn, $_POST['testi']);

    
    $insertQuery = "INSERT INTO testimonials (nama, email, jabatan, rating, testi) VALUES ('$nama', '$email', '$jabatan', $rating, '$testi')";

    if (mysqli_query($conn, $insertQuery)) {
        echo '<script>alert("Terima Kasih! Ulasan Anda sudah terkirim!"); window.location.href = "about.php";</script>';
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
