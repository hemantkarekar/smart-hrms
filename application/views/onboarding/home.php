<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.0/dist/jquery-steps.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/jquery-steps/css/jquery.steps.min.css">

<!-- <script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js”></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="page-content">
	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div>
			<h4 class="mb-3 mb-md-0">Welcome to <?= APP_NAME ?></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-9 col-md-8 col-12">
			<div class="row">
				<?php if (isset($_SESSION['onboarding_step_1_status']['flag'])) : ?>
					<div class="col-12 grid-margin">
						<div class="alert alert-success">
							<?= $this->session->userdata('onboarding_step_1_status')['message'] ?>
						</div>
					</div>
				<?php endif ?>
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<div class="step-app" id="demo">
								<ul class="steps-pills nav-pills d-flex px-0 gap-1">
									<li data-step-target="step1" class="nav-link p-2 px-3">1.&nbsp;<span>Company Information</span></li>
									<li data-step-target="step2" class="nav-link p-2 px-3">2.&nbsp;<span>Organizational Holidays</span></li>
									<li data-step-target="step4" class="nav-link p-2 px-3">3.&nbsp;<span>Salary Structure</span></li>
								</ul>
								<?= form_open(base_url(), ["id" => 'onboardingStepOneForm']) ?>
								<div class="step-content tab-content">
									<fieldset class="step-tab-panel tab-pane" data-step="step1">
										<div class="row m-0">
											<div class="col-md-6 grid-margin">
												<div class="row">
													<div class="bg-light p-3 col-12 grid-margin">
														<div class="mb-2">
															<h5>Company Information:</h5>
														</div>
														<div class="">
															<ul>
																<li>
																	This is the essential information that <?= APP_NAME ?> uses for all your future employees and for billing purposes.
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row m-0">
											<div class="col-12 grid-margin">
												<div class="">
													<label for="formInput" class="form-label">Organization Name</label>
													<input type="text" name="company_details[name]" id="formInput" class="form-control">
												</div>
											</div>
											<div class="col-xl-4 col-lg-6 col-12 grid-margin">
												<div class="">
													<label for="select2CompanyType" class="form-label">Organization Type</label>
													<select name="company_details[company_type]" id="select2CompanyType" class="form-select">
														<option value="LLP">Limited Liability Partnership (LLP)</option>
														<option value="Corporate Ownership">Corporate Ownership</option>
														<option value="One Person Company">One Person Company</option>
														<option value="Cooperatives">Cooperatives</option>
														<option value="Private Limited Company">Private Limited Company</option>
														<option value="Company">Company</option>
														<option value="Cooperative Society">Cooperative Society</option>
														<option value="Holding Company">Holding Company</option>
														<option value="Section 8 Company">Section 8 Company</option>
														<option value="Corporations or Statutory Bodies">Corporations or Statutory Bodies</option>
														<option value="Sole Proprietorship">Sole Proprietorship</option>
														<option value="Family Business">Family business</option>
														<option value="Business">Business</option>
														<option value="Government Organizations">Government Organizations</option>
														<option value="NGOs">Non-Government Organizations</option>
														<option value="Unlimited Company">Unlimited Company</option>
													</select>
													<script>
														$("#select2CompanyType").select2();
													</script>
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-12 grid-margin">
												<div class="">
													<label for="formInput" class="form-label">Organization GSTIN</label>
													<input type="text" name="company_details[gstin]" id="formInput5" data-mask="00/00/0000" class="form-control">
												</div>
											</div>
											<div class=" col-xl-3 col-lg-6 col-12 grid-margin">
												<div class="">
													<label for="formInput" class="form-label">Organization PAN</label>
													<input type="text" name="company_details[pan_no]" id="formInput6" class="form-control">
												</div>
											</div>
											<div class=" col-xl-3 col-lg-6 col-12 grid-margin">
												<div class="">
													<label for="formInput" class="form-label">PIN Code</label>
													<input type="text" name="company_details[pincode]" id="formInput7" maxlength="7" minlength="7" class="form-control">
												</div>
											</div>
											<div class=" col-xl-3 col-lg-6 col-12 grid-margin">
												<div class="">
													<label for="select2State" class="form-label">State</label>
													<select name="company_details[state]" id="select2State" class="form-select">
														<option>Select A State</option>
														<option value="Maharashtra">Maharashtra</option>
													</select>
													<script>
														$("#select2State").select2();
													</script>
												</div>
											</div>
											<div class="col-12 grid-margin">
												<div class="">
													<label for="formInput" class="form-label">Registered Address</label>
													<input type="text" name="company_details[address_0]" id="formInput8" class="form-control mb-1">
													<input type="text" name="company_details[address_1]" id="formInput8" class="form-control mb-1">
													<input type="text" name="company_details[address_2]" id="formInput8" class="form-control mb-1">
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset class="step-tab-panel tab-pane" data-step="step2">
										<div class="row m-0">
											<div class="col-md-6 col-12 grid-margin">
												<div class="row">
													<div class="bg-light p-3 col-12 grid-margin">
														<div class="mb-2">
															<h5>Default Organizational Holidays:</h5>
														</div>
														<div class="">
															<ul>
																<li>
																	You can customize the default Organizational Holidays that <?= APP_NAME ?> uses for your employees.
																</li>
															</ul>
														</div>
													</div>
													<div class="col-12 form-check mb-3 grid-margin">
														<input class="form-check-input" name="holiday_structure" type="checkbox" value="default" checked id="checkDefaultHolidays">
														<label class="form-check-label" for="checkDefaultHolidays">
															Use <?= APP_NAME ?>'s Default Organizational Holidays?
														</label>
													</div>
													<div class="col-12 grid-margin">
														<table class="table table-striped fixed-h500">
															<tr>
																<th>Holiday</th>
																<th>Date</th>
															</tr>
															<?php for ($i = 0; $i < 10; $i++) : ?>
																<tr>
																	<td>Holiday</td>
																	<td>
																		<?= date('F j') ?>
																	</td>
																</tr>
															<?php endfor ?>


														</table>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-12 grid-margin">
												<div class="row">
													<div class="col-12 grid-margin">
														<table id="customHolidays" class="table table-striped fixed-h500" style="display: none;">
															<tr>
																<th>Holiday</th>
																<th>From Date</th>
																<th>To Date</th>
															</tr>
															<?php
															for ($key = 0; $key < 5; $key++) : ?>
																<tr>
																	<td><input type="text" class="form-control" name="holiday[<?= $key ?>][title]" value="Holiday"></td>
																	<td>
																		<input type="date" class="form-control" name="holiday[<?= $key ?>][from_date]" value="<?= date_format(date_create_from_format("d-m", date('d-m')), "Y-m-d") ?>">
																	</td>
																	<td>
																		<input type="date" class="form-control" name="holiday[<?= $key ?>][to_date]" value="<?= date_format(date_create_from_format("d-m", date('d-m')), "Y-m-d") ?>">
																	</td>
																</tr>
															<?php endfor ?>
															<?php for ($i = $key; $i < $key + 5; $i++) : ?>
																<tr>
																	<td><input type="text" name="holiday[<?= $i ?>][title]" class="form-control"></td>
																	<td>
																		<input type="date" name="holiday[<?= $i ?>][from_date]" class="form-control">
																	</td>
																	<td>
																		<input type="date" name="holiday[<?= $i ?>][to_date]" class="form-control">
																	</td>
																</tr>
															<?php endfor ?>
														</table>
													</div>
												</div>
											</div>
										</div>
										<script>
											$("#checkDefaultHolidays").on('change', () => {
												console.log($("#checkDefaultHolidays").is(':checked'));
												if ($("#checkDefaultHolidays").is(':checked')) {
													console.log("Default Salary Structure");
													$("#customHolidays").css("display", "none")
												} else {
													console.log("Custom Holidays");
													$("#customHolidays").css("display", "block")
												}
											})
										</script>
									</fieldset>
									<fieldset class="step-tab-panel tab-pane" data-step="step4">
										<div class="row m-0">
											<div class="col-md-6 col-12 grid-margin">
												<div class="row">
													<div class="bg-light p-3 col-12 grid-margin">
														<div class="mb-2">
															<h5>Default Salary Structure:</h5>
														</div>
														<div class="">
															<ul>
																<li>
																	You can customize the default salary structure that <?= APP_NAME ?> uses for your employees.
																</li>
															</ul>
														</div>
													</div>
													<div class="col-12 form-check mb-3 grid-margin">
														<input class="form-check-input" name="salary_structure" type="checkbox" value="default" checked id="checkDefaultSalaryStructure">
														<label class="form-check-label" for="checkDefaultSalaryStructure">
															Use <?= APP_NAME ?>'s Default Salary Structure?
														</label>
													</div>
													<div class="col-12 grid-margin">
														<table class="table table-striped fixed-h500">
															<tr>
																<th>Salary Component</th>
																<th>% of CTC</th>
																<th>Percentage or Fixed?</th>
																<th>Taxable?</th>
															</tr>
															<tr>
																<td>Basic</td>
																<td>Lorem, ipsum.</td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>HRA</td>
																<td>Lorem, ipsum.</td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>Special Allowance</td>
																<td>Lorem, ipsum.</td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>LTA</td>
																<td>Lorem, ipsum.</td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>Dearness Allowance</td>
																<td>Lorem, ipsum.</td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-12 grid-margin">
												<div class="row">
													<div class="col-12 grid-margin">
														<table id="customSalaryStructure" class="table table-striped fixed-h500" style="display: none;">
															<tr>
																<th>Salary Component</th>
																<th>% of CTC</th>
																<th>Percentage or Fixed?</th>
																<th>Taxable?</th>
															</tr>
															<tr>
																<td>Basic</td>
																<td><input type="text" class="form-control"></td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>HRA</td>
																<td><input type="text" class="form-control"></td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>Special Allowance</td>
																<td><input type="text" class="form-control"></td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>LTA</td>
																<td><input type="text" class="form-control"></td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<tr>
																<td>Dearness Allowance</td>
																<td><input type="text" class="form-control"></td>
																<td>Percentage</td>
																<td>Lorem, ipsum.</td>
															</tr>
															<?php for ($i = 0; $i < 5; $i++) : ?>
																<tr>
																	<td><input type="text" class="form-control"></td>
																	<td><input type="text" class="form-control"></td>
																	<td>
																		<select class="form-select">
																			<option value="Percentage">Percentage</option>
																			<option value="Fixed">Fixed</option>
																		</select>
																	</td>
																	<td><input type="text" class="form-control"></td>
																</tr>
															<?php endfor ?>
														</table>
													</div>
												</div>
											</div>
										</div>
										<script>
											$("#checkDefaultSalaryStructure").on('change', () => {
												console.log($("#checkDefaultSalaryStructure").is(':checked'));
												if ($("#checkDefaultSalaryStructure").is(':checked')) {
													console.log("Default Salary Structure");
													$("#customSalaryStructure").css("display", "none")
												} else {
													console.log("Custom Salary Structure");
													$("#customSalaryStructure").css("display", "block")
												}
											})
										</script>
									</fieldset>
								</div>
								<div class="step-footer">
									<button type="button" data-step-action="prev" class="step-btn btn btn-sm btn-secondary">Back</button>
									<button type="button" data-step-action="next" class="step-btn btn btn-sm btn-primary">Confirm & Proceed</button>
									<button type="button" id="onboardingStepOneSubmit" data-step-action="finish" class="step-btn btn-sm btn btn-primary">Submit</button>
								</div>
								<?= form_close() ?>
							</div>

							<script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.0/dist/jquery-steps.min.js"></script>
							<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/inputmask.min.js" referrerpolicy="no-referrer"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" referrerpolicy="no-referrer"></script> -->
							<script>
								var form = $("#onboardingStepOneForm");
								$('#demo').steps({
									headerTag: "h3",
									bodyTag: "section",
									transitionEffect: "slideLeft",
									stepSelector: ".steps-pills",
									// contentSelector: ".step-content",
									// footerSelector: ".step-footer",
									activeClass: "active",
									// doneClass: "done",
									// errorClass: "error",
									onChange: function(event, currentIndex, newIndex) {
										form.validate({
											ignore: ":disabled,:hidden"
										});
										return form.valid();
									},
									onFinish: function() {
										var formData = new FormData(document.getElementById("onboardingStepOneForm"))
										var object = {};
										formData.forEach((value, key) => object[key] = value);
										object['auth_key'] = "<?= $this->input->get('key') ?>"
										$.ajax({
											data: object,
											url: "<?= base_url('api/onboarding/proceed') ?>",
											method: "POST",
											success: () => {
												console.log("AJAX Success");
												window.location.replace("<?= base_url('settings/app-settings/home') ?>")
											},
											error: (err) => {
												console.log("AJAX Error");
												console.log(err);
											}
										})
									},
									onDestroy: function() {
										alert('destroyed');
									}
								});
								$(document).ready(function() {
									$('[name="company_details[pincode]"]').mask('000 000', {
										'placeholder': "000 000"
									});
									$('[name="company_details[pan_no]"]').mask('AAAAA0000A', {
										'placeholder': "AAAAA0000A",
										'translation': {
											A: {
												pattern: /[A-Z]/
											},
											0: {
												pattern: /[0-9]/
											}
										}
									});
								})
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-4 col-12">
			<div class="row">
				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h5>General Settings</h5>
							</div>
							<div class="row gap-2">
								<div class="col-12">
									<div class="">
										<p class="mb-1">Setting Type</p>
										<div class="progress" style="height:10px">
											<div class="progress-bar" style="width:100%;"></div>
										</div>
										<small class="text-success">
											Completed
										</small>
									</div>
								</div>
								<div class="col-12">
									<div class="">
										<p class="mb-1">Setting Type</p>
										<div class="progress" style="height:10px">
											<div class="progress-bar" style="width:50%;"></div>
										</div>
										<small>
											<a href="">Click to Complete</a>
										</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal modal-lg fade" id="onboardingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="onboardingModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="onboardingModalLabel">Initial Onboarding</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(() => {
		$("#onboardingModal").modal("show", true);
	})
</script>