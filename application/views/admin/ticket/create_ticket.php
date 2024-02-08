  

  <main id="main" class="main">

    <section class="section dashboard">

      <div class="row">
        
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Create Ticket</h5>

            <form id="ticketForm">
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">Title of Ticket</h5>
                  <input type="text" class="form-control" id="ticket_title" placeholder="Input Title Ticket" name="ticket_title">
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">To What Department? <span class="small text-danger">(This field is optional)</span></h5>
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
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">Ticket Details</h5>
                  <textarea class="form-control" rows="3" id="ticket_details" name="ticket_details" placeholder="Input the ticket details"></textarea>
                </div>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-colour-1" id="btnSubmit">Submit</button>
              </div>
            </form>

          </div>
        </div>
        
      </div>

    </section>

  </main><!-- End #main -->
  