<?php 

require_once APPPATH . "controllers/APIController.php";
class EmployeeAPIController extends APIController
{
    public $request, $response;
    public function __construct()
    {
        parent::__construct();
    }
    
    public function new_employee() {
        $this->request = $this->input->post();
        print_r($this->request);
    }

    
}
