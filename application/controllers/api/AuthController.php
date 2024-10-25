<?php

require_once APPPATH . "controllers/APIController.php";
class AuthController extends APIController
{
    public $request, $response;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data/EmployeeModel', 'EmployeeModel');
        $this->load->model('rbac/AccessModel');
    }
    public function login()
    {
        $this->request['data'] = [
            'email' => $this->input->post('username'),
        ];
        $this->request['server'] = [
            'HTTP_SEC_CH_UA' => $_SERVER['HTTP_SEC_CH_UA'],
            'HTTP_SEC_CH_UA_MOBILE' => $_SERVER['HTTP_SEC_CH_UA_MOBILE'],
            'HTTP_SEC_CH_UA_PLATFORM' => $_SERVER['HTTP_SEC_CH_UA_PLATFORM'],
            'SERVER_ADDR' => $_SERVER['SERVER_ADDR'],
            'SERVER_PORT' => $_SERVER['SERVER_PORT'],
            'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
            'QUERY_STRING' => $_SERVER['QUERY_STRING'],
        ];
        $this->request['headers'] = $this->input->request_headers();
        $a = $this->EmployeeModel->authorize($this->request['data']);
        $r = 'employee';
        if ($a['status']) {
            switch ($r) {
                case 'employee':
                    $result = $this->EmployeeModel->get($this->request['data']);
                    $this->response['data'] = $result;
                    $name = [];
                    array_push($name, $result['first_name']);
                    if (key_exists('m_name', $result)) {
                        array_push($name, $result['m_name']);
                    }
                    array_push($name, $result['last_name']);
                    $this->response['data']['full_name'] = implode(' ', $name);
                    $this->response['data']['app_key'] = $this->AccessModel->get(['id' => $result['app_id']], ['access_id']);
                    $this->response['data']['status'] = ($result['app_id'] == '1') ? 'active' : (($result['app_id'] == '2') ? 'inactive' : "");
                    break;
                default:
                
                    break;
            }
            $this->response['timestamp'] = date(DATE_ATOM);
            return $this->output
                ->set_status_header(200)
                ->set_output(json_encode($this->response));
        }
    }
}
