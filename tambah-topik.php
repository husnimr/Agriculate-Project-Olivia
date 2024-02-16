<?php
require_once 'cek-akses.php';
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "INSERT INTO topik (judul, deskripsi, gambar, tanggal, id_user)
            VALUES (:judul, :deskripsi, :gambar, NOW(), :id_user)";
    $query = $pdo->prepare($sql);
    
    // Menangani unggahan gambar
    $gambar = uploadGambar();

if ($gambar !== null) {
    $query->execute(array(
        'judul' => $_POST['judul'],
        'deskripsi' => $_POST['deskripsi'],
        'gambar' => $gambar,
        'id_user' => $_SESSION['user']['id'],
    ));
    
    header("Location: tambah-topik.php?sukses=1");
    exit;
}
}


function uploadGambar() {
  if (isset($_FILES['gambar'])) {
      $uploadDir = 'uploads/';
      $uploadFile = $uploadDir . basename($_FILES['gambar']['name']);
      
      if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
          // Simpan path ke dalam database
          return $uploadFile;
      } else {
          echo '<p class="text-danger">Terjadi kesalahan saat mengunggah gambar.</p>';
      }
  }
  
  return null;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Tambah Topik - Agriculate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
  
    <!-- Ini style custom buat ganti warna hijau -->
    <style> 
    #header {
      background-color: rgb(2, 92, 46, 0.8);
    }
    .breadcrumbs .page-header:before {
      background-color: rgb(2, 92, 46, 0.6);
      }
    .about .section-header h2 .content h3 {
      color: #025c2e;
      }
    @media (max-width: 1279px) {
    .navbar ul {
      background: rgb(2, 92, 46, 0.8);
  }
    .mobile-nav-active .navbar:before {
      background: rgba(45, 45, 45, 0.8);
  }
    .breadcrumbs .page-header:before {
      background-color: rgb(2, 92, 46, 0.6);
    }
    .testimonials::before {
      background: rgb(2, 92, 46, 0.7);
  }
    #footer {
      background-color: #025c2e;
      }
    }

      body {
            font-family: 'Open Sans', 'Poppins', 'Inter', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .text-success {
            color: #28a745; /* Green color for success message */
        }

        form {
            margin-top: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%; /* Full width */
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da;
            background-color: #fff;
            margin-bottom: 15px;
        }

        textarea.form-control {
            resize: vertical;
        }

    </style>
  </head>
  <body>
      <?php
      $__menuAktif = 'tambah_topik';
      include 'menu.php';
      ?>
      <div class="container">
          <?php
          if (isset($_GET['sukses']) && $_GET['sukses'] == '1') {
              echo '<p class="text-success">Topik berhasil dikirim</p>';
          }
          ?>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="10" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unggah Gambar</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*" required/>
                     </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
      </div>
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>