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

if (isset($_POST['print_kp_vawc']))
{

	$key1 = $_POST['month'];
	$key2 = $_POST['year'];
	$key3 = $_POST['MSWDO'];
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',38,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CONSILATED COMPLIANCE PAMBARANGAY COMPLIANCE REPORT ON THE ACTION TAKEN BY LUPON TAGAPAMAYA', 'font-size:10; font-style:B; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:10; font-style:B; font-family:Arial');
 $table1->easyCell('Monthly Report' . " " . $key2, 'align:C; paddingY:0');
 $table1->printRow();
 $table1->rowStyle('font-size:10; font-style:B; font-family:Arial');
 $table1->easyCell('As of' . " " . strtoupper($key1)  . ", ". $key2  . "" , 'align:C; paddingY:0');
 $table1->printRow();
 $pdf->Ln(15);
 $table1->rowStyle('font-size:9;  font-family:Arial');
 $table1->easyCell('Province Cavite', 'align:L;paddingY:0');
 $table1->printRow();
 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('Municipalit Maragondon', 'align:L;');
 $table1->printRow();
 $table1->endTable();

//====================================================================
 $table= new easyTable($pdf, '{20,20,20,20,20,20,20,20,20,22,22,24,22,22,23,20,25}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCC}; valign:M; font-family:Arial; font-style:B; font-size:8;');
 $table->easyCell('Barangay','rowspan:3');
 $table->easyCell('Action Taken','colspan:15');
 $table->easyCell('Price Per Unit','rowspan:3; align:C');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-style:B; font-size:8;');
 $table->easyCell('Nature of disputes (2a)','colspan:3');
 $table->easyCell('Total (2a.4)','rowspan:2');
 $table->easyCell('Settled Case (2b)','colspan:3');
 $table->easyCell('Total (2b.4)','rowspan:2; align:C');
 $table->easyCell('Settled Case (2c)','colspan:6; align:C');
 $table->easyCell('Total (2c.4)','rowspan:2; align:C');
 $table->printRow();
 $table->rowStyle('align:{CCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:8;');
 $table->easyCell('Criminal (2a.1)');
 $table->easyCell('Civile (2a.2)');
 $table->easyCell('Others (2a.3)');

 $table->easyCell('Mediation (2b.1)');
 $table->easyCell('Concillation (2b.2)');
 $table->easyCell('Arbtrition (2b.3)');

 $table->easyCell('Reputed Cases (2c.1)');
 $table->easyCell('Withdraw Cases (2c.2)');
 $table->easyCell('Pending Cases (2c.3)');
 $table->easyCell('Dismissed Cases (2c.4)');
 $table->easyCell('Certified Cases (2c.5)');
 $table->easyCell('Referred to Concerned Agencies Cases (2c.6)');
 $table->printRow();

  $MYsql = "SELECT * FROM `kp_tbl_c1` WHERE `month` LIKE ? AND `year` = ? AND `brgy_code`=? ";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('sis',$key1,$key2,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    while ($data = $Result->fetch_assoc())
  {

 $table->rowStyle('valign:M; font-family:Arial; font-size:8;');
 $table->easyCell($_POST['bname']);
 $table->easyCell($data['criminal(2a.1)']);
 $table->easyCell($data['civil(2a.2)']);
 $table->easyCell($data['others(2a.3)']);
 $table->easyCell($data['totals(2a.4)']);
 $table->easyCell($data['mediation_(2b.1)']);
 $table->easyCell($data['concillation_(2b.2)']);
 $table->easyCell($data['arbitrition_(2b.3)']);
 $table->easyCell($data['total_(2b.4)']);
 $table->easyCell($data['repudiated_cases_(2c.1)']);
 $table->easyCell($data['withdrawn_cases_(2c.2)']);
 $table->easyCell($data['pending_cases_(2c.3)']);
 $table->easyCell($data['dismissed_cases_(2c.4)']);
 $table->easyCell($data['certified_cases_(2c.5)']);
 $table->easyCell($data['reffered_agencies_(2c.6)']);
 $table->easyCell($data['total_(2c.7)']);
 $table->easyCell($data['estimated_savings']);
 $table->printRow();
}
$table->rowStyle('valign:M; font-family:Arial; font-size:8;');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
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
 $table->endTable(3);

 //====================================================================

$table1=new easyTable($pdf, 1);
$table1->easyCell('CONSILATED COMPLIANCE MONITORING REPORT RE:R.A 9262 (AVAWC)', 'font-size:9; font-style:B; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-style:B; font-family:Arial');
 $table1->easyCell('Period covered: Month of' . " " . $key1 . " " . 'CY' . " " . $key2, 'align:C;');
 $table1->printRow();
 $table1->endTable(3);

 $table= new easyTable($pdf, '{25,20,20,30,20,20,20,20,22,22,24,30,23,22,26,25}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-style:B; font-size:8;');
 $table->easyCell('Barangay (1)','rowspan:2' );
 $table->easyCell('NO. OF VAWC CASES REPORTED (2)','colspan:4');
 $table->easyCell('TOTAL (3)','rowspan:2');
 $table->easyCell('NO. OF VAWC CASES ACTED UPON (4)','colspan:5');
 $table->easyCell('TOTAL NO. OF VAWC CASES ACTED UPON (5)','rowspan:2');
 $table->easyCell('IMPLEMENTED (6)','colspan:2');
 $table->easyCell('FUNDS ALLOCATED (7)','rowspan:2');
 $table->easyCell('REMARKS (8)','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:8;');
 $table->easyCell('Physical Abuse');
 $table->easyCell('Sexual Abuse');
 $table->easyCell('Physcological Abuse');
 $table->easyCell('Economic Abuse');
 
 $table->easyCell('Referred to DSWDO');
 $table->easyCell('Referred to PNP');
 $table->easyCell('Referred to COURT');
 $table->easyCell('Issued BPOs');
 $table->easyCell('Referred to Medical');

 $table->easyCell('Training');
 $table->easyCell('IEC');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCCCCCCCCCC};font-style:B; valign:M; font-family:Arial;font-size:8');
 
 $table->easyCell('');
 $table->easyCell('(a)');
 $table->easyCell('(b)');
 $table->easyCell('(c)');
 
 $table->easyCell('(d)');
 $table->easyCell('');
 $table->easyCell('(a)');
 $table->easyCell('(b)');
 $table->easyCell('(c)');

 $table->easyCell('(d)');
 $table->easyCell('(e)');
 $table->easyCell('');
 $table->easyCell('(a)');
 $table->easyCell('(b)');

 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();

  $MYzql = "SELECT * FROM `kp_tbl_c2` WHERE `month` LIKE ? AND `year` = ? AND `brgy_code`=? ";
    $MYstmt = $db->prepare($MYzql);
    $MYstmt->bind_param('sis',$key1,$key2,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
		while ($datacollect = $Result->fetch_assoc())
            {
		$table->rowStyle('align:{CCCCCCCCCCCCCCCC};valign:M; font-family:Arial; font-size:8;');
		$table->easyCell($_POST['bname']);
		$table->easyCell($datacollect['physical_abuse']);
		$table->easyCell($datacollect['sexual_abuse']);
		$table->easyCell($datacollect['physcological_abuse']);
		$table->easyCell($datacollect['economic_abuse']);
		$table->easyCell($datacollect['total']);

		$table->easyCell($datacollect['refferred_dswdo']);
		$table->easyCell($datacollect['refferred_pnp']);
		$table->easyCell($datacollect['refferred_court']);
		$table->easyCell($datacollect['issued_bpo']);
		$table->easyCell($datacollect['refferred_medical']);
		$table->easyCell($datacollect['physical_abuse']);
		$table->easyCell($datacollect['total_vawc_case']);

		$table->easyCell($datacollect['training']);
		$table->easyCell($datacollect['iec']);
		$table->easyCell($datacollect['funds_allocated']);
		$table->easyCell($datacollect['funds_remarks']);
		$table->printRow();
	}

	$table->rowStyle('valign:M; font-family:Arial; font-size:8;');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');

		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');

		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->easyCell('');
		$table->printRow('');
		$table->endTable(10);



 $name = "LEOVINA A. HERNANDEZ";
 $table1=new easyTable($pdf, '{50,250}','align:L');
 $table1->rowStyle('font-size:8;');
 // $table1->easyCell("Noted By\n\n" . $key3 . "\n" ."MSWDO" . "\n\n" ."Date:_________________",'align:C');
 // $table1->easyCell("Prepared and Sublitted by:\n\n" . $_POST['captain'] . "\n" . "PUNONG BARANGAY",'align:C;');

 $table1->easyCell("Noted By",'align:L');
 $table1->easyCell("Prepared and Sublitted by:",'align:C;');
 $table1->printRow(); 

 $table1->easyCell($key3,'align:C');
 $table1->easyCell($_POST['captain'],'align:C;');
 $table1->printRow(); 

 $table1->easyCell("MSWDO",'align:C');
 $table1->easyCell("PUNONG BARANGAY",'align:C;');
 $table1->printRow(); 

 $filename = "barangay-kp.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
}
?>