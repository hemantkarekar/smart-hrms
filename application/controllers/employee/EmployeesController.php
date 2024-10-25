<?php

class EmployeesController extends CI_Controller
{
    private $rbac_access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->error = [];
        if (in_array($this->UserModel->get_role(), ['admin', 'hr'])) {
            $this->rbac_access = true;
        } else {
            $this->rbac_access = false;
        }
    }
    public function all_employees()
    {
        if ($this->rbac_access) {
            $this->load->admin_dashboard('employee/home');
        } else {
            $data['error_code'] = 403;
            $this->load->error_view('forbidden', $data);
        }
    }
    public function new_single_employee()
    {
        if ($this->rbac_access) {
            $this->load->admin_dashboard('employee/new_single');
        } else {
            $data['error_code'] = 403;
            $this->load->error_view('forbidden', $data);
        }
    }
    public function new_bulk_insert()
    {
        if ($this->rbac_access) {
        } else {
            $data['error_code'] = 403;
            $this->load->error_view('forbidden', $data);
        }
    }
}
