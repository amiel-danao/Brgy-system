<?php 
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include 'config.php';
 


if(isset($_POST['p_bclearance']))
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
      // $pdf->Image('../../bimages/dilg.jpg',10,35,200);
       $pdf->Image('../../logoimg/Watermark'.'.png',20,30,170);
       $pdf->Image('../../bimages/z/th.jpg',152,158,40);
       $pdf->Image('../../logoimg/'. $_POST['bcode'].'.png',25,3,40,35);
       
//      $pdf->Cell(195 , 5,'Province of Cavite',0,1,'C');
//      $pdf->Cell(195 , 5,'BARANGAY BUCAL 2',0,1,'C');
//      $pdf->Cell(195 , 5,'MUNICIPALITY OF MARAGONDON',0,1,'C');
//      $pdf->Cell(195 , 5,'BARANGAY LAYONG MABILOG',0,1,'C');
//      $pdf->Cell(195 , 5,'-oOo-',0,0,'C');
//      $pdf->Ln(7);
//      $pdf->SetFont('Arial', 'B', 12);
//      $pdf->Cell(195 , 5,'OFFICE OF THE BARANGAY COUNCIL',0,0,'C');

//       $pdf->Ln(5);
 //==============================================
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('Republic of the Philippines', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('Province of Cavite', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();

 $table1->easyCell('Municipality of Maragondon', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('Barangay'.' ' .$_POST['bname'], 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->easyCell('-oOo-', 'font-size:10; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
 $pdf->Ln(7);
  $table1->easyCell('OFFICE OF THE BARANGAY COUNCIL', 'font-size:12; font-family:Arial; paddingY:0; font-style:B; align:C');
 $table1->printRow();
 $table1->endTable();



 //=============================================================
$sql = "SELECT * FROM `brgy_official_tbl` WHERE `brgy_code`=? ORDER BY `brgy_id`";
$stmt = $db->prepare($sql);
$stmt->bind_param('s',$_POST['bcode']);
$stmt->execute();
$datax = array();
$Result = $stmt->get_result();
if ($Result->num_rows >= 1 )
{
   while ($dataz = $Result->fetch_assoc())
    {
            $datax[] = $dataz;
    } 
}
$firstdata = $datax[0]['first_name']." ".$datax[0]['middle_name'] ."."." " .$datax[0]['last_name'];
$seconddata = $datax[1]['first_name']." ".$datax[1]['middle_name'] ."."." " .$datax[1]['last_name'];
$thirddata = $datax[2]['first_name']." ".$datax[2]['middle_name'] ."."." " .$datax[2]['last_name'];
$fourthdata = $datax[3]['first_name']." ".$datax[3]['middle_name'] ."."." " .$datax[3]['last_name'];
$fifthdata = $datax[4]['first_name']." ".$datax[4]['middle_name'] ."."." " .$datax[4]['last_name'];
$sixdata = $datax[5]['first_name']." ".$datax[5]['middle_name'] ."."." " .$datax[5]['last_name'];
$seventhdata = $datax[6]['first_name']." ".$datax[6]['middle_name'] ."."." " .$datax[6]['last_name'];
$eightdata = $datax[7]['first_name']." ".$datax[7]['middle_name'] ."."." " .$datax[7]['last_name'];
$ninedata = $datax[8]['first_name']." ".$datax[8]['middle_name'] ."."." " .$datax[8]['last_name'];
$tendata = $datax[9]['first_name']." ".$datax[9]['middle_name'] ."."." " .$datax[9]['last_name'];
$elevendata = $datax[10]['first_name']." ".$datax[10]['middle_name'] ."."." " .$datax[10]['last_name'];

 $y=$pdf->GetY(); 
 $table=new easyTable($pdf, '{30,26}', ' align:L;border:1;font-size:8.5; font-style:B; border:1;border-width:0.7; border-color:#32CD32');
 $table->easyCell("",'colspan:2;align:C;border:LRT');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 
 
 $table->easyCell("Barangay Council\n"."CY 2019-" .$cyear,'colspan:2;font-size:12;align:C;font-color:#B22222;border:LR');
 $table->printRow();

 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell('','colspan:2;border:LR');
 $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->rowStyle('font-family:Arial; font-style:B; font-size:8.5'); 
 $table->easyCell("HON.". " " .$firstdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY CAPTAIN" . "\n" . "OVER-ALL COMMITTEE CHAIRMAN",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
  $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$seconddata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nEnvironmental & Narural \n Resources",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$thirddata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nAgriculture, Livelihood \n RTrade & industry Programs",'colspan:2;align:C;paddingY:0;border:LR ;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

  $table->easyCell("HON.". " " .$fourthdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nInfrastructure Program",'colspan:2;align:C;paddingY:0;border:LR ;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON.". " " .$fifthdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
 $table->printRow();
 $table->easyCell("BARANGAY KAGAWAD" . "\n" . "Exec. Committee Chairman \nSocial Services",'colspan:2;align:C;paddingY:0;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();

 $table->easyCell("HON." . " " .$sixdata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
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

 $table->easyCell($tendata,'colspan:2;align:C;valign:M;font-color:#B22222;border:LR');
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
 $table->easyCell("CLERK",'colspan:2;align:C;paddingY:0.4;border:LR;font-size:8');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LR');
 $table->printRow();
 $table->easyCell("",'colspan:2;align:C;border:LRB');
 $table->printRow();

 $table->endTable();
 $final_vposition=$pdf->GetY(); 






 $pdf->SetY($y); 
 $table=new easyTable($pdf, '{1,15,17,9,12,8,12,27,32,1}', 'align:R;border:0;  border-width:0.7;border-color:#32CD32;font-size:12');

// for($i=0; $i<20; $i++)
// { 
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10; border-width:0.7'); 
    $table->easyCell("",'border:LT');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:T');
    $table->easyCell("",'border:TR');
    $table->printRow();
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("BC No:");
    $table->easyCell($_POST['bcno'],'font-style:BU;');
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("Series". " ".$year,'colspan:2');
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

      $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell(" ");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

      $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Courier; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("BARANGAY CLEARANCE",'font-style:B; font-color:#32CD32;font-size:25;colspan:8;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

   $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("To Whom It May Concern:",'colspan:4');
   // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10; paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("This is certify That",'colspan:3;valign:B');
  // $table->easyCell("");
    $table->easyCell($_POST['fname'] . " " . substr($_POST['mi'],0,1). "." . " " . $_POST['sname'],'paddingY:0;border:B; border-color:#000000; valign:M; colspan:4; align:C');
    //$table->easyCell("");
   // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //   $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10; paddingY:0'); 
    $table->easyCell("");
    $table->easyCell($_POST['age'],'paddingY:0;border:B; border-color:#000000; valign:M; align:C');
    $table->easyCell("years of age,",'colspan:2;align:C');
    $table->easyCell($_POST['status'],'colspan:2;align:C; paddingY:0;border:B; border-color:#000000; valign:M');
    // $table->easyCell("");
    $table->easyCell("permanent resident of the Barangay and",'colspan:4;border:R');
    // $table->easyCell("");
     //$table->easyCell("");
    // $table->easyCell("");
   $table->easyCell("");
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10;  paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("Known to be a good character and citizenry. And has NO PENDING CASE",'colspan:8;align:J');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("" ,'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("either civil or criminal in this office / Barangay as of this date.",'colspan:8');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

      $table->rowStyle('font-family:Arial; font-style:B;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("This certification is being issued upon request of",'colspan:6;font-size:10;paddingY:0;valign:M');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell(strtok($_POST['fname']," "),'colspan:2');
    $table->easyCell($_POST['fname'],'paddingY:0;border:B; border-color:#000000; valign:M;font-size:9.8;align:C');
    $table->easyCell("",'border:R');
    $table->printRow();
    
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell(substr($_POST['mi'],0,1). "." . " " . $_POST['sname'],'colspan:3; paddingY:0;border:B; border-color:#000000; valign:M');
   // $table->easyCell("");
    //$table->easyCell("in connection for",'colspan:2;align:C');
    $table->easyCell("in connection for",'colspan:3');
    //$table->easyCell("");
   // $table->easyCell("");
    $table->easyCell($_POST['purpose'],'colspan:2; paddingY:0;border:B; border-color:#000000; valign:M');
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Signed and issued this",'colspan:4;align:C');
  // 
   // $table->easyCell("");
    // $table->easyCell($day,'paddingY:0;border:B; border-color:#000000; valign:M;align:C');
    // $table->easyCell("day of",'colspan:2;align:C');
   // $table->easyCell("");
     $table->easyCell($day,'paddingY:0;border:B; border-color:#000000; valign:M;align:C');
    // $table->easyCell($month,'paddingY:0;border:B; border-color:#000000; valign:M;align:C');
    $table->easyCell("day of",'align:C');
     $table->easyCell($month,'paddingY:0;border:B; border-color:#000000; valign:M;align:C');
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("Year lord of". " " . $year."." ,'colspan:2');
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

     $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

     $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("VALID FOR 90 days only upon issuance",'font-style:BI; font-color:#B22222;font-size:13;colspan:8;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    // $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    $table->easyCell("",'border:R');
    $table->printRow();
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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


    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("",'colspan:4;align:C; paddingY:0;border:B; border-color:#104E8B; valign:M');
    // $table->easyCell("");
    // $table->easyCell("");
   // $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


    $table->rowStyle('font-family:Arial;font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("Applicants Signature",'colspan:4;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");

    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
        $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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


    $table->rowStyle('font-family:Arial; font-style:B;font-size:10;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("CTN NO :",'colspan:2;align:C');
    // $table->easyCell("");
    $table->easyCell($_POST['ctcno'],'colspan:4; paddingY:0;border:B; border-color:#000000; valign:M');
   // $table->easyCell("");
    //$table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');

    $table->printRow();
    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B;font-size:10;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("Date Issued :",'colspan:2;align:C');
    // $table->easyCell("");
    $table->easyCell($month . " " . $day .",". " " . $year,'colspan:4;paddingY:0;border:B; border-color:#000000; valign:M');
   // $table->easyCell("");
    //$table->easyCell("");
    //$table->easyCell("");

    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
        $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B;font-size:10;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("Place Issued :",'colspan:2;align:C;valign:B');
    // $table->easyCell("");
    $table->easyCell("Maragondon, Cavite",'colspan:4;paddingY:0;border:B; border-color:#000000; valign:M');
   // $table->easyCell("");
    //$table->easyCell("");
    //$table->easyCell("");

    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("Right Thumb Mark",'colspan:2;align:C');
   // $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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



    $table->rowStyle('font-family:Arial;font-style:B; font-size:10'); 
    $table->easyCell("");
    $table->easyCell("",'colspan:2;align:C');
    // $table->easyCell("");
    $table->easyCell("",'colspan:3');
   // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

     $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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



 $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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


 $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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

   // $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("");
   //  $table->easyCell("",'border:R');
   //  $table->printRow();
    //    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

 // $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("");
 //    $table->easyCell("",'border:R');
 //    $table->printRow();



    $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
    $table->easyCell("");
    $table->easyCell("APPROVED FOR ISSUANCE",'font-style:B; font-color:#32CD32;font-size:14;colspan:8;align:C');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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

    $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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

     $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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
     $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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

    $table->rowStyle('font-family:Arial;font-style:B; font-size:12'); 
    $table->easyCell("");
    $table->easyCell($firstdata,'font-style:BU; font-color:#000000;colspan:8;align:C;paddingY:0');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();


    $table->rowStyle('font-family:Arial; font-style:B;font-size:9.5'); 
    $table->easyCell("");
    $table->easyCell("Punong Barangay",'font-color:#000000;colspan:8;align:C;paddingY:0.7');
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    // $table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    //  $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
         $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
         $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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



    //  $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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

    //  $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
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


    $table->rowStyle('font-family:Arial; font-style:B;font-size:10'); 
    $table->easyCell("  "."Amount Paid:",'colspan:3');
    //$table->easyCell("");
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial;font-style:B; font-size:12;paddingY:0'); 
    $table->easyCell("");
    $table->easyCell("Php:",'align:C;colspan:2');
    //$table->easyCell("");
    $table->easyCell($_POST['paid'],'colspan:2;border:B;border-color:#000000');
    //$table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();
        $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    $table->rowStyle('font-family:Arial;font-style:B; font-size:8;paddingY:0'); 
    $table->easyCell("OR no:",'colspan:3 ;align:C');
   // $table->easyCell("");
    // $table->easyCell("");
    $table->easyCell($_POST['or'],'colspan:3;border:B;border-color:#000000');
  //  $table->easyCell("");
  //  $table->easyCell("",'colspan:2');
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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



     $table->rowStyle('font-family:Arial;font-style:B; font-size:8;paddingY:0'); 
    $table->easyCell("Date Issued:",'colspan:3;align:C');
   // $table->easyCell("");
     //$table->easyCell("");
    $table->easyCell($month . " " . $day.",". " " . $year,'colspan:3;border:B;border-color:#000000');
  //  $table->easyCell("");
  //  $table->easyCell("");
   $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("");
    $table->easyCell("",'border:R');
    $table->printRow();

       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    //     $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //     $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
    //     $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

    //    $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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
       $table->rowStyle('font-family:Arial; font-style:B; font-size:10'); 
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

 $table->endTable(10);
 $pdf->SetY(max($final_vposition, $pdf->GetY())); 

 insertrecordz($_POST['fname'],$_POST['sname'],$_POST['mi'],$id,$_POST['bcno'],$_POST['ctcno'],$_POST['or'],$_POST['paid'],$_POST['bcode']);
 $filename = "barangay-clearance.pdf";
 $pdf->Output('I', $filename);
 ob_end_flush();
}

function insertrecordz($fname,$lname,$mname,$id,$bcno,$ctc,$or,$paid,$code)
 {
  global $db;
  $date = date("Y-m-d");
  $certificate = "Barangay Clearance";
  $sql = "INSERT INTO `brgy_bclearance_tbl`(`fname`, `lname`, `mname`, `residents_id`, `date`, `type_of_certificate`, `bcno`, `ctcno`, `orno`, `paid`, `bcode`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
  $mystmt = $db->prepare($sql);
  $mystmt->bind_param('sssissiiiis',$fname,$lname,$mname,$id,$date,$certificate,$bcno,$ctc,$or,$paid,$code);
  $mystmt->execute(); 
  $mystmt->close();
  $db->close();

}
 ?>