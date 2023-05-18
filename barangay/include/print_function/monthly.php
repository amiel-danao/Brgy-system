<?php
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include 'config.php';

if(isset($_POST['print_kp_month']) && !empty($_POST['month']) && !empty($_POST['year']))
	{
		$month = $_POST['month'];
		$year = $_POST['year'];
		$MLGOO = $_POST['MLGOO'];
 $pdf=new exFPDF('P', 'mm','Legal');
 $pdf->AddPage('P'); 

 $pdf->SetFont('Arial','',10);

 		$pdf->SetFont('Arial', '', 10);
			$pdf->Cell(190 , 5,'MONTHLY ACCOMPLISHMENT REPORT ',0,1,'C');
			$pdf->SetFont('Arial', 'BU', 10);
			$pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',37,3,40,30);
			$pdf->Cell(190 , 5,'Month of'. ' ' . $month . ' ' . $year,0,1,'C');
			$pdf->Cell(190 , 5,$_POST['bname'],0,1,'C');
			$pdf->Cell(190 , 10,'',0,1);
			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(35 , 5,'City/Municipality:',0,0);
			$pdf->SetFont('Arial', 'BI', 9);
			$pdf->Cell(30 , 5,'Maragondon',0,0);
			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(35 , 5,'Province:',0,0,'R');
			$pdf->SetFont('Arial', 'BI', 9);
			$pdf->Cell(30 , 5,'Cavite',0,0);
			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(30 , 5,'Region:',0,0,'R');
			$pdf->SetFont('Arial', 'BI', 9);
			$pdf->Cell(30 , 5,'IV-A',0,1);
			$pdf->Cell(190 , 5,'',0,1);
			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(10 , 5,'Part I',0,0);
			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(175 , 5,'Project/Activities Undertaken',0,1);
			$pdf->Cell(10 , 5,'',0,0);
			$pdf->Cell(175 , 5,'(Excutive Power of the Barangay)',0,1);
			$pdf->Cell(190 , 3,'',0,1);

//====================================================================
 $table= new easyTable($pdf, '{40,20,20,22,22,20,20,20}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-style:B; font-size:9');
 $table->easyCell('Name / Description  of Activities / Projects Undertaken','rowspan:2'); // OF ACTIVITIES / PROJECTS UNDERTAKEN
 $table->easyCell('STATUS', 'colspan:2');
 $table->easyCell('DATE', 'colspan:2');

 $table->easyCell('Project Activities Cost','rowspan:2');
 $table->easyCell('Fund Source','rowspan:2');
 $table->easyCell('Remarks','rowspan:2');
 $table->printRow();
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-style:B; font-size:8');
 $table->easyCell('On Going');
 $table->easyCell('Completed');
 $table->easyCell("Started");
 $table->easyCell("Completed");
 $table->printRow();

	$MYsql1 = "SELECT * FROM `monthly_p1_tbl` WHERE `month` = ? AND `year` = ? AND `brgy_code`=? ORDER BY `id`";
	$mystmt1 = $db->prepare($MYsql1);
	$mystmt1->bind_param('sis',$month,$year,$_POST['bcode']);
	$mystmt1->execute();
	$result = $mystmt1->get_result();
	 while ($data = $result->fetch_assoc())
            {
            	$d = $data['description'];
            	$ogs = $data['on_going_status'];
            	$cs = $data['completed_status'];
            	// $sd = $data['started_date'];
            	$time = strtotime($data['started_date']);
  				$sd = date("M-d-Y", $time);
            	// $cd = $data['completed date'];
            	$time = strtotime($data['completed date']);
  				$cd = date("M-d-Y", $time);
            	$pc = $data['project_cost'];
            	$f = $data['funds'];
            	$r = $data['remarks'];
 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:8');
 $table->easyCell($d);
 $table->easyCell($ogs);
 $table->easyCell($cs);
 $table->easyCell($sd);
 $table->easyCell($cd);
 $table->easyCell($pc);
 $table->easyCell($f);
 $table->easyCell($r);
 $table->printRow();
			}
		 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:8');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->easyCell('');
		 $table->printRow();
 $table->endTable(5);

 //====================================================================

 $pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(15 , 5,'Part II',0,0);
			$pdf->SetFont('Arial', '', 9);
			$pdf->Cell(175 , 5,'Local Legislation',0,1);
			$pdf->Cell(15 , 5,'',0,0);
			$pdf->Cell(175 , 5,'(Legistative Power of the Brgy. Council)',0,1);
			$pdf->Cell(190 , 3,'',0,1);
			$pdf->SetFont('Arial', 'B', 9);
			$pdf->Cell(95 , 4,'A Resolution/Ordinance Passed/Enacted',0,0,'C');
			$pdf->Cell(95 , 4,'B Barangay Council Meeting Conducted',0,1,'C');


 $table= new easyTable($pdf, '{30,15,40,25,5,30,10,35,20,20}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-style:B; font-size:8');
 $table->easyCell('Title Resolution'); 
 $table->easyCell('Ord. No');
 $table->easyCell('Description of passed / enacted');
 $table->easyCell('Reaction Acton Taken');

 $table->easyCell('');


 $table->easyCell('Type');
 $table->easyCell('No.');
 $table->easyCell("Date Conducted");
 $table->easyCell('No of Presence');
 $table->easyCell('No of Absent');
 $table->printRow();

    $MYsql2 = "SELECT * FROM `monthly_p2_tbl` WHERE `month` = ? AND `year` = ? AND `brgy_code`=? ORDER BY `id`";
        $mystmt2 = $db->prepare($MYsql2);
        $mystmt2->bind_param('sis',$month,$year,$_POST['bcode']);
        $mystmt2->execute();
        $result2 = $mystmt2->get_result();
        	while ($data = $result2->fetch_assoc())
            {
            $table->rowStyle('align:{CCCCCCCCC}; valign:M; font-size:8');
	        $table->easyCell($data['title'],'font-style:'); 
			$table->easyCell($data['order_no'],'font-style:');
			$table->easyCell($data['description'],'font-style:');
			$table->easyCell($data['remarks'],'font-style:');

			$table->easyCell('');

			$table->easyCell($data['type'],'font-style:');
			$table->easyCell($data['no'],'font-style:');
			$time = strtotime($data['date_conducted']);
  			$dc = date("M-d-Y", $time);
			$table->easyCell($dc,'font-style:');
			$table->easyCell($data['no_present'],'font-style:');
			$table->easyCell($data['no_absent'],'font-style:');
			$table->printRow();
			}

			$table->rowStyle('align:{CCCCCCCCC}; valign:M; font-size:8');
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
 $table->endTable(5);

 //====================================================================

$write=new easyTable($pdf, 1);
$write->easyCell('Part III Katarungan Pambarangay', 'font-family:Arial; font-size:9; font-style:B;');
$write->printRow();
$write->easyCell('(Judicial Function of Brgy. Council)', 'font-family:Arial; font-size:9; font-style:B');
$write->printRow();

 $write->endTable(0);

 $x=$pdf->GetX();
 $y=$pdf->GetY();

 $tableB=new easyTable($pdf, 5, 'width:90; align:L; border:1 ');

 $tableB->easyCell("Type of ");
 $tableB->easyCell("NUMBER OF DISPUTES",'colspan:4');
 
 $tableB->printRow();
    
 $tableB->easyCell("Disputes ");
 $tableB->easyCell("Filed ");
 $tableB->easyCell("Settled ");
 $tableB->easyCell("Referred");
 $tableB->easyCell("Withdraw ");
 $tableB->printRow();

   $MYsql3 = "SELECT * FROM `monthly_p3_tbl` WHERE `monthly` = ? AND `year` = ?  AND `brgy_code`=? ORDER BY `id`";
   $mystmt3 = $db->prepare($MYsql3);
   $mystmt3->bind_param('sis',$month,$year,$_POST['bcode']);
   $mystmt3->execute();
   $result3 = $mystmt3->get_result();
   while ($data = $result3->fetch_assoc())
        {
         $tableB->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:8');
		 $tableB->easyCell($data['dispute'],'font-style:');
		 $tableB->easyCell($data['filed'],'font-style:');
		 $tableB->easyCell($data['settled'],'font-style:');
		 $tableB->easyCell($data['reffered'],'font-style:');
		 $tableB->easyCell($data['withdraw'],'font-style:');
		 $tableB->printRow();
		}

 $tableB->easyCell("");
 $tableB->easyCell("");
 $tableB->easyCell("");
 $tableB->easyCell("");
 $tableB->easyCell("");
 $tableB->printRow();

 $tableB->endTable(0);
//########################################################
$brgy_code = "BC2"; 
// $position = "%" . "Punong Barangay" . "%";
$MYsql = "SELECT * FROM `brgy_official_tbl` WHERE `brgy_code`=? ORDER BY `brgy_id`";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('s',$_POST['bcode']);
$MYstmt->execute();
$datax = array();
$Result = $MYstmt->get_result();
if ($Result->num_rows >= 1 )
{
	 while ($dataz = $Result->fetch_assoc())
		{
            $datax[] = $dataz;
		}

 $first_data = $datax[0]['first_name'] . " " . substr($datax[0]['middle_name'],0,1) . "." . " " . $datax[0]['last_name'];
 $first_datas = $datax[0]['position']; 
 $pdf->SetY($y);
 $tableB=new easyTable($pdf, 2, 'align:{CC}; width:90; l-margin:115; font-family:Arial;font-size:9; border:0; paddingY:1.5 ');
 $tableB->easyCell( "$first_data ", 'colspan:3;font-size:9');
 $tableB->printRow(); 
  $tableB->easyCell( "Punong Barangay", 'colspan:3;font-size:9;font-style:R');
 $tableB->printRow(); 
 $tableB->easyCell("", 'colspan:3; ');
 $tableB->printRow();
 
$second_data = $datax[1]['first_name'] . " " . substr($datax[1]['middle_name'],0,1) . "."  ." " . $datax[1]['last_name'];
$second_datas = $datax[1]['position']; 

$third_data = $datax[2]['first_name'] . " " . substr($datax[2]['middle_name'],0,1) . "."  ." " . $datax[2]['last_name'];
$third_datas = $datax[2]['position'];

    $tableB->easyCell("$second_data",'font-size:9');
    $tableB->easyCell("$third_data",'font-size:9');
    $tableB->printRow(); 
    $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->printRow(); 
    $tableB->easyCell("");
    $tableB->easyCell("");
    $tableB->printRow(); 
 
$fourth_data = $datax[3]['first_name'] . " " . substr($datax[3]['middle_name'],0,1) . "."  ." " . $datax[3]['last_name'];
$fourth_datas = $datax[3]['position'];

$fifth_data = $datax[4]['first_name'] . " " . substr($datax[4]['middle_name'],0,1) . "."  ." " . $datax[4]['last_name'];
$fifth_datas = $datax[4]['position'];

    $tableB->easyCell("$fourth_data",'font-size:9');
    $tableB->easyCell("$fifth_data",'font-size:9');
    $tableB->printRow(); 
    $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->printRow(); 
    $tableB->easyCell("");
    $tableB->easyCell("");
    $tableB->printRow(); 

$sixth_data = $datax[5]['first_name'] . " " . substr($datax[5]['middle_name'],0,1) . "." ." " . $datax[5]['last_name'];
$sixth_datas = $datax[5]['position'];

$seven_data = $datax[6]['first_name'] . " " . substr($datax[6]['middle_name'],0,1) . "." ." " . $datax[6]['last_name'];
$seven_datas = $datax[6]['position'];

    $tableB->easyCell("$sixth_data",'font-size:9');
    $tableB->easyCell("$seven_data",'font-size:9');
    $tableB->printRow();
      $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->printRow(); 
    $tableB->easyCell("");
    $tableB->easyCell("");
    $tableB->printRow(); 

$eight_data = $datax[7]['first_name'] . " " . substr($datax[7]['middle_name'],0,1) . "." ." " . $datax[7]['last_name'];
$eight_datas = $datax[7]['position'];

$nine_data = $datax[8]['first_name'] . " " . substr($datax[8]['middle_name'],0,1) . "." ." " . $datax[8]['last_name'];
$nine_datas = $datax[8]['position'];

    $tableB->easyCell("$eight_data",'font-size:9');
    $tableB->easyCell("$nine_data",'font-size:9');
    $tableB->printRow(); 
      $tableB->easyCell("Kagawad",'font-size:9;font-style:R');
    $tableB->easyCell("SK Chairman",'font-size:9;font-style:R');
    $tableB->printRow(); 
    $tableB->easyCell("");
    $tableB->easyCell("");
    $tableB->printRow(); 

$tenth_data = $datax[9]['first_name'] . " " . substr($datax[9]['middle_name'],0,1) . "." ." " . $datax[9]['last_name'];
$tenth_datas = $datax[9]['position'];

$eleven_data = $datax[10]['first_name'] . " " . substr($datax[10]['middle_name'],0,1) . "." ." " . $datax[10]['last_name'];
$eleven_datas = $datax[10]['position'];

    $tableB->easyCell("$tenth_data",'font-size:9');
    $tableB->easyCell("$eleven_data",'font-size:9');
    $tableB->printRow();
         $tableB->easyCell("Secretary",'font-size:9;font-style:R');
    $tableB->easyCell("Treasurer",'font-size:9;font-style:R');
    $tableB->printRow();  
    $tableB->easyCell("");
    $tableB->easyCell("");
    $tableB->printRow(); 
    
 $tableB->endTable(0);
}

 $name = "LEOVINA A. HERNANDEZ";
 $table1=new easyTable($pdf, 1);
 $table1->rowStyle('font-size:8;');
 $table1->easyCell("Date Prepared: _________________" . " " . "2019");
 $table1->printRow();

 $table1->easyCell("Attended By" . " " . "All Barangay Officers");
 $table1->printRow(); 
 $table1->easyCell($MLGOO . "\n" . "DILG-MLGOO", 'align:C');
 $table1->printRow();  

 $filename = "barangay-monthly.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush(); 
 }
?>