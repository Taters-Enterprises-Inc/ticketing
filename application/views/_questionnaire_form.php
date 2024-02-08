<div class="container container-margin-top">
	<p class="title-heading text-center">TEI DIGITAL FEEDBACK</p>
	<div class="title-heading-margin-top"></div>
	<form id="qForm">
		<p class="fs-3 fw-bold">Employee Information</p>
		<div class="card mb-3">
			<div class="card-body">
				<h5 class="card-title">First name</h5>
				<input type="text" class="form-control" id="rater_firstname" placeholder="Input your First name" name="rater_firstname">
			</div>
		</div>
		<div class="card mb-3">
			<div class="card-body">
				<h5 class="card-title">Last name</h5>
				<input type="text" class="form-control" id="rater_lastname" placeholder="Input your Last name" name="rater_lastname">
			</div>
		</div>
		<div class="card mb-3">
			<div class="card-body">
				<h5 class="card-title">Department</h5>
				<select class="form-select" id="rater_dept_code" name="rater_dept_code">
					<option selected disabled>Choose your department</option>
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
		<p class="fs-3 fw-bold mt-5">Survey Questions</p>
		<input type="hidden" id="survey_id" name="survey_id" value="<?php echo $survey_id; ?>">
		<input type="hidden" id="ratee_id" name="ratee_id" value="<?php echo $ratee_id; ?>">
		<input type="hidden" id="ratee_dept_code" name="ratee_dept_code" value="<?php echo $ratee_dept_code; ?>">

		<?php
		foreach ($survey_questions as $survey_question) {
			$survey_questions_type = $survey_question['survey_questions_type'];
			$survey_question_no = $survey_question['survey_question_no'];
			$survey_question_description = $survey_question['question_description'];

			if ($survey_question['survey_question_no'] == 1 && $survey_question['status'] == 1) {
				?>
				<input type="hidden" id="survey_question_type" name="survey_question_type[]" value="<?php echo $survey_questions_type; ?>">
				<input type="hidden" id="survey_question_no" name="survey_question_no[]" value="<?php echo $survey_question_no; ?>">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title fw-bold">Question <?php echo $survey_question_no . ": ";?><span class="custom-span"><?php echo $survey_question_description; ?></span></h5>
						<div class="mt-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ1" id="r1q1" value="1">
								<label class="form-check-label fw-bold">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ1" id="r2q1" value="0">
								<label class="form-check-label fw-bold">No</label>
							</div>
							<input type="hidden" id="q1ans" name="survey_question_ans[]" value="">
						</div>
					</div>
				</div>
				<?php
			} elseif ($survey_question['survey_question_no'] == 2 && $survey_question['status'] == 1) {
				?>
				<input type="hidden" id="survey_question_type" name="survey_question_type[]" value="<?php echo $survey_questions_type; ?>">
				<input type="hidden" id="survey_question_no" name="survey_question_no[]" value="<?php echo $survey_question_no; ?>">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title fw-bold">Question <?php echo $survey_question_no . ": ";?><span class="custom-span"><?php echo $survey_question_description; ?></span></h5>
						<div class="mt-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ2" id="r1q2" value="1">
								<label class="form-check-label fw-bold">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ2" id="r2q2" value="0">
								<label class="form-check-label fw-bold">No</label>
							</div>
							<input type="hidden" id="q2ans" name="survey_question_ans[]" value="">
						</div>
					</div>
				</div>
				<?php
			} elseif ($survey_question['survey_question_no'] == 3 && $survey_question['status'] == 1) {
				?>
				<input type="hidden" id="survey_question_type" name="survey_question_type[]" value="<?php echo $survey_questions_type; ?>">
				<input type="hidden" id="survey_question_no" name="survey_question_no[]" value="<?php echo $survey_question_no; ?>">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title fw-bold">Question <?php echo $survey_question_no . ": ";?><span class="custom-span"><?php echo $survey_question_description; ?></span></h5>
						<div class="mt-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ3" id="r1q3" value="1">
								<label class="form-check-label fw-bold">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ3" id="r2q3" value="2">
								<label class="form-check-label fw-bold">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ3" id="r3q3" value="3">
								<label class="form-check-label fw-bold">3</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ3" id="r4q3" value="4">
								<label class="form-check-label fw-bold">4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ3" id="r5q3" value="5">
								<label class="form-check-label fw-bold">5</label>
							</div>
							<input type="hidden" id="q3ans" name="survey_question_ans[]" value="">
						</div>
					</div>
				</div>
				<?php
			} elseif ($survey_question['survey_question_no'] == 4 && $survey_question['status'] == 1) {
				?>
				<input type="hidden" id="survey_question_type" name="survey_question_type[]" value="<?php echo $survey_questions_type; ?>">
				<input type="hidden" id="survey_question_no" name="survey_question_no[]" value="<?php echo $survey_question_no; ?>">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title fw-bold">Question <?php echo $survey_question_no . ": ";?><span class="custom-span"><?php echo $survey_question_description; ?></span></h5>
						<div class="mt-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ4" id="r1q4" value="1">
								<label class="form-check-label fw-bold">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ4" id="r2q4" value="2">
								<label class="form-check-label fw-bold">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ4" id="r3q4" value="3">
								<label class="form-check-label fw-bold">3</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ4" id="r4q4" value="4">
								<label class="form-check-label fw-bold">4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ4" id="r5q4" value="5">
								<label class="form-check-label fw-bold">5</label>
							</div>
							<input type="hidden" id="q4ans" name="survey_question_ans[]" value="">
						</div>
					</div>
				</div>
				<?php
			} elseif ($survey_question['survey_question_no'] == 5 && $survey_question['status'] == 1) {
				?>
				<input type="hidden" id="survey_question_type" name="survey_question_type[]" value="<?php echo $survey_questions_type; ?>">
				<input type="hidden" id="survey_question_no" name="survey_question_no[]" value="<?php echo $survey_question_no; ?>">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title fw-bold">Question <?php echo $survey_question_no . ": ";?><span class="custom-span"><?php echo $survey_question_description; ?></span></h5>
						<div class="mt-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ5" id="r1q5" value="1">
								<label class="form-check-label fw-bold">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ5" id="r2q5" value="2">
								<label class="form-check-label fw-bold">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ5" id="r3q5" value="3">
								<label class="form-check-label fw-bold">3</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ5" id="r4q5" value="4">
								<label class="form-check-label fw-bold">4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ5" id="r5q5" value="5">
								<label class="form-check-label fw-bold">5</label>
							</div>
							<input type="hidden" id="q5ans" name="survey_question_ans[]" value="">
						</div>
					</div>
				</div>
				<?php
			} elseif ($survey_question['survey_question_no'] == 6 && $survey_question['status'] == 1) {
				?>
				<input type="hidden" id="survey_question_type" name="survey_question_type[]" value="<?php echo $survey_questions_type; ?>">
				<input type="hidden" id="survey_question_no" name="survey_question_no[]" value="<?php echo $survey_question_no; ?>">
				<div class="card mb-3">
					<div class="card-body">
						<h5 class="card-title fw-bold">Question <?php echo $survey_question_no . ": ";?><span class="custom-span"><?php echo $survey_question_description; ?></span></h5>
						<div class="mt-3">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ6" id="r1q6" value="1">
								<label class="form-check-label fw-bold">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ6" id="r2q6" value="2">
								<label class="form-check-label fw-bold">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ6" id="r3q6" value="3">
								<label class="form-check-label fw-bold">3</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ6" id="r4q6" value="4">
								<label class="form-check-label fw-bold">4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioQ6" id="r5q6" value="5">
								<label class="form-check-label fw-bold">5</label>
							</div>
							<input type="hidden" id="q6ans" name="survey_question_ans[]" value="">
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>
		<div class="mt-5 mb-5">
			<button type="button" class="btn btn-colour-1" onclick="CancelButton();">Clear</button>
			<button type="submit" class="btn btn-colour-1" id="btnSubmit">Submit</button>
		</div>
	</form>
</div>