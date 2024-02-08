

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Department</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin/sa/departments'); ?>">Departments</a></li>
          <li class="breadcrumb-item active">Edit Deparment</li>
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
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Department</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Department Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Department Name</div>
                <div class="col-lg-9 col-md-8"><?php echo $department_name; ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Department Edit Form -->
              <form method="post" action="<?php echo base_url('admin/sa/updatedept') . "/" . $department_id; ?>">
                <div class="row mb-3">
                  <label for="department_name" class="col-md-4 col-lg-3 col-form-label">Department Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="department_name" type="text" class="form-control" id="department_name" value="<?php echo $department_name; ?>">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Department Edit Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
