<?php
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include '../function/config.php';
// if(!isset($_POST['print_kp_vawc']))
// {
// 	header ('Location: ../../kp_record.php');
// }

if(isset($_POST['print_bdf']) && !empty($_POST['treasurer']) && !empty($_POST['PunongBarangay']) && !empty($_POST['budgetofficer']) && !empty($_POST['accountant']) && !empty($_POST['MPDC']) && !empty($_POST['year']))
{

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',100,3,40,35);

 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('As of JANUARY 2019', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $pdf->Ln(12);
 $table1->easyCell($_POST['bname'],'align:L;');
 $table1->printRow();
 $table1->easyCell('Municipality: MARAGONDON' ,'align:L;');
 $table1->printRow();
 $table1->endTable();

//====================================================================
 $table= new easyTable($pdf, '{25,45,25,20,20,50,25,25,25,25,25,15,15}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:8;');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('Schedule of Implementation','colspan:2');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('Amount (in thousand pesos)','colspan:4');
 $table->easyCell('Amount of climate change Expenditure (in thousand peso)','colspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:8;');
 $table->easyCell("AIP Reference Code\n(1)");
 $table->easyCell("Program/Project/Activity Description\n(2)");
 $table->easyCell("Implementing Office/Department\n(3)");
 $table->easyCell("Start Date\n(4)");
 $table->easyCell("Completion Date\n(5)");
 $table->easyCell("Expected Output\n(6)");
 $table->easyCell("Funding Source\n(7)");
 $table->easyCell("Personal Services\n(8)");
  $table->easyCell("Maintenance And Other Operating Expenses (MOOE)\n(9)");
 $table->easyCell("Capital Outlay\n(1)");
 $table->easyCell("Total\n8+9+10");
 $table->easyCell("Climate change adaptation");
 $table->easyCell("Climate Change mitigation");
 $table->printRow();


$psql = "SELECT `aip` FROM `bdf_tbl` WHERE `brgy_code`=? GROUP BY `aip`";
		$pstmt = $db->prepare($psql);
		$pstmt->bind_param('s',$_POST['bcode']);
		$pstmt->execute();
		$datax = array();
		$Result = $pstmt->get_result();
		$i = 0;
		$psa = 0;
		$mooea = 0;
		$coa = 0;
		$totala = 0;
			 while ($dataz = $Result->fetch_assoc())
				{
		            $datax[] = $dataz;
				}
		for($i = 0; $i < count($datax); $i++)
			{
			$MYsql = "SELECT * FROM `bdf_tbl` WHERE `year` = ? AND `aip` LIKE ? AND `brgy_code`=? ORDER BY aip";
			$MYstmt = $db->prepare($MYsql);
			$MYstmt->bind_param('iss',$_POST['year'],$datax[$i]['aip'],$_POST['bcode']);
			$MYstmt->execute();
			$Result = $MYstmt->get_result();
	while ($data = $Result->fetch_assoc())
			{

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:8;');
 $table->easyCell($datax[$i]['aip']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implemetationoffice']);
 $table->easyCell($data['sdate']);
 $table->easyCell($data['cdate']);
 $table->easyCell($data['ExpectedOutput']);
 $table->easyCell($data['FundingSource']);
 $table->easyCell(number_format($data['ps'],2));
 $psa += $data['ps'];
 $table->easyCell(number_format($data['mooe'],2));
 $mooea += $data['mooe'];
 $table->easyCell(number_format($data['capital'],2));
 $coa  += $data['capital'];
 $table->easyCell(number_format($data['total'],2));
 $totala += $data['total'];
 $table->easyCell($data['climateadapt']);
 $table->easyCell($data['climatemitigation']);
 $table->printRow();
}}
 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:8;font-style:B ');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell('BDF');
 $table->easyCell('P ' .number_format($psa,2));
  $table->easyCell('P ' .number_format($mooea,2));
 $table->easyCell('P ' .number_format($coa,2));
 $table->easyCell('P ' .number_format($totala,2));
 $table->easyCell('  ');
 $table->easyCell('  ');
 $table->printRow();

  $table->endTable(3);

 //====================================================================

 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:L;valign:M; font-family:Arial; font-size:8');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(2);
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:8; font-style:B');
 $table1->easyCell('');
 $table1->easyCell('');
 $table1->easyCell('');
 $table1->easyCell('');
 $table1->easyCell('');
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:8; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow();

 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:8 ');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

$filename = "barangay-bdf.pdf";
$pdf->Output('I',$filename); 
ob_end_flush(); 
}
?>