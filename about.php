<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Tentang Kami - Agriculate</title>
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

 /* Buat rating */
.star-rating input {
    display: none;
}
.star-rating {
    margin: auto;
    display: table;
}
.star-rating label {
    padding: 10px;
    float: right;
    font-size: 30px;
    color: #eee;
}
.star-rating input:not(:checked) ~ label:hover,
.star-rating input:not(:checked) ~ label:hover ~ label {
    color: #ffc107;
}
.star-rating input:checked ~ label {
    color: #ffc107;
}
.star-rating form .rating-reaction:before {
    width: 100%;
    float: left;
    color: #ffc107;
}
.star-rating #rating-1:checked ~ form .rating-reaction:before {
    content: "Kamu jahat";
}
.star-rating #rating-2:checked ~ form .rating-reaction:before {
    content: "Minimal 4 bang";
}
.star-rating #rating-3:checked ~ form .rating-reaction:before {
    content: "Kurang ah satu lagi";
}
.star-rating #rating-4:checked ~ form .rating-reaction:before {
    content: "I like it";
}
.star-rating #rating-5:checked ~ form .rating-reaction:before {
    content: "I love it";
}
.star-rating input:checked ~ form {
    border-top: 1px solid #ddd;
    width: 100%;
    padding-top: 15px;
    margin-top: 15px;
    display: inline-block;
}
.star-rating form .rating-reaction {
    font-size: 24px;
    float: left;
    text-transform: capitalize;
}
.star-rating form .submit-rating {
    border: none;
    outline: none;
    background: #795548;
    color: #ffc107;
    font-size: 18px;
    border-radius: 4px;
    padding: 5px 15px;
    cursor: pointer;
    float: right;
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
if (isset($_SESSION['nama' ])) {
    // Jika sudah login, ambil nama pengguna dari session
    $nama = $_SESSION['nama'];
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    ?>

    <nav id="navbar" class="navbar" style="position: fixed;">
        <ul>
        <li><a href="index.php">Beranda</a></li>
            <li><a href="kemitraan.php">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php" class="active">Tentang Kami</a></li>
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
            <li><a href="kemitraan.php">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php" class="active">Tentang Kami</a></li>
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

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div
          class="page-header d-flex align-items-center"
          style="background-image: url('assets/img/page-header.jpg')"
        >
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Tentang Kami</h2>
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
              <li>Tentang Kami</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div
              class="col-lg-6 position-relative align-self-start order-lg-last order-first"
            >
              <img src="assets/img/about.jpg" class="img-fluid" alt="" />
              <a
                href="https://www.youtube.com/watch?v=iTIMcEvVRPo"
                class="glightbox play-btn"
              ></a>
            </div>
            <div class="col-lg-6 content order-last order-lg-first">
              <h3>Tentang Kami</h3>
              <p>
                Memastikan ketersediaan pangan yang cukup, aman, dan terjangkau
                adalah kunci untuk menjaga kesejahteraan masyarakat dan
                stabilitas ekonomi.
              </p>
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h5>Kemitraan antar provinsi</h5>
                    <p>
                      Mendorong provinsi-provinsi untuk bekerja sama dalam
                      pengembangan perdagangan antar wilayah untuk memperkuat
                      ketahanan pangan.
                    </p>
                  </div>
                </li>
                
                <li data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-broadcast"></i>
                  <div>
                    <h5>Peta Interaktif</h5>
                    <p>
                      Memberikan pengguna akses ke peta interaktif yang memudahkan menjelajahi lokasi dengan mudah dan cepat dengan menggunakan integrasi peta Google Maps.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Pemilik Lahan</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="52"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Perusahaan Swasta</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="53"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Pemerintah</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="337"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Total Pengguna</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </section>
      <!-- End Stats Counter Section -->

      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Tim Kami</span>
            <h2>Tim Kami</h2>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3 col-md-6 d-flex">
              <div class="member">
                <img src="assets/img/team/team1.jpg" class="img-fluid" alt="" />
                <div class="member-content">
                  <h4>Risqi Akbar Marsudi</h4>
                  <span>Manajer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-3 col-md-6 d-flex">
              <div class="member">
                <img src="assets/img/team/team2.jpg" class="img-fluid" alt="" />
                <div class="member-content">
                  <h4>Husni Mubarok Ramadhan</h4>
                  <span>Front End</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-3 col-md-6 d-flex">
              <div class="member">
                <img src="assets/img/team/team3.jpg" class="img-fluid" alt="" />
                <div class="member-content">
                  <h4>Muhammad Fatih Bagaskara</h4>
                  <span>Analisis Data</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->

            <div class="col-lg-3 col-md-6 d-flex">
              <div class="member">
                <img src="assets/img/team/team4.png" class="img-fluid" alt="" />
                <div class="member-content">
                  <h4>Reno Fathan Sofyan</h4>
                  <span>Back End</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Member -->
          </div>
        </div>
      </section>
      <!-- End Our Team Section -->


      <!-- ======= Testimonials Section ======= -->
<?php

require 'config.php';
$selectAcceptedQuery = "SELECT * FROM testimonials WHERE status='accepted'";
$resultAccepted = mysqli_query($conn, $selectAcceptedQuery);
$acceptedTestimonials = mysqli_fetch_all($resultAccepted, MYSQLI_ASSOC);
?>
      <section id="testimonials" class="testimonials">
        <div class="container">
          <div class="slides-1 swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
             <?php foreach ($acceptedTestimonials as $testimonial) : ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                
                  <h3><?php echo $testimonial['nama']; ?></h3>
                  <h4><?php echo $testimonial['jabatan']; ?></h4>
                  
                  <!-- Menampilkan bintang sesuai dengan nilai rating -->
                  <div class="stars">
                        <?php
                        $rating = $testimonial['rating']; // Ambil nilai rating dari testimoni
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) {
                                echo '<i class="bi bi-star-fill"></i>';
                            } else {
                                echo '<i class="bi bi-star"></i>';
                            }
                        }
                        ?>
                    </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo $testimonial['testi']; ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <?php endforeach; ?>
              <!-- End testimonial item -->

            
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Lokasi:</h4>
                <p>Jl. Kumbang No.14, Bogor Tengah, Kota Bogor 16128</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>agriculate@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Telepon:</h4>
                <p>0822 9970 2860</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
          <form action="testi.php" method="post" onsubmit="return showPopup()">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama"  value="<?php echo isset($nama) ? $nama : ''; ?>" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email"  value="<?php echo isset($email) ? $email : ''; ?>" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan (contoh: founder, pemilik lahan, dll)" required>
              </div>
              <div class="star-rating">
            <div class="star-input">
                <input type="radio" name="rating" id="rating-5" value="5">
                <label for="rating-5" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-4" value="4">
                <label for="rating-4" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-3" value="3">
                <label for="rating-3" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-2" value="2">
                <label for="rating-2" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-1" value="1">
                <label for="rating-1" class="fas fa-star"></label></div></div>
              
              <div class="form-group mt-3">
                <textarea class="form-control" name="testi" rows="5" placeholder="Berikan ulasanmu!" required></textarea>
              </div>
              <style>
                  .btn-testi {
                      background: #eb7200;
                      border: 0;
                      padding: 10px 35px;
                      color: #fff;
                      transition: 0.4s;
                      border-radius: 5px;
                  }
              </style>
              <div class="text-center"><button class="btn-testi" type="submit">Kirim</button></div>
              <script>
    function showPopup() {
        var ratingInput = document.querySelector('input[name="rating"]:checked');
        if (ratingInput) {
            var ratingValue = ratingInput.value;
            document.getElementById('rating-value').value = ratingValue;
            alert("Terima Kasih! Ulasan Anda sudah terkirim!");
            return true;
        } else {
            alert("Mohon pilih rating sebelum mengirimkan testimoni.");
            return false;
        }
    }
</script>
            </form>
          </div><!-- End Testi Form -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Pertanyaan yang sering diajukan</span>
            <h2>Pertanyaan yang sering diajukan</h2>
          </div>

          <div
            class="row justify-content-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="col-lg-10">
              <div class="accordion accordion-flush" id="faqlist">
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-1"
                    >
                      <i class="bi bi-question-circle question-icon"></i>
                      Apa tujuan utama dari proyek pengembangan website ini?
                    </button>
                  </h3>
                  <div
                    id="faq-content-1"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist"
                  >
                    <div class="accordion-body">
                      Untuk menjawab tantangan utama yang dihadapi dalam
                      memastikan ketahanan pangan yang optimal di Indonesia.
                      Melalui pengembangan website yang canggih dan inovatif,
                      proyek ini akan merevolusi cara kita memahami, memantau,
                      dan mengelola ketahanan pangan di seluruh negeri.
                    </div>
                  </div>
                </div>
                <!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-2"
                    >
                      <i class="bi bi-question-circle question-icon"></i>
                      Apa saja fitur utama yang akan ada di website yang akan
                      dikembangkan dalam proyek ini?
                    </button>
                  </h3>
                  <div
                    id="faq-content-2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist"
                  >
                    <div class="accordion-body">
                      <b>Analisis Prediksi</b><br />
                      Layanan analisis prediksi yang menggunakan data historis
                      untuk meramalkan situasi ketahanan pangan di masa depan.
                      Ini dapat mencakup prediksi ketersediaan pangan, fluktuasi
                      harga, dan perubahan permintaan.<br />
                      <b>Pemberitahuan</b><br />
                      Fitur pemberitahuan dan alert yang dapat memberi tahu
                      pemangku kepentingan tentang perubahan signifikan dalam
                      situasi ketahanan pangan, seperti kenaikan harga yang
                      drastis atau penurunan pasokan pangan.<br />
                      <b>Kemitraan antar provinsi</b><br />
                      Mendorong provinsi-provinsi untuk bekerja sama dalam
                      pengembangan perdagangan antar wilayah untuk memperkuat
                      ketahanan pangan. Website dapat menyediakan informasi yang
                      memungkinkan provinsi untuk mengidentifikasi peluang
                      perdagangan dan kerja sama yang saling menguntungkan.<br />
                      <b>Kemitraan Publik swasta</b><br />
                      Mencari dukungan dan kemitraan dengan perusahaan swasta
                      dan organisasi non-pemerintah yang dapat membantu dalam
                      pengembangan dan penyebaran website ini.<br />
                      <b>Peta Interaktif</b><br />
                      Peta interaktif kebutuhan pangan berfungsi sebagai alat
                      yang memudahkan pengguna untuk memantau, menganalisis, dan
                      merespons kebutuhan pangan di berbagai wilayah. Dengan
                      filter dan visualisasi data yang jelas, pengguna dapat
                      dengan cepat mengidentifikasi daerah-daerah yang
                      memerlukan bantuan pangan, memetakan perubahan dalam
                      waktu, dan merencanakan alokasi sumber daya yang efektif
                      untuk memenuhi kebutuhan makanan masyarakat secara tepat
                      sasaran.
                    </div>
                  </div>
                </div>
                <!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-3"
                    >
                      <i class="bi bi-question-circle question-icon"></i>
                      Bagaimana website ini akan membantu petani dalam
                      meningkatkan ketahanan pangan?
                    </button>
                  </h3>
                  <div
                    id="faq-content-3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist"
                  >
                    <div class="accordion-body">
                      Dalam rangka mengatasi tantangan ini dan meningkatkan
                      ketahanan pangan di Indonesia, perlu ada solusi yang
                      mencakup aspek pemantauan, prediksi, dan konektivitas
                      antar wilayah. Oleh karena itu, proyek ini bertujuan untuk
                      mengembangkan sebuah website yang mampu merekam data
                      series multi years beberapa faktor sekaligus, melakukan
                      analisis prediksi situasi ketahanan pangan pada beberapa
                      waktu ke depan, dan menyajikan informasi tersebut melalui
                      sebuah dashboard yang interaktif.
                    </div>
                  </div>
                </div>
                <!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-content-4"
                    >
                      <i class="bi bi-question-circle question-icon"></i>
                      Apa harapan untuk kemitraan antar provinsi dan kemitraan
                      publik-swasta di proyek ini?
                    </button>
                  </h3>
                  <div
                    id="faq-content-4"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqlist"
                  >
                    <div class="accordion-body">
                      <i class="bi bi-question-circle question-icon"></i>
                      Harapan untuk kemitraan antar provinsi dan kemitraan
                      publik-swasta dalam proyek ini adalah untuk memperkuat
                      ketahanan pangan di Indonesia melalui kerja sama yang
                      sinergis. Dengan adanya kemitraan antar provinsi,
                      diharapkan akan terjadi koordinasi dan kolaborasi yang
                      lebih baik dalam mengelola ketahanan pangan di tingkat
                      regional. Hal ini dapat mencakup pertukaran informasi,
                      sumber daya, dan praktik terbaik untuk meningkatkan
                      produksi dan distribusi pangan.
                      <br /><br />
                      Sementara itu, kemitraan publik-swasta dapat membawa
                      manfaat tambahan, seperti akses ke teknologi dan sumber
                      daya finansial yang diperlukan untuk mengembangkan dan
                      menjalankan proyek ini. Perusahaan swasta juga dapat
                      membantu dalam mengoptimalkan rantai pasokan pangan dan
                      mempercepat inovasi di sektor pertanian.
                    </div>
                  </div>
                </div>
                <!-- # Faq item-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Frequently Asked Questions Section -->
    </main>
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
            <li><a href="kemitraan.php">Kemitraan</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="about.php" class="active">Tentang Kami</a></li>
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

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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

