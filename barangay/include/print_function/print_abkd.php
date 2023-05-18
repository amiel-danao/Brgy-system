<?php 
ob_start();
	require('config.php');
	// require('../fpdf/fpdf.php');
	include('../fpdf_class/pdf_mc_table_abkd.php');
// 270 in landscape width cell
	// 190 in portrait width cell


	//Long Bond Paper 'mm',array(215.9,279.4)

	if (isset($_POST['print_abkd']))
	{

	$pdf = new PDF_MC_Table('L', 'mm','Legal');
	$pdf->AddPage('L');
	$pdf->SetFont('Arial', '', 12);
	$pdf->SetLineHeight(5);
	if (isset($_POST['print_abkd']) && $_POST['quarter'] == "1")
	{

		$quarters = $_POST['quarter'] . "st Quarter";
	}

	if (isset($_POST['print_abkd']) && $_POST['quarter'] == "2")
	{

		$quarters = $_POST['quarter'] . "nd Quarter";
	}
	if (isset($_POST['print_abkd']) && $_POST['quarter'] == "3")
	{

		$quarters = $_POST['quarter'] . "rd Quarter";
	}
	if (isset($_POST['print_abkd']) && $_POST['quarter'] == "4")
	{

		$quarters = $_POST['quarter'] . "th Quarter";
	}



		$date = $_POST['year'];
		$quarter = $_POST['quarter'];
		$secretary = $_POST['secretary'];
		$pbarangay = $_POST['PunongBarangay'];
		$bcode = $_POST['bcode'];
         
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',78,2,40,35);
		$pdf->Cell(350 , 5,'LGU COMPLIANCE TO AKSYON BARANGAY KONTRA DENGUE (ABKD)',0,1,'C');
		$pdf->Cell(350 , 5,'(DILG MC NO. 2012-16)',0,1,'C');
		$pdf->Cell(350 , 5,'For the Period'. " " . $quarters . " " . 'CY' . " " . $date  ,0,1,'C');
		$pdf->Cell(280 , 10,'',0,1);

		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(25 , 5,'Region:',0,0);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(37 , 5,'IV-A (CALABARZON)',0,1);
		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(25 , 5,'Province:',0,0);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(37 , 5,'CAVITE',0,1);
		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(25 , 5,'Municipality:',0,0);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(37 , 5,'MARAGONDON',0,1);

		$pdf->ln();
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(55 , 25,'Barangay',1,0,"C");
//	$pdf->Cell(70 , 7,'Presence/Absence (b)',1,0,"C");
//	$pdf->Cell(120 , 7,'Action / Strategies Undertaken to Intensify Anti - Dengue Campaign (c)',1,0,"C");
//	$pdf->Cell(40 , 7,'Number of Dengue Cases (d)',1,0,"C");
	$pdf->SetWidths(Array(81,128,35,35));
	$pdf->Row(Array(
		'Presence/Absence (b)',
		'Action / Strategies Undertaken to Intensify Anti - Dengue Campaign (c)',
		 	'Number of Dengue Cases (d)',
		 	'Remarks'
		 	));

	$pdf->Cell(55 , 15,'',1,0,"C");
	$pdf->SetWidths(Array(27,27,27,32,32,32,32,35,35));
	$pdf->Row(Array(
		'Presence / Absence (b)',
		'Action / Strategies (c)',
		 	'Number of Dengue Cases (d)',
		 	'Distribution of IEC Materials (c1)',
		 	'Anti - Dengue Campaign (c2)',
		 	'Clean - Up Drive (c3)',
		 	'OL - Trap System Application (c4)',
		 	'',''
		 	));
	$pdf->SetFont('Arial', '', 10);
	$pdf->SetWidths(Array(55,27,27,27,32,32,32,32,35,35));
	$MYsql = "SELECT * FROM `abkd_tbl` WHERE `quarter`= ? AND `year` = ? AND `brgy_code`=?";
	$MYstmt = $db->prepare($MYsql);
	$MYstmt->bind_param('iis',$quarter,$date,$bcode);
	$MYstmt->execute();
	$Result = $MYstmt->get_result();
	while ($data = $Result->fetch_assoc())
{

   $id = $data['id'];
   $quarter  = $data['quarter'];
   $ordinance = $data['ordinance(b1)'];
   $fund = $data['fund_allocation(b2)'];
   $dcenter = $data['distribution_center(b3)'];
   $dmaterials = $data['distribution_iec_material_(c1)'];
   $antidengue = $data['anti_dengue_campaign(c2)'];
   $clean = $data['clean_up_drive(c3)'];
   $trapsystem = $data['ol_trap_system_applicaton(c4)'];
   $cases = $data['number_dengue_case'];
   $remarks = $data['remarks'];

	$pdf->Row(Array(
		$_POST['bname'],
		 $ordinance,
		 	 $fund,
		 	 $dcenter,
		 	 $dmaterials,
		 	 $antidengue,
		 	 $clean,
		 	 $trapsystem,
		 	 $cases,
		 	  $remarks
		 	));
}
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(167 , 8,'',0,0);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(167 , 8,'',0,1);
		$pdf->Cell(167 , 5,'Prepared By:',0,0);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(167 , 5,'Prepared and Submitted By:',0,1);
		$pdf->Cell(167 , 5,'',0,0);
		$pdf->Cell(167 , 5,'',0,1);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10 , 5,'',0,0);
		$pdf->Cell(70 , 5,$secretary,0,0,'C');
		$pdf->Cell(140 , 5,'',0,0,'C');
		$pdf->Cell(70 , 5,$pbarangay,0,1,'C');
		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(10 , 5,'',0,0);
		$pdf->Cell(70 , 5,'Secretary',0,0,'C');
		$pdf->Cell(140 , 5,'',0,0,'C');
		$pdf->Cell(70 , 5,'Punong Barangay',0,0,'C');

$filename = "barangay-abkd.pdf";
$pdf->Output('I', $filename);
ob_end_flush(); 
}


// 	if (isset($_POST['print_abkd']) && $_POST['quarter'] == "2")
// 	{
// 		$date = $_POST['year'];
// 		$quarter = $_POST['quarter'];

// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(280 , 5,'LGU COMPLIANCE TO AKSYON BARANGAY KONTRA DENGUE (ABKD)',0,1,'C');
// 		$pdf->Cell(280 , 5,'(DILG MC NO. 2012-16)',0,1,'C');
// 		$pdf->Cell(280 , 5,'For the Period'. " " . $quarter .'nd Quarter'. " " . 'CY' . " " . $date  ,0,1,'C');
// 		$pdf->Cell(280 , 10,'',0,1);

// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Region:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'IV-A (CALABARZON)',1,1);
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Province:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'CAVITE',1,1);
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Municipality:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'MARAGONDON',1,1);

// 		$pdf->ln();
// 		$pdf->SetFont('Arial', 'B', 8);
// 		$pdf->Cell(30 , 25,'BARANGAY',1,0,"C");

// 	$pdf->SetWidths(Array(65,95,35,30));
// 	$pdf->Row(Array(
// 		'Presence/Absence (b)',
// 		'Action / Strategies Undertaken to Intensify Anti - Dengue Campaign (c)',
// 		 	'Number of Dengue Cases (d)',
// 		 	'Remarks'
// 		 	));

// 	$pdf->Cell(30 , 15,'',1,0,"C");
// 	$pdf->SetWidths(Array(21,22,22,24,24,23,24,35,30));
// 	$pdf->Row(Array(
// 		'Presence / Absence (b)',
// 		'Action / Strategies (c)',
// 		 	'Number of Dengue Cases (d)',
// 		 	'Distribution of IEC Materials (c1)',
// 		 	'Anti - Dengue Campaign (c2)',
// 		 	'Clean - Up Drive (c3)',
// 		 	'OL - Trap System Application (c4)',
// 		 	'',''
// 		 	));
// 	$pdf->SetFont('Arial', '', 8);
// 	$pdf->SetWidths(Array(30,21,22,22,24,24,23,24,35,30));
// 	$MYsql = "SELECT * FROM `abkd_bucal2_tbl` WHERE `quarter`= ? AND `year` = ?";
// 	$MYstmt = $db->prepare($MYsql);
// 	$MYstmt->bind_param('ii',$quarter,$date);
// 	$MYstmt->execute();
// 	$Result = $MYstmt->get_result();
// 	while ($data = $Result->fetch_assoc())
// {

//    $id = $data['id'];
//    $quarter  = $data['quarter'];
//    $ordinance = $data['ordinance(b1)'];
//    $fund = $data['fund_allocation(b2)'];
//    $dcenter = $data['distribution_center(b3)'];
//    $dmaterials = $data['distribution_iec_material_(c1)'];
//    $antidengue = $data['anti_dengue_campaign(c2)'];
//    $clean = $data['clean_up_drive(c3)'];
//    $trapsystem = $data['ol_trap_system_applicaton(c4)'];
//    $cases = $data['number_dengue_case'];
//    $remarks = $data['remarks'];

// 	$pdf->Row(Array(
// 		'Bucal 2',
// 		 $ordinance,
// 		 	 $fund,
// 		 	 $dcenter,
// 		 	 $dmaterials,
// 		 	 $antidengue,
// 		 	 $clean,
// 		 	 $trapsystem,
// 		 	 $cases,
// 		 	  $remarks
// 		 	));
// }
// $pdf->SetFont('Arial', '', 10);
//         $pdf->Cell(167 , 8,'',0,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(167 , 8,'',0,1);
// 		$pdf->Cell(167 , 5,'Prepared By:',0,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(167 , 5,'Prepared and Submitted By:',0,1);
// 		$pdf->Cell(167 , 5,'',0,0);
// 		$pdf->Cell(167 , 5,'',0,1);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(10 , 5,'',0,0);
// 		$pdf->Cell(70 , 5,'Secretary name',0,0,'C');
// 		$pdf->Cell(140 , 5,'',0,0,'C');
// 		$pdf->Cell(70 , 5,'Punong Barangay Name',0,1,'C');
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(10 , 5,'',0,0);
// 		$pdf->Cell(70 , 5,'Secretary',0,0,'C');
// 		$pdf->Cell(140 , 5,'',0,0,'C');
// 		$pdf->Cell(70 , 5,'Punong Barangay',0,0,'C');
// $pdf->Output();
// }

// if (isset($_POST['print_abkd']) && $_POST['quarter'] == "3")
// 	{
// 		$date = $_POST['year'];
// 		$quarter = $_POST['quarter'];

// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(280 , 5,'LGU COMPLIANCE TO AKSYON BARANGAY KONTRA DENGUE (ABKD)',0,1,'C');
// 		$pdf->Cell(280 , 5,'(DILG MC NO. 2012-16)',0,1,'C');
// 		$pdf->Cell(280 , 5,'For the Period'. " " . $quarter .'rd Quarter'. " " . 'CY' . " " . $date  ,0,1,'C');
// 		$pdf->Cell(280 , 10,'',0,1);

// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Region:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'IV-A (CALABARZON)',1,1);
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Province:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'CAVITE',1,1);
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Municipality:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'MARAGONDON',1,1);

// 		$pdf->ln();
// 		$pdf->SetFont('Arial', 'B', 8);
// 		$pdf->Cell(30 , 25,'BARANGAY',1,0,"C");

// 	$pdf->SetWidths(Array(65,95,35,30));
// 	$pdf->Row(Array(
// 		'Presence/Absence (b)',
// 		'Action / Strategies Undertaken to Intensify Anti - Dengue Campaign (c)',
// 		 	'Number of Dengue Cases (d)',
// 		 	'Remarks'
// 		 	));

// 	$pdf->Cell(30 , 15,'',1,0,"C");
// 	$pdf->SetWidths(Array(21,22,22,24,24,23,24,35,30));
// 	$pdf->Row(Array(
// 		'Presence / Absence (b)',
// 		'Action / Strategies (c)',
// 		 	'Number of Dengue Cases (d)',
// 		 	'Distribution of IEC Materials (c1)',
// 		 	'Anti - Dengue Campaign (c2)',
// 		 	'Clean - Up Drive (c3)',
// 		 	'OL - Trap System Application (c4)',
// 		 	'',''
// 		 	));
// 	$pdf->SetFont('Arial', '', 8);
// 	$pdf->SetWidths(Array(30,21,22,22,24,24,23,24,35,30));
// 	$MYsql = "SELECT * FROM `abkd_bucal2_tbl` WHERE `quarter`= ? AND `year` = ?";
// 	$MYstmt = $db->prepare($MYsql);
// 	$MYstmt->bind_param('ii',$quarter,$date);
// 	$MYstmt->execute();
// 	$Result = $MYstmt->get_result();
// 	while ($data = $Result->fetch_assoc())
// {

//    $id = $data['id'];
//    $quarter  = $data['quarter'];
//    $ordinance = $data['ordinance(b1)'];
//    $fund = $data['fund_allocation(b2)'];
//    $dcenter = $data['distribution_center(b3)'];
//    $dmaterials = $data['distribution_iec_material_(c1)'];
//    $antidengue = $data['anti_dengue_campaign(c2)'];
//    $clean = $data['clean_up_drive(c3)'];
//    $trapsystem = $data['ol_trap_system_applicaton(c4)'];
//    $cases = $data['number_dengue_case'];
//    $remarks = $data['remarks'];

// 	$pdf->Row(Array(
// 		'Bucal 2',
// 		 $ordinance,
// 		 	 $fund,
// 		 	 $dcenter,
// 		 	 $dmaterials,
// 		 	 $antidengue,
// 		 	 $clean,
// 		 	 $trapsystem,
// 		 	 $cases,
// 		 	  $remarks
// 		 	));
// }
// $pdf->SetFont('Arial', '', 10);
//         $pdf->Cell(167 , 8,'',0,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(167 , 8,'',0,1);
// 		$pdf->Cell(167 , 5,'Prepared By:',0,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(167 , 5,'Prepared and Submitted By:',0,1);
// 		$pdf->Cell(167 , 5,'',0,0);
// 		$pdf->Cell(167 , 5,'',0,1);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(10 , 5,'',0,0);
// 		$pdf->Cell(70 , 5,'Secretary name',0,0,'C');
// 		$pdf->Cell(140 , 5,'',0,0,'C');
// 		$pdf->Cell(70 , 5,'Punong Barangay Name',0,1,'C');
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(10 , 5,'',0,0);
// 		$pdf->Cell(70 , 5,'Secretary',0,0,'C');
// 		$pdf->Cell(140 , 5,'',0,0,'C');
// 		$pdf->Cell(70 , 5,'Punong Barangay',0,0,'C');
// $pdf->Output();
// }


// if (isset($_POST['print_abkd']) && $_POST['quarter'] == "4")
// 	{
// 		$date = $_POST['year'];
// 		$quarter = $_POST['quarter'];

// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(280 , 5,'LGU COMPLIANCE TO AKSYON BARANGAY KONTRA DENGUE (ABKD)',0,1,'C');
// 		$pdf->Cell(280 , 5,'(DILG MC NO. 2012-16)',0,1,'C');
// 		$pdf->Cell(280 , 5,'For the Period'. " " . $quarter .'th Quarter'. " " . 'CY' . " " . $date  ,0,1,'C');
// 		$pdf->Cell(280 , 10,'',0,1);

// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Region:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'IV-A (CALABARZON)',1,1);
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Province:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'CAVITE',1,1);
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(25 , 5,'Municipality:',1,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(37 , 5,'MARAGONDON',1,1);

// 		$pdf->ln();
// 		$pdf->SetFont('Arial', 'B', 8);
// 		$pdf->Cell(30 , 25,'BARANGAY',1,0,"C");

// 	$pdf->SetWidths(Array(65,95,35,30));
// 	$pdf->Row(Array(
// 		'Presence/Absence (b)',
// 		'Action / Strategies Undertaken to Intensify Anti - Dengue Campaign (c)',
// 		 	'Number of Dengue Cases (d)',
// 		 	'Remarks'
// 		 	));

// 	$pdf->Cell(30 , 15,'',1,0,"C");
// 	$pdf->SetWidths(Array(21,22,22,24,24,23,24,35,30));
// 	$pdf->Row(Array(
// 		'Presence / Absence (b)',
// 		'Action / Strategies (c)',
// 		 	'Number of Dengue Cases (d)',
// 		 	'Distribution of IEC Materials (c1)',
// 		 	'Anti - Dengue Campaign (c2)',
// 		 	'Clean - Up Drive (c3)',
// 		 	'OL - Trap System Application (c4)',
// 		 	'',''
// 		 	));
// 	$pdf->SetFont('Arial', '', 8);
// 	$pdf->SetWidths(Array(30,21,22,22,24,24,23,24,35,30));
// 	$MYsql = "SELECT * FROM `abkd_bucal2_tbl` WHERE `quarter`= ? AND `year` = ?";
// 	$MYstmt = $db->prepare($MYsql);
// 	$MYstmt->bind_param('ii',$quarter,$date);
// 	$MYstmt->execute();
// 	$Result = $MYstmt->get_result();
// 	while ($data = $Result->fetch_assoc())
// {

//    $id = $data['id'];
//    $quarter  = $data['quarter'];
//    $ordinance = $data['ordinance(b1)'];
//    $fund = $data['fund_allocation(b2)'];
//    $dcenter = $data['distribution_center(b3)'];
//    $dmaterials = $data['distribution_iec_material_(c1)'];
//    $antidengue = $data['anti_dengue_campaign(c2)'];
//    $clean = $data['clean_up_drive(c3)'];
//    $trapsystem = $data['ol_trap_system_applicaton(c4)'];
//    $cases = $data['number_dengue_case'];
//    $remarks = $data['remarks'];

// 	$pdf->Row(Array(
// 		'Bucal 2',
// 		 $ordinance,
// 		 	 $fund,
// 		 	 $dcenter,
// 		 	 $dmaterials,
// 		 	 $antidengue,
// 		 	 $clean,
// 		 	 $trapsystem,
// 		 	 $cases,
// 		 	  $remarks
// 		 	));
// }
// $pdf->SetFont('Arial', '', 10);
//         $pdf->Cell(167 , 8,'',0,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(167 , 8,'',0,1);
// 		$pdf->Cell(167 , 5,'Prepared By:',0,0);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(167 , 5,'Prepared and Submitted By:',0,1);
// 		$pdf->Cell(167 , 5,'',0,0);
// 		$pdf->Cell(167 , 5,'',0,1);
// 		$pdf->SetFont('Arial', 'B', 10);
// 		$pdf->Cell(10 , 5,'',0,0);
// 		$pdf->Cell(70 , 5,'Secretary name',0,0,'C');
// 		$pdf->Cell(140 , 5,'',0,0,'C');
// 		$pdf->Cell(70 , 5,'Punong Barangay Name',0,1,'C');
// 		$pdf->SetFont('Arial', '', 10);
// 		$pdf->Cell(10 , 5,'',0,0);
// 		$pdf->Cell(70 , 5,'Secretary',0,0,'C');
// 		$pdf->Cell(140 , 5,'',0,0,'C');
// 		$pdf->Cell(70 , 5,'Punong Barangay',0,0,'C');
// $pdf->Output();
// }
?>