

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Questionnaires</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin/sa/questionnaires'); ?>">Questionnaires</a></li>
          <li class="breadcrumb-item active">Edit Survey Question</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Survey Question</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Survey Question Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Question Description</div>
                <div class="col-lg-9 col-md-8"><?php echo $question_description; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Display to Front-End? (Y/N)</div>
                <div class="col-lg-9 col-md-8"><?php echo $status_definition; ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Survey Question Edit Form -->
              <form method="post" action="<?php echo base_url('admin/sa/updatequestionnaire') . "/" . $survey_questions_id; ?>">
                <div class="row mb-3">
                  <label for="question_description" class="col-md-4 col-lg-3 col-form-label">Question Description</label>
                  <div class="col-md-8 col-lg-9">
                    <textarea class="form-control" rows="5" id="question_description" name="question_description"><?php echo $question_description; ?></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="status" class="col-md-4 col-lg-3 col-form-label">Display to Front-End? (Y/N)</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-select" id="status" name="status">
                      <option selected value="<?php echo $status; ?>">Choose one</option>
                      <option value="1">Yes</option>
                      <option value="0">No</option>
                    </select>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- Survey Question Edit Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
