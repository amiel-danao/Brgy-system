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
 if(isset($_POST['print_bcpc']) && !empty($_POST['treasurer']) && !empty($_POST['PunongBarangay'])
&& !empty($_POST['budgetofficer']) && !empty($_POST['accountant']) && !empty($_POST['MPDC']) && !empty($_POST['year']))
{
    $year = $_POST['year'];
    $gtotal1 = 0;
    $total1 = 0;

      if($_POST['quarter'] == "1")
      {
            $sql = "SELECT SUM(quarter1) FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
            $stmt = $db->prepare($sql);
            $stmt->bind_param('is',$year,$_POST['bcode']);
            $stmt->execute();
            $stmt->bind_result($total);
            $stmt->fetch();
            $stmt->close();
            $Gtotal = $total ;
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',75,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('Php ' . number_format($Gtotal,2), 'font-size:10; font-family:Arial; font-style:B; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% BARANGAY COUNCIL FOR THE PROTECTION OF CHILDREN (BCPC) PLAN' ,  'align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,40,35,35,35,35,45}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code','rowspan:2');
 $table->easyCell('Program/project/Activity Description','rowspan:2');
 $table->easyCell('Implementing Office','rowspan:2');
 $table->easyCell('Quarterly Distribution','colspan:4');
 $table->easyCell('Amount','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('1st Quarter');
 $table->easyCell('2nd Quarter');
 $table->easyCell('3rd Quarter');
 $table->easyCell('4th Quarter');
 $table->printRow();

 $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter1` FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();

         while ($data = $Result->fetch_assoc())
            {
         $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
         $table->easyCell($data['aipcode']);
         $table->easyCell($data['program']);
         $table->easyCell($data['implemetingoffice']);
         $table->easyCell(number_format($data['quarter1'],2));
         $table->easyCell('-');
         $table->easyCell('-');
         $table->easyCell('-');
         $total1 = $data['quarter1'] ;
         $table->easyCell("P ".number_format($total1,2),'font-style:B');
         $table->printRow();
         $gtotal1 += $total1;
            }
 
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('');
 $table->easyCell('TOTAL','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell("P ".number_format($gtotal1,2),'font-style:B');
 $table->printRow();

 $table->endTable(3);

 //====================================================================
 $pdf->Ln(3);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:C');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(3);
 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-bcpc-1st-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
}
//===============================
if($_POST['quarter'] == "2")
      {
            $sql = "SELECT SUM(quarter2) FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
            $stmt = $db->prepare($sql);
            $stmt->bind_param('is',$year,$_POST['bcode']);
            $stmt->execute();
            $stmt->bind_result($total);
            $stmt->fetch();
            $stmt->close();
            $Gtotal = $total ;

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
$pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',75,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('Php ' . number_format($Gtotal,2), 'font-size:10; font-family:Arial; font-style:B; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
  $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% BARANGAY COUNCIL FOR THE PROTECTION OF CHILDREN (BCPC) PLAN' ,  'align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,40,35,35,35,35,45}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code','rowspan:2');
 $table->easyCell('Program/project/Activity Description','rowspan:2');
 $table->easyCell('Implementing Office','rowspan:2');
 $table->easyCell('Quarterly Distribution','colspan:4');
 $table->easyCell('Amount','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('1st Quarter');
 $table->easyCell('2nd Quarter');
 $table->easyCell('3rd Quarter');
 $table->easyCell('4th Quarter');
 $table->printRow();

 $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter2` FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('is',$year,$_POST['bcode']);
$MYstmt->execute();
$Result = $MYstmt->get_result();

         while ($data = $Result->fetch_assoc())
            {
         $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
         $table->easyCell($data['aipcode']);
         $table->easyCell($data['program']);
         $table->easyCell($data['implemetingoffice']);
         $table->easyCell('-');
         $table->easyCell(number_format($data['quarter2'],2));
         $table->easyCell('-');
         $table->easyCell('-');
         $total1 = $data['quarter2'] ;
         $table->easyCell("P ".number_format($total1,2),'font-style:B');
         $table->printRow();
         $gtotal1 += $total1;
            }
 
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('');
 $table->easyCell('TOTAL','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell("P ".number_format($gtotal1,2),'font-style:B');
 $table->printRow();

 $table->endTable(3);

 //====================================================================
 $pdf->Ln(3);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:C');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(5);
 $table1->rowStyle('align:{CCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-bcpc-2nd-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
      }
//====================================
    if($_POST['quarter'] == "3")
      {
        $sql = "SELECT SUM(quarter3) FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$year,$_POST['bcode']);
        $stmt->execute();
        $stmt->bind_result($total);
        $stmt->fetch();
        $stmt->close();
        $Gtotal = $total ;
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
$pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',75,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('Php ' . number_format($Gtotal,2), 'font-size:10; font-style:B; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% BARANGAY COUNCIL FOR THE PROTECTION OF CHILDREN (BCPC) PLAN' ,  'align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,40,35,35,35,35,45}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code','rowspan:2');
 $table->easyCell('Program/project/Activity Description','rowspan:2');
 $table->easyCell('Implementing Office','rowspan:2');
 $table->easyCell('Quarterly Distribution','colspan:4');
 $table->easyCell('Amount','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('1st Quarter');
 $table->easyCell('2nd Quarter');
 $table->easyCell('3rd Quarter');
 $table->easyCell('4th Quarter');
 $table->printRow();

$MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter3` FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('is',$year,$_POST['bcode']);
$MYstmt->execute();
$Result = $MYstmt->get_result();

         while ($data = $Result->fetch_assoc())
            {
         $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
         $table->easyCell($data['aipcode']);
         $table->easyCell($data['program']);
         $table->easyCell($data['implemetingoffice']);
         $table->easyCell('-');
         $table->easyCell('-');
         $table->easyCell(number_format($data['quarter3'],2));
         $table->easyCell('-');
         $total1 = $data['quarter3'];
         $table->easyCell("P ".number_format($total1,2),'font-style:B');
         $table->printRow();
         $gtotal1 += $total1;
            }
 
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('');
 $table->easyCell('TOTAL','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell("P ".number_format($gtotal1,2),'font-style:B');
 $table->printRow();

 $table->endTable(3);

 //====================================================================
$pdf->Ln(3);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:C');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
$pdf->Ln(5);
 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-bcpc-3rd-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush(); 
      }
//=====================cascacac======
    if($_POST['quarter'] == "4")
      {
        $sql = "SELECT SUM(quarter4) FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$year,$_POST['bcode']);
        $stmt->execute();
        $stmt->bind_result($total);
        $stmt->fetch();
        $stmt->close();
        $Gtotal = $total ;
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',75,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('Php ' . number_format($Gtotal,2), 'font-size:10; font-family:Arial; font-style:B; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% BARANGAY COUNCIL FOR THE PROTECTION OF CHILDREN (BCPC) PLAN' ,  'align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,40,35,35,35,35,45}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code','rowspan:2');
 $table->easyCell('Program/project/Activity Description','rowspan:2');
 $table->easyCell('Implementing Office','rowspan:2');
 $table->easyCell('Quarterly Distribution','colspan:4');
 $table->easyCell('Amount','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('1st Quarter');
 $table->easyCell('2nd Quarter');
 $table->easyCell('3rd Quarter');
 $table->easyCell('4th Quarter');
 $table->printRow();

$MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter4` FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('is',$year,$_POST['bcode']);
$MYstmt->execute();
$Result = $MYstmt->get_result();

         while ($data = $Result->fetch_assoc())
            {
         $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
         $table->easyCell($data['aipcode']);
         $table->easyCell($data['program']);
         $table->easyCell($data['implemetingoffice']);
         $table->easyCell('-');
         $table->easyCell('-');
         $table->easyCell('-');
         $table->easyCell(number_format($data['quarter4'],2));
         $total1 = $data['quarter4'];
         $table->easyCell("P ".number_format($total1,2),'font-style:B');
         $table->printRow();
         $gtotal1 += $total1;
            }
 
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('');
 $table->easyCell('TOTAL','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell("P ".number_format($gtotal1,2),'font-style:B');
 $table->printRow();

 $table->endTable(3);

 //====================================================================
 $pdf->Ln(3);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:C');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(5);
 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-bcpc-4th-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
      }

if($_POST['quarter'] == "All")
      {

        $sql = "SELECT SUM(quarter1),SUM(quarter2),SUM(quarter3),SUM(quarter4) FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$year,$_POST['bcode']);
        $stmt->execute();
        $stmt->bind_result($total1,$total2,$total3,$total4);
        $stmt->fetch();
        $stmt->close();
        $Gtotal = $total1 + $total2 + $total3 + $total4;
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',75,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('Php ' . number_format($Gtotal,2), 'font-size:10; font-style:B; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
  $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% BARANGAY COUNCIL FOR THE PROTECTION OF CHILDREN (BCPC) PLAN' ,  'align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,40,35,35,35,35,45}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code','rowspan:2');
 $table->easyCell('Program/project/Activity Description','rowspan:2');
 $table->easyCell('Implementing Office','rowspan:2');
 $table->easyCell('Quarterly Distribution','colspan:4');
 $table->easyCell('Amount','rowspan:2');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('1st Quarter');
 $table->easyCell('2nd Quarter');
 $table->easyCell('3rd Quarter');
 $table->easyCell('4th Quarter');
 $table->printRow();

$MYsql = "SELECT * FROM `bcpc_tbl` WHERE `year` = ? AND `brgy_code`=?";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('is',$year,$_POST['bcode']);
$MYstmt->execute();
$Result = $MYstmt->get_result();

         while ($data = $Result->fetch_assoc())
            {
         $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
         $table->easyCell($data['aipcode']);
         $table->easyCell($data['program']);
         $table->easyCell($data['implemetingoffice']);
         $table->easyCell(number_format($data['quarter1'],2));
         $table->easyCell(number_format($data['quarter2'],2));
         $table->easyCell(number_format($data['quarter3'],2));
         $table->easyCell(number_format($data['quarter4'],2));
         $total1 = $data['quarter1'] + $data['quarter2'] + $data['quarter3'] + $data['quarter4'];
         $table->easyCell("P ".number_format($total1,2),'font-style:B');
         $table->printRow();
         $gtotal1 += $total1;
            }
 
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('');
 $table->easyCell('TOTAL','font-style:B');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell("P ".number_format($gtotal1,2),'font-style:B');
 $table->printRow();

 $table->endTable(3);

 //====================================================================
 $pdf->Ln(3);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:C');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(5);
 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['MPDC']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->printRow();  

 $table1->rowStyle('align:{CCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();
 $filename = "barangay-bcpc-all-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
}
}
?>