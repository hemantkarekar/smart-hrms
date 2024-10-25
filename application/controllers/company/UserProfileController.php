<?php

class UserProfileController extends CI_Controller
{
    private $rbac_access;
    private $user;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->rbac_access = true;
        $this->error = [];
        $this->user['role'] = $this->UserModel->get_role();
    }
    public function home()
    {
        $this->load->general_view('profile/home');
    }
}
