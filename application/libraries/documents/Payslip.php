<?php

use Fpdf\Fpdf;

require_once "./vendor/autoload.php";

class SocioPDF extends Fpdf
{
    function SetCellMargin($margin) { $this->cMargin = $margin; }
    // Page header
    function Header()
    {
        // Logo
        $this->Image(FCPATH . 'assets/images/logos/vahi.png', 8, 6, 60);
        // Line break
        $this->Ln(2);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 24);
        // Title
        $this->Cell(0, 11, 'Vahi Mediatech Pvt. Ltd.', 0, 1, 'C');
        $this->SetFont('Arial', '', 11);
        $this->Cell(0, 9, 'Company Address, City, State, XXX XXX', 0, 1, 'C');
        $this->Line(8, 35, $this->w - 8, 35);
        // Line break
        $this->Ln(6);
    }

    // Page footer
    function Footer()
    {
        $this->AliasNbPages();
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 8, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

class Payslip
{
    public $pdf;

    public function init($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        $this->pdf = new SocioPDF($orientation, $unit, $size);
        return $this;
    }

    public function generate()
    {
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial', 'B', 20);
        $this->pdf->Ln(1);
        $this->pdf->Cell(0, 8, 'Salary Slip for the Month May 2024', 0, 1, 'C');
        $this->pdf->Ln(5);
        $this->pdf->SetCellMargin(4);
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(40, 8, 'Employee ID', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(50, 8, '#840000-4545-001', 1, 1, '');

        $this->pdf->Ln(2);
        $this->pdf->SetFont('Arial', 'B', 12);
        $this->pdf->Cell(0, 8, 'Employee Details', 1, 1, 'C');
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Full Name of Employee:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(0, 8, 'Hemant V. Karekar', 1, 1, '');
        
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Designation:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, 'Sr. PHP Developer', 1, 0, '');
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Department:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(70, 8, 'Information Technology', 1, 1, '');
        
        $this->pdf->Ln(4);
        $this->pdf->SetFont('Arial', 'B', 12);
        $this->pdf->Cell(0, 8, 'Payroll Details', 1, 1, 'C');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(138, 8, 'Earnings', 1, 0, '');
        $this->pdf->Cell(139, 8, 'Deductions', 1, 1, '');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Basic Salary:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, '00,000.00', 1, 0, '');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Provident Fund:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(70, 8, 'NA', 1, 1, '');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Incentives:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, 'NA', 1, 0, '');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Prof. Tax', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(70, 8, '200.00', 1, 1, '');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Dearness Allowance:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, 'NA', 1, 0, '');

        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'TDS:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(70, 8, 'NA', 1, 1, '');
        
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'House Rent Allowance:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, 'NA', 1, 0, '');
        
        $this->pdf->Cell(139, 8, '', 1, 1, '');
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Travel Allowance', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, 'NA', 1, 0, '');

        $this->pdf->Cell(139, 8, '', 1, 1, '');
        
        $this->pdf->SetFont('Arial', 'B', 11);
        $this->pdf->Cell(69, 8, 'Special Allowance:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->Cell(69, 8, 'NA', 1, 0, '');
        
        $this->pdf->Cell(139, 8, '', 1, 1, '');
        $this->pdf->Ln(4);
        
        $this->pdf->SetFont('Arial', 'B', 13);
        $this->pdf->Cell(69, 9, 'Total Earnings:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 13);
        $this->pdf->Cell(69, 9, 'NA', 1, 0, '');
        
        $this->pdf->SetFont('Arial', 'B', 13);
        $this->pdf->Cell(69, 9, 'Total Deductions:', 1, 0, '');
        $this->pdf->SetFont('Arial', '', 13);
        $this->pdf->Cell(70, 9, 'NA', 1, 1, '');
        
        $this->pdf->Ln(2);
        $this->pdf->SetFont('Arial', 'B', 13);
        $this->pdf->Cell(0, 8, 'Total Earning in Words', 0, 1, '');
        $this->pdf->SetFont('Arial', '', 11);
        $this->pdf->MultiCell(138, 8, "Rupees Only", 1, 'L');
        $this->pdf->SetY(-41);
        $this->pdf->Cell(207, 10, '', 0, 0, '');
        $this->pdf->Cell(70, 20, '', 1, 0, '');

        $this->pdf->Output('I', 'salary_slip_layout.pdf');
        exit();
    }
}
