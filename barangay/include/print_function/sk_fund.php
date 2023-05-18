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
 if(isset($_POST['print_sk']) && !empty($_POST['PunongBarangay']) && !empty($_POST['skchair']) && 
 !empty($_POST['k1']) && !empty($_POST['k2']) && !empty($_POST['k3']) && !empty($_POST['k4']) 
 && !empty($_POST['k5']) && !empty($_POST['k6']) && !empty($_POST['k7']) && !empty($_POST['year']))
 {
 	$year = $_POST['year'];
 	$MYsql = "SELECT SUM(amount), `total_budget` FROM `sk_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $MYstmt->bind_result($total,$budgets);
    $MYstmt->fetch();
    $MYstmt->close();
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 
 $pdf->SetFont('helvetica','',10);
$pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',90,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell("Republic of the Philippines\nProvince of Cavite\nMunicipality of Maragondon\n".$_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('2019 ANNUAL BARANGAY YOUTH INVESTMENT PLAN', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
$pdf->Ln(1);
 $table1->easyCell('TOTAL BARANGAY BUDGET: ' . 'Php' . ' ' . number_format($budgets,2) , 'font-size:10; font-family:Arial; paddingY:0; align:L; font-style:B');
 $table1->printRow();

 $table1->easyCell('SK FUND BEGINNING BALANCE:', 'font-size:10; font-family:Arial; paddingY:0; align:L; font-style:B');
 $table1->printRow();

 $table1->easyCell('10% SK FUND: Php '. number_format($total,2),'align:C; paddingY:0; font-style:B;  align:L');
 $table1->printRow();
 $table1->endTable();

//====================================================================
 $table= new easyTable($pdf, '{75,75,75,30,25,55}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('GAPS/ISSUES','rowspan:2');
 $table->easyCell('PROGRAMS/PROJECTS/ACTIVITIES','rowspan:2');
 $table->easyCell('RESULT TARGET/BENEFICIARIES','rowspan:2');
 $table->easyCell('TOTAL PROJECT COST','colspan:2');
 $table->easyCell('PERIOD OF IMPLEMENTATION','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AMOUNT');
 $table->easyCell('SOURCE');
 $table->printRow();
 	$years = $_POST['year'];
	$sql = "SELECT * FROM `sk_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('is',$years,$_POST['bcode']);
    $stmt->execute();
    $Result = $stmt->get_result();
while ($data = $Result->fetch_assoc())
    {
 $table->rowStyle(' valign:M; font-family:Arial; font-size:10;');
 $table->easyCell($data['gap_issues']);
 $table->easyCell($data['p_a_d']);
 $table->easyCell($data['result_target']);
 $table->easyCell(number_format($data['amount'],2),'align:C');
 $table->easyCell($data['source'],'align:C');
 $table->easyCell($data['implementantion'],'align:C');
 $table->printRow();
	}
 $table->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('TOTAL');
 $table->easyCell('Php' . ' ' . number_format($total,2));
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow('');
 $table->endTable(2);
 //====================================================================
 $pdf->Ln(2);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:L');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(3);
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['k1']);
 $table1->easyCell($_POST['k2']);
 $table1->easyCell($_POST['k3']);
 $table1->easyCell($_POST['k4']);
 $table1->easyCell($_POST['k5']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("SK Kagawad");
 $table1->easyCell("SK Kagawad");
 $table1->easyCell("SK Kagawad");
 $table1->easyCell("SK Kagawad");
 $table1->easyCell("SK Kagawad");
 $table1->printRow();
 $pdf->Ln(5);
 $table1->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell("");
 $table1->easyCell($_POST['k6'],'width:100; align:C');
 $table1->easyCell("");
 $table1->easyCell($_POST['k7'],'width:100; align:C');
 $table1->easyCell("");
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("");
 $table1->easyCell("SK Kagawad",'width:100; align:C');
 $table1->easyCell("");
 $table1->easyCell("SK Kagawad",'width:100; align:C');
 $table1->easyCell("");
 $table1->printRow();
 $pdf->Ln(3);
 $table1->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell("Recommending Approval:");
 $table1->easyCell("");
 $table1->easyCell("Reviewed and Approved by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(2);
 $table1->rowStyle('align:{CCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell("");
 $table1->easyCell($_POST['skchair']);
 $table1->easyCell("");
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell("");
 $table1->printRow();
 $table1->rowStyle('align:{CCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("");
 $table1->easyCell("SK Chairman");
 $table1->easyCell("");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("");
 $table1->printRow();

 $filename = "barangay-sk.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
}

?>