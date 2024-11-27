<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="">All Payslips</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-lg-2 col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Employees</h6>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">FNF Pending</h6>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Documentation Pending</h6>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Customers</h6>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Customers</h6>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Customers</h6>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-2">3,897</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Employees</h6>
                        <div class="dropdown mb-2">
                            <a class="btn btn-primary btn-icon-text" href="<?= base_url('all-payslips/new') ?>">
                                <i data-feather="plus" class="icon-sm mb-1 btn-icon-prepend"></i>Create New Payslip
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('employees/new') ?>"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Add Single</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="upload" class="icon-sm me-2"></i> <span class="">Bulk Import</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="employeeTable" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="pt-0">Payroll Name</th>
                                    <th class="pt-0">Payroll Date</th>
                                    <th class="pt-0">Due Date</th>
                                    <th class="pt-0">Status</th>
                                    <th class="pt-0">Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employees as $key => $employee) : ?>
                                    <tr>
                                        <td>
                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <img class="wd-80 ht-80 rounded-circle" src="https://ui-avatars.com/api/?name=<?= implode(' ', [$employee['first_name'], $employee['last_name']]) ?>" alt="<?= implode(' ', [$employee['first_name'], $employee['last_name']]) ?>">
                                                </div>
                                                <div class="col-auto">
                                                    <?= implode(' ', [$employee['first_name'], $employee['last_name']]) ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $employee['joining_date'] ?></td>
                                        <td><?= $employee['joining_date'] ?></td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>Leonardo Payne</td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                        <script>
                            new DataTable("#employeeTable");
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>