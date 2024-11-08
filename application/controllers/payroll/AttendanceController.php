<?php 
require_once APPPATH . 'controllers/RBACController.php';
class AttendanceController extends RBACController
{
    private $rbac_access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->error = [];
    }

    public function self_attendance(){
        if ($this->rbac_access) {
            $this->load->employee_dashboard('attendance/home');
        } else {
            # code...
        }
        
    }
}
