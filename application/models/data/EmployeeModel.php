<?php

class EmployeeModel extends CI_Model
{
    public $table;
    public $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['users'] = 'app_application_users';
        $this->table['employees'] = 'app_company_employees';
    }

    public function get($where = null, $what = null)
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $result = $this->db->get($this->table['employees'])->result_array();
        return json_encode($result);
    }
    public function get_sorted($where = null, $what = null, $sort = ['id', 'DESC'])
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $this->db->order_by($sort[0], $sort[1]);
        $result = $this->db->get($this->table['employees'])->result_array();
        return json_encode($result);
    }

    public function authorize(array $request)
    {
        return ['status' => true];
    }
}
