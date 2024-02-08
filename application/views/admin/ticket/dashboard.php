  <!-- Triage ticket Modal -->
  <div class="modal fade" id="deptModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">TEI Ticketing</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form id="triageForm" method="post">
          <div class="modal-body">
            <h5>Triage the ticket to the right department</h5>
            <select class="form-select" id="department_id" name="department_id">
              <option selected disabled>Choose department</option>
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
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="btnTriage">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <main id="main" class="main">

    <section class="section dashboard">

      <div class="row justify-content-end">
        <div class="col-auto">
          <div class="btn-group mb-3">
            <div class="btn-group">
              <button type="button" class="btn btn-colour-1 dropdown-toggle" data-bs-toggle="dropdown">List of Tickets</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url('dashboard'); ?>">All Tickets</a>
                <a class="dropdown-item" href="<?php echo base_url('your_tickets'); ?>">Your Tickets</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Tickets</h5>

            <div class="table-responsive">
              <table class="table table-custom table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">Ticket #</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($open_tickets as $open_ticket) {
                    ?>
                    <tr>
                      <td><?php echo $open_ticket['id']; ?></td>
                      <td><?php echo $open_ticket['ticket_title']; ?></td>
                      <td>
                        <a href="<?php echo base_url('open_tickets') . "/" . $open_ticket['id']; ?>">View</a><span> |</span>
                        <a class="tag-ticket" data-id="<?php echo $open_ticket['id']; ?>">Triage</a>
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

    </section>

  </main><!-- End #main -->
  