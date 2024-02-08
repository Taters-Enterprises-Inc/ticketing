<!DOCTYPE html>
<html lang="en">
<head>
  <title>Taters Enterprises, Inc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Custom Styles */
    body {
      font-family: Arial, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .content {
      flex: 1;
    }
    .footer {
      background-color: #332d2d;
      padding: 20px;
      text-align: center;
    }
    .footer p {
      color: #fff;
      margin: 0;
    }
    .breadcrumb {
      float: right;
    }
    .h3-margin-top {
      margin-top: 50px;
    }
    /* Preloader styles */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .preloader .spinner {
      width: 40px;
      height: 40px;
      border: 4px solid red; /* Change color to red */
      border-top-color: transparent;
      border-radius: 50%;
      animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
    .bg-card-red {
      background-color: #a21013;
      color: #fff;
    }
    .bg-card-gold {
    	background-color: #DAA520;
    	color: #fff;
    }
    .btn-colour-1 {
    	color: #fff;
    	background-color: #a21013;
    	border-color: #a21013;
    	letter-spacing: 0.05em;
    	border-radius: 0;
    }

    .btn-colour-1:hover,
    .btn-colour-1:active,
    .btn-colour-1:focus,
    .btn-colour-1.active {
    	/* let's darken #004E64 a bit for hover effect */
    	background: #a21013;
    	color: #ffffff;
    	border-color: #a21013;
    }
  </style>
</head>
<body>
<!-- Spinner Loader  -->
<div class="preloader">
  <div class="spinner"></div>
</div>
<!-- End -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://www.ilovetaters.com/api/assets/images/shared/logo/taters-logo.png" alt="Avatar" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/sa/users'); ?>"><i class="bi bi-people"></i> Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/sa/departments'); ?>"><i class="bi bi-building"></i> Departments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/sa/questionnaires'); ?>"><i class="bi bi-file-earmark-text"></i> Questionnaires</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="<?php echo base_url('login'); ?>"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3 content">
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="float-end">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Users</a></li>
      <li class="breadcrumb-item active" aria-current="page">Departments</li>
    </ol>
  </nav>

  <!-- content here -->
  <h3 class="h3-margin-top mb-4">Edit Department</h3>

  <form method="post" action="<?php echo base_url('admin/sa/updatedept') . "/" . $department_id; ?>">
  	<div class="mt-4">
  		<p>Department Name</p>
  		<input type="text" class="form-control" id="department_name" placeholder="Input New Department Name" name="department_name" value="<?php echo $department_name; ?>">
  	</div>
  	<div class="mt-3">
  		<button type="submit" class="btn btn-colour-1" id="btnSubmit">Submit</button>
  	</div>
  </form>

<!--<footer class="footer">
  <div class="container">
    <p>&copy; 2023 Taters Enterprises, Inc. All rights reserved.</p>
  </div>
</footer>-->

<script>
    // Delayed fade out of the preloader after 3 seconds
    $(document).ready(function() {
      setTimeout(function() {
        $('.preloader').fadeOut('slow');
      }, 3000);
    });
</script>
</body>
</html>