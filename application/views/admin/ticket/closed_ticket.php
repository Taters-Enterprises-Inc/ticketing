  

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
            <h5 class="card-title">Ticket No. <?php echo $closed_ticket_ticket_id; ?></h5>

            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Title of the Ticket
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <h3 class="mt-3 text-dark"><?php echo $closed_ticket_title; ?></p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Details of the Ticket
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <h3 class="mt-3 text-dark"><?php echo $closed_ticket_details; ?></h3>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Status
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <h3 class="mt-3 text-dark">RESOLVED</h3>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Comments
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <h5 class="card-title">All Comments</h4>
                      <?php
                      foreach ($ticket_comments as $ticket_comment) {
                        ?>
                        <div class="row">
                          <div class="col-auto">
                            <img src="<?php echo base_url(); ?>assets/template/assets/img/no-profile-logo.jpg" alt="User Avatar" class="rounded-circle comment-logo-size">
                          </div>
                          <div class="col">
                            <h5 class="fw-bold"><?php echo $ticket_comment['commenter_fullname']; ?></h5>
                            <p class="text-dark"><?php echo $ticket_comment['comment_details']; ?></p>
                          </div>
                        </div>
                        <?php
                      }
                      ?>
                    <!-- Add more comments here -->
                    <!-- Comment Form -->
                    <div class="mt-3 mb-5">
                      <form id="commentForm">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Your Comment</h5>
                            <textarea class="form-control" rows="3" id="comment_details" name="comment_details" placeholder="Enter your comment"></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mb-5">Submit Comment</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown">
                <button type="button" class="btn btn-colour-1 dropdown-toggle mt-3" data-bs-toggle="dropdown">
                  Action
                </button>
                <ul class="dropdown-menu">
                  <li><a id="closed-ticket" class="dropdown-item" href="#">Tag Ticket as "Closed"</a></li>
                </ul>
              </div>

            </div>

          </div>
        </div>
        
      </div>

    </section>

  </main><!-- End #main -->
  