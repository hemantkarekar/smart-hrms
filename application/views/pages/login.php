<div class="page-content d-flex align-items-center justify-content-center">
    <div class="row w-100 mx-0 auth-page my-5 py-5">
        <div class="col-md-9 col-lg-6 col-xl-3 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-12">
                        <div class="auth-form-wrapper px-4 py-5">
                            <div class="mb-md-5 mb-3">
                                <a href="#" class="noble-ui-logo d-block mb-2"><img src="<?= base_url('assets/logo.png') ?>" alt="" width="160"></a>
                                <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                            </div>
                            <?= form_open('api/auth-login', ['class' => "forms-sample"]) ?>
                            <div class="mb-3">
                                <label for="userID" class="form-label">User ID / Email Address</label>
                                <input type="text" class="form-control" name="username" id="userID" placeholder="Username or Email">
                            </div>
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="userPassword" autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="remember" id="authCheck">
                                <label class="form-check-label" for="authCheck">
                                    Remember me
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                                <button type="reset" class="btn btn-outline-secondary btn-icon-text mb-2 mb-md-0">
                                    Reset
                                </button>
                            </div>
                            <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
                <!-- partial:partials/_footer.html -->
                <?php $this->load->view('components/theme/partials/_footer'); ?>
                <!-- partial -->
            </div>
        </div>
    </div>

</div>