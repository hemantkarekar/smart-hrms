<?php

class APIController extends CI_Controller
{
    public $output;
	public function __construct()
	{
		parent::__construct();
		$this->output->set_content_type('application/json');
	}

}
