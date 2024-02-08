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
						<option value="1">Management Information System</option>
						<option value="2">Marketing</option>
					</select>

					<h5 class="mt-5">Triagged By:</h5>
					<input type="text" class="form-control" id="dept_tagged_by" placeholder="Input Your Name here" name="dept_tagged_by">

				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success" id="btnTriage">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container mt-5">
	<p class="title-heading">List of Tickets</p>
	<div class="card mb-3">
		<div class="card-body">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#home">Open</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#menu1">Resolved</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#menu2">Closed</a>
				</li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div id="home" class="container tab-pane active"><br>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th scope="col">Ticket #</th>
								<th scope="col">Details</th>
								<th scope="col">Department</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($open_tickets as $open_ticket) {
								?>
								<tr>
									<th scope="row"><?php echo $open_ticket['id']; ?></th>
									<td><?php echo $open_ticket['ticket_details']; ?></td>
									<td>N/A</td>
									<td><a class="tag-ticket" data-id="<?php echo $open_ticket['id']; ?>">Triage</a></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<div id="menu1" class="container tab-pane fade"><br>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th scope="col">Ticket #</th>
								<th scope="col">Details</th>
								<th scope="col">Department</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($resolved_tickets as $resolved_ticket) {
								?>
								<tr>
									<th scope="row"><?php echo $resolved_ticket['id']; ?></th>
									<td><?php echo $resolved_ticket['ticket_details']; ?></td>
									<td>N/A</td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<div id="menu2" class="container tab-pane fade"><br>
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th scope="col">Ticket #</th>
								<th scope="col">Details</th>
								<th scope="col">Department</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($closed_tickets as $closed_ticket) {
								?>
								<tr>
									<th scope="row"><?php echo $closed_ticket['id']; ?></th>
									<td><?php echo $closed_ticket['ticket_details']; ?></td>
									<td>N/A</td>
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