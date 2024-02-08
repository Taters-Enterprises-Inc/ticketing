

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        
        <div class="col-md-6 mb-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">No. of Ratings</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people-fill" style="color: #332d2d;"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color: #332d2d"><?php echo $rating_no; ?></h6>
                  <span class="small pt-1 fw-bold">Note:</span> <span class="text-muted small pt-2 ps-1">Count of people who rated you</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Your Average Rating</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-star-fill <?php echo $bg_color; ?>"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color: <?php echo $text_color; ?>"><?php echo $rating_avg; ?></h6>
                  <span class="small pt-1 fw-bold">Remark:</span> <span class="text-muted small pt-2 ps-1"><?php echo $text_note; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">No. of Ratings - Team</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people-fill" style="color: #332d2d;"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color: #332d2d"><?php echo $dept_rating_no; ?></h6>
                  <span class="small pt-1 fw-bold">Note:</span> <span class="text-muted small pt-2 ps-1">Count of people who rated your team</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Average Rating - Team</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-star-fill <?php echo $dept_bg_color; ?>"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color: <?php echo $dept_text_color; ?>"><?php echo $dept_rating_avg; ?></h6>
                  <span class="small pt-1 fw-bold">Remark:</span> <span class="text-muted small pt-2 ps-1"><?php echo $dept_text_note; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Personnel Dashboard -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Personnel Dashboard</h5>

              <div class="table-responsive">
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
                          <a class="btn btn-secondary btn-sm" href="<?php echo base_url('admin/mgt/survey') . "/" . $personnel['personnel_ratee_id']; ?>">View</a>
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
        </div><!-- Personnel Dashboard -->

      </div>

    </section>

  </main><!-- End #main -->
  