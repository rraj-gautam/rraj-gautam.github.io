<?php
require("libs/fpdf/fpdf.php");
require("libs/config.php");
 
// $pdf=new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Salary Slip');
// $pdf->Output();
if (isset($_REQUEST['id'])) {
	 

$id=$_REQUEST['id'];

$salary_slip=  $DB->query("SELECT s.*,CONCAT(e.fname,e.lname) as name,e.duty FROM salary_slip s JOIN employes e ON e.employe_id=s.employe_id  WHERE s.salary_slip_id=".$id );
$salary_slip=$salary_slip[0];
}else{
	die();
} 
class PDF extends FPDF
{
// Load data
function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

 

 

// Colored table
function generate_slip($header, $data)
{
	// Colors, line width and bold font
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Header
	$w = array(40, 35, 40, 45);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Data
	$fill = false;
	// foreach($data as $row)
	// {
	// 	$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
	// 	$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
	// 	$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
	// 	$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
	// 	$this->Ln();
	// 	$fill = !$fill;
	// }
	// Closing line

		$this->Cell($w[0],6,'Basic DA','LR',0,'L',$fill);
		$this->Cell($w[1],6,$data['basic_pay'],'LR',0,'L',$fill);
		$this->Cell($w[2],6,'PF','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['provident_fund'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'HRA','LR',0,'L',$fill);
		$this->Cell($w[1],6,$data['hra'],'LR',0,'L',$fill);
		$this->Cell($w[2],6,'ESI','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['esi'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'Conveyance','LR',0,'L',$fill);
		$this->Cell($w[1],6,$data['conveyance'],'LR',0,'L',$fill);
		$this->Cell($w[2],6,'PF','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['provident_fund'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'Basic DA','LR',0,'L',$fill);
		$this->Cell($w[1],6,$data['basic_pay'],'LR',0,'L',$fill);
		$this->Cell($w[2],6,'Loan','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['loan'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,' ','LR',0,'L',$fill);
		$this->Cell($w[1],6,'','LR',0,'L',$fill);
		$this->Cell($w[2],6,'PT','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['tax'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,' ','LR',0,'L',$fill);
		$this->Cell($w[1],6,'','LR',0,'L',$fill);
		$this->Cell($w[2],6,'TSD','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['tsd'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'   ','LR',0,'L',$fill);
		$this->Cell($w[1],6,'','LR',0,'L',$fill);
		$this->Cell($w[2],6,' ','LR',0,'R',$fill);
		$this->Cell($w[3],6,'','LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'Total Addition','LR',0,'L',$fill);
		$this->Cell($w[1],6,$data['total_addition'],'LR',0,'L',$fill);
		$this->Cell($w[2],6,'Total Deduction','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['total_deduction'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'','LR',0,'L',$fill);
		$this->Cell($w[1],6,'','LR',0,'L',$fill);
		$this->Cell($w[2],6,'','LR',0,'R',$fill);
		$this->Cell($w[3],6,'','LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
		$this->Cell($w[0],6,'','LR',0,'L',$fill);
		$this->Cell($w[1],6,'','LR',0,'L',$fill);
		$this->Cell($w[2],6,'NET Salary','LR',0,'R',$fill);
		$this->Cell($w[3],6,$data['net_salary'],'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;



	$this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('Earnings', ' ', 'Deduction','');
// Data loading

$pdf->SetFont('Arial','',14);  
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(120,10,'',0,0,'R',false);
$pdf->Cell(45,10,'ABCD COMPANY',0,0,'R',false);
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(120,4,'',0,0,'R',false);
$pdf->Cell(45,4,'(Address)',0,0,'R',false);
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(120,4,'',0,0,'R',false);
$pdf->Cell(45,4,'salary slip',0,0,'R',false);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(40,4,'Employee Name : ',0,0,'L',false);
$pdf->Cell(25,4,$salary_slip['name'],0,0,'L',false);
$pdf->Ln();
$pdf->Cell(40,4,'Designation : ',0,0,'L',false);
$pdf->Cell(25,4,$salary_slip['duty'],0,0,'L',false);
$pdf->Ln();
$pdf->Cell(40,4,'Salary date : ',0,0,'L',false);
$pdf->Cell(25,4,$salary_slip['salary_date'],0,0,'L',false);
$pdf->Ln();
$pdf->generate_slip($header,$salary_slip);
$pdf->Output();
?>