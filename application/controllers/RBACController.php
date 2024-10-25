<?php

class RBACController extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->error = [];
	}
}
