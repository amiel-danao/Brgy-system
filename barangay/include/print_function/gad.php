<?php
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include '../function/config.php';


 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);

 $table1=new easyTable($pdf, 1);
 $table1->easyCell('BARANGAY ANNUAL GENDER AND DEVELOPMENT (GAD) PLAN BUDGET', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('FY 2019', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
 $table1->endTable(5);

 $table2=new easyTable($pdf, 5);
 $table2->easyCell('Region', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table2->easyCell(': REGION IV-A CALABARZON', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table2->easyCell('');
 $table2->easyCell('Estimated Barangay Budget', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table2->easyCell(': 1,000,000.00', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table2->printRow();
 $table2->endTable();


 $table3=new easyTable($pdf, 5);
 $table3->easyCell('Province', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table3->easyCell(': CAVITE', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table3->easyCell('');
 $table3->easyCell('Total GAD Expenditure', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table3->easyCell(': 1,000,000.00', 'font-size:10; font-family:Arial; paddingY:0; align:L');
 $table3->printRow();
 $table3->endTable();


 $table3=new easyTable($pdf, 5);
 $table3->easyCell('City/Municipality', 'font-size:10; font-family:Arial;  align:L');
 $table3->easyCell(': MARAGONDON', 'font-size:10; font-family:Arial;  align:L');
 $table3->easyCell('');
 $table3->easyCell('');
 $table3->easyCell('');
 $table3->printRow();

 $table3->easyCell('Barangay', 'font-size:10; font-family:Arial;  align:L');
 $table3->easyCell(': BUCAL 2', 'font-size:10; font-family:Arial;  align:L');
 $table3->easyCell('');
 $table3->easyCell('');
 $table3->easyCell('');
 $table3->printRow();
 $table3->endTable();

//====================================================================
 $table= new easyTable($pdf, '{60,60,60,37,37,37,44}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('Gender Issue or GAD Mandate');
 $table->easyCell('GAD Program/Project/Activity (PPA)');
 $table->easyCell('Performance Target and Indicator');
 $table->easyCell('Accomplishments');
 $table->easyCell('Approved GAD Budget');
 $table->easyCell('Actual Cost or GAD Expenditure');
 $table->easyCell('Variance or Remarks');
 $table->printRow();



 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('ATTRIBUTED PROGRAMS');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();

 
 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('Title of Barangay Program or Project','colspan:3');
 $table->easyCell('HGDG PIMME/FIMME Score');
 $table->easyCell('Total Annual Program/Project Cost or Expenditure');
 $table->easyCell('GAD Attributed Program/Project Cost or Expenditure');
 $table->easyCell('Variance or Remarks');
 $table->printRow();

$table->endTable(3);
 

 //====================================================================

 $table1=new easyTable($pdf, '{100,100,100}', ' width:100; align:C');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Date:");
 $table1->printRow(); 
 $pdf->Ln(2);
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("ANGELES P. GUTIERREZ");
 $table1->easyCell("ANGELES P. GUTIERREZ");
 $table1->easyCell("DATE");
 $table1->printRow();
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("ANGELES P. GUTIERREZ");
 $table1->easyCell("ANGELES P. GUTIERREZ");
 $table1->easyCell("DATE");
 $table1->printRow();
$pdf->Ln(5);
 $table1->easyCell("Reviewed by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(2);
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("ANGELES P. GUTIERREZ",'align:R');
 $table1->easyCell("ANGELES P. GUTIERREZ",'align:R');
 $table1->easyCell("");
 $table1->printRow();
  $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("ANGELES P. GUTIERREZ",'align:R');
 $table1->easyCell("ANGELES P. GUTIERREZ",'align:R');
 $table1->easyCell("");
 $table1->printRow();

 $pdf->Output(); 


?>