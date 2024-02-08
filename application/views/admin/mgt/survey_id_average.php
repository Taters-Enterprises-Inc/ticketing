

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Average Per Survey</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Average</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        <?php
        foreach ($per_surveys as $per_survey) {
          $ratingAvg = $per_survey['rate_avg'];
          if (!empty($ratingAvg)) {
            switch ($ratingAvg) {
              case $ratingAvg <= 3.49:
              $bgColor = "rate-color-red";
              $textColor = "#a21013";
              $textNote = "Failed";
              break;
              case $ratingAvg >= 3.50 && $ratingAvg <= 3.99:
              $bgColor = "text-success";
              $textColor = "#198754";
              $textNote = "Passed";
              break;
              case $ratingAvg >= 4.00:
              $bgColor = "rate-color-gold";
              $textColor = "#DAA520";
              $textNote = "Above Average";
              break;
              default:
              $bgColor = "rate-color-default";
              $textColor = "#332d2d";
              $textNote = "N/A";
            }
          } else {
            $ratingAvg = "0";
            $bgColor = "rate-color-default";
            $textColor = "#332d2d";
            $textNote = "N/A";
          }
          ?>
          <div class="col-md-6 mb-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Survey ID: <?php echo $per_survey['survey_id']; ?></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-star-fill <?php echo $bgColor; ?>"></i>
                  </div>
                  <div class="ps-3">
                    <h6 style="color: <?php echo $textColor; ?>"><?php echo $ratingAvg; ?></h6>
                    <span class="small pt-1 fw-bold">Remark:</span> <span class="text-muted small pt-2 ps-1"><?php echo $textNote; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>

      </div>

    </section>

  </main><!-- End #main -->
  