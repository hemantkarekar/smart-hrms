<?php

/**
 * UserModel
 * 
 * Defines 'User' of the Application.
 * The User can be an Employee and Admin of Same Company or Different Company
 * Every Employee is a User but every User is not an Employee
 * 
 */
class UserModel extends CI_Model
{
    public $user_data, $role;
    public function __construct()
    {
        parent::__construct();
    }

    public function get($select = null, $where = null)
    {
        $table = 'panel_users';
        if (!is_null($select)) {
            $this->db->select($select);
        }
        if (!is_null($where)) {
            $this->db->where($where);
        }
        return json_encode($this->db->get($table)->result_array());
    }

    /**
     * authorize
     * 
     * Authorize any User to access a Module of this Application
     * This 'User' is superset of the Employee
     *
     * @param  mixed $request
     * @return mixed $response
     */
    public function authorize(array $request)
    {
        return true;
    }

    public function get_role()
    {
        $this->role = 'employee';
        $this->role = 'hr';
        $this->role = 'admin';
        $this->user_data['user']['role'] = $this->role;
        $this->session->set_userdata('user', $this->user_data['user']);
        return $this->role;
    }

    public function new($data)
    {
        $this->db->insert('users', $data);
    }
}
