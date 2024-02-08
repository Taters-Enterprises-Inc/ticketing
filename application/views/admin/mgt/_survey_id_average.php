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
                            <a href="<?php echo base_url('admin/mgt/dashboard/') .$ratee_id . "/" . $dept_code ?>" class="nav-link align-middle px-0 text-white">
                                <i class="bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4 dropdown-to-bottom">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo base_url(); ?>assets/images/logos/no-profile-logo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"> Welcome back!</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="<?php echo base_url('login'); ?>">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/mgt/dashboard/') .$ratee_id . "/" . $dept_code ?>">Dashboard</a></li>
                    </ol>
                </nav>

                <div class="card mt-5">
                    <div class="card-body">
                            <?php
                foreach ($per_surveys as $per_survey) {
                    $ratingAvg = $per_survey['rate_avg'];

                    if (!empty($ratingAvg)) {
                        switch ($ratingAvg) {
                            case $ratingAvg <= 3.49:
                            $bgColor = "bg-card-red";
                            break;
                            case $ratingAvg >= 3.50 && $ratingAvg <= 3.99:
                            $bgColor = "card bg-success text-white";
                            break;
                            case $ratingAvg >= 4.00:
                            $bgColor = "bg-card-gold";
                            break;
                            default:
                            $bgColor = "card bg-light text-dark";
                        }
                    } else {
                        $ratingAvg = "0";
                        $bgColor = "card bg-light text-dark";
                    }
                    ?>
                    <h3 class="card-title mb-4">Survey ID: <?php echo $per_survey['survey_id']; ?></h5>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="card <?php echo $bgColor; ?>">
                                <div class="card-body">
                                    <h5 class="card-title">Average Rating:</h5>
                                    <p class="card-text"><?php echo $ratingAvg; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

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
    </script>
</body>
</html>