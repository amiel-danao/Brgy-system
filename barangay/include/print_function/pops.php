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

if(isset($_POST['print_pops']) && !empty($_POST['treasurer']) && !empty($_POST['PunongBarangay']) && !empty($_POST['budgetofficer']) && !empty($_POST['accountant']) && !empty($_POST['MPDC']) && !empty($_POST['year']))
{

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',85,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('ANNUAL INVESTMENT PROGRAM', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('2019 PEACE AND ORDER AND PUBLIC SAFETY (POPS) PLAN', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
 $table1->endTable(17);

//====================================================================
 $table= new easyTable($pdf, '{50,50,30,25,40,35,25,25,25,35}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('PPSAs','rowspan:3');
 $table->easyCell('Implementing Office','rowspan:3');
 $table->easyCell('Schedule of Implementation','colspan:2; rowspan:2');
 $table->easyCell('Expected Output','rowspan:3');
 $table->easyCell('Possible Funding Source','rowspan:2');
 $table->easyCell('Funding Requirements','colspan:4');
 $table->printRow();


 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('PS');
 $table->easyCell('MOOE');
 $table->easyCell('CO');
 $table->easyCell('TOTAL');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('Started');
 $table->easyCell('Completed');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();


 $table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('PEACE AND ORDER','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();

 		$MYsqlg = "SELECT `title` FROM `pops_a_tbl` WHERE `brgy_code`=? GROUP BY `title`";
		$MYstmtg = $db->prepare($MYsqlg);
		$MYstmtg->bind_param('s',$_POST['bcode']);
		$MYstmtg->execute();
		$datax = array();
		$datacollection = array();
		$Result = $MYstmtg->get_result();
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
		$MYsql = "SELECT * FROM `pops_a_tbl` WHERE `year` = ? AND `title` LIKE ? AND `brgy_code`=?";
		$MYstmt = $db->prepare($MYsql);
		$MYstmt->bind_param('iss',$_POST['year'],$datax[$i]['title'],$_POST['bcode']);
		$MYstmt->execute();
		$Result = $MYstmt->get_result();

	$table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-style:B; font-size:10;');
	$table->easyCell($datax[$i]['title']);
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->easyCell('');
	$table->printRow();

			while ($data = $Result->fetch_assoc())
			{
	 	$table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
		$table->easyCell($data['ppsa']);
	 	$table->easyCell($data['ImplementingOffice']);
	 	$table->easyCell($data['Started']);
	 	$table->easyCell($data['Completed']);
	 	$table->easyCell($data['ExpectedOutput']);
	 	$table->easyCell($data['FundingSource']);
	 	$table->easyCell(number_format($data['ps'],2));
	 	$psa += $data['ps'];
	 	$table->easyCell(number_format($data['mooe'],2));
	 	$mooea += $data['mooe'];
	 	$table->easyCell(number_format($data['co'],2));
	 	$coa += $data['co'];
	 	$table->easyCell(number_format($data['total'],2));
	 	$totala += $data['total'];
		$table->printRow();
		}}
 $table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('TOTAL');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell(number_format($psa,2));
 $table->easyCell(number_format($mooea,2));
 $table->easyCell(number_format($coa,2));
 $table->easyCell(number_format($totala,2));
 $table->printRow();

$table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('PUBLIC SAFETY','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();

		$MYsqlgg = "SELECT `title` FROM `pops_b_tbl` WHERE `brgy_code`=? GROUP BY `title`";
		$MYstmtgg = $db->prepare($MYsqlgg);
		$MYstmtgg->bind_param('s',$_POST['bcode']);
		$MYstmtgg->execute();
		$datas = array();
		$datacollection = array();
		$Results = $MYstmtgg->get_result();
		$a = 0;
		$psb = 0;
		$mooeb = 0;
		$cob = 0;
		$totalb = 0;
			 while ($datazz = $Results->fetch_assoc())
				{
		            $datas[] = $datazz;
				}
		for($a = 0; $a < count($datas); $a++)
			{
		$MYsqls = "SELECT * FROM `pops_b_tbl` WHERE `year` = ? AND `title` LIKE ? AND `brgy_code`=?";
			$MYstmts = $db->prepare($MYsqls);
			$MYstmts->bind_param('iss',$_POST['year'],$datas[$a]['title'],$_POST['bcode']);
			$MYstmts->execute();
			$Resultz = $MYstmts->get_result();

 $table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell($datas[$a]['title']);
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();

 	while ($data = $Resultz->fetch_assoc())
			{
	 	$table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
		$table->easyCell($data['ppsa']);
	 	$table->easyCell($data['ImplementingOffice']);
	 	$table->easyCell($data['Started']);
	 	$table->easyCell($data['Completed']);
	 	$table->easyCell($data['ExpectedOutput']);
	 	$table->easyCell($data['FundingSource']);
	 	$table->easyCell(number_format($data['ps'],2));
	 	$psb += $data['ps'];
	 	$table->easyCell(number_format($data['mooe'],2));
	 	$mooeb += $data['mooe'];
	 	$table->easyCell(number_format($data['co'],2));
	 	$cob += $data['co'];
	 	$table->easyCell(number_format($data['total'],2));
	 	$totalb += $data['total'];
		$table->printRow();
		}
	}

 $table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('TOTAL');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell(number_format($psb,2));
 $table->easyCell(number_format($mooeb,2));
 $table->easyCell(number_format($cob,2));
 $table->easyCell(number_format($totalb,2));
 $table->printRow();
 
 $gtotal1 = 0 ;
 $gtotal2 = 0 ;
 $gtotal3 = 0 ;
 $gtotal4 = 0 ;

 $gtotal1 = $psa + $psb ;
 $gtotal2 = $mooea + $mooeb ;
 $gtotal3 = $coa + $cob ;
 $gtotal4  = $totala + $totalb ;
  $table->rowStyle('align:{LCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('GRAND TOTAL');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell(number_format($gtotal1,2));
 $table->easyCell(number_format($gtotal2,2));
 $table->easyCell(number_format($gtotal3,2));
 $table->easyCell(number_format($gtotal4,2));
 $table->printRow();
 $table->endTable(5);

 //====================================================================

 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:L');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(5);
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-pops.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush(); 
}

?>