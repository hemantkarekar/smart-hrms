<?php

class EmployeeModel extends CI_Model
{
    public $table;
    public $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['users'] = 'app_application_users';
        $this->table['employees'] = 'app_company_employee';
    }

    public function get($where = null, $what = null)
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $result = $this->db->get($this->table['users'])->result_array()[0];
        $this->result = $result;
        return $result;
    }

    public function authorize(array $request)
    {
        return ['status' => true];
    }
}
