<?php 

class PayrollController extends CI_Controller
{
    public $data;

    public function payslips(){
        $this->load->admin_dashboard('dashboard/payroll/payslips');
    }
    public function payslip_single($payslip_id){
        $this->data['id'] = $payslip_id;
        $this->load->admin_dashboard('dashboard/payroll/payslip_single', $this->data);
    }
}
