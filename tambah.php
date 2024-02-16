<!-- Your form content -->
<form method="post" action="process.php">
    <label for="judul">Judul:</label>
    <input type="text" name="judul" required pattern="[a-zA-Z\s]+" title="Hanya huruf dan spasi yang diizinkan">

    <label for="luas_lahan">Luas Lahan (meter):</label>
    <input type="number" name="luas_lahan" required>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>

    <label for="nomor_telepon">Nomor Telepon:</label>
    <input type="tel" name="nomor_telepon" required pattern="[0-9]+">

    <input type="submit" value="Submit">
</form>
