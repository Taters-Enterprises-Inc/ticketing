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

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
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
  <h3 class="h3-margin-top mb-4">Departments</h3>

  <div class="table-responsive">
    <table id="example" class="table table-striped">
      <thead>
        <tr>
          <th>Department Code</th>
          <th>Department Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($departments as $department) {
          ?>
          <tr>
            <td><?php echo $department['dept_code']; ?></td>
            <td><?php echo $department['department_name']; ?></td>
            <td>
              <a class="btn btn-secondary btn-sm" href="<?php echo base_url('admin/sa/departments/edit') . "/" . $department['id']; ?>">
                Edit
              </a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>

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

    $(document).ready(function () {
      $('#example').DataTable();
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>