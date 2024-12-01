<?php

use function PHPUnit\Framework\isNull;

class SalarySlipController extends CI_Controller
{
	public $request, $response, $result;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/EmployeeModel');
		$this->load->model('data/DepartmentModel');
		$this->load->model('data/DesignationModel');
		$this->load->helper('salary');
	}
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

	public function new_generate()
	{
		$this->request = $this->input->post();
		$dur = $this->request['month'] ?? date('m-Y');
		print_r($dur);

		$month = 11;
		$year = 2024;

		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		$employee = json_decode($this->EmployeeModel->get(['id' => $this->request['employee_id']]), true)[0];
		$department = json_decode($this->DepartmentModel->get(['id' => $employee['dept_id']]), true)[0];
		$designation = json_decode($this->DesignationModel->get(['id' => $employee['designation_id']]), true)[0];
		$employee['department'] = $department;
		$employee['designation'] = $designation;

		$gross_salary = $this->request['earnings']['gross_salary'];

		$working_days = $this->request['attendance'];
		$components['basic'] = round($gross_salary * 0.5, 2);
		$components['hra'] = round($components['basic'] * 0.5, 2);
		$components['da'] = round($components['basic'] * 0.1, 2);
		$components['lta'] = round($components['basic'] * 0.1, 2);
		$components['special'] = round($components['basic'] * 0.18, 2);
		
		$gross_salary = ($gross_salary / $days) * $working_days;
		$earnings['gross_salary'] = $gross_salary;
		$earnings['incentive'] = $this->request['earnings']['incentives'];
		$earnings['gratuity'] = $this->request['earnings']['gratuity'];
		$earnings['pf_contro'] = round($components['basic'] * 0.12 + $components['da'], 2);

		$deductions['epf_company'] = round($components['basic'] * 0.12, 2);
		$deductions['epf_employee'] = round($components['basic'] * 0.12, 2);
		$deductions['pt'] = 200;
		$deductions['esic'] = round($gross_salary * 0.0075, 2);

		$this->request['net_salary'] = array_add_elements($earnings) - array_add_elements($deductions);

		// $this->request['employee'] = $employee;
		$this->request['salary_components']['components'] = $components;
		$this->request['salary_components']['earnings'] = $earnings;
		$this->request['salary_components']['deductions'] = $deductions;
		echo "<pre>";
		print_r($this->request);
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
