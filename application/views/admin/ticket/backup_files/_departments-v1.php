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
        body {
            background-color: #e5e7eb;
        }
        .h3-margin-top {
            margin-top: 40px;
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
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">TEI Intranet Admin</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/sa/users'); ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/sa/departments'); ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi bi-building"></i> <span class="ms-1 d-none d-sm-inline">Departments</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/sa/questionnaires'); ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi bi-file-earmark-text"></i> <span class="ms-1 d-none d-sm-inline">Questionnaires</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('login'); ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi bi-box-arrow-right"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col py-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/sa/users'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Departments</li>
                    </ol>
                </nav>
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Departments</h5>
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
                                                <a class="btn btn-secondary btn-sm" href="<?php echo base_url('admin/sa/departments/edit') . "/" . $department['id']; ?>">Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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