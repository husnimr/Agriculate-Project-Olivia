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
      <nav id="navbar" class="navbar" style="position: fixed;">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="kemitraan.php">Kemitraan</a></li>
          <li><a href="forum.php">Forum</a></li>
          <li><a href="about.php" >Tentang Kami</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <div style="text-align: center; margin-top: 130px;" >
        <?php
        if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
        ?>
          <button class="btn btn-success <?php echo $__menuAktif == 'registrasi' ? 'active' : ''?>" onclick="window.location.href='daftarforum.php'" >Daftar</button>
          <button class="btn btn-success <?php echo $__menuAktif == 'login' ? 'active' : ''?>" onclick="window.location.href='loginforum.php'">Masuk</button>
        <?php } else {
          if ($_SESSION['user']['nama'] === 'admin') {
            // Admin dapat mem-post topik
            echo '<button style="margin: 5px;" class="btn btn-success" onclick="window.location.href=\'tambah-topik.php\'">Post Topik</button>';
          }
          echo '<button style="margin: 5px;" class="btn btn-success" onclick="window.location.href=\'profil.php\'">Profil</button>';
          echo '<button style="margin: 5px;" class="btn btn-success" onclick="window.location.href=\'indexforum.php\'">Lihat Forum</button>';
          echo '<button style="margin: 5px;" class="btn btn-danger" onclick="window.location.href=\'logoutforum.php\'">Keluar</button>';
        }
        ?>
      </div>
