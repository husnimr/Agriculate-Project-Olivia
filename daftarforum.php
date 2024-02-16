<?php
$error = '';
$hasil = false;
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    if ($_POST['password'] != $_POST['password2']) {
        $error = 'Password dan Ketik Ulang Password harus sama';
    } else if (strlen($_POST['password']) < 6) {
        $error ='Password harus minimal 6 karakter';
    }else {
        // Validasi email
        $sql = "select count(*) from users where email=:emailUser";
        $query = $pdo->prepare($sql);
        $query->execute(array('emailUser' => $_POST['email']));
        $count = $query->fetchColumn();
        if ($count > 0) {
            $error = 'Gunakan email lain';
        } else {
            $sql = "insert into users (nama, email , password) 
            values (:nama, :email, :password)";
            $query2 = $pdo->prepare($sql);
            $query2->execute(array(
                'nama' => $_POST['nama'],
                'email' => $_POST['email'],
                'password' => sha1($_POST['password']),
            ));
            $hasil = true;
            unset($_POST);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Daftar Forum - Agriculate</title>
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
      max-width: 290px;
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
      border: 0;
      border-top: 1px solid #ddd;
    }
    </style>
  </head>
  <body>
      <?php
      $__menuAktif = 'registrasi';
      include 'menu.php';
      ?>
      <div class="container">
      <h5 class="text-center">Daftar Forum</h5>
          <hr/>
          <?php if ($hasil == true) {?>
          <p class="text-success">
              Registrasi berhasil, silahkan <a href="loginforum.php">login</a>.
          </p>
          <?php }?>
          <?php
          if ($error != '') {
              echo '<p class="text-danger">'. $error . '</p>';
          }
          ?>
          <div class="row">
              <div class="col-md-12 d-flex justify-content-center align-items-center">
                  <form method="POST" action="">
                      <div class="mb-3">
                          <label class="form-label">Nama</label>
                          <input class="form-control" type="text" name="nama" required value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input class="form-control" type="email" name="email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input class="form-control" type="password" name="password" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Ketik Ulang Password</label>
                          <input class="form-control" type="password" name="password2" required>
                      </div>
                      <button class="btn btn-success">Daftar</button>
                  </form>
              </div>
          </div>
      </div>
    <script src="boostrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>