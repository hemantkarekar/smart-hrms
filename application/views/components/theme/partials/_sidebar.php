<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			<img src="<?= base_url('assets/logo.png') ?>" alt="" width="160">
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<?php if (!in_array($this->uri->segment(1), ['onboarding'])) : ?>
		<ul class="nav">
			<li class="nav-item nav-category">Main</li>
			<li class="nav-item <?= link_is_active("") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("attendance") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="clock"></i>
					<span class="link-title">Attendance</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("leaves") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="calendar"></i>
					<span class="link-title">Leaves</span>
				</a>
			</li>


			<!-- Access Level: HR, Admin -->
			<?php if (in_array($this->session->user['role'], ['hr', 'admin'])) : ?>
				<li class="nav-item nav-category">Employee Management</li>
				<li class="nav-item <?= link_is_active("employee") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#employee" role="button" aria-expanded="false" aria-controls="employee">
						<i class="link-icon" data-feather="users"></i>
						<span class="link-title">Employees</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="employee">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="<?= base_url('employees') ?>" class="nav-link <?= link_is_active("employees") ?>">All Employees</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('employees/new') ?>" class="nav-link <?= link_is_active("employees/new") ?>">Add New Employee</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item <?= link_is_active("attendance") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#attendance" role="button" aria-expanded="false" aria-controls="attendance">
						<i class="link-icon" data-feather="calendar"></i>
						<span class="link-title">Attendance</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="attendance">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("attendance") ?>">Attendance</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("attendance") ?>">Timesheet</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("attendance") ?>">Shift & Schedule</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("attendance") ?>">Overtime</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item <?= link_is_active("leaves") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#leaves" role="button" aria-expanded="false" aria-controls="leaves">
						<i class="link-icon" data-feather="calendar"></i>
						<span class="link-title">Leaves</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="leaves">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("leaves") ?>">All Leaves</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("leaves") ?>">New Requests</a>
							</li>
						</ul>
					</div>
				</li>

				<li class="nav-item nav-category">Payroll</li>
				<li class="nav-item <?= link_is_active("payroll") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
						<i class="link-icon" data-feather="dollar-sign"></i>
						<span class="link-title">Payroll</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="emails">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">All Payrolls</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Run New Payroll</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("payslips") ?>">Payslips</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item <?= link_is_active("reimbursements") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#reimbursements" role="button" aria-expanded="false" aria-controls="reimbursements">
						<i class="link-icon" data-feather="dollar-sign"></i>
						<span class="link-title">Reimbursements</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="reimbursements">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">All Reimbursements</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">New Requests</a>
							</li>
						</ul>
					</div>
				</li>
			<?php endif ?>

			<!-- Access Level: admin -->
			<?php if (in_array($this->session->user['role'], ['admin'])) : ?>
				<li class="nav-item nav-category">Organization Management</li>
				<li class="nav-item <?= link_is_active("departments") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#depts" role="button" aria-expanded="false" aria-controls="depts">
						<i class="link-icon" data-feather="briefcase"></i>
						<span class="link-title">Departments</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="depts">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("employees") ?>">All Departments</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("departments") ?>">Add New Department</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item <?= link_is_active("designations") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#desigtn" role="button" aria-expanded="false" aria-controls="desigtn">
						<i class="link-icon" data-feather="briefcase"></i>
						<span class="link-title">Designations</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="desigtn">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("designations") ?>">All Designations</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("designations") ?>">Add New Designation</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="dashboard.html" class="nav-link">
						<i class="link-icon" data-feather="users"></i>
						<span class="link-title">Users</span>
					</a>
				</li>
				<li class="nav-item <?= link_is_active("organization") ?>">
					<a class="nav-link" data-bs-toggle="collapse" href="#org" role="button" aria-expanded="false" aria-controls="org">
						<i class="link-icon" data-feather="settings"></i>
						<span class="link-title">Organization</span>
						<i class="link-arrow" data-feather="chevron-down"></i>
					</a>
					<div class="collapse" id="org">
						<ul class="nav sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("organization") ?>">Policies</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= link_is_active("organization") ?>">Organization Settings</a>
							</li>
						</ul>
					</div>
				</li>

				<li class="nav-item nav-category">Apps</li>
				<li class="nav-item">
					<a href="dashboard.html" class="nav-link">
						<i class="link-icon" data-feather="settings"></i>
						<span class="link-title">App Settings</span>
					</a>
				</li>
			<?php endif ?>

			<li class="nav-item nav-category">Docs</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
		<?php endif ?>
	</div>
</nav>