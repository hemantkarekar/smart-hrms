<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'DashboardController';

$route['logout'] = 'api/AuthController/logout';
$route['api/auth-login'] = 'api/AuthController/login';
$route['api/auth-register'] = 'api/AuthController/register';
$route['api/onboarding/proceed'] = 'api/OnboardingAPI/register';

$route['api/salary-slip/import'] = 'api/SalarySlipController/import_csv';
$route['api/salary-slip/generate'] = 'api/SalarySlipController/bulk_generate';
$route['api/salary-slip/bulk-generate'] = 'api/SalarySlipController/make_pdf';

$route[''] = 'DashboardController/index';

$route['onboarding/home'] = 'OnboardingController/home';

$route['login'] = 'DashboardController/login';
$route['register'] = 'DashboardController/register';


$route['attendance'] ='payroll/AttendanceController/self_attendance';
$route['time-sheet'] ='payroll/AttendanceController/all_timesheet';
$route['overtime'] ='payroll/AttendanceController/all_overtime';

$route['employees'] ='employee/EmployeesController/all_employees';
$route['employees/new'] ='employee/EmployeesController/new_single_employee';

$route['leaves'] ='payroll/LeavesController/self_leaves';
$route['leaves/all'] ='payroll/LeavesController/all_leaves';
$route['leaves/pending'] ='payroll/LeavesController/leave_requests';

$route['payslips'] = 'payroll/PayrollController/self_payslips';
$route['payslip/(:any)'] = 'payroll/PayrollController/self_payslip_single/$1';
$route['payroll'] = 'payroll/PayrollController/all_payroll';
$route['payroll/new'] = 'payroll/PayrollController/new_payroll';

$route['reimbursements'] = 'payroll/ReimbursementController/self_reimbursements';
$route['reimbursements/all'] = 'payroll/ReimbursementController/all_reimbursements';
$route['reimbursements/pending'] ='payroll/ReimbursementController/reimbursement_requests';

$route['departments'] ='employee/DesignationDepartmentController/all_departments';
$route['departments/new'] ='employee/DesignationDepartmentController/new_department';
$route['designations'] ='employee/DesignationDepartmentController/all_designations';
$route['designations/new'] ='employee/DesignationDepartmentController/new_designation';

$route['policies'] = 'company/PoliciesController/self_policies';
$route['policy/(:any)'] = 'company/PoliciesController/self_policy_single/$1';
$route['policy/(:any)/edit'] = 'company/PoliciesController/policy_single_edit/$1';

$route['settings'] = 'GeneralSettingsController/self_settings';
$route['settings/app-settings/home'] = 'company/SettingsController/self_settings';
$route['settings/all'] = 'company/SettingsController/all_settings_company';
$route['settings/holidays'] = 'company/SettingsController/all_settings_holidays';

$route['profile'] = 'company/UserProfileController/home';

// $route[''] = '';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
