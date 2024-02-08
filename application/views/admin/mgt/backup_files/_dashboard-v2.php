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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/mgt/table.css?v=<?php echo substr(md5(microtime()),rand(0,26),5); ?>">
    <style>
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
                            <a href="<?php echo base_url('admin/user/dashboard/') .$ratee_id; ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('login'); ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi-box-arrow-right"></i> <span class="ms-1 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col py-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/user/dashboard/') .$ratee_id; ?>">Dashboard</a></li>
                    </ol>
                </nav>
                
                <h3 class="h3-margin-top">Your Ratings</h3>
                <div class="row mt-4">
                	<div class="col-md-6 mb-4">
                		<div class="card bg-secondary text-white">
                			<div class="card-body">
                				<h5 class="card-title">No. of Ratings:</h5>
                				<p class="card-text"><?php echo $rating_no; ?></p>
                			</div>
                		</div>
                	</div>
                	<div class="col-md-6 mb-4">
                		<div class="card <?php echo $bg_color . " "; ?>">
                			<div class="card-body">
                				<h5 class="card-title">Your Average Rating:</h5>
                				<p class="card-text"><?php echo $rating_avg; ?></p>
                			</div>
                		</div>
                	</div>
                </div>

                <h3 class="h3-margin-top">Your Team Ratings</h3>
                <div class="row mt-4">
                	<div class="col-md-6 mb-4">
                		<div class="card bg-secondary text-white">
                			<div class="card-body">
                				<h5 class="card-title">No. of Ratings:</h5>
                				<p class="card-text"><?php echo $dept_rating_no; ?></p>
                			</div>
                		</div>
                	</div>
                	<div class="col-md-6 mb-4">
                		<div class="card <?php echo $dept_bg_color . " "; ?>">
                			<div class="card-body">
                				<h5 class="card-title">Your Average Rating:</h5>
                				<p class="card-text"><?php echo $dept_rating_avg; ?></p>
                			</div>
                		</div>
                	</div>
                </div>

                <h3 class="h3-margin-top">Personnel Dashboard</h3>
                <div class="table-responsive my-4">
                	<table class="table table-striped table-custom table-fit">
                		<thead>
                			<tr>
                				<th scope="col">Employee Name</th>
                				<th scope="col">Ratings (Count)</th>
                				<th scope="col">Action</th>
                			</tr>
                		</thead>
                		<tbody>
                            <?php
                            foreach ($personnel_data as $personnel) {
                                ?>
                                <tr>
                                    <td><?php echo $personnel['personnel_fullname']; ?></td>
                                    <td><?php echo $personnel['personnel_rate_count']; ?></td>
                                    <td>
                                        <a class="btn btn-secondary btn-sm" href="<?php echo base_url('admin/mgt/survey') . "/" . $personnel['personnel_ratee_id']; ?>">View
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