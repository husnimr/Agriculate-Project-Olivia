<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Forum - Agriculate</title>
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

    h3 {
      color: #333;
      margin-top: 0;
    }

    .topic-container {
      margin-top: 20px;
    }

    .row {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
    }

    .col-auto img {
      border-radius: 50%;
    }

    .col {
      flex-grow: 1;
      padding-left: 10px;
    }

    .blockquote {
      margin-bottom: 10px;
      font-size: 1.1em;
      color: #333;
    }

    .blockquote-footer {
      font-size: 0.9em;
      color: #777;
      margin-bottom: 0em;
      margin-top: -4px;
    }

    .text-muted {
      color: #888;
      text-decoration: none;
    }

    .text-muted:hover {
      text-decoration: underline;
    }

    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #ddd;
    }
      
    </style>
  </head>
  <body>
      
      <?php
      $__menuAktif = 'home';
      include 'menu.php';
      ?>
      <div class="container">
      <div style="background-color: #f2f2f2; padding: 10px;">
        <center>
        <b><?php
          if (isset($_SESSION['user'])) {
            echo "Hai " . $_SESSION['user']['nama'] . ", " ; 
          }
          ?>
          Selamat datang di Forum Diskusi Agriculate!</b> <br>Anda dapat bertanya jawab tentang segala hal yang diposting oleh Admin.</center>
        </div>

        <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
          $pdo = require 'koneksi.php';
          $sql = "SELECT judul, tanggal, nama, email, topik.id, id_user FROM topik
          INNER JOIN users ON topik.id_user = users.id
          ORDER BY tanggal DESC";
          $query = $pdo->prepare($sql);
          $query->execute();
        ?>
        <center><h3 class="mt-5">Daftar Topik</h3></center>
        <hr/>
        <?php
        while($data = $query->fetch()) {
        ?>
        <div class="row">
          <div class="col-auto">
            <img src="//www.gravatar.com/avatar/<?php echo md5($data['email']);?>?s=48&d=monsterid" class="rounded-circle"/>
          </div>
        <figure class="col">
          <blockquote class="blockquote">
            <p style="padding-top: 11px;">
              <a href="lihat-topik.php?id=<?php echo $data['id'];?>"><?php echo htmlentities($data['judul']);?></a>
            </p>
          </blockquote>
          <figcaption class="blockquote-footer">
            Dari: <?php echo htmlentities($data['nama']);?>
            - <?php echo date('d M Y H:i', strtotime($data['tanggal']));?>
            <?php
            if ($_SESSION['user']['id'] == $data['id_user']) {?>
            - <a href="hapus-topik.php?id=<?php echo $data['id'];?>"
                onclick="return confirm('Apakah Anda yakin menghapus topik ini?')"
                class="text-muted">Hapus</a>
            <?php }?>
          </figcaption>
        </figure>
        </div>
        <?php }?>
        <?php }?>
      </div>
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>