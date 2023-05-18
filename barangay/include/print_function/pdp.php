<?php
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include '../function/config.php';



if(isset($_POST['print_pdp']) && !empty($_POST['secretary']) && !empty($_POST['treasurer'])
&& !empty($_POST['PunongBarangay']) && !empty($_POST['planningofficer']) && !empty($_POST['year']))
{
$year = $_POST['year'];
 $pdf=new exFPDF('P', 'mm','Legal');
 $pdf->AddPage('P'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',45,5,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell("Republic of the Philippines\nProvince of Cavite\nMunicipality of Maragondon\n\nPriority Development Project\n(Funded by External Sources)", 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
$pdf->Ln(10);
$pdf->Ln(5);
 $table1->easyCell("Budget Year" . "        ". ":" . " "  . $year, 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table1->printRow();
$pdf->Ln(7);
 $table1->easyCell("Municipality" . " " . " : " . " " . "Maragondon", 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table1->printRow();
$pdf->Ln(7);
 $table1->easyCell("Province" . " " . " : " . " " . "Cavite", 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table1->printRow();
$pdf->Ln(7);
 $table1->easyCell("Barangay" . " " . " : " . " " . $_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table1->printRow();

 $table1->endTable(10);

//====================================================================
 $table= new easyTable($pdf, '{55,55,50,50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code (1)');
 $table->easyCell('Program / Project / Activity Description (2)');
 $table->easyCell('Funding Source');
 $table->easyCell('Estimated Amount');
 $table->printRow();

$totals = 0;
$sql = "SELECT SUM(amount) FROM `pdp_tbl` WHERE `year` = ? AND `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$year,$_POST['bcode']);
        $stmt->execute();
        $stmt->bind_result($totals);
        $stmt->fetch();
        $stmt->close();

	$MYsql = "SELECT * FROM `pdp_tbl` WHERE `year` = ? AND `brgy_code`=?";
	$MYstmt = $db->prepare($MYsql);
	$MYstmt->bind_param('is',$year,$_POST['bcode']);
	$MYstmt->execute();
	$Result = $MYstmt->get_result();
		while ($data = $Result->fetch_assoc())
			{
			 $table->rowStyle('align:{CLCL}; valign:M; font-family:Arial; font-size:10; border:LR');
			 $table->easyCell($data['aip_reference']);
			 $table->easyCell($data['program_project']);
			 $table->easyCell($data['funding']);
			 $table->easyCell('P ' . number_format($data['amount'],2));
			 $table->printRow();
			}

 $table->easyCell('TOTAL');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('P ' . number_format($totals,2),'font-style:B');
 $table->printRow();

  $table->endTable(3);

 //====================================================================

 $table1=new easyTable($pdf, '{65,65,65}', ' width:100;');
 $table1->easyCell("Prepared by:",'align:L');
 $table1->easyCell("");
 $table1->easyCell("Attested by:",'align:L');
 $table1->printRow(); 
 $pdf->Ln(10);

 $table1->easyCell($_POST['secretary'],'align:C;font-style:B;');
 $table1->easyCell($_POST['treasurer'],'align:C;font-style:B;');
 $table1->easyCell($_POST['PunongBarangay'],'align:C;font-style:B;');
 $table1->printRow(); 

 $table1->easyCell("Barangay Secretary",'align:C');
 $table1->easyCell("Barangay Treasurer",'align:C');
 $table1->easyCell("Punong Barangay",'align:C');
 $table1->printRow(); 

$pdf->Ln(7);
 $table1->easyCell("Noted By: ");
 $table1->easyCell(" ");
 $table1->easyCell(" ");
 $table1->printRow(); 

 $table1->endTable(5);

 $table2 = new easyTable($pdf, 1, ' width:100; align:C');
 
 $table2->easyCell($_POST['planningofficer'],'align:C;font-style:B;');
 $table2->printRow(); 
 $table2->easyCell("Municipality Planning & Development Coordinator",'align:C');
 $table2->printRow(); 

 $filename = "barangay-pdp.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
}
?>