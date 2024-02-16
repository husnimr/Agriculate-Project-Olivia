<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses formulir unggah gambar
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));

    $query = "INSERT INTO gambar_mitra (nama, deskripsi, gambar) VALUES ('$nama', '$deskripsi', '$gambar')";
    $koneksi->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Gambar</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form action="indexmitra.php" method="post" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" required><br>
        Deskripsi: <textarea name="deskripsi"></textarea><br>
        Gambar: <input type="file" name="gambar" accept="image/*" required><br>
        <input type="submit" value="Unggah">
    </form>

    <h2>Daftar Gambar</h2>
    <?php
    $result = $koneksi->query("SELECT * FROM gambar_mitra");

    while ($row = $result->fetch_assoc()) {
        echo "<img src='data:image/jpeg;base64," . base64_encode($row['gambar']) . "' width='100' height='100'>";
        echo "<p>Nama: " . $row['nama'] . "</p>";
        echo "<p>Deskripsi: " . $row['deskripsi'] . "</p>";
        echo "<hr>";
    }

    $koneksi->close();
    ?>
</body>
</html>
