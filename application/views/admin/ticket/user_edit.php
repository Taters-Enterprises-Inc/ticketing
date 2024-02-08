

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin/sa/users'); ?>">Users</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="<?php echo base_url(); ?>assets/template/assets/img/no-profile-logo.jpg" alt="Profile" class="rounded-circle">
              <h2><?php echo $first_name . " " . $last_name; ?></h2>
              <h3><?php echo $user_type; ?></h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">First Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $first_name; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Last Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $last_name; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $email; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Department</div>
                    <div class="col-lg-9 col-md-8"><?php echo $department_name; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="<?php echo base_url('admin/sa/updateuser') . "/" . $user_id; ?>">
                    <div class="row mb-3">
                      <label for="first_name" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="first_name" type="text" class="form-control" id="first_name" value="<?php echo $first_name; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="last_name" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="last_name" type="text" class="form-control" id="last_name" value="<?php echo $last_name; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="<?php echo $email; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="department" class="col-md-4 col-lg-3 col-form-label">Department</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" id="dept_code" name="dept_code">
                          <option selected value="<?php echo $dept_code; ?>">Choose your new department</option>
                          <option value="1">Executive Office</option>
                          <option value="2">General Services Department</option>
                          <option value="3">Marketing Department</option>
                          <option value="4">Franchise Department</option>
                          <option value="5">Manage Information System Department</option>
                          <option value="6">Finance Department</option>
                          <option value="7">Procurement Department</option>
                          <option value="8">Human Resource Department</option>
                          <option value="9">OPSSC Standard Compliance Department</option>
                          <option value="10">Operations Training & Support Department</option>
                          <option value="11">Store Operations-Taters Lifestyle Centers</option>
                          <option value="12">Store Operations Department</option>
                          <option value="13">TEI HUB</option>
                          <option value="14">TEI HUB SHELL ORDERS</option>
                          <option value="15">CSR</option>
                          <option value="16">Free Lancer</option>
                          <option value="17">Data Analyst</option>
                          <option value="18">Business Dev</option>
                        </select>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
