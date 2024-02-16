<?php
session_start();
?>
<?php
include 'config.php';

$query = "SELECT dm.*, gm.image_path, ha.rekomendasi FROM data_mitra dm
          LEFT JOIN snapshots gm ON dm.id = gm.id
          LEFT JOIN hasil_ai ha ON dm.id = ha.mitra_id"; // Assuming mitra_id links to the partner ID in hasil_ai table
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Kemitraan - Agriculate</title>
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
<body>  

      <!-- ======= Header ======= -->
      <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="index.php" class="logo d-flex align-items-center">
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

        <nav id="navbar" class="navbar" style="position: fixed;">
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

        <nav id="navbar" class="navbar" style="position: fixed;">
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

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
            <div
              class="page-header d-flex align-items-center"
              style="background-image: url('assets/img/page-header.jpg')"
            >
              <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                  <div class="col-lg-6 text-center">
                    <h2>Kemitraan</h2>
                    <p>
                      Mempertahankan ketahanan pangan, memberdayakan masa depan.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <nav>
              <div class="container">
                <ol>
                  <li><a href="index.php">Beranda</a></li>
                  <li>Kemitraan</li>
                </ol>
              </div>
            </nav>
          </div>
          <!-- End Breadcrumbs -->

      <!-- ======= Services Section ======= -->
      <section id="service" class="services">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <span>Cari Mitra</span>
              <h2>Ayo Bermitra</h2><br><br>

              <a href="agrisnap.html" class="green-button">Tambah Mitra</a>
            </div>
            <table border="1">
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Luas Lahan</th>
            <th>Detail</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            // Tambahkan kode untuk menampilkan gambar yang diambil dari kamera
            echo "<td><img src='assets/img/lahan.jpeg' alt='gambar' width='200' height='100'></td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['luas_lahan'] . "</td>";
            echo "<td><a href='detail_mitra.php?id=" . $row['id'] . "'>Lihat Detail</a></td>";
            echo "</tr>";
        }
        ?>
    </table><br><br>
          </div>

      </section>

        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.php" class="logo d-flex align-items-center">
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
                  <li><a href="index.php">Beranda</a></li>
                  <li><a href="Kemitraan.php" class="active">Kemitraan</a></li>
                  <li><a href="forum.php">Forum</a></li>
                  <li><a href="about.php">Tentang Kami</a></li>
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
