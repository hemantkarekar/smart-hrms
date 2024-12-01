<?php

class DesignationModel extends CI_Model
{
    public $table;
    public $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['users'] = 'app_application_users';
        $this->table['designations'] = 'app_company_designations';
    }

    public function get($where = null, $what = null)
    {
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $result = $this->db->get($this->table['designations'])->result_array();
        return json_encode($result);
    }
}