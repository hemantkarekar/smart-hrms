<?php
require_once APPPATH . "controllers/APIController.php";
class OnboardingAPI extends APIController
{
    public $request, $response;
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('data/EmployeeModel', 'EmployeeModel');
        $this->load->model('rbac/AccessModel');
        $this->load->model('UserModel');
        // $this->load->model('core/CompanyModel');
        // $this->load->model('core/ApplicationModel');
    }
    public function register()
    {
        $form_data = $this->input->post();
        $data['company']['details'] = [
            "name" => $form_data['company_details']['name'],
            "type" => $form_data['company_details']['company_type'],
            "gstin" => $form_data['company_details']['gstin'],
            "pan" => $form_data['company_details']['pan_no'],
            "pincode" => $form_data['company_details']['pincode'],
            "state" => $form_data['company_details']['state'],
            "address" => implode(" ", [$form_data['company_details']['address_0'], $form_data['company_details']['address_1'], $form_data['company_details']['address_2']]),
        ];
        $data['company']['structure']['holiday'] = $form_data["holiday_structure"];
        $data['company']['structure']['salary'] = $form_data["salary_structure"];
        // $app_key = $this->ApplicationModel->create();
        $app_key = "44o2-0ip3i0ak6203vm3h";
        $this->session->set_flashdata('app_key', $app_key);
        $this->session->set_flashdata("hrms_" . $app_key . '_onboarding_data', $data);

        $this->output->set_output(json_encode($data));

        return $this->output;
    }

    public function sucess()
    {
        // $this->CompanyModel->create();
        redirect('app/sociomark/dashboard');
    }
}
