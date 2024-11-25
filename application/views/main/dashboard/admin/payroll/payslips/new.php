<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="">New Payslip</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                        <h6 class="card-title mb-0">New Salary Slip for the <?= $month['F'] ?> Month</h6>
                        <div>
                            <form action="" method="get">
                                <div class="d-flex gap-2">
                                    <input type="texr" data-type="date_month" name="month" id="" class="form-control">
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </div>
                            </form>
                            <script>
                                $(function() {
                                    $("input[data-type='date_month']").each((index, elem) => {
                                        $(elem).daterangepicker({
                                            singleDatePicker: true, // To select a single date
                                            showDropdowns: true, // To show month and year dropdowns
                                            minYear: 2020, // Minimum selectable year
                                            maxYear: 2025, // Maximum selectable year
                                            locale: {
                                                format: 'MM-YYYY' // Format the selected date as "Month/Year"
                                            }
                                        })
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <?= form_open('api/v2/salary-slip/new') ?>
                    <input type="hidden" name="month" value="<?= $this->input->get('month') ?? null ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row gap-3">
                                <div class="col-12">
                                    <label for="" class="form-label">Select Employee</label>
                                    <select name="employee_id" id="" class="form-control">
                                        <option value="">-- Select Employee --</option>
                                        <?php foreach ($employees as $key => $employee) : ?>
                                            <option value="<?= $employee['id'] ?>"><?= implode(' ', [$employee['first_name'], $employee['last_name']]) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <script>
                                        $(function() {
                                            $('select[name="employee_id"]').select2({})
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row gap-3">
                                <div class="col-xl-3 col-lg-6 col-12">
                                    <label class="form-label">Lorem, ipsum dolor.</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Leave Details</label>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>SL</td>
                                            <td>PL</td>
                                            <td>CL</td>
                                            <td>Total</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" name="deductions[sl]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="deductions[pl]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="deductions[cl]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="deductions[total]" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>