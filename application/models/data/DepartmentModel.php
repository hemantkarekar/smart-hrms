<?php

class DepartmentModel extends CI_Model
{
    public $table;
    public $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['users'] = 'app_application_users';
        $this->table['departments'] = 'app_company_departments';
    }

    public function get($where = null, $what = null)
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $result = $this->db->get($this->table['departments'])->result_array();
        return json_encode($result);
    }
}