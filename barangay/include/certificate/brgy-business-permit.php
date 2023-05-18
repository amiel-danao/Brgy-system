<?php 
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include 'config.php';


if(isset($_POST['p_bpermit']))
{
 $pdf=new exFPDF();
 $pdf->AddPage(); 
 $pdf->SetFont('helvetica','',10);

 $day = date("d");
 $month = date("F");
 $year = date("Y");

 $cyear = $year + 1;
 
 $id = $_POST['Rid'];

// $pdf->Cell(195 , 5,'Republic of the Philippines ',0,1,'C');
	//	$pdf->Image('../../bimages/dilg.jpg',37,5,26);
 $pdf->Image('../../logoimg/Watermark'.'.png',20,30,170);
    $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',25,3,40,35);
// 			//$pdf->Image('../../bimages/dilg.jpg',10,35,200);
// 			$pdf->Cell(195 , 5,'Province of Cavite',0,1,'C');
// 			$pdf->Cell(195 , 5,'BARANGAY BUCAL 2',0,1,'C');
// 			$pdf->Cell(195 , 5,'MUNICIPALITY OF MARAGONDON',0,1,'C');
// 			$pdf->Cell(195 , 5,'BARANGAY LAYONG MABILOG',0,1,'C');
// 			$pdf->Cell(195 , 5,'-oOo-',0,0,'C');
// 			$pdf->Ln(7);
// 			$pdf->SetFont('Arial', 'B', 12);
// 			$pdf->Cell(195 , 5,'OFFICE OF THE BARANGAY COUNCIL',0,0,'C');

//       $pdf->Ln(5);
 
 $table1=new easyTable($pdf, '{195}');
 $table1->easyCell('Republic of the Philippines', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('Province of Cavite', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('Municipalit of Maragondon', 'font-size:10; font-family:Arial; paddingY:0; 
  align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('Barangay'. ' ' . $_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('-oOo-', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
 $pdf->Ln(7);
 $table1->easyCell('OFFICE OF THE BARANGAY COUNCIL', 'font-size:12; font-family:Arial; paddingY:0; font-style:B; align:C');
 $table1->printRow();

 $table1->endTable();
 //==============================================
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
}
$firstdata = $datax[0]['first_name']." ".substr($datax[0]['middle_name'],0,1) ."."." " .$datax[0]['last_name'];
$seconddata = $datax[1]['first_name']." ".substr($datax[1]['middle_name'],0,1) ."."." " .$datax[1]['last_name'];
$thirddata = $datax[2]['first_name']." ".substr($datax[2]['middle_name'],0,1) ."."." " .$datax[2]['last_name'];
$fourthdata = $datax[3]['first_name']." ".substr($datax[3]['middle_name'],0,1) ."."." " .$datax[3]['last_name'];
$fifthdata = $datax[4]['first_name']." ".substr($datax[4]['middle_name'],0,1) ."."." " .$datax[4]['last_name'];
$sixdata = $datax[5]['first_name']." ".substr($datax[5]['middle_name'],0,1) ."."." " .$datax[5]['last_name'];
$seventhdata = $datax[6]['first_name']." ".substr($datax[6]['middle_name'],0,1) ."."." " .$datax[6]['last_name'];
$eightdata = $datax[7]['first_name']." ".substr($datax[7]['middle_name'],0,1) ."."." " .$datax[7]['last_name'];
$ninedata = $datax[8]['first_name']." ".substr($datax[8]['middle_name'],0,1) ."."." " .$datax[8]['last_name'];
$tendata = $datax[9]['first_name']." ".substr($datax[9]['middle_name'],0,1) ."."." " .$datax[9]['last_name'];
$elevendata = $datax[10]['first_name']." ".substr($datax[10]['middle_name'],0,1) ."."." " .$datax[10]['last_name'];
 $y=$pdf->GetY(); 
 $table=new easyTable($pdf, '{30,26}', ' align:L;border:1;font-size:8.5; font-style:B; border:1;border-width:0.7; border-color:#0BB5FF');
 $table->easyCell("",'colspan:2;align:C;border:LRT');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 
 $table->easyCell("Barangay Council\n"."CY 2019-2020",'colspan:2;font-size:12;align:C;font-color:#B22222;border:LR');
 $table->printRow();

 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell('','colspan:2;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->rowStyle('font-family:Arial; font-style:B; font-size:8.5'); 
 $table->easyCell("HON." . " " . "CORNELIO R. AGRIMANO",'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY CAPTAIN" . "\n" . $firstdata,'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON."." ".$seconddata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nEnvironmental & Narural \n Resources",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$thirddata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nAgriculture, Livelihood \n RTrade & industry Programs",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

  $table->easyCell("HON."." ".$fourthdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nInfrastructure Program",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$fifthdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nSocial Services",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$sixdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \n Health & Sanitation, \n Census Program",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$seventhdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \n Peace & Order Program",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
  $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();


 $table->easyCell("HON.". " " .$eightdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \n Budget & Appropriation",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
  $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

  $table->easyCell("HON.". " " .$ninedata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \n Youth And Sports Devt. program",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
  $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell($tendata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR;');
 $table->printRow();
 $table->easyCell("BARANGAY SECRETARY",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
  $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 //  $table->easyCell("",'colspan:2;align:C');
 // $table->printRow();


 $table->easyCell($elevendata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY TREASURER",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 //  $table->easyCell("",'colspan:2;align:C');
 // $table->printRow();

 $table->easyCell($_POST['clerk'],'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("CLERK",'colspan:2;align:C;paddingY:0.5;border:LR;font-size:8');
 $table->printRow(); 
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 // $table->easyCell("",'colspan:2;align:C;border:LR');
 // $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LRB');
 $table->printRow();
 $table->endTable();
 $final_vposition=$pdf->GetY(); 





 $pdf->SetY($y); 
 $table=new easyTable($pdf, '{3,14,15,10,10,10,15,15,10,8,22,2}', 'align:R;border:0; border-width:0.7; border-color:#0BB5FF;font-size:12');

    $table->rowStyle('font-family:Arial; font-size:30'); 
    $table->easyCell("",'border:TL');
    $table->easyCell($year,'colspan:2;border:T');
   // $table->easyCell("");
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
      $table->easyCell("",'border:T');
    $table->easyCell("",'border:RT');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("BC No:");
    $table->easyCell($_POST['bcno'],'border:B;border-color:#000000;align:C');
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
      $table->easyCell("");
    $table->easyCell("");
       $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("BARANGAY \n BUSINESS CLEARANCE ",'font-style:B; font-color:#0BB5FF;font-size:25;colspan:10;align:C;font-family:Courier;paddingY:0');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    //$table->easyCell("");
      //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

      $table->rowStyle('font-family:Arial; font-size:13.5;font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
   $table->easyCell("");
   $table->easyCell("");
   $table->easyCell("");
   $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


    $table->rowStyle('font-family:Arial; font-size:13.5;font-style:B'); 
    $table->easyCell("");
    $table->easyCell("To Whom It May Concern:",'colspan:7');
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


     $table->rowStyle('font-family:Arial; font-size:10.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Pursuant to existing Barangay Revenue Code Ordinance"." " .
        "2019"."," ,'colspan:9');
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


    $table->rowStyle('font-family:Arial; font-size:10.8; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("PERMIT is hereby granted to:",'colspan:5');
    //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10; font-style:B;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell($_POST['business'],'align:C;colspan:8;border:B;border-color:#B22222');
    //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Business",'colspan:8;align:C');
    //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell($_POST['fname'],'colspan:8;border:B;border-color:#B22222;paddingY:0;align:C');
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Name of Owner",'colspan:8;align:C');
    //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9; font-style:BU'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Brgy. " . $_POST['bname'] .", Maragondon Cavite",'colspan:8;align:C;font-color:#B22222');
     //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


     $table->rowStyle('font-family:Arial; font-size:9; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Location / Address",'colspan:8;align:C');
    //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();



     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("Business Owner",'colspan:3;align:R;font-color:#B22222');
   // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("is hereby advised to follow strictly existing Barangay",'colspan:7');
    //$table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("Ordinances in relation with the operation of his/her business.",'colspan:9;align:J');
   // $table->easyCell("");
   // $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
    $table->easyCell("VIOLATION",'font-color:#B22222');
    $table->easyCell("",'border:R');
    $table->printRow();

      $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("of the same is a ground for the revocation of this clearance.",'colspan:10');
   // $table->easyCell("");
   // $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
    //$table->easyCell("VIOLATION");
    $table->easyCell("",'border:R');
    $table->printRow();
        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

      $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
   $table->easyCell("PERMIT",'font-color:#B22222');
   $table->easyCell("is a valid up to",'colspan:3;align:R');
   // $table->easyCell("");
    //$table->easyCell("");
   $years = $year + 1;
    $table->easyCell(date("F j") .", " . " "." " .$years ."." ,'colspan:3;align:C');
    // $table->easyCell("");
     //$table->easyCell( ,'align:L');
    $table->easyCell("unless revoke",'colspan:2;align:L');
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->printRow();


$table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("due to a valid cause.",'colspan:4');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("issued this",'colspan:2;align:R');
    // $table->easyCell("");
    $table->easyCell($day,'align:C;border:B;border-color:#000000;align:C');
    $table->easyCell("day of",'colspan:2;align:C');
    //$table->easyCell("");
    $table->easyCell($month,'colspan:2;border:B;border-color:#000000;align:C');
    //$table->easyCell("");
    $table->easyCell("2019",'align:L');
    $table->easyCell(", at Barangay",'colspan:2;align:L');
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell( $_POST['bname'].", Maragondon, Cavite, Philippines.",'colspan:9');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
     $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    //  $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B'); 
    $table->easyCell("");
    $table->easyCell($_POST['fname'],'colspan:5;border:B;border-color:#B22222;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
 $table->rowStyle('font-family:Arial; font-size:9.7; font-style:B');
     $table->easyCell("");
    $table->easyCell("Name/Signature of Applicant",'colspan:5;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:9.7; font-style:BU'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell($firstdata,'colspan:4;font-style:BU;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:8; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Punong Barangay",'colspan:4;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
    $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
    // $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();
    //  $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();
    // $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9; font-style:BU;font-color:#0BB5FF'); 
    $table->easyCell("");
    $table->easyCell("TO BE POSTED INSIDE THE PREMISES OF THE BUSINESS ESTABLISHMENT",'align:C;colspan:10');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


      $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("IMPORTANT",'colspan:2');
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

      $table->rowStyle('font-family:Arial; font-size:9.8; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("e",'font-family:ZapfDingbats;font-size:12;align:C');
    $table->easyCell("This Barangay Permit is not valid without seal",'colspan:7');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-size:9.8; font-style:B'); 
    $table->easyCell("");
    $table->easyCell("e",'font-family:ZapfDingbats;font-size:12;align:C');
    $table->easyCell("Any erasure or alteration invalidates the same ",'colspan:7');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("",'border:R');
    // $table->printRow();

        $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    $table->easyCell("",'border:BL');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:B');
    $table->easyCell("",'border:RB');
    $table->printRow();
    //     $table->rowStyle('font-family:Arial; font-size:10; font-style:B'); 
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->printRow();
  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("years of age",'colspan:2');
  //   $table->easyCell("",'colspan:2');
  //   // $table->easyCell("");
  //    $table->easyCell("permanent residents of the barangay and",'colspan:3');
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("Known to be a good character and citizenry. And has NO PENDING CASE",'colspan:8;align:J');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("either civil or criminal in this office / Barangay of this date",'colspan:7');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();


  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("",'colspan:3');
  //  // $table->easyCell("");
  //   //$table->easyCell("in connection for",'colspan:2;align:C');
  //   $table->easyCell("in connection for",'colspan:3;align:C');
  //   //$table->easyCell("");
  //  // $table->easyCell("");
  //   $table->easyCell("",'colspan:2');
  //   $table->easyCell("");
  //   $table->printRow();


  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("Signed and issued this",'colspan:3');
  // // $table->easyCell("");
  //  // $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("day of",'colspan:2;align:C');
  //  // $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("Year of lord");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("2019",'colspan:2');
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("VALID FOR 90 days only upon issuance",'font-style:BI; font-color:#B22222;font-size:15;colspan:8;align:C');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();


  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("",'colspan:4;align:C');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //  // $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();


  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("Applicants Signature",'colspan:4;align:C');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");

  //   $table->easyCell("");
  //   $table->easyCell("",'border:0');
  //   $table->easyCell("",'border:0');
  //   $table->easyCell("");
  //   $table->printRow();


  //    $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("CTN NO :",'colspan:2;align:C');
  //   // $table->easyCell("");
  //   $table->easyCell("",'colspan:3');
  //  // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("",'border:0');
  //   $table->easyCell("",'border:0');
  //   $table->easyCell("");
  //   $table->printRow();

  //    $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("Date Issued :",'colspan:2;align:C');
  //   // $table->easyCell("");
  //   $table->easyCell("",'colspan:3');
  //  // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");

  //   $table->easyCell("",'border:0');
  //   $table->easyCell("",'border:0');
  //   $table->easyCell("");
  //   $table->printRow();

  //    $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("Place Issued :",'colspan:2;align:C');
  //   // $table->easyCell("");
  //   $table->easyCell("",'colspan:3');
  //  // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");

  //   $table->easyCell("",'border:0');
  //   $table->easyCell("",'border:0');
  //   $table->easyCell("");
  //   $table->printRow();



  //    $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("",'colspan:2;align:C');
  //   // $table->easyCell("");
  //   $table->easyCell("",'colspan:3');
  //  // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("Right Thumb Mark",'colspan:2');
  //  // $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();


  //   $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("APPROVED FOR ISSUANCE",'font-style:B; font-color:#32CD32;font-size:14;colspan:8;align:C');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //    $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //    $table->rowStyle('font-family:Arial; font-size:10'); 
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();

  //   $table->rowStyle('font-family:Arial; font-size:12'); 
  //   $table->easyCell("");
  //   $table->easyCell("BARANGAY CAPTAIN",'font-style:BU; font-color:#000000;colspan:8;align:C');
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   // $table->easyCell("");
  //   //$table->easyCell("");
  //   $table->easyCell("");
  //   $table->printRow();


 
 $table->endTable(10);
 $pdf->SetY(max($final_vposition, $pdf->GetY())); 

 //----------------------------------------------
 
insertrecords($_POST['fname'],$id,$_POST['bcno'],$_POST['business'],$_POST['bcode']);

 $filename = "barangay-business-permit.pdf";
 $pdf->Output('I', $filename); 
ob_end_flush();
}



function insertrecords($fname,$id,$bcno,$business,$bcode)
 {
    global $db;
    $date = date("Y-m-d");
    $certificate = "Barangay Business Permit";
    $sql = "INSERT INTO `brgy_bpermit_tbl`(`fullname`, `residents_id`, `date`, `bcno`, `business`, `type_of_certificate`, `bcode`) VALUES (?,?,?,?,?,?,?)";
    $mystmt = $db->prepare($sql);
    $mystmt->bind_param('sisisss',$fname,$id,$date,$bcno,$business,$certificate,$bcode);
    $mystmt->execute(); 
    $mystmt->close();
    $db->close();
}
 ?>