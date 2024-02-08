

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Departments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Departments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">

        <!-- Departments Table -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of Departments</h5>

              <div class="table-responsive">
                <table class="table table-striped datatable">
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
        </div><!-- Departments Table -->

      </div>

    </section>

  </main><!-- End #main -->
  