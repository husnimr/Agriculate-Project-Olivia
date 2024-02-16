<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Detail Mitra - Agriculate</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .partner-details {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        h2 {
            color: #333;
        }
        .partner-info {
            margin-bottom: 15px;
        }
        .partner-info p {
            margin: 5px 0;
        }
        .partner-info img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin-top: 10px;
        }
        .error-message {
            color: red;
        }
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

  /* CSS buat Popup login register */
  .popup-form {
        max-width: 400px;
        margin: 100px auto;
      }
      .btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus {
    color: #fff;
    background-color: #025c2e;
    border-color: #025c2e;
}

        /* CSS for Stylish Button */
        .green-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            color: #fff;
            background-color: #4CAF50; /* Warna hijau */
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .green-button:hover {
            background-color: #45a049; /* Warna hijau yang lebih gelap saat dihover */
        }

        table {
        border-collapse: collapse;
        width: 100%;
        border-radius: 10px; /* Mengatur sudut tabel */
        overflow: hidden; /* Memastikan elemen yang melebihi batasnya akan terpotong (overflow hidden) */
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #025c2e;
    }

img {
    display: block;
    margin: auto;
}
    </style>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... (bagian head lainnya) ... -->
  <style>
    /* ... (style lainnya) ... */
  </style>
</head>
<body>
  <!-- Header -->
  <!-- ... (bagian header lainnya) ... -->
  
  <br><br>
  
  <!-- Detail Mitra -->
  <div class="partner-details mt-5">
    <!-- ... (bagian PHP lainnya) ... -->
    <?php
      // ... (kode PHP sebelumnya) ...

      echo "</div>";

      // Tambahkan elemen untuk menampilkan respon AI
      echo "<p id='ai-response'></p>";
    ?>
  </div>

  <!-- Footer -->
  <!-- ... (bagian footer lainnya) ... -->

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
  function tampilkanRekomendasi() {
    // Lakukan permintaan ke endpoint API pada server
    fetch('/api/getAIResponse')
      .then((response) => response.json())
      .then((data) => {
        const aiParagraph = document.getElementById('ai-response');
        aiParagraph.innerText = 'Rekomendasi: ' + data.aiResponse;
      })
      .catch((error) => {
        console.error('Gagal mendapatkan respons dari server:', error);
      });
  }
</script>
  <body>
    <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <!-- <h1>Logis</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <?php
if (isset($_SESSION['nama'])) {
    // Jika sudah login, ambil nama pengguna dari session
    $nama = $_SESSION['nama'];
    ?>

    <nav id="navbar" class="navbar">
        <ul>
        <li><a href="index.php">Beranda</a></li>
            <li><a href="kemitraan.php" class="active">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li class="dropdown"><a href="#"><span>Hai, <?php echo $nama; ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Edit Profil</a></li>
              <li><a href="logout.php">Keluar</a></li>
            </ul>
          </li>
        </ul>
    </nav><!-- .navbar -->

<?php
} else {
    // Jika belum login, tampilkan tombol login
    ?>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="kemitraan.php" class="active">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Daftar / Masuk</a></li>
        </ul>
    </nav><!-- .navbar -->

<?php
}
?>

    </div>

    <!-- Modal login -->
    <div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Login Form -->
            <form method="POST" action="login.php">
              <div class="form-group">
                <label for="loginEmail">Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="loginEmail"
                  aria-describedby="emailHelp"
                  placeholder="Masukkan email"
                />
              </div>
              <div class="form-group">
                <label for="loginPassword">Kata sandi</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="loginPassword"
                  placeholder="Masukkan kata sandi"
                />
              </div>
              <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
            <p class="mt-3">
              Belum punya akun?
              <a
                href="#"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#registerModal"
                >Daftar disini</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal register -->
    <div
      class="modal fade"
      id="registerModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="registerModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Daftar</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <!-- Register Form -->
            
            <form action = "daftar.php" method="POST">
              <div class="form-group">
                <label for="registerName">Nama</label>
                <input
                  type="text"
                  name="nama"
                  class="form-control"
                  id="registerName"
                  placeholder="Nama"
                />
              </div>
              <div class="form-group">
                <label for="registerEmail">Alamat Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="registerEmail"
                  aria-describedby="emailHelp"
                  placeholder="Masukkan email"
                />
              </div>
              <div class="form-group">
                <label for="registerPassword">Kata sandi</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="registerPassword"
                  placeholder="Masukkan kata sandi"
                />
              </div>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </header><!-- End Header -->
  <!-- End Header -->
<br><br>
    <div class="partner-details mt-5">
        <?php
        include 'config.php';

        if (isset($_GET['id'])) {
            $partner_id = $_GET['id'];

            // Lakukan kueri untuk mengambil informasi mitra berdasarkan $partner_id dari database
            $query = "SELECT dm.*, gm.image_path FROM data_mitra dm
                      LEFT JOIN snapshots gm ON dm.id = gm.id
                      WHERE dm.id = ?";
            
            // Mempersiapkan statement
            $stmt = $conn->prepare($query);
            
            // Binding parameter
            $stmt->bind_param("i", $partner_id);
            
            // Execute statement
            $stmt->execute();
            
            // Mengambil hasil query
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Tampilkan informasi mitra di sini, sesuai dengan struktur yang kamu miliki
                echo "<h2>Detail Mitra</h2>";
                echo "<div class='partner-info'>";
                echo "<p>Nama: " . $row['nama'] . "</p>";
                echo "<p>Judul: " . $row['judul'] . "</p>";
                echo "<p>Luas Lahan: " . $row['luas_lahan'] . "</p>";
                echo "<p>Jenis Tanah: " . $row['jenis_tanah'] . "</p>";
                // ... Tampilkan informasi lainnya sesuai kebutuhan
                echo "</div>";
                echo "Koordinat mengarah pada lokasi di Indonesia, tepatnya di sekitar Surakarta. Di wilayah ini, terdapat berbagai tanaman pangan yang cocok untuk ditanam, mengingat iklim tropisnya. Beberapa tanaman yang bisa cocok ditanam di daerah tersebut antara lain:
                <br><br>
                1. Padi: Tanaman ini merupakan salah satu tanaman pangan utama di Indonesia dan tumbuh baik di berbagai jenis tanah.<br>
                2. Kacang Tanah: Cocok di daerah tropis seperti Indonesia dan memiliki nilai gizi yang baik.<br>
                3. Kacang Hijau: Tumbuh subur di iklim tropis dengan tanah yang gembur.<br>
                4. Jagung: Memerlukan sinar matahari yang cukup dan tanah yang subur.<br>
                5. Singkong: Tumbuh baik di tanah yang agak kering dan merupakan sumber karbohidrat yang penting.<br><br>
                Pastikan untuk mempertimbangkan kondisi tanah, curah hujan, dan kondisi lingkungan setempat untuk menentukan tanaman mana yang paling sesuai untuk ditanam di lokasi tersebut.";



            } else {
                echo "<p class='error-message'>Data mitra tidak ditemukan.</p>";
            }
        } else {
            echo "<p class='error-message'>ID mitra tidak diberikan.</p>";
        }
        ?>     

  <h1></h1>
  <div id="output-container">
    <!-- Hasil dari permintaan akan ditampilkan di sini -->
  </div>
  <!--<script>
    // Lakukan permintaan ke endpoint server untuk mendapatkan rekomendasi tanaman
    fetch('/getAIResult')
      .then(response => response.text())
      .then(data => {
        // Tampilkan hasil rekomendasi pada halaman
        const outputContainer = document.getElementById('output-container');
        outputContainer.innerHTML = `<p><strong>Rekomendasi:</strong> ${data}</p>`;
      })
      .catch(error => {
        console.error('Terjadi kesalahan:', error);
      });
  </script>-->
    </div>

     <!-- ======= Footer ======= -->
     <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="Logo" />
              <span>Agriculate</span>
            </a>
            <p>
              Agriculate adalah sistem yang dibuat untuk memberikan solusi atas
              permasalahan pangan di Indonesia. Sistem yang dibangun adalah
              aplikasi berbasis web.
            </p>
            <div class="social-links d-flex mt-4">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><a href="index.html">Beranda</a></li>
              <li><a href="Kemitraan.html" class="active">Kemitraan</a></li>
              <li><a href="forum.html">Forum</a></li>
              <li><a href="about.html">Tentang Kami</a></li>
            </ul>
          </div>

          <div
            class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
          >
            <h4>Kontak Kami</h4>
            <p>
              Jl. Kumbang No.14, RT.02/RW.06<br />
              Babakan, Kecamatan Bogor Tengah<br />
              Kota Bogor, Jawa Barat 16128 <br /><br />
              <strong>Telepon:</strong> +62 813 5388 5383<br />
              <strong>Email:</strong> agriculate@gmail.com<br />
            </p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="copyright">
          &copy; 2023 <strong><span>Agriculate</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">Agriculate</a></div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->

    <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Js buat popup login register -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    // Menangani acara tampilan modal
    $('#loginModal, #registerModal').on('show.bs.modal', function (e) {
      // Nonaktifkan backdrop untuk modal tertentu
      $(this).data('bs.modal')._config.backdrop = false;
    });

    // Menangani acara menyembunyikan modal
    $('#loginModal, #registerModal').on('hidden.bs.modal', function (e) {
      // Mengaktifkan kembali backdrop setelah modal tertutup
      $(this).data('bs.modal')._config.backdrop = true;
    });
  });
</script>
</body>
</html>
