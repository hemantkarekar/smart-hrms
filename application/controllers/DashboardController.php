<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	public $error;
	public $session_data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->error = [];
	}
	public function index()
	{
		// echo $this->UserModel->get_role();
		switch ($this->UserModel->get_role()) {
			case 'admin':
				$this->load->admin_dashboard('index');
				break;
			case 'hr':
				$this->load->admin_dashboard('index');
				break;
			case 'employee':
				$this->load->employee_dashboard('index');
				break;

			default:
				echo "ERROR!";
				break;
		}
	}

	public function login()
	{
		$data = [
			'page' => [
				'title' => "Login Page" . " • " . APP_NAME
			]
		];
		$this->load->mini_layout('pages/login', $data);
	}
	public function register()
	{
		$formdata = $this->input->post();
	}

	public function qrcode_render()
	{
		$data  = [];
		// $this->encryption->initialize(
		// 	array(
		// 		'cipher' => ENCRYPTION_ALGO,
		// 		'mode' => ENCRYPTION_MODE,
		// 	)
		// );
		try {
			$plain_text = 'This is a plain-text message!';
			// $ciphertext = $this->encryption->encrypt($plain_text);

			// echo $ciphertext . "<br>";
			echo $this->encryption->decrypt("4f3a26d0b0fb60b6a1958caa1386578afc33dff5181e6c6ccbbf7121308ddc39b8e61ce052b6f6e8f0ae8447828bdca1679dc84f5dfb6cd47080d63897884e1cSTiaDf8XdMWZWpRUBYr5NN7rauJpE7gUVXyhjj7auDDH/RRswNL86TVA43yc500E");
		} catch (Exception $th) {
			$this->error['status'] = 'failed';
			$this->error['code'] = 'InvalidKeyError';
			$this->error['message'] = 'The Key passed does not match with the records or is expired!';
		}
		try {
			$this->load->library('QRCodeLib');
			$image = $this->qrcodelib->render($this->input->post('url'));

			$data['status'] = "success";
			$data['qrcode'] = $image;
		} catch (Exception $ex) {
			$this->error['status'] = 'failed';
			$this->error['code'] = 'InvalidData';
			$this->error['message'] = 'The Data Passed does not match with the records!';

			return $this->error;
		}

		if ($data['status'] == 'success') {
			echo "<img src='" . $data['qrcode'] . "' width='300'/>";
		} else {
			print_r(json_encode($this->error));
		}
	}
}
