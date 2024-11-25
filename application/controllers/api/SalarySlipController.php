<?php

use function PHPUnit\Framework\isNull;

require_once APPPATH . "controllers/APIController.php";
class SalarySlipController extends APIController
{
	public function import_csv()
	{
		if (is_null($_FILES) || count($_FILES) == 0) {
			return $this->output
				->set_status_header(401)
				->set_output(json_encode(['status' => false, 'message' => 'Access Denied!']));
		} else {
			$file = fopen($_FILES['doc1']['tmp_name'], 'r'); //open file
			$x = [];
			$data['period'] = $this->input->post();
			while (!feof($file)) { //read till the end of the file
				$content = fgetcsv($file); //get content of the file
				array_push($x, $content);
			}
			for ($i = 0; $i < count($x) - 1; $i++) {
				// print_r(gettype($final[$i]));
				$data['salary'][$i] = [
					'employee' => [
						'id' => $x[$i][0],
						'name' => $x[$i][1],
						'pan' => $x[$i][2],
						'doj' => $x[$i][3],
						'dept' => $x[$i][4],
						'designation' => $x[$i][5],
						'basic_salary' => $x[$i][9],
					],
					'attendance' => [
						'paid_days' => $x[$i][6],
						'present_days' => $x[$i][7],
						'absent_days' => $x[$i][8],
					]
				];
			}

			$data['salary_component'] = [
				'ea' => [
					'ta' => null,
					'da' => null,
					'hra' => null,
					'sa' => null,
				],
				'de' => [
					'pf' => null,
					'tax' => null,
					'tds' => null,
				],
			];
			$data['status'] = true;

			return $this->output
				->set_status_header(200)
				->set_output(json_encode($data));
		}
	}

	public function new_generate() {
		print_r($this->input->post());
	}

	public function bulk_generate()
	{
		$this->load->library('documents/Payslip');
		$this->payslip->init('L')->generate();
	}

	public function make_pdf()
	{
		$file = fopen(FCPATH . "uploads/payslips.csv", 'r'); //open file
		while (!feof($file)) { //read till the end of the file
			$c = fgetcsv($file); //get content of the file
			print_r($c);
		}
		$data['salary'] = [
			'employee' => [
				'id' => $c[0],
				'name' => $c[1],
				'pan' => $c[2],
				'doj' => $c[3],
				'dept' => $c[4],
				'designation' => $c[5],
				'basic_salary' => $c[9],
			],
			'attendance' => [
				'paid_days' => $c[6],
				'present_days' => $c[7],
				'absent_days' => $c[8],
			]
		];
		$data['salary_component'] = [
			'ea' => [
				'ta' => null,
				'da' => null,
				'hra' => null,
				'sa' => null,
			],
			'de' => [
				'pf' => null,
				'tax' => null,
				'tds' => null,
			],
		];

		print_r($data);
	}
}
