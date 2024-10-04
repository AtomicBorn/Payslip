<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PrintPDF extends Controller
{
    public static function print(Request $request) {
        $fpdf = new Fpdf('P','mm','A4');
        $fpdf->AddPage();
        $fpdf->setTitle("Payslip");
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Ln();
        
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell(55, 8, '', 0, 0, 'C');
        $fpdf->Cell(55, 8, 'Payslip', 0, 0, 'C');

        $fpdf->Ln();
        $fpdf->Cell(55, 8, '', 0, 0, 'C');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 8, 'Zoonodle Inc', 0, 0, 'C');
        
        $fpdf->Ln();
        $fpdf->Cell(55, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(80, 6, '21023 Pearson Point Road', 0, 0, 'L');

        $fpdf->Ln();
        $fpdf->Cell(55, 6, '', 0, 0, 'L');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(55, 6, 'Gateway Avenue', 0, 0, 'C');
        
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(40, 8, 'Date of Joining', 0, 0, 'L');
        $fpdf->Cell(55, 8, ':2018-06-23', 0, 0, 'L');
        $fpdf->Cell(40, 8, 'Employee name', 0, 0, 'L');
        $fpdf->Cell(55, 8, ':Sally harley', 0, 0, 'L');

        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(40, 8, 'Pay Period', 0, 0, 'L');
        $fpdf->Cell(55, 8, ':August 2021', 0, 0, 'L');
        $fpdf->Cell(40, 8, 'Designation', 0, 0, 'L');
        $fpdf->Cell(55, 8, ':Marketing Executive', 0, 0, 'L');

        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(40, 8, 'Worked Days', 0, 0, 'L');
        $fpdf->Cell(55, 8, ':26', 0, 0, 'L');
        $fpdf->Cell(40, 8, 'Department', 0, 0, 'L');
        $fpdf->Cell(55, 8, ':Marketing', 0, 0, 'L');
       
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', 'B', 14);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 10, 'Earnings', 1, 0, 'C');
        $fpdf->Cell(35, 10, 'Amount', 1, 0, 'C');

        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Basic', 1, 0, 'L');
        $fpdf->Cell(35, 9, '10000', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Incentive Pay', 1, 0, 'L');
        $fpdf->Cell(35, 9, '1000', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'House Rent Allowance', 1, 0, 'L');
        $fpdf->Cell(35, 9, '400', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Meal Allowance', 1, 0, 'L');
        $fpdf->Cell(35, 9, '200', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, '', 1, 0, 'C');
        $fpdf->Cell(35, 9, '', 1, 0, 'C');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Total Earnings', 1, 0, 'R');
        $fpdf->Cell(35, 9, '11600', 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', 'B', 14);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 10, 'Deductions', 1, 0, 'C');
        $fpdf->Cell(35, 10, 'Amount', 1, 0, 'C');

        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Provident Fund', 1, 0, 'L');
        $fpdf->Cell(35, 9, '1200', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Profesional Tax', 1, 0, 'L');
        $fpdf->Cell(35, 9, '500', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Loan', 1, 0, 'L');
        $fpdf->Cell(35, 9, '400', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, '', 1, 0, 'L');
        $fpdf->Cell(35, 9, '', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Total Deductions', 1, 0, 'R');
        $fpdf->Cell(35, 9, '2100', 1, 0, 'R');
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(4, 8, '', 0, 0, 'L');
        $fpdf->Cell(145, 9, 'Net Pay', 1, 0, 'R');
        $fpdf->Cell(35, 9, '9500', 1, 0, 'R');

        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Cell(45, 6, '', 0, 0, 'C');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(85, 6, '9500', 0, 0, 'C');

        $fpdf->Ln();
        $fpdf->Cell(55, 6, '', 0, 0, 'C');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(70, 6, 'Nine Thousand Five Hundred', 0, 0, 'C');

        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->SetFont('Arial', '', 14);
        $fpdf->Cell(80, 8, 'Employer Signature', 0, 0, 'C');
        $fpdf->Cell(95, 8, 'Employee Signature', 0, 0, 'R');
        $fpdf->Line(18, 260, 85, 260);
        $fpdf->Line(128, 260, 195, 260);

        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Ln();
        $fpdf->Cell(55, 5, '', 0, 0, 'C');
        $fpdf->SetFont('Arial', '', 12);
        $fpdf->Cell(70, 5, 'This is system generated payslip', 0, 0, 'C');

        $fpdf->Output();
        exit;
    }
}

