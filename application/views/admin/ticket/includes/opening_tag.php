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
  <link href="<?php echo base_url(); ?>assets/template/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/template/assets/css/style.css?v=<?php echo substr(md5(microtime()),rand(0,26),5); ?>" rel="stylesheet">

  <style>
    .table-custom {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .table-custom thead th {
      background-color: #343a40;
      color: #ffffff;
    }

    .btn-colour-1 {
      color: #fff;
      background-color: #343a40;
      border-color: #343a40;
      letter-spacing: 0.05em;
      border-radius: 0;
    }

    .btn-colour-1:hover,
    .btn-colour-1:active,
    .btn-colour-1:focus,
    .btn-colour-1.active {
      /* let's darken #004E64 a bit for hover effect */
      background: #343a40;
      color: #ffffff;
      border-color: #343a40;
    }

    .comment-logo-size {
      width: 50px;
      height: 50px;
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
  </style>

</head>
<body>

  <!-- Spinner Loader  -->
  <div class="preloader">
    <div class="spinner"></div>
  </div>
  <!-- End -->