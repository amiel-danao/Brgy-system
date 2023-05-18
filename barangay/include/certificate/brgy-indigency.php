<?php
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include 'config.php';



if (isset($_POST['p_indigency']))
  {
 $id = $_POST['Rid'];
 $day = date("d");
 $month = date("F");
 $year = date("Y");

 
 $pdf=new exFPDF('P', 'mm','Legal');
 $pdf->AddPage('P'); 
 $pdf->SetFont('Arial','',10);
 $pdf->Image('../../logoimg/watermark/'. $_POST['bcode'].'.png',20,30,170);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',37,5,40,35);
			$pdf->Cell(195 , 5,'Republic of the Philippines ',0,1,'C');
			//$pdf->Image('../../bimages/dilg.jpg',37,5,26);
			//$pdf->Image('../../bimages/dilg.jpg',10,35,200);
			$pdf->Cell(195 , 5,'Province of Cavite',0,1,'C');
			$pdf->Cell(195 , 5,'MUNICIPALITY OF MARAGONDON',0,1,'C');
			$pdf->Cell(195 , 5,'BARANGAY'.' ' . strtoupper($_POST['bname']),0,1,'C');
			$pdf->Cell(195 , 5,'-oOo-',0,0,'C');
			$pdf->Ln(20);
			$pdf->SetFont('Arial', 'B', 20);
			$pdf->Cell(195 , 5,'CERTIFICATION OF INDIGENCY',0,0,'C');
			$pdf->Ln(20);
//====================================================================
  $table= new easyTable($pdf, 1,'width:100; border:0; align:L');
  $table->rowStyle('font-family:Arial; font-size:12; paddingY:0; font-style:R'); 
  $table->easyCell('To Whom it May Concern'); // OF 
  $table->printRow();
  $table->endTable(5);

  $table1= new easyTable($pdf,'{20,37,73,5,14,45}','width:100; border:0; align:L;font-style:R;paddingY:0');
  $table1->easyCell("",'font-family:Arial; font-size:11; font-style:R'); 
  $table1->easyCell("This is certify that,",'font-family:Arial; font-size:12');
  $table1->easyCell($_POST['fname'],'font-family:Arial; font-size:12;font-style:B; border:B; align:C');
  $table1->easyCell(",",'font-family:Arial; font-size:12; font-style:R;paddingY:0');
  $table1->easyCell($_POST['age'],'font-family:Arial;font-size:12;font-style:B;border:B;align:C');
  $table1->easyCell("years old. is a certified",'font-family:Arial; font-size:12;font-style:R');
  $table1->printRow();
  $table1->endTable();


 	$table2= new easyTable($pdf, '{195}','width:100; border:0;paddingY:0');
 	$table2->rowStyle('font-family:Arial; font-size:11; paddingY:0; font-style:R'); 
 	$table2->easyCell('resident of Barangay Layong Mabilog, Maragondon, Cavite. His/Her family belongs to indigent families in our barangay','paddingY:0'); // OF 
 	$table2->printRow();
  $table2->endTable(5);

  $table3= new easyTable($pdf, '{20,100,75}','width:100; border:0;paddingY:0;align:L');
 	$table3->rowStyle('font-family:Arial; font-size:11; paddingY:0; font-style:R'); 
 	$table3->easyCell('');
 	$table3->easyCell('That I am issuing this certification to facilitate his/her','paddingY:0; align:J');
 	$table3->easyCell($_POST['purpose'],'paddingY:0;border:B; font-style:B; align:C');
 	$table3->printRow();
  $table3->endTable(5);

  $table4= new easyTable($pdf, '{20,23,20,15,45,70}','width:100; border:0;paddingY:0; align:L');
 	$table4->rowStyle('font-family:Arial; font-size:11; paddingY:0; font-style:R'); 
 	$table4->easyCell('');
 	$table4->easyCell('Issued this','paddingY:0');
 	$table4->easyCell($day,'paddingY:0; border:B; font-style:B; align:C');
 	$table4->easyCell('day of','align:C');
 	$table4->easyCell($month,'align:C;paddingY:0;border:B;font-style:B;');
 	$table4->easyCell($year . ' ' . 'at Sanguniang Barangay Office','paddingY:0; paddingX:0; align:J');
 	$table4->printRow();
  $table4->endTable();

  $table5= new easyTable($pdf, '{195}','width:100; border:0;paddingY:0;align:L');
 	$table5->rowStyle('font-family:Arial; font-size:11; paddingY:0; font-style:R'); 
 	$table5->easyCell('Barangay'. ' '. $_POST['bname'] .', Maragondon, Cavite');
 	$table5->printRow();
  $table5->endTable(15);
	


 ////====================================================================

	$pdf->Ln(15);
 	$name = "LEOVINA A. HERNANDEZ";
 	$table6=new easyTable($pdf, 1 ,'valign:M');
 	$table6->easyCell('Issued by:', 'align:C; paddingY:0;font-style:R;font-size:11');
 	$table6->printRow(); 
  $pdf->Ln(7);
 	$table6->easyCell(strtoupper($_POST['captain']), 'align:C; paddingY:0 ;font-style:BU; font-size:12');
 	$table6->printRow();  
  $table6->rowStyle('font-family:Arial; font-size:11; paddingY:0'); 
 	$table6->easyCell("Punong Barangay", 'align:C; paddingY:0;font-style:R');
 	$table6->printRow(); 
 

 insertrecord($_POST['fname'],$id,$_POST['purpose'],$_POST['bcode']);
$filename = "barangay-indigency.pdf";
 $pdf->Output('I', $filename); 
ob_end_flush();
 }



 function insertrecord($fname,$id,$purpose,$bcode)
 {
  global $db;
  $date = date("Y-m-d");
  $certificate = "Barangay Indigency";
  $sql = "INSERT INTO `brgy_indigency_tbl`(`fullname`, `residents_id`, `date`, `purpose`, `type_of_certificate`, `bcode`) VALUES (?,?,?,?,?,?)";
  $mystmt = $db->prepare($sql);
  $mystmt->bind_param('sissss',$fname,$id,$date,$purpose,$certificate,$bcode);
  $mystmt->execute(); 
  $mystmt->close();
  $db->close();

}
?>


