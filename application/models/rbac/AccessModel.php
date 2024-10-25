<?php

class AccessModel extends CI_Model
{
    public $app_id;
    public $table;
    public $result;
    public function __construct()
    {
        parent::__construct();
        $this->table['app_access'] = 'app_application_acess';

        $this->app_id = "IuxZcao13A40gg1YMaNHnWOWJoJoLpJb";
    }
    
    public function get($where = null, $what = null){
        if (!is_null($where)) {
            $this->db->where($where);
        }
        if (!is_null($what)) {
            $this->db->select($what);
        }
        $result = $this->db->get($this->table['app_access'])->result_array()[0];
        $this->result = $result;
        return $this->result;
    }
}
