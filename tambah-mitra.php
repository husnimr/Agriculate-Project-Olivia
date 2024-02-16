<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrisnap - Tambah Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        button {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #2ecc71;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        label {
        display: block;
        margin-bottom: 8px;
        color: #025c2e; /* Warna teks untuk label */
    }

    button,
    button[type="submit"] {
        background-color: #2ecc71;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Tambah properti color pada teks tombol */
    button[type="submit"] {
        color: #025c2e; /* Warna teks untuk tombol 'Simpan' */
    }
    </style>
</head>
<body>

    <!-- Form -->
    <form id="myForm" action="process.php" method="post">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required pattern="[A-Za-z]+" title="Judul harus berupa huruf">

        <label for="luas_lahan">Luas Lahan (m²):</label>
        <input type="number" name="luas_lahan" required>

        <label for="jenis_tanah">Jenis Tanah:</label>
        <select name="jenis_tanah" required>
            <option value="aluvial">Aluvial</option>
            <option value="andosol">Andosol</option>
            <option value="entisol">Entisol</option>
            <option value="grumusol">Grumusol</option>
            <option value="humus">Humus</option>
            <option value="inceptisol">Inceptisol</option>
            <option value="laterit">Laterit</option>
            <option value="latosol">Latosol</option>
            <option value="litosol">Litosol</option>
            <option value="kapur">Kapur</option>
        </select> <br><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="tel" name="nomor_telepon" required pattern="[0-9]+">

        <label for="kota">Kota:</label>
        <input type="text" name="kota" required>

        <label for="provinsi">Provinsi:</label>
        <input type="text" name="provinsi" required>

        <button type="submit">Simpan</button>
    </form>

    <!-- PHP to display data -->

</body>
</html>
