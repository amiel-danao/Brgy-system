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

if(isset($_POST['print_bdrrmf']) && !empty($_POST['treasurer']) && !empty($_POST['PunongBarangay'])
&& !empty($_POST['budgetofficer']) && !empty($_POST['accountant']) && !empty($_POST['MPDC']) && !empty($_POST['year']))
{
	$year = $_POST['year'];
    $gtotala1 = 0;
    $gtotalb1 = 0;
    $gtotalc3 = 0;

    $totals1 = 0;
    $totals2 = 0; 
    $totals3 = 0;

    $totala1 = 0;
    $totala2 = 0;
    $totala3 = 0;
    
    $totalb1 = 0;
    $totalb2 = 0;
    $totalb3 = 0;

        $sql = "SELECT SUM(personalservice), SUM(mooe), SUM(capital), `totalbudgetallocation` FROM `bdrrmf_a_tbl` WHERE `year` = ? AND `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$year,$_POST['bcode']);
        $stmt->execute();
        $stmt->bind_result($totala1,$totala2,$totala3,$gtotala1);
        $stmt->fetch();
        $stmt->close();
       // $Gtotal = $total ;
 $pdf=new exFPDF('L', 'mm','Legal');
 $pdf->AddPage('L'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',78,3,40,35);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('CY 2019 Annual Investment Program (AIP)', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell('By Program/Project/Activities', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->easyCell($_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 $table1->rowStyle('font-size:9; font-family:Arial');
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('');
 $table1->printRow();
 $table1->easyCell('5% DISASTER RISK REDUCTION & MANAGEMENT FUND (DRRMF)' ,  'align:C; paddingY:0; font-style:B;');
 $table1->printRow();
 $table1->endTable(9);

//====================================================================
 $table= new easyTable($pdf, '{25,52,27,21,21,40,30,26,26,26,35}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCCCCCCCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('AIP Reference Code','rowspan:2');
 $table->easyCell('Program/project/Activity Description','rowspan:2');
 $table->easyCell('Implementing Office/ Department','rowspan:2');
 $table->easyCell('Implementation','colspan:2');
 $table->easyCell('Expected Output','rowspan:2');
 $table->easyCell('Funding Source','rowspan:2');
 $table->easyCell('Amount (in thousand pesos)','colspan:4');
 $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('Started Date');
 $table->easyCell('Completion Date');
 $table->easyCell('Personal Services');
 $table->easyCell('MOOE');
 $table->easyCell('Capital Outlay');
 $table->easyCell('Total');
 $table->printRow();

 $table->rowStyle('align:{CLCCCCCCCCC}; valign:M; font-family:Arial;font-size:9; font-style:B');
 $table->easyCell('');
 $table->easyCell('A.PRE-DISASTER PREPAREDNESS (70%)');
 $table->easyCell(' ');
 $table->easyCell('');
 $table->easyCell(' ');
 $table->easyCell('');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell('');
 $table->easyCell(' ');
 $table->easyCell('P '. number_format($gtotala1,2));
 $table->printRow();

$sqla = "SELECT * FROM `bdrrmf_a_tbl` WHERE `year` = ? AND `brgy_code`=?";
$stmta = $db->prepare($sqla);
$stmta->bind_param('is',$year,$_POST['bcode']);
$stmta->execute();
$Resulta = $stmta->get_result();
while ($data = $Resulta->fetch_assoc())
{
 $table->rowStyle('align:{CCCCCLCCCC}; valign:M; font-family:Arial; font-size:9;');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implementoffice']);
 $table->easyCell($data['starteddate']);
 $table->easyCell($data['completiondate']);
 $table->easyCell($data['expectedoutput']);
 $table->easyCell($data['fundsource']);
 $table->easyCell(number_format($data['personalservice'],2));
 $table->easyCell(number_format($data['mooe'],2));
 $table->easyCell(number_format($data['capital'],2));
 $table->easyCell('');
 $table->printRow();

}

 // $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; border:LR');
 // $table->easyCell('1st Quarter');
 // $table->easyCell('Purchase of School Supplies, Books for Daycare Center & Elementary Children, Supplementary Feedings and Other related programs');
 // $table->easyCell('3rd Quarter');
 // $table->easyCell('4th Quarter');
 // $table->easyCell('1st Quarter');
 // $table->easyCell('2nd Quarter');
 // $table->easyCell('3rd Quarter');
 // $table->easyCell('4th Quarter');
 // $table->printRow();
 $sql = "SELECT SUM(personalservice), SUM(mooe), SUM(capital), `totalbudgetallocation` FROM `bdrrmf_b_tbl` WHERE `year` = ? AND `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$year,$_POST['bcode']);
        $stmt->execute();
        $stmt->bind_result($totalb1,$totalb2,$totalb3,$gtotalb1);
        $stmt->fetch();
        $stmt->close();
 $table->rowStyle('align:{CLCCCCCCCCC};valign:M; font-family:Arial; font-size:10;font-style:B');
 $table->easyCell('');
 $table->easyCell('B.QUICK RESPONSE (30%)');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell(' ');
 $table->easyCell('P '. number_format($gtotalb1,2));
 $table->printRow();

$sqlb = "SELECT * FROM `bdrrmf_b_tbl` WHERE `year` = ? AND `brgy_code`=?";
$stmtb = $db->prepare($sqlb);
$stmtb->bind_param('is',$year,$_POST['bcode']);
$stmtb->execute();
$Resultb = $stmtb->get_result();
while ($data = $Resultb->fetch_assoc())
{
 $table->rowStyle('align:{CCCCCLCCCC}; valign:M; font-family:Arial; font-size:9;');
 $table->easyCell($data['aipcode']);
 $table->easyCell($data['program']);
 $table->easyCell($data['implementoffice']);
 $table->easyCell($data['starteddate']);
 $table->easyCell($data['completiondate']);
 $table->easyCell($data['expectedoutput']);
 $table->easyCell($data['fundsource']);
 $table->easyCell(number_format($data['personalservice'],2));
 $table->easyCell(number_format($data['mooe'],2));
 $table->easyCell(number_format($data['capital'],2));
 $table->easyCell('');
 $table->printRow();

}

 $totals1 = $totala1 + $totalb1;
 $totals2 = $totala2 + $totalb2;
 $totals3 = $totala3 + $totalb3;

 $gtotalc3 = $gtotalb1 +  $gtotala1;
 $table->rowStyle('align:{CCCCCCCCCCC};valign:M; font-family:Arial; font-size:9; font-style:B');
 $table->easyCell('');
 $table->easyCell('TOTAL');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('');
 $table->easyCell('P ' . number_format($totals1,2));
 $table->easyCell('P ' . number_format($totals2,2));
 $table->easyCell('P ' . number_format($totals3,2));
 $table->easyCell('P ' . number_format($gtotalc3,2));
 $table->printRow();

 $table->endTable(3);

 //====================================================================

 $table1=new easyTable($pdf, '{65,65,65,65,65}', ' width:100; align:L');
 $table1->easyCell("Prepared by:");
 $table1->easyCell("Attested by:");
 $table1->easyCell("Noted by:");
 $table1->easyCell("");
 $table1->easyCell("");
 $table1->printRow(); 
 $pdf->Ln(2);
 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table1->easyCell($_POST['treasurer']);
 $table1->easyCell($_POST['PunongBarangay']);
 $table1->easyCell($_POST['budgetofficer']);
 $table1->easyCell($_POST['accountant']);
 $table1->easyCell($_POST['MPDC']);
 $table1->printRow(); 

 $table1->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;');
 $table1->easyCell("Barangay Treasurer");
 $table1->easyCell("Punong Barangay");
 $table1->easyCell("MPDC");
 $table1->easyCell("Municipal Budget Officer");
 $table1->easyCell("Municipal Accountant");
 $table1->printRow();

$filename = "barangay-bdrrmf.pdf";
 $pdf->Output('I', $filename); 
ob_end_flush();
}
?>