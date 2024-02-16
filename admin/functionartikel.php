<?php

// koneksi ke database
require '../config.php';

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $tanggal_publish = htmlspecialchars($data["tanggal_publish"]);
    $konten = htmlspecialchars($data["konten"]);
    
    // upload gambar
    $gambar = upload();
    if(!$gambar) {
        return false; 
    }

    $query = "INSERT INTO artikel
                VALUES
                ('', '$judul', '$penulis', '$tanggal_publish', '$konten', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4) {
        echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('yang Anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if($ukuranFile > 10000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/images/artikel/' . $namaFileBaru);
    return $namaFileBaru;
}

function ubah($data) {
    global $conn;

    $id = isset($data["id"]) ? $data["id"] : null;
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $tanggal_publish = htmlspecialchars($data["tanggal_publish"]);
    $konten = htmlspecialchars($data["konten"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // Validasi ID
    if ($id === null || !is_numeric($id)) {
        echo "Error: ID tidak valid.";
        return false;
    }

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE artikel SET
                judul = '$judul', 
                penulis = '$penulis', 
                tanggal_publish = '$tanggal_publish',
                konten = '$konten',
                gambar = '$gambar'
            WHERE id = $id";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Cek kesalahan dalam eksekusi query
    if (!$result) {
        // Tambahkan penanganan kesalahan sesuai kebutuhan
        echo "Error: " . mysqli_error($conn);
        return false;
    }

    return mysqli_affected_rows($conn);
}



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM artikel WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM artikel 
                WHERE
            artikel LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%'
        ";

    return query($query);
}

// Fungsi untuk mengambil semua artikel dari database
function ambilSemuaArtikel() {
    global $conn; // Menggunakan variabel koneksi global dari config.php

    $query = "SELECT * FROM artikel";
    $result = mysqli_query($conn, $query);

    $artikels = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $artikels[] = $row;
    }

    return $artikels;
}