

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Questionnaires</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Questionnaires</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">

        <!-- Questionnaires Table -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of Survey Questions</h5>

              <div class="table-responsive">
                <table class="table table-striped datatable">
                  <thead>
                    <tr>
                      <th>Question No.</th>
                      <th>Question Description</th>
                      <th>Display? (Y/N)</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($questionnaires as $questionnaire) {
                      $display = ($questionnaire['status'] == 1) ? "Yes" : "No";
                      ?>
                      <tr>
                        <td><?php echo $questionnaire['survey_question_no']; ?></td>
                        <td><?php echo $questionnaire['question_description']; ?></td>
                        <td><?php echo $display; ?></td>
                        <td>
                          <a class="btn btn-secondary btn-sm" href="<?php echo base_url('admin/sa/questionnaires/edit') . "/" . $questionnaire['id']; ?>">Edit
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
        </div><!-- Questionnaires Table -->

      </div>

    </section>

  </main><!-- End #main -->
  