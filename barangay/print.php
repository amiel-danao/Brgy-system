<?php 
include('include/function/config.php');
	require('fpdf/fpdf.php');

// 270 in landscape width cell
	// 190 in portrait width cell

	$pdf = new FPDF('P', 'mm', 'A4');


	$pdf->AddPage('L');

$pdf->SetFont('Arial', 'BU', 13);
$pdf->Image('bimages/dilg.jpg',90,8,20);
$pdf->Cell(280 , 6,'Barangay Bucal 1',0,1,'C');
$pdf->Cell(280 , 6,'Barangay Residents Record',0,1,'C');
$pdf->Cell(280 , 15,'',0,1);
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(37 , 8,'City/Municipality:',0,0);
$pdf->SetFont('Arial', 'BI', 13);
$pdf->Cell(40 , 8,'Maragondon',0,0);
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(37 , 8,'Province:',0,0,'R');
$pdf->SetFont('Arial', 'BI', 13);
$pdf->Cell(40 , 8,'Cavite',0,0);
$pdf->SetFont('Arial', '', 13);
$pdf->Cell(40 , 8,'Region:',0,0,'R');
$pdf->SetFont('Arial', 'BI', 13);
$pdf->Cell(40 , 8,'IV-A',0,1);
$pdf->Cell(280 , 10,'',0,1);


	$pdf->SetFont('Arial', 'B', 12);

	$pdf->Cell(35 , 10,'First Name',1,0);
 	$pdf->Cell(35 , 10,'Last Name',1,0);
 	$pdf->Cell(35 , 10,'Middle Name',1,0);
 	$pdf->Cell(20 , 10,'Gender',1,0);

 	$pdf->Cell(25 , 10,'BOD',1,0,'C');
 	$pdf->Cell(20 , 10,'House #',1,0);
 	$pdf->Cell(35 , 10,'Street',1,0);
 	$pdf->Cell(55 , 10,'Religion',1,0);
 	$pdf->Cell(20 , 10,'Status',1,1);



$brgy_code = "BC2"; 
$sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`=? ";
$stmt = $db->prepare($sql);
$stmt->bind_param('s',$brgy_code);
$stmt->execute();
$result = $stmt->get_result();
 while ($data = $result->fetch_assoc())
 	{ 
 		$pdf->SetFont('Arial', '', 12);
 	$pdf->Cell(35 , 10,$data['first_name'],1,0);
 	$pdf->Cell(35 , 10,$data['last_name'],1,0);
 	$pdf->Cell(35 , 10,$data['middle_name'],1,0);
 	$pdf->Cell(20 , 10,$data['gender'],1,0);
 	$pdf->Cell(25 , 10,$data['bod'],1,0);
 	$pdf->Cell(20 , 10,$data['house_no'],1,0);
 	$pdf->Cell(35 , 10,$data['street'],1,0);
 	$pdf->Cell(55 , 10,$data['religion'],1,0);
 	$pdf->Cell(20 , 10,$data['status'],1,1);
	}

// 	$pdf->Cell(130 , 5,'INVOICE',0,0);
// 	$pdf->Cell(59 , 5,'INVOICE',0,1);


// $pdf->SetFont('Arial', '', 12);

// $pdf->Cell(130 , 5,'[Street Addresss]',0,0);
// $pdf->Cell(59 , 5,'',0,1);

// $pdf->Cell(130 , 5,'[City, Country, Zip]',0,0);
// $pdf->Cell(25 , 5,'Date',0,0);
// $pdf->Cell(34 , 5,'[dd/mm/yyyy]',0,1);


// $pdf->Cell(130 , 5,'Phone +099977266',0,0);
// $pdf->Cell(25 , 5,'Invoice #',0,0);
// $pdf->Cell(34 , 5,'7655172',0,1);


// $pdf->Cell(130 , 5,'Fax +099977266',0,0);
// $pdf->Cell(25 , 5,'Customer #',0,0);
// $pdf->Cell(34 , 5,'7655172',0,1);

// $pdf->Cell(189 , 10,'',0,1);
// $pdf->Cell(100 , 5,'Bill to',0,1);
	
// $pdf->Cell(20 , 5,'',0,0);
// $pdf->Cell(80 , 5,'[Name]',0,1);
// $pdf->Cell(20 , 5,'',0,0);
// $pdf->Cell(80 , 5,'[Company]',0,1);

// $pdf->Cell(20 , 5,'',0,0);
// $pdf->Cell(80 , 5,'[Address]',0,1);

// $pdf->Cell(20 , 5,'',0,0);
// $pdf->Cell(80 , 5,'[Phone]',0,1);

// $pdf->Cell(189 , 10,'',0,1);

// $pdf->SetFont('Arial', 'B', 12);
// $pdf->Cell(130 , 5,'Description',0,0);
// $pdf->Cell(25 , 5,'Tax',0,0);
// $pdf->Cell(34 , 5,'Amount',0,1);


// $pdf->SetFont('Arial', '', 12);
// $pdf->Cell(130 , 5,'Pan',0,0);
// $pdf->Cell(25 , 5,'-',0,0);
// $pdf->Cell(34 , 5,'3,500',0,1,'R');

// $pdf->Cell(130 , 5,'Pan',0,0);
// $pdf->Cell(25 , 5,'-',0,0);
// $pdf->Cell(34 , 5,'3,500',0,1,'R');

// $pdf->Cell(130 , 5,'Pan',0,0);
// $pdf->Cell(25 , 5,'-',0,0);
// $pdf->Cell(34 , 5,'3,500',0,1,'R');

// $pdf->Cell(130 , 5,'',0,0);
// $pdf->Cell(25 , 5,'Subtotal',0,0);
// $pdf->Cell(4 , 5,'$',0,0);
// $pdf->Cell(30 , 5,'3,500',0,1,'R');

// $pdf->Cell(130 , 5,'',0,0);
// $pdf->Cell(25 , 5,'Taxable',0,0);
// $pdf->Cell(4 , 5,'$',0,0);
// $pdf->Cell(30 , 5,'3,500',0,1,'R');

// $pdf->Cell(130 , 5,'',0,0);
// $pdf->Cell(25 , 5,'Tax Rate',0,0);
// $pdf->Cell(4 , 5,'$',0,0);
// $pdf->Cell(30 , 5,'3,500',0,1,'R');

// $pdf->Cell(130 , 5,'',0,0);
// $pdf->Cell(25 , 5,'Total Due',0,0);
// $pdf->Cell(4 , 5,'$',0,0);
// $pdf->Cell(30 , 5,'3,500',0,1,'R');

$pdf->Output();

?>