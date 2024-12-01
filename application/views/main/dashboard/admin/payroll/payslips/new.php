<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="">New Payslip</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 stretch-card">
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
                    <div class="row gap-3">
                        <div class="col-12">
                            <div class="row g-3">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="">
                                        <label for="" class="form-label">Select Employer Company</label>
                                        <select name="employer" id="companySelect" class="form-control">
                                            <option value="N1kpK954srINrkcp" data-origin="Apogee">Apogee Digitech</option>
                                            <!-- <option value="wyj496iThHwgfU6w" data-origin="Sociomark">Sociomark</option> -->
                                            <option value="wyj496iThHwgfU6w" data-origin="Vahi">Vahi Media Tech</option>
                                        </select>
                                    </div>
                                    <script>
                                        $("#companySelect").select2({
                                            templateSelection: (state) => {
                                                if (!state.id) {
                                                    return state.text;
                                                }

                                                var baseUrl = "/user/pages/images/flags";
                                                var $state = $(
                                                    '<span><img class="select2_option-icon" />&nbsp;&nbsp;<span></span></span>'
                                                );

                                                // Use .text() instead of HTML string concatenation to avoid script injection issues
                                                $state.find("span").text(state.text);
                                                switch (state.element.getAttribute('data-origin').toLowerCase()) {
                                                    case 'vahi':
                                                        $state.find("img").attr("src", "<?= base_url('assets/images/logos/vahi.png') ?>");
                                                        break;
                                                    default:
                                                        $state.find("img").attr("src", "<?= base_url('assets/images/logos/apogee.jpg') ?>");
                                                        break;
                                                }
                                                return $state;
                                            }
                                        });

                                        // $("#clientsSelect").on('change', (event) => {
                                        //     $.ajax({
                                        //         data: {
                                        //             'campaignId': $("#clientsSelect").val()
                                        //         },
                                        //         url: "<?= base_url() ?>",
                                        //         success: (response) => {
                                        //             location.reload();
                                        //         },
                                        //         error: (error) => {
                                        //             console.log(error);
                                        //         }
                                        //     })
                                        // })
                                    </script>
                                </div>
                                <div class="col-xl-9 col-lg-6 col-12">
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
                                <div class="col-xl-3 col-lg-6 col-12">
                                    <label for="" class="form-label">Working Days</label>
                                    <input type="number" name="attendance" class="form-control">
                                </div>
                                <div class="col-12 d-none">
                                    <label for="" class="form-label">Leave Details</label>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Sick Leaves</td>
                                            <td>Paid Leaves</td>
                                            <td>Casual Leaves</td>
                                            <td>Other Leaves</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="number" min="0" name="leaves[sl]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" min="0" name="leaves[pl]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" min="0" name="leaves[cl]" class="form-control">
                                            </td>
                                            <td>
                                                <input type="number" min="0" max="31" name="leaves[other]" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="" class="form-label">Earnings</label>
                                    <table class="table">
                                        <tr>
                                            <td>Gross Salary</td>
                                            <td>
                                                <input type="number" min="0" name="earnings[gross_salary]" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Incentives</td>
                                            <td>
                                                <input type="number" min="0" name="earnings[incentives]" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gratuity</td>
                                            <td>
                                                <input type="number" min="0" name="earnings[gratuity]" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="" class="form-label">Deductions</label>
                                    <table class="table">
                                        <tr>
                                            <td>TDS</td>
                                            <td>
                                                <input type="number" min="0" name="deductions[tds]" class="form-control">
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