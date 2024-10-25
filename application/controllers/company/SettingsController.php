<?php

class SettingsController extends CI_Controller
{
    private $rbac_access, $user, $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->rbac_access = true;
        $this->error = [];
        $this->user['role'] = $this->UserModel->get_role();
    }

    public function self_settings(){
        $key = $this->session->app_key; 
        echo $this->session->app_key;
    }
}
