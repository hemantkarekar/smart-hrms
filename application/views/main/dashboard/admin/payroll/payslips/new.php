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
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">New Employees</h6>
                    </div>
                    <?= form_open() ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row gap-3">
                                <div class="col-12">
                                    <label for="" class="form-label">Select Employee</label>
                                    <select name="employee_id" id="" class="form-control">
                                        <option value="">-- Select Employee --</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12">
                                    <label class="form-label">Lorem, ipsum dolor.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row gap-3">
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
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
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