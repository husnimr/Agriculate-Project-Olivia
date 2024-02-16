<?php
require 'functionartikel.php';
require '../config.php';

// Cek apakah parameter "id" ada dalam URL
if (!isset($_GET["id"])) {
    echo "ID tidak ditemukan.";
    exit();
}

// Ambil data di URL
$id = $_GET["id"];

// Hapus artikel
if (hapus($id) > 0) {
    header("Location: artikel.php");
    exit();
} else {
    echo "Artikel gagal dihapus.";
    exit();
}
?>
