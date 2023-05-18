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

if(isset($_POST['print_sc_pwd']) && !empty($_POST['treasurer']) && !empty($_POST['PunongBarangay'])
&& !empty($_POST['budgetofficer']) && !empty($_POST['accountant']) && !empty($_POST['MPDC']) && !empty($_POST['year']))
{
	$year = $_POST['year'];

    if($_POST['quarter'] == "1")
        {
    $mysqli = "SELECT SUM(quarter1) FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total1);
    $Mstmt->fetch();
    $Mstmt->close();

    $mysqli = "SELECT SUM(quarter1) FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total2);
    $Mstmt->fetch();
    $Mstmt->close();
    $Gtotal = $total1 + $total2 ;
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 
 $pdf->SetFont('helvetica','',10);
$pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',80,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell(number_format($Gtotal,2), 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% SENIOR CITIZENS AND PERSONS WITH DISABILITIES (PWD) PLAN','align:C; paddingY:0; font-style:B;');
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

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR; align:L; font-style:B');
 $table->easyCell('');
 $table->easyCell('SENIOR CITIZENS (70%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop sc

    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter1` FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total1 = 0;
    $gtotal1 = 0;
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
 $total1 = $data['quarter1'];
 $table->easyCell("P ".number_format($total1,2),'font-style:B');
 $table->printRow();
 $gtotal1 += $total1;
}
 $table->rowStyle(' valign:M; font-family:Arial; font-size:10; align:L; font-style:B; border:LR');
 $table->easyCell('');
 $table->easyCell('PWD (30%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop
    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter1` FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total2 = 0;
    $gtotal2 = 0;
    $grandtotal = 0;
        while ($data = $Result->fetch_assoc())
            { 
 $table->rowStyle(' align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implemetingoffice']);
 $table->easyCell(number_format($data['quarter1'],2));
 $table->easyCell('-');
 $table->easyCell('-');
 $table->easyCell('-');
 $total2 = $data['quarter1'];
 $table->easyCell("P ".number_format($total2,2),'font-style:B');
 $table->printRow();
 $gtotal2 += $total2;
            }
 $table->rowStyle('valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('');
 $table->easyCell('TOTAL','align:C;');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $grandtotal = $gtotal1 +  $gtotal2 ;
 $table->easyCell("P ".number_format($grandtotal,2),'align:C;');
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
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();
 
 $filename = "barangay-sc-pwd-1st-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
}



//===================================


if($_POST['quarter'] == "2")
        {

    $mysqli = "SELECT SUM(quarter2) FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total1);
    $Mstmt->fetch();
    $Mstmt->close();

    $mysqli = "SELECT SUM(quarter2) FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total2);
    $Mstmt->fetch();
    $Mstmt->close();
    $Gtotal = $total1 + $total2 ;

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 
 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',80,2,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('Php ' . number_format($Gtotal,2), 'font-size:10; font-family:Arial; paddingY:0;font-style:B; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('1% SENIOR CITIZENS AND PERSONS WITH DISABILITIES (PWD) PLAN','align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,35,30,30,30,30,45}',' width:100; border:1; border-color:#000000; align:C');

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

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR; align:L; font-style:B');
 $table->easyCell('');
 $table->easyCell('SENIOR CITIZENS (70%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop sc

    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter2` FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total1 = 0;
    $gtotal1 = 0;
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
 $total1 = $data['quarter2'];
 $table->easyCell("P ".number_format($total1,2),'font-style:B');
 $table->printRow();
 $gtotal1 += $total1;
}
 $table->rowStyle(' valign:M; font-family:Arial; font-size:10; align:L; font-style:B; border:LR');
 $table->easyCell('');
 $table->easyCell('PWD (30%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop
    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter2` FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total2 = 0;
    $gtotal2 = 0;
    $grandtotal = 0;
        while ($data = $Result->fetch_assoc())
            { 
 $table->rowStyle(' align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implemetingoffice']);
 $table->easyCell('-');
 $table->easyCell(number_format($data['quarter2'],2));
 $table->easyCell('-');
 $table->easyCell('-');
 $total2 = $data['quarter2'];
 $table->easyCell("P ".number_format($total2,2),'font-style:B');
 $table->printRow();
 $gtotal2 += $total2;
            }
 $table->rowStyle('valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('');
 $table->easyCell('TOTAL','align:C;');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $grandtotal = $gtotal1 +  $gtotal2 ;
 $table->easyCell("P ".number_format($grandtotal,2),'align:C;');
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
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-sc-pwd-2nd-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
        }


//===================================================

if($_POST['quarter'] == "3")
        {

    $mysqli = "SELECT SUM(quarter3) FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total1);
    $Mstmt->fetch();
    $Mstmt->close();

    $mysqli = "SELECT SUM(quarter3) FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total2);
    $Mstmt->fetch();
    $Mstmt->close();
    $Gtotal = $total1 + $total2 ;

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 
 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',80,2,40,35);
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
 $table1->easyCell('1% SENIOR CITIZENS AND PERSONS WITH DISABILITIES (PWD) PLAN','align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,35,30,30,30,30,45}',' width:100; border:1; border-color:#000000; align:C');

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

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR; align:L; font-style:B');
 $table->easyCell('');
 $table->easyCell('SENIOR CITIZENS (70%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop sc

    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter3` FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total1 = 0;
    $gtotal1 = 0;
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
 $table->rowStyle(' valign:M; font-family:Arial; font-size:10; align:L; font-style:B; border:LR');
 $table->easyCell('');
 $table->easyCell('PWD (30%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop
    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter3` FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total2 = 0;
    $gtotal2 = 0;
    $grandtotal = 0;
        while ($data = $Result->fetch_assoc())
            { 
 $table->rowStyle(' align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implemetingoffice']);
 $table->easyCell('-');
 $table->easyCell('-');
 $table->easyCell(number_format($data['quarter3'],2));
 $table->easyCell('-');
 $total2 = $data['quarter3'];
 $table->easyCell("P ".number_format($total2,2),'font-style:B');
 $table->printRow();
 $gtotal2 += $total2;
            }
 $table->rowStyle('valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('');
 $table->easyCell('TOTAL','align:C;');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $grandtotal = $gtotal1 +  $gtotal2 ;
 $table->easyCell("P ".number_format($grandtotal,2),'align:C;');
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
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-sc-pwd-3rd-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
        }
//=========================================================

    if($_POST['quarter'] == "4")
        {

    $mysqli = "SELECT SUM(quarter4) FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total1);
    $Mstmt->fetch();
    $Mstmt->close();

    $mysqli = "SELECT SUM(quarter4) FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total2);
    $Mstmt->fetch();
    $Mstmt->close();
    $Gtotal = $total1 + $total2 ;

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 
 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',80,2,40,35);
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
 $table1->easyCell('1% SENIOR CITIZENS AND PERSONS WITH DISABILITIES (PWD) PLAN','align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,35,30,30,30,30,45}',' width:100; border:1; border-color:#000000; align:C');

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

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR; align:L; font-style:B');
 $table->easyCell('');
 $table->easyCell('SENIOR CITIZENS (70%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop sc

    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter4` FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total1 = 0;
    $gtotal1 = 0;
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
 $table->rowStyle(' valign:M; font-family:Arial; font-size:10; align:L; font-style:B; border:LR');
 $table->easyCell('');
 $table->easyCell('PWD (30%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop
    $MYsql = "SELECT `aipcode`, `program`, `implemetingoffice`, `quarter4` FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total2 = 0;
    $gtotal2 = 0;
    $grandtotal = 0;
        while ($data = $Result->fetch_assoc())
            { 
 $table->rowStyle(' align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implemetingoffice']);
 $table->easyCell('-');
 $table->easyCell('-');
 $table->easyCell('-');
 $table->easyCell(number_format($data['quarter4'],2));
 $total2 = $data['quarter4'];
 $table->easyCell("P ".number_format($total2,2),'font-style:B');
 $table->printRow();
 $gtotal2 += $total2;
            }
 $table->rowStyle('valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('');
 $table->easyCell('TOTAL','align:C;');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $grandtotal = $gtotal1 +  $gtotal2 ;
 $table->easyCell("P ".number_format($grandtotal,2),'align:C;');
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
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-sc-pwd-4th-quarter.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush();
        }

//=================================================

    if($_POST['quarter'] == "All")
        {
    $mysqli = "SELECT SUM(quarter1),SUM(quarter2),SUM(quarter3),SUM(quarter4) FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($totals1,$totals2,$totals13,$totals4);
    $Mstmt->fetch();
    $Mstmt->close();

    $mysqli = "SELECT SUM(quarter1),SUM(quarter2),SUM(quarter3),SUM(quarter4) FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $Mstmt = $db->prepare($mysqli);
    $Mstmt->bind_param('is',$year,$_POST['bcode']);
    $Mstmt->execute();
    $Mstmt->bind_result($total1,$total2,$total3,$total4);
    $Mstmt->fetch();
    $Mstmt->close();
    $Gtotal = $totals1 + $totals2 + $totals13 + $totals4 + $total1 + $total2 +$total3 +$total4;

 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 
 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',80,2,40,35);
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
 $table1->easyCell('1% SENIOR CITIZENS AND PERSONS WITH DISABILITIES (PWD) PLAN','align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(5);

//====================================================================
 $table= new easyTable($pdf, '{40,70,35,30,30,30,30,45}',' width:100; border:1; border-color:#000000; align:C');

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

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR; align:L; font-style:B');
 $table->easyCell('');
 $table->easyCell('SENIOR CITIZENS (70%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop sc

    $MYsql = "SELECT * FROM `sc_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total1 = 0;
    $gtotal1 = 0;
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
 $table->rowStyle(' valign:M; font-family:Arial; font-size:10; align:L; font-style:B; border:LR');
 $table->easyCell('');
 $table->easyCell('PWD (30%)');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->printRow();
//loop
    $MYsql = "SELECT * FROM `pwd_tbl` WHERE `year` = ? AND `brgy_code`=?";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('is',$year,$_POST['bcode']);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
    $total2 = 0;
    $gtotal2 = 0;
    $grandtotal = 0;
        while ($data = $Result->fetch_assoc())
            { 
 $table->rowStyle(' align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implemetingoffice']);
 $table->easyCell(number_format($data['quarter1'],2));
 $table->easyCell(number_format($data['quarter2'],2));
 $table->easyCell(number_format($data['quarter3'],2));
 $table->easyCell(number_format($data['quarter4'],2));
 $total2 = $data['quarter1'] + $data['quarter2'] + $data['quarter3'] + $data['quarter4'];
 $table->easyCell("P ".number_format($total2,2),'font-style:B');
 $table->printRow();
 $gtotal2 += $total2;
            }
 $table->rowStyle('valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('');
 $table->easyCell('TOTAL','align:C;');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $grandtotal = $gtotal1 +  $gtotal2 ;
 $table->easyCell("P ".number_format($grandtotal,2),'align:C;');
 $table->printRow();

 $table->endTable(3);

 //====================================================================
 $pdf->Ln(3);
 $table1=new easyTable($pdf, '{65,65,65,65,65}', 'width:100; align:C');
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
 $table1->easyCell("Municipal Budget Officer    ");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

 $filename = "barangay-sc-pwd-all-quarter.pdf";
 $pdf->Output('I', $filename);
 ob_end_flush(); 
        }
}
?>