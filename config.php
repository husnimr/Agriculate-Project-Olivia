<?php
$servername = "103.145.227.133";
$database = "agricula_agriculate";
$username = "agricula_agriculate";
$password = "siputjuara1";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo " ";
?>
