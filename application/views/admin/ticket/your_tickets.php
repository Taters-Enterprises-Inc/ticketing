  

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
            <h5 class="card-title">Your Tickets</h5>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home">Open <?php echo $count_of_your_open_tickets; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu1">Resolved <?php echo $count_of_your_resolved_tickets; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu2">Closed <?php echo $count_of_your_closed_tickets; ?></a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div id="home" class="container tab-pane active"><br>

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
                      foreach ($your_open_tickets as $your_open_ticket) {
                        ?>
                        <tr>
                          <td><?php echo $your_open_ticket['id']; ?></td>
                          <td><?php echo $your_open_ticket['ticket_title']; ?></td>
                          <td>
                            <a href="<?php echo base_url('resolved_tickets') . "/" . $your_open_ticket['id']; ?>">View</a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

              </div>
              <div id="menu1" class="container tab-pane fade"><br>

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
                      foreach ($your_resolved_tickets as $your_resolved_ticket) {
                        ?>
                        <tr>
                          <td><?php echo $your_resolved_ticket['id']; ?></td>
                          <td><?php echo $your_resolved_ticket['ticket_title']; ?></td>
                          <td>
                            <a href="<?php echo base_url('closed_tickets') . "/" . $your_resolved_ticket['id']; ?>">View</a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

              </div>
              <div id="menu2" class="container tab-pane fade"><br>

                <div class="table-responsive">
                  <table class="table table-custom table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Ticket #</th>
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($your_closed_tickets as $your_closed_ticket) {
                        ?>
                        <tr>
                          <td><?php echo $your_closed_ticket['id']; ?></td>
                          <td><?php echo $your_closed_ticket['ticket_title']; ?></td>
                          <td><?php echo $your_closed_ticket['ticket_details']; ?></td>
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
        </div>
        
      </div>

    </section>

  </main><!-- End #main -->
  