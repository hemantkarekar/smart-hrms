<?php

class MY_Loader extends CI_Loader
{
	public function __construct()
	{
		parent::__construct();
		$CI =& get_instance();
        $CI->load = $this;
	}
	public function admin_dashboard($view, $vars = array(), $return = FALSE)
	{
		$this->view('layout/_1', $vars);
		$this->view("main/dashboard/admin/" . $view, $vars);
		$this->view('layout/_2', $vars);
	}
	
	public function employee_dashboard($view, $vars = array(), $return = FALSE)
	{
		$this->view('layout/_1', $vars);
		$this->view("main/dashboard/employee/" . $view, $vars);
		$this->view('layout/_2', $vars);
	}
	
	public function general_view($view, $vars = array(), $return = FALSE)
	{
		$this->view('layout/_1', $vars);
		$this->view("main/dashboard/general/" . $view, $vars);
		$this->view('layout/_2', $vars);
	}

	public function onboarding_view($view, $vars = array(), $return = FALSE)
	{
		$this->view('layout/_1', $vars);
		$this->view("onboarding/" . $view, $vars);
		$this->view('layout/_2', $vars);
	}
	
	public function mini_layout($view, $vars = array(), $return = FALSE){
		$this->view('layout/_1_mini', $vars);
		$this->view($view, $vars);
		$this->view('layout/_2_mini', $vars);
	}
	
	public function error_view($view, $vars = array(), $return = FALSE){
		$this->view('layout/_1', $vars);
		$this->view("error_pages/". $view, $vars);
		$this->view('layout/_2', $vars);
		// $this->view('layout/_1_mini', $vars);
		// $this->view("error_pages/" . $view, $vars);
		// $this->view('layout/_2_mini', $vars);
	}
}
