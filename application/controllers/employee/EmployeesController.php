<?php
require_once APPPATH . 'controllers/RBACController.php';
class EmployeesController extends RBACController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('data/EmployeeModel');
        $this->error = [];
    }
    public function all_employees()
    {
        $employees = json_decode($this->EmployeeModel->get_sorted(['status' => 1], null), true);
        if ($this->rbac_access) {
            $this->data['employees'] = $employees;
            $this->load->admin_dashboard('employee/home', $this->data);
        } else {
            $data['error_code'] = 403;
            $this->load->error_view('forbidden', $data);
        }
    }
    public function new_single_employee()
    {
        $this->load->model('data/DepartmentModel');
        $this->load->model('data/DesignationModel');
        $this->data['page']['designations'] = json_decode($this->DesignationModel->get(), true);
        $this->data['page']['departments'] = json_decode($this->DepartmentModel->get(), true);
        if ($this->rbac_access) {
            $this->load->admin_dashboard('employee/new_single', $this->data);
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
