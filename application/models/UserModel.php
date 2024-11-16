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
    
    public function get($id)
    {
        $result = $this->db->query("SELECT * FROM `panel_users` WHERE `id` = '" . $id . "'")->result()[0];
        return $result;
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
        $this->role = 'hr';
        $this->role = 'admin';
        $this->role = 'employee';
        $this->user_data['user']['role'] = $this->role;
        $this->session->set_userdata('user', $this->user_data['user']);
        return $this->role;
    }

    public function new($data)
    {
        $this->db->insert('users', $data);
    }
}
