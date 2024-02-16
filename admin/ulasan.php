<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak, redirect ke halaman login
    header("location: adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
// Include the database connection file
require '../config.php';

// Query to retrieve testimonials
$selectQuery = "SELECT * FROM testimonials";
$result = mysqli_query($conn, $selectQuery);
$testimonials = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Process testimonial acceptance or deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accept'])) {
        $testimonialId = $_POST['accept'];
        // Set the status to 'accepted'
        $acceptQuery = "UPDATE testimonials SET status='Accepted' WHERE id=$testimonialId";
        if (mysqli_query($conn, $acceptQuery)) {
            header("Location: ulasan.php");
            exit();
        } else {
            echo "Error accepting testimonial: " . mysqli_error($conn);
        }
    } elseif (isset($_POST['delete'])) {
        // Process deletion logic here (e.g., delete from the database)
        $testimonialId = $_POST['delete'];
        $deleteQuery = "DELETE FROM testimonials WHERE id = $testimonialId";
        
        if (mysqli_query($conn, $deleteQuery)) {
            // No need to show a popup here
            // Simply reload the page to reflect the changes
            header("Location: ulasan.php");
            exit();
        } else {
            echo "Error deleting testimonial: " . mysqli_error($conn);
        }
    }
}
?>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Testimoni - Agriculate</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hai, Admin Agriculate</div>

              <div class="dropdown-divider"></div>
              <a href="logoutadmin.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Keluar
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Agriculate</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
            <a class="nav-link" href="user.php"><i data-feather="user"></i><span>Pengguna</span></a>
            </li>
           
            <li class="dropdown active">
            <a class="nav-link" href="ulasan.php"><i data-feather="star"></i><span>Ulasan</span></a>
            </li>

            <li class="dropdown">
            <a class="nav-link" href="datamitra.php"><i data-feather="users"></i><span>Data Mitra</span></a>
            </li>

            <li class="dropdown">
            <a class="nav-link" href="artikel.php"><i data-feather="file-text"></i><span>Artikel</span></a>
            </li>
          
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Ulasan</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped table-md">
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Penilaian</th>
                        <th>Ulasan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                      <?php foreach ($testimonials as $testimonial) : ?>
                      <tr>
                            <td><?php echo $testimonial['id']; ?></td>
                            <td><?php echo $testimonial['nama']; ?></td>
                            <td><?php echo $testimonial['email']; ?></td>
                            <td><?php echo $testimonial['jabatan']; ?></td>
                            <td><?php echo $testimonial['rating']; ?></td>
                            <td><?php echo $testimonial['testi']; ?></td>
                            <td>
                                <?php
                                $status = $testimonial['status'];
                                // Menentukan kelas CSS berdasarkan nilai status
                                if ($status == 'Accepted') {
                                    $class = 'badge badge-success';
                                } else {
                                    $class = 'badge badge-warning';
                                }
                                ?>
                                <div class="<?php echo $class; ?>"><?php echo $status; ?></div>
                            </td>

                        <td>
                        <div class="buttons"><form action="" method="post" style="display: flex;">
                      <button class="btn btn-sm btn-danger" type="submit" name="delete" value="<?php echo $testimonial['id']; ?>">Hapus</button>
                      <button class="btn btn-sm btn-info" type="submit" name="accept" value="<?php echo $testimonial['id']; ?>">Posting</button>
                        </div></form>
                      
                      </td>
                        
                      </tr>
                      <?php endforeach; ?>
                    
                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span
                            class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <p>&copy; 2023 <strong><span>Agriculate</span></strong>. All Rights Reserved</p>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

</html>