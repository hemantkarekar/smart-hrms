<div class="page-content">
    <div class="d-flex justify-content-between py-3">
        <div class="d-flex gap-2 align-items-center">
            <a href="<?= base_url('employees') ?>" class="btn btn-light btn-icon"><i data-feather="chevron-left" class=""></i></a>
            <h4>New Employee</h4>
        </div>
    </div>
    <?= form_open() ?>
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
                            <input type="text" class="form-control" value="" disabled>
                        </div>
                        <div class="col-xl-6 col-auto"></div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" value="" disabled>
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Joining Date</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Company</label>
                            <select name="">
                                <option value="">Option</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Department</label>
                            <select name="">
                                <option value="">Option</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Designation</label>
                            <select name="">
                                <option value="">Option</option>
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
                                <td><input type="checkbox" name="" id="" class="form-check-input" checked></td>
                                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
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
    $('select').each((index,elem)=>{
        $(elem).select2()
    })
</script>