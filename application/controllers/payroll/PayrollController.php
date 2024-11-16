<?php 
require_once APPPATH . 'controllers/RBACController.php';
class PayrollController extends RBACController
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('data/EmployeeModel');
        $this->error = [];
    }

    public function all_payslips(){
        $employees = json_decode($this->EmployeeModel->get_sorted(['status' => 1], null), true);
        if ($this->rbac_access) {
            $this->data['employees'] = $employees;
            $this->load->admin_dashboard('payroll/payslips/all', $this->data);
        } else {
            $data['error_code'] = 403;
            $this->load->error_view('forbidden', $data);
        }
    }

    public function new_payslip() {
        $employees = json_decode($this->EmployeeModel->get_sorted(['status' => 1], null), true);
        if ($this->rbac_access) {
            $this->data['employees'] = $employees;
            $this->load->admin_dashboard('payroll/payslips/new', $this->data);
        } else {
            $data['error_code'] = 403;
            $this->load->error_view('forbidden', $data);
        }
    }

    public function self_attendance(){
        if ($this->rbac_access) {
            $this->load->employee_dashboard('attendance/home');
        } else {
            # code...
        }
        
    }
}
