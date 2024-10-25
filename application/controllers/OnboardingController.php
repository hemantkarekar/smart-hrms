<?php 

class OnboardingController extends CI_Controller
{
    public $error;
	public $session_data;

	public function __construct()
	{
		parent::__construct();
		$this->error = [];
	}

    public function home(){
        $this->load->onboarding_view('home');
    }
}
