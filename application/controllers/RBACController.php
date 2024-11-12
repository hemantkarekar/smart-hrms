<?php

class RBACController extends CI_Controller
{
	protected $rbac_access;
    public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->error = [];
		if (in_array($this->UserModel->get_role(), ['admin', 'hr'])) {
            $this->rbac_access = true;
        } else {
            $this->rbac_access = false;
        }
	}
}
