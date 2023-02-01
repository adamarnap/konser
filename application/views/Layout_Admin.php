<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>User</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>






  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-dark  border-bottom opacity-10">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">


            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>          

          
          </ul>
          <ul class="navbar-nav align-items-center mr-10 ml-auto ml-md-0 ">
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">

                <li>
                <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Admin'); ?>" role="button">Dashboard</a>
                </li>

                <li>
                <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Admin/Kelola_Toko'); ?>" role="button">Kelola Toko</a>
                </li>

                <li>
                <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Admin/Kelola_Tiket'); ?>" role="button">Kelola Tiket</a>
                </li>

                <li>
                <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Admin/Kelola_Riwayat'); ?>" role="button">Kelola Riwayat Penjualan</a>
                </li>

                <li>
                <a class="nav-link pr-0 mr-4" href="<?php echo site_url('Admin/Kelola_Akun'); ?>" role="button">Kelola Akun Pengguna</a>
                </li>


            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">

                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm font-weight-bold">
                    <?php if($this->session->userdata('username')) : ?>
                    <?php echo $this->session->userdata('username') ?>
                    <?php endif; ?>
                    </span>
                  </div>

                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-divider"></div>
                  <a href="<?php echo site_url('Login/Logout'); ?>" class="dropdown-item">
                  <span>Logout</span>
                  </a>
              </div>
            </li>




          </ul>

        </div>
      </div>
    </nav>
  

          
    <?= $contents ?>


      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
