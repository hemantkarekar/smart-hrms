<div class="page-content">
    <div class="d-flex justify-content-between py-3">
        <div class="d-flex gap-2 align-items-center">
            <a href="<?= base_url('employees') ?>" class="btn btn-light btn-icon"><i data-feather="chevron-left" class=""></i></a>
            <h4>New Employee</h4>
        </div>
    </div>
    <?= form_open('api/v2/dashboard/employee/new') ?>
    <div class="row mb-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Employee Details</h4>
                    </div>

                    <div class="row gy-3">
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Employee ID</label>
                            <input type="text" name="employee[id]" class="form-control" value="" disabled>
                        </div>
                        <div class="col-xl-6 col-auto"></div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" name="employee[f_name]" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" name="employee[l_name]" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="employee[email]" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="employee[username]" class="form-control" value="" disabled>
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="employee[password]" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" name="employee[phone]" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Joining Date</label>
                            <input type="text" name="employee[doj]" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="">
                                <label for="" class="form-label">Select Employer Company</label>
                                <select name="employee[company_id]" id="organizationSelect" class="form-control">
                                    <option value="N1kpK954srINrkcp" data-origin="Apogee">Apogee Digitech</option>
                                    <!-- <option value="wyj496iThHwgfU6w" data-origin="Sociomark">Sociomark</option> -->
                                    <option value="wyj496iThHwgfU6w" data-origin="Vahi">Vahi Media Tech</option>
                                </select>
                            </div>
                            <script>
                                $("#organizationSelect").select2({
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
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Department</label>
                            <select name="employee[department_id]">
                                <option value="">-- Select A Department --</option>
                                <?php foreach ($page['departments'] as $key => $department) : ?>
                                    <option value="<?= $department['id']?>"><?= $department['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Designation</label>
                            <select name="employee[designation_id]">
                                <option value="">-- Select A Designation --</option>
                                <?php foreach ($page['designations'] as $key => $designation) : ?>
                                    <option value="<?=$designation['id']?>"><?= $designation['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Employee Access</h4>
                    </div>
                    <table class="table table-striped">
                        <?php $entities = ['Holidays', 'Leaves', 'Clients', 'Projects', 'Tasks', 'Chats', 'Assets', 'Timing Sheets']; ?>
                        <tr>
                            <th>Module Permission</th>
                            <th>Read</th>
                            <th>Write</th>
                            <th>Create</th>
                            <th>Delete</th>
                            <th>Import</th>
                            <th>Export</th>
                        </tr>
                        <?php foreach ($entities as $key => $entity) : ?>
                            <tr>
                                <td><?= $entity ?></td>
                                <td><input type="checkbox" name="permission[<?= $entity ?>][Read]" class="form-check-input" checked></td>
                                <td><input type="checkbox" name="permission[<?= $entity ?>][Write]" class="form-check-input"></td>
                                <td><input type="checkbox" name="permission[<?= $entity ?>][Create]" class="form-check-input"></td>
                                <td><input type="checkbox" name="permission[<?= $entity ?>][Delete]" class="form-check-input"></td>
                                <td><input type="checkbox" name="permission[<?= $entity ?>][Import]" class="form-check-input"></td>
                                <td><input type="checkbox" name="permission[<?= $entity ?>][Export]" class="form-check-input"></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Create New Employee</button>
        <button type="reset" class="btn btn-secondary">Reset Details</button>
    </div>
    <?= form_close() ?>
</div>
<script>
    $('select').each((index, elem) => {
        $(elem).select2()
    })
</script>