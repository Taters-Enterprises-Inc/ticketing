<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Taters Enterprises, Inc</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/template/assets/css/style.css?v=<?php echo substr(md5(microtime()),rand(0,26),5); ?>" rel="stylesheet">

  <!-- Customized Table CSS File -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/mgt/table.css?v=<?php echo substr(md5(microtime()),rand(0,26),5); ?>">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #a21013">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block" style="color: #FFF;">Intranet Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn" style="color: #FFF"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/template/assets/img/no-profile-logo.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #FFF">Hi, <?php echo $s_first_name; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $s_full_name; ?></h6>
              <span><?php echo $s_user_type; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('admin/mgt/profile/edit/') .$ratee_id; ?>">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/mgt/dashboard/') .$ratee_id . "/" . $dept_code ?>" style="background-color: #212529">
          <i class="bi bi-grid" style="color: #fff"></i>
          <span style="color: #fff">Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/mgt/profile/edit/') .$ratee_id; ?>" style="background-color: #212529">
          <i class="bi bi-person" style="color: #fff"></i>
          <span style="color: #fff">Profile</span>
        </a>
      </li><!-- End Profile Nav -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('logout'); ?>" style="background-color: #212529">
          <i class="bi bi-box-arrow-right" style="color: #fff"></i>
          <span style="color: #fff">Log out</span>
        </a>
      </li><!-- End Logout Nav -->

    </ul>

  </aside><!-- End Sidebar-->