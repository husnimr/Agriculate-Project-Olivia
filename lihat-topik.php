<?php
require_once 'cek-akses.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Lihat Topik - Agriculate</title>
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
    }}
    .testimonials::before {
      background: rgb(2, 92, 46, 0.7);
  }
    #footer {
      background-color: #025c2e;
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

        .row.mb-3 {
            margin-bottom: 15px;
        }

        .row.mb-3 img.rounded-circle {
            border-radius: 50%;
        }

        h2 {
            color: #025c2e;
            margin-top: 0;
        }

        p {
            line-height: 1.6;
        }

        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .bg-light.py-2.px-3.rounded {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 8px;
        }

        .mt-2 {
            margin-top: 10px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da;
            background-color: #fff;
            margin-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <?php include 'menu.php';?>
    <div class="container">
      <?php
      if (isset($_GET['id']) && !empty($_GET['id'])) {
        $pdo = require 'koneksi.php';
        $sql = "SELECT topik.*, users.nama, users.email FROM topik
        INNER JOIN users ON topik.id_user=users.id
        WHERE topik.id=:id";
        $query = $pdo->prepare($sql);
        $query->execute(array('id' => $_GET['id']));
        $topik = $query->fetch();
        if (empty($topik)) {
          echo '<p class="text-warning">Topik tidak ditemukan</p>';
        } else {
          // Pastikan $pathGambar diinisialisasi dengan path yang sesuai
          $pathGambar = '' . $topik['gambar'];
    ?>
          <div class="row mb-3">
            <div class="col-auto">
              <img src="//www.gravatar.com/avatar/<?php echo md5($topik['email']);?>?s=48&d=monsterid" class="rounded-circle"/>
            </div>
            <div class="col">
              <div class="fw-bold"><?php echo htmlentities($topik['nama']);?></div>
              <small class="text-muted"><?php echo date('d M Y H:i', strtotime($topik['tanggal']));?></small>
            </div>
          </div>
          <!-- Menambahkan gambar di atas judul -->
        <div class="row mb-3">
            <div class="col-12">
                <img src="<?php echo $pathGambar; ?>" class="img-fluid" alt="Gambar Topik"/>
            </div>
        </div>
          <h5><?php echo htmlentities($topik['judul']);?></h5>
          <p><?php echo nl2br(htmlentities($topik['deskripsi']));?></p>
          <hr/>
          <?php
          $sql2 = "SELECT komentar.*, users.nama, users.email FROM komentar
          INNER JOIN users ON users.id = komentar.id_user
          WHERE id_topik=:id_topik";
          $query2 = $pdo->prepare($sql2);
          $query2->execute(array(
            'id_topik' => $_GET['id']
          ));
          while($komentar = $query2->fetch()){
          ?>


          <div class="row mb-3">
            <div class="col-auto">
              <img src="//www.gravatar.com/avatar/<?php echo md5($komentar['email']);?>?s=48&d=monsterid" class="rounded-circle"/>
            </div>
            <div class="col">
              <div class="bg-light py-2 px-3 rounded">
                <div class="row gx-2">
                  <div class="col fw-bold">
                    <?php echo htmlentities($komentar['nama']);?>
                  </div>
                  <?php
                  if ($_SESSION['user']['id'] == $komentar['id_user'] || $_SESSION['user']['nama'] == 'admin')  {
                  ?>
                  <div class="col-auto">
                    <a href="hapus-komentar.php?id=<?php echo $komentar['id'];?>"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')"
                    class="text-muted"><small>Hapus</small></a>
                  </div>
                  <?php }?>
                  <div class="col-auto">
                  <small class="text-muted"><?php echo date('d M Y H:i', strtotime($komentar['tanggal']));?></small>
                  </div>
                </div>
                <div class="mt-2">
                <?php echo nl2br(htmlentities($komentar['komentar']));?>
                </div>
              </div>
            </div>
          </div>
          <?php }?>

          

          <div class="row">
            <div class="col-auto">
              <img src="//www.gravatar.com/avatar/<?php echo md5($_SESSION['user']['email']);?>?s=48&d=monsterid" class="rounded-circle"/>
            </div>
            <div class="col">
            <form method="POST" action="jawab-topik.php" enctype="multipart/form-data">
              <div class="mb-3">
                <textarea class="form-control" name="komentar" placeholder="Jawab topik"></textarea>
                <input type="hidden" value="<?php echo $topik['id'];?>" name="id_topik"/>
              </div>
              <div class="text-end">
                <button class="btn btn-success" type="submit">Kirim</button>
              </div>
            </form>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>