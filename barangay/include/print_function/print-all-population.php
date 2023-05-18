<?php
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include '../function/config.php';


if(isset($_GET['barangay']) && isset($_GET['barangayname']))
{


 $pdf=new exFPDF('P', 'mm','Legal');
 $pdf->AddPage('P'); 

 $pdf->SetFont('helvetica','',10);
 $pdf->Image('../../logoimg/'. $_GET['barangay'].'.png',40,2,28,30);
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('Summary Report', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();

 $table1->easyCell('Of Population of Barangay' . ' ' .$_GET['barangayname'] , 'font-size:10; font-family:Arial; paddingY:0; align:C ;font-style:B');
 $table1->printRow();

 $table1->easyCell('Maragondon, Cavite'. ' ' . '2019', 'font-size:10; font-family:Arial; paddingY:0; align:C ;font-style:B');
 $table1->printRow();
 $pdf->Ln(8);
 $table1->rowStyle('font-size:10; font-family:Arial;font-style:B');
 $table1->easyCell('By Sitio','align:C');
 $table1->printRow();
 $table1->endTable();

//====================================================================
 $table= new easyTable($pdf, '{40,40,40,40,40}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
 $table->easyCell('Sitio Name');
 $table->easyCell('','border:LTB');
 $table->easyCell('Population','border:BT');
 $table->easyCell('','border:RTB');
 $table->easyCell('Total HH');
 $table->printRow();

 $table->easyCell('');
 $table->easyCell('Male');
 $table->easyCell('Female');
 $table->easyCell('Total');
 $table->easyCell('');
 $table->printRow();

$bsql = "SELECT `street`, COUNT(CASE WHEN gender = 'Male' THEN id END)as m,
COUNT(CASE WHEN gender = 'Female' THEN id END) as f, 
COUNT(Distinct house_no) as th FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY street ";
$bstmt = $db->prepare($bsql);
$bstmt->bind_param('s',$_GET['barangay']);
$bstmt->execute();
$Result = $bstmt->get_result();
$totalsitiof = 0;
$totalsitiom = 0;
$totalhns = 0;
$totalmf = 0;
$totalgender = 0;
 while ($data = $Result->fetch_assoc())
 { 
   $table->rowStyle('align:{LLLL}; valign:M; font-family:Arial; font-size:10;');
   $table->easyCell($data['street']);
   $table->easyCell($data['m']);
   $table->easyCell($data['f']);
   $totalmf = $data['m'] + $data['f'];
   $table->easyCell($totalmf);
   $table->easyCell($data['th']);
   $table->printRow();
   $totalsitiom += $data['m'];
   $totalsitiof += $data['f'];
   $totalhns  += $data['th'];
   $totalgender += $totalmf ;
 }

 $table->rowStyle('align:{LLLL}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('TOTAL');
 $table->easyCell($totalsitiom);
 $table->easyCell($totalsitiof);
 $table->easyCell($totalgender);
 $table->easyCell($totalhns);
 $table->printRow();
 $table->endTable(3);

 $table1=new easyTable($pdf, 1,'align:C');
 $table1->easyCell('By Sex', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->endTable();
 $table= new easyTable($pdf, '{65,65,70}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
 $table->easyCell('Male');
 $table->easyCell('Female');
 $table->easyCell('Total');
 $table->printRow();

$bsql = "SELECT COUNT(CASE WHEN gender = 'Male' THEN id END), COUNT(CASE WHEN gender = 'Female' THEN id END), COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$_GET['barangay']);
    $bstmt->execute();
    $bstmt->bind_result($m,$f,$t);
    $bstmt->fetch();
    $bstmt->close();
  $table->rowStyle('align:{LLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
  $table->easyCell($m);
  $table->easyCell($f);
  $table->easyCell($t);
  $table->printRow();
  $table->endTable(3);



//   $table1=new easyTable($pdf, 1,'align:C');
//  $table1->easyCell('By Job Employment', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
//  $table1->printRow();
//  $table1->endTable();

//  $table= new easyTable($pdf, '{50,50,50,50}',' width:100; border:1; border-color:#000000; align:C');
//  $table->rowStyle('align:{CCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
//  $table->easyCell('Employed');
//  $table->easyCell('UnEmployed');
//  $table->easyCell('UnDefined');
//  $table->easyCell('Total');
//  $table->printRow();

// $bsql = "SELECT COUNT(CASE WHEN job != 'none' AND job != ' ' THEN id END), COUNT(CASE WHEN job = 'none' THEN id END), COUNT(CASE WHEN job = ' ' THEN id END), COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
//     $bstmt = $db->prepare($bsql);
//     $bstmt->bind_param('s',$_GET['barangay']);
//     $bstmt->execute();
//     $bstmt->bind_result($e,$ue,$ud,$t);
//     $bstmt->fetch();
//     $bstmt->close();
//   $table->rowStyle('align:{LLLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
//   $table->easyCell($e);
//   $table->easyCell($ue);
//   $table->easyCell($ud);
//   $table->easyCell($t);
//   $table->printRow();
//   $table->endTable(3);


  $table1=new easyTable($pdf, 1,'align:C');
 $table1->easyCell('By Job Employment', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->endTable();

 $table= new easyTable($pdf, '{25,25,25,25,25,25,25,25}',' width:100; border:1; border-color:#000000; align:C');
 $table->rowStyle('align:{CCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
 $table->easyCell('Sex');
 $table->easyCell('HH #');
 $table->easyCell('Employed');
 $table->easyCell('%');
 $table->easyCell('Unemployed');
 $table->easyCell('%');
 $table->easyCell('Not in the Labor Force');
 $table->easyCell('%');
 $table->printRow();

$bsql = "SELECT COUNT(DISTINCT CASE WHEN gender = 'Male' THEN house_no END) ,
COUNT(DISTINCT CASE WHEN gender = 'Female' THEN house_no END) , 

COUNT(CASE WHEN job = 'Employed' AND gender = 'Male' THEN id END), 
COUNT(CASE WHEN job = 'Unemployed' AND gender = 'Male'  THEN id END), 
COUNT(CASE WHEN job = 'none' AND gender = 'Male'  THEN id END), 

COUNT(CASE WHEN job = 'Employed' AND gender = 'Female' THEN id END), 
COUNT(CASE WHEN job = 'Unemployed' AND gender = 'Female'  THEN id END), 
COUNT(CASE WHEN job = 'none' AND gender = 'Female'  THEN id END)  
FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$_GET['barangay']);
    $bstmt->execute();
    $bstmt->bind_result($th,$tn,$em,$uem,$nm,$ef,$uef,$nf);
    $bstmt->fetch();
    $bstmt->close();
    $total = 0;
    $totalpercent = 0;
  $table->rowStyle('align:{LLLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
  $table->easyCell('Male');
  $table->easyCell($th);
  $table->easyCell($em);
  if($em == 0){
     $total = 0;
  }else {
     $total = $em / $th;
  }
  $totalpercent = $total * 100;
  $table->easyCell(number_format($totalpercent,2)."%",'font-style:BI');

  $table->easyCell($uem);
  if($uem == 0){
     $total = 0;
  }else {
     $total = $uem / $th;
  }
  $totalpercent = $total * 100;
  $table->easyCell(number_format($totalpercent,2)."%",'font-style:BI');

  $table->easyCell($nm);
   if($nm == 0){
     $total = 0;
  }else {
     $total = $nm / $th;
  }
  $totalpercent = $total * 100;
  $table->easyCell(number_format($totalpercent,2)."%",'font-style:BI');
  $table->printRow();

  $table->easyCell('Female');
  $table->easyCell($tn);
  $table->easyCell($ef);
   if($ef == 0){
     $total = 0;
  }else {
     $total = $ef / $tn;
  }
  $totalpercent = $total * 100;
  $table->easyCell(number_format($totalpercent,2)."%",'font-style:BI');

  $table->easyCell($uef);
   if($uef == 0){
     $total = 0;
  }else {
     $total = $uef / $tn;
  }
  $totalpercent = $total * 100;
  $table->easyCell(number_format($totalpercent,2)."%",'font-style:BI');

  $table->easyCell($nf);
  if($nf == 0){
     $total = 0;
  }else {
     $total = $nf / $tn;
  }
  $totalpercent = $total * 100;
    $table->easyCell(number_format($totalpercent,2)."%",'font-style:BI');
  $table->printRow();

//=============================================
  $table->easyCell('Both Sex');
  $tottalh = 0; $tottale = 0; $tottalu = 0; $tottaln = 0; $tottalt = 0; $tottalprecent = 0;
  $tottalh = $th + $tn;

  $table->easyCell($tottalh);
    $tottale = $em + $ef;
  if($tottale == 0){
     $tottalt = 0;
  }else{
    $tottalt =  $tottale / $tottalh;
  }
  $tottalprecent = $tottalt * 100;
  $table->easyCell($tottale);
  $table->easyCell(number_format($tottalprecent,2)."%",'font-style:BI');
  
  $tottalu = $uem + $uef;
  if($tottalu == 0){
     $tottalt = 0;
  }else{
    $tottalt =  $tottalu / $tottalh;
  }
  $tottalprecent = $tottalt * 100;
  $table->easyCell($tottalu);
  $table->easyCell(number_format($tottalprecent,2)."%",'font-style:BI');
  
  $tottaln = $nm + $nf;
  if($tottaln == 0){
     $tottalt = 0;
  }else{
    $tottalt =  $tottaln / $tottalh;
  }
  $tottalprecent = $tottalt * 100;
  $table->easyCell($tottaln);
   $table->easyCell(number_format($tottalprecent,2)."%",'font-style:BI');
  $table->printRow();
  $table->endTable(3);


 $table1=new easyTable($pdf, 1,'align:C');
 $table1->easyCell('By Age', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->endTable();
 $table= new easyTable($pdf, '{50,50,50,50}',' width:100; border:1; border-color:#000000; align:C');

// $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
//  $table->easyCell('Undefined');
//  $table->easyCell('Under 18');
//  $table->easyCell('18 - 30');
//  $table->easyCell('31 - 45');
//  $table->easyCell('46 - 60');
//  $table->easyCell('61 - 75');
//  $table->easyCell('76 - 100');
//  $table->easyCell('Total');
//  $table->printRow();

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
 $table->easyCell('Age');
 $table->easyCell('Male');
 $table->easyCell('Female');
 $table->easyCell('Both Sex');
 $table->printRow();

 $totalm = 0;
 $totalf = 0;
$bsql = "SELECT COUNT(CASE WHEN age = 0 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age = 0 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 1 AND age < 18 AND gender = 'Male' THEN id END),
  COUNT(CASE WHEN age >= 1 AND age < 18 AND gender = 'Female' THEN id END),

  COUNT(CASE WHEN age >= 18 AND age <= 30 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 18 AND age <= 30 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 31 AND age <= 45 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 31 AND age <= 45 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 46 AND age <= 60 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 46 AND age <= 60 AND gender = 'Female' THEN id END),

  COUNT(CASE WHEN age >= 61 AND age <= 75 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 61 AND age <= 75 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 76 AND age <= 100 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 76 AND age <= 100 AND gender = 'Female' THEN id END), 

  COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$_GET['barangay']);
    $bstmt->execute();
    $bstmt->bind_result($a0m,$a0f,$a1m,$a1f,$a2m,$a2f,$a3m,$a3f,$a4m,$a4f,$a5m,$a5f,$a6m,$a6f,$at);
    $bstmt->fetch();
    $bstmt->close();
    $Totalage1 = 0; $Totalage2 = 0; $Totalage3 = 0; $Totalage4 = 0; $Totalage5 = 0; $Totalage6 = 0;
    $Totalage7 = 0; $totalgendersex= 0;
  $table->rowStyle('align:{LLLLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
   $table->easyCell('Under 1 yrs old');
   $table->easyCell($a0m);
   $table->easyCell($a0f);
   $Totalage1 = $a0m + $a0f;
   $table->easyCell($Totalage1);
   $table->printRow();
  
  $table->easyCell('Under 18 yrs old');
  $table->easyCell($a1m);
  $table->easyCell($a1f);
  $Totalage2 = $a1m + $a1f;
   $table->easyCell($Totalage2);
  $table->printRow();
  
   $table->easyCell(' 18 - 30 yrs old');
  $table->easyCell($a2m);
   $table->easyCell($a2f);
   $Totalage3 = $a2m + $a2f;
   $table->easyCell($Totalage3);
  $table->printRow();

  $table->easyCell('31 - 45 yrs old');
  $table->easyCell($a3m);
  $table->easyCell($a3f);
   $Totalage4 = $a3m + $a3f;
   $table->easyCell($Totalage4);
  $table->printRow();

  $table->easyCell('46 - 60 yrs old');
  $table->easyCell($a4m);
  $table->easyCell($a4f);
    $Totalage5 = $a4m + $a4f;
   $table->easyCell($Totalage5);
    $table->printRow();

  $table->easyCell('61 - 75 yrs old');
  $table->easyCell($a5m);
  $table->easyCell($a5f);
   $Totalage6 = $a5m + $a5f;
   $table->easyCell($Totalage6);
  $table->printRow();

  $table->easyCell('76 - 100 yrs old');
  $table->easyCell($a6m);
  $table->easyCell($a6f);
    $Totalage7 = $a6m + $a6f;
   $table->easyCell($Totalage7);
  $table->printRow();

  $table->easyCell('Total','font-style:B');
  $totalm = $a0m + $a1m + $a2m + $a3m + $a4m + $a5m + $a6m;
  $totalf = $a0f + $a1f + $a2f + $a3f + $a4f + $a5f + $a6f;
  $totalgendersex = $Totalage1 +$Totalage2 +$Totalage3 +$Totalage4+$Totalage5+$Totalage6+$Totalage7;
  $table->easyCell($totalm,'font-style:B');
  $table->easyCell($totalf,'font-style:B');
  $table->easyCell($totalgendersex,'font-style:B');
  $table->printRow();
  // $table->easyCell($at);
  // $table->printRow();
  $table->endTable(3);



// $bsql = "SELECT COUNT(CASE WHEN age = 0  THEN id END), COUNT(CASE WHEN age >= 1 AND age < 18 THEN id END), COUNT(CASE WHEN age >= 18 AND age <= 30 THEN id END), COUNT(CASE WHEN age >= 31 AND age <= 45 THEN id END), COUNT(CASE WHEN age >= 46 AND age <= 60 THEN id END), COUNT(CASE WHEN age >= 61 AND age <= 75 THEN id END), COUNT(CASE WHEN age >= 76 AND age <= 100 THEN id END), COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
//     $bstmt = $db->prepare($bsql);
//     $bstmt->bind_param('s',$_GET['barangay']);
//     $bstmt->execute();
//     $bstmt->bind_result($a0,$a1,$a2,$a3,$a4,$a5,$a6,$at);
//     $bstmt->fetch();
//     $bstmt->close();
//   $table->rowStyle('align:{LLLLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
//    $table->easyCell($a0);
//   $table->easyCell($a1);
//   $table->easyCell($a2);
//   $table->easyCell($a3);
//   $table->easyCell($a4);
//   $table->easyCell($a5);
//   $table->easyCell($a6);
//   $table->easyCell($at);
//   $table->printRow();
//   $table->endTable(3);
















//  $sqlage ="SELECT
//       SUM(IF(age < 17,1,0)) as 'Under 18',
//       SUM(IF(age BETWEEN 18 and 24,1,0)) as '18 - 30',
//       SUM(IF(age BETWEEN 30 and 39,1,0)) as '30 - 45',
//       SUM(IF(age BETWEEN 40 and 49,1,0)) as '45 - 60',
//       SUM(IF(age BETWEEN 50 and 59,1,0)) as '61 - 75',
//       SUM(IF(age BETWEEN 60 and 69,1,0)) as '76 - 85',
//       SUM(IF(age >=86, 1, 0)) as 'Over 86',
//       SUM(IF(age IS NULL, 1, 0)) as 'Not Filled In (NULL)'
// FROM (SELECT YEAR(CURDATE())-YEAR(bod)) as age FROM residents_tbl) as derived WHERE `brgy_code`= ?  GROUP BY age ";






//========================== Other Age query
// $sqlage ="SELECT 
// CASE WHEN (DATE_FORMAT(CURDATE(), '%Y') - DATE_FORMAT(bod, '%Y') - (DATE_FORMAT(CURDATE(), '00-%m-%d') < DATE_FORMAT(bod, '00-%m-%d'))) <= 20 THEN '1 - 20'
//      WHEN (DATE_FORMAT(CURDATE(), '%Y') - DATE_FORMAT(bod, '%Y') - (DATE_FORMAT(CURDATE(), '00-%m-%d') < DATE_FORMAT(bod, '00-%m-%d'))) <= 30 THEN '21 - 30'
//      WHEN (DATE_FORMAT(CURDATE(), '%Y') - DATE_FORMAT(bod, '%Y') - (DATE_FORMAT(CURDATE(), '00-%m-%d') < DATE_FORMAT(bod, '00-%m-%d'))) <= 50 THEN '31 - 50'
//      WHEN (DATE_FORMAT(CURDATE(), '%Y') - DATE_FORMAT(bod, '%Y') - (DATE_FORMAT(CURDATE(), '00-%m-%d') < DATE_FORMAT(bod, '00-%m-%d'))) >= 50 THEN '51 - 100' END AS agegroup,
// COUNT(*) total
// FROM `residents_tbl` WHERE `brgy_code`=? GROUP BY agegroup";
// $sqlagestmt = $db->prepare($sqlage);
// $sqlagestmt->bind_param('s',$_GET['barangay']);
// $sqlagestmt->execute();
// $totalcount = 0;
// $output = $sqlagestmt->get_result();

 // $table1=new easyTable($pdf, 1,'align:C');
 // $table1->easyCell('BY AGE:', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 // $table1->printRow();
 // $table1->endTable();

 // $table= new easyTable($pdf, '{50,50}',' width:100; border:1; border-color:#000000; align:C');
 // $table->rowStyle('align:{CC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 // $table->easyCell('Age');
 // $table->easyCell('Total');
 // $table->printRow();
 //    while($data = $output->fetch_assoc())
 //      {
 //        $table->rowStyle('align:{CC}; valign:M; font-family:Arial; font-size:10');
 //        $table->easyCell($data['agegroup']);
 //        $table->easyCell($data['total']);
 //        $table->printRow();
 //        $totalcount += $data['total'];
 //      }
 //       $table->rowStyle('align:{CC}; valign:M;font-family:Arial;font-size:10;font-style:B');
 //        $table->easyCell('TOTAL');
 //        $table->easyCell($totalcount);
 //        $table->printRow();

 //  $table->endTable(3);

 // $table1=new easyTable($pdf, 1);
 // $table1->easyCell('BY CIVIL STATUS:', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 // $table1->printRow();
 // $table1->endTable();
//========================== END Other Age query




 $table1=new easyTable($pdf, 1,'align:C');
 $table1->easyCell('By Civil Status', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->endTable();
  
// $table= new easyTable($pdf, '{30,30,30,30,30,30,30}',' width:100; border:1; border-color:#000000; align:L');

//  $table->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
//  $table->easyCell('Single');
//  $table->easyCell('Married');
//  $table->easyCell('Widowed');
//  $table->easyCell('Divorced');
//  $table->easyCell('Separated');
//  $table->easyCell('Live-in');
//  $table->easyCell('Total');
//  $table->printRow();

// $bsql = "SELECT COUNT(CASE WHEN status = 'Single' THEN id END), 
//         COUNT(CASE WHEN status = 'Married' THEN id END), 
//         COUNT(CASE WHEN status = 'Widowed' THEN id END), 
//         COUNT(CASE WHEN status = 'Divorced' THEN id END), 
//         COUNT(CASE WHEN status = 'Separated' THEN id END),
//         COUNT(CASE WHEN status = 'Live-in' THEN id END),
//         COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
// $bstmt = $db->prepare($bsql);
// $bstmt->bind_param('s',$_GET['barangay']);
// $bstmt->execute();
// $bstmt->bind_result($s,$m,$w,$d,$sp,$li,$t);
// $bstmt->fetch();
// $bstmt->close();
//  $table->rowStyle('align:{LLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
//  $table->easyCell($s);
//  $table->easyCell($m);
//   $table->easyCell($w);
//  $table->easyCell($d);
//   $table->easyCell($sp);
//   $table->easyCell($li);
//  $table->easyCell($t);
//  $table->printRow();
 
//  $table->endTable(3);

$table= new easyTable($pdf, '{650,650,650}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10;font-style:B');
 $table->easyCell('Civil Status');
 $table->easyCell('Population');
 $table->easyCell('%');
 $table->printRow();

$bsql = "SELECT COUNT(CASE WHEN status = 'Single' THEN id END), 
        COUNT(CASE WHEN status = 'Married' THEN id END), 
        COUNT(CASE WHEN status = 'Widowed' THEN id END), 
        COUNT(CASE WHEN status = 'Divorced' THEN id END), 
        COUNT(CASE WHEN status = 'Separated' THEN id END),
        COUNT(CASE WHEN status = 'Live-in' THEN id END),
        COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
  $bstmt = $db->prepare($bsql);
  $bstmt->bind_param('s',$_GET['barangay']);
  $bstmt->execute();
  $bstmt->bind_result($s,$m,$w,$d,$sp,$li,$t);
  $bstmt->fetch();
  $bstmt->close();
  $total = 0 ;
  $convert = 0;
   $totalp = 0;
 $table->rowStyle('align:{LLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('Single');
 $table->easyCell($s);
  if($s == 0){
    $total = 0;
  }else{
    $total = $s / $t;
  }
 $convert = $total * 100;
 $table->easyCell(number_format($convert,2) . "%",'font-style:BI');
 $totalp = $convert;
 $table->printRow();

 $table->easyCell('Married');
 $table->easyCell($m);
 if($m == 0){
    $total = 0;
  }else{
     $total = $m / $t;
  }
 $convert = $total * 100;
 $table->easyCell(number_format($convert,2) . "%",'font-style:BI');
 $totalp = $totalp + $convert;
 $table->printRow();

 $table->easyCell('Widowed');
 $table->easyCell($w);
 if($w == 0){
    $total = 0;
  }else{
     $total = $w / $t;
  }
 $convert = $total * 100;
 $table->easyCell(number_format($convert,2) . "%",'font-style:BI');
 $totalp = $totalp + $convert;
 $table->printRow();

 $table->easyCell('Divorced');
 $table->easyCell($d);
   if($d == 0){
    $total = 0;
  }else{
     $total = $d / $t;
  }
 $convert = $total * 100;
 $table->easyCell(number_format($convert,2) . "%",'font-style:BI');
 $totalp = $totalp + $convert;
 $table->printRow();

 $table->easyCell('Separated');
 $table->easyCell($sp);
  if($sp == 0){
    $total = 0;
  }else{
     $total = $sp / $t;
  }
 $convert = $total * 100;
 $table->easyCell(number_format($convert,2)."%",'font-style:BI');
 $totalp = $totalp + $convert;
 $table->printRow();

 $table->easyCell('Live-in');
 $table->easyCell($li);
 if($li == 0){
    $total = 0;
  }else{
     $total = $li / $t;
  }
 $convert = $total * 100;
 $table->easyCell(number_format($convert,2)."%",'font-style:BI');
 $totalp = $totalp + $convert;
 $table->printRow();

 $table->easyCell('Total','font-style:B');
 $table->easyCell($t,'font-style:B');
 $table->easyCell(number_format($totalp,2)."%",'font-style:BI');
 $table->printRow();
 // $table->easyCell($m);
 // $table->easyCell($w);
 // $table->easyCell($d);
 // $table->easyCell($sp);
 // $table->easyCell($li);
 // $table->easyCell($t);
 // $table->printRow();
 
 $table->endTable(3);

$table1=new easyTable($pdf, 1);
 $table1->easyCell('By Religion', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->endTable();

// $table= new easyTable($pdf, '{35,35,35,35,35,35}',' width:100; border:1; border-color:#000000; align:L');

//  $table->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
//  $table->easyCell('Roman Catholic Christianity');
//  $table->easyCell('Protestant Christianity');
//  $table->easyCell('Islam');
//  $table->easyCell('Iglesia ni Cristo');
//  $table->easyCell('Others');
//  $table->easyCell('Total');
//  $table->printRow();

// $bsql = "SELECT COUNT(CASE WHEN religion = 'Roman Catholic Christianity' THEN id END), 
//         COUNT(CASE WHEN religion = 'Protestant Christianity' THEN id END), 
//         COUNT(CASE WHEN religion = 'Islam' THEN id END), 
//         COUNT(CASE WHEN religion = 'Iglesia ni Cristo' THEN id END), 
//         COUNT(CASE WHEN religion = 'Others' THEN id END),
//         COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
// //$brgycode = "BC2";
// $bstmt = $db->prepare($bsql);
// $bstmt->bind_param('s',$_GET['barangay']);
// $bstmt->execute();
// $bstmt->bind_result($rc,$pc,$is,$inc,$o,$t);
// $bstmt->fetch();
// $bstmt->close();
//  $table->rowStyle('align:{LLLLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
//  $table->easyCell($rc);
//  $table->easyCell($pc);
//   $table->easyCell($is);
//  $table->easyCell($inc);
//   $table->easyCell($o);
//  $table->easyCell($t);
//  $table->printRow();
 
//  $table->endTable(3);

$table= new easyTable($pdf, '{70,70,70}',' width:100; border:1; border-color:#000000; align:L');

 $table->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Religion');
 $table->easyCell('Population');
 $table->easyCell('%');
 $table->printRow();

 $bsql = "SELECT COUNT(religion) FROM `residents_tbl` WHERE `brgy_code`= ? ";
 $bstmt = $db->prepare($bsql);
$bstmt->bind_param('s',$_GET['barangay']);
$bstmt->execute();
$bstmt->bind_result($all);
$bstmt->fetch();
$bstmt->close();

 $bsql = "SELECT `religion`, COUNT(*) FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY religion ";
 $bstmt = $db->prepare($bsql);
 $bstmt->bind_param('s',$_GET['barangay']);
 $bstmt->execute();
 $row = $bstmt->get_result();
 $total = 0;
 $totalpercent = 0;
while ($data = $row->fetch_assoc())
 { 

 $table->rowStyle('align:{LLLLLLLLLL}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell($data['religion']);
 $table->easyCell($data['COUNT(*)']);
 $total = $data['COUNT(*)'] / $all;
 $totalpercent = $total * 100;
 $table->easyCell(number_format($totalpercent,2)."%");
 $table->printRow();
 }

 $table->endTable(3);
 
 $table1=new easyTable($pdf, 1);
 $table1->easyCell('By School Distribution', 'font-size:10; font-family:Arial; paddingY:0; align:C;font-style:B');
 $table1->printRow();
 $table1->endTable();

 $table= new easyTable($pdf, '{50,50,50,50}',' width:100; border:1; border-color:#000000; align:L');
 $table->rowStyle('align:{CCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Grade Completed');
 $table->easyCell('Male');
 $table->easyCell('Female');
 $table->easyCell('Total');
 $table->printRow();

 $bsql = "SELECT 
COUNT(CASE WHEN elementary = 'None' AND highschool = 'None' AND college = 'None' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN elementary = 'None' AND highschool = 'None' AND college = 'None' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN elementary = 'Elementary Level' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN elementary = 'Elementary Level' AND gender = 'Female' THEN id END), 

COUNT(CASE WHEN elementary = 'Elementary Graduate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN elementary = 'Elementary Graduate' AND gender = 'Female' THEN id END), 

COUNT(CASE WHEN highschool = 'High School Level' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN highschool = 'High School Level' AND gender = 'Female' THEN id END), 

COUNT(CASE WHEN highschool = 'High School Graduate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN highschool = 'High School Graduate' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'Vocational' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'Vocational' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'College Undergraduate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'College Undergraduate' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'Academic Degree Holder' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'Academic Degree Holder' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'Post Baccalaureate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'Post Baccalaureate' AND gender = 'Female' THEN id END)
         FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$_GET['barangay']);
    $bstmt->execute();
    $bstmt->bind_result($ngm1,$ngf1,$elm1,$elf1,$egm1,$egf1,$hlm1,$hlf1,$hgm1,$hgf1,$cvm1,$cvf1,$cugm1,$cugf1,$cdm1,$cdf1,$cbm1,$cbf1);
    $bstmt->fetch();
    $bstmt->close();
    $total1 = 0;$total2 = 0;$total3 = 0;$total4 = 0;$total5 = 0;$total7 = 0;$total8 = 0;
    $total9 = 0;$total10 = 0;$total11 = 0;$total12 = 0;$total13 = 0;$total14 = 0;$total15 = 0;
    $total16 = 0;$total17 = 0;$total18 = 0;

 $table->rowStyle('align:{LLLL}; valign:M; font-family:Arial; font-size:10;');
 $table->easyCell('No grade completed');
 $table->easyCell($ngm1);
 $table->easyCell($ngf1);
        $total1 = $ngm1 + $ngf1; 
 $table->easyCell($total1,'font-style:B');
 $table->printRow(); 

 $table->easyCell('Elementary Level');
 $table->easyCell($elm1);
 $table->easyCell($elf1);
       $total2 = $elm1 + $elf1;
 $table->easyCell($total2,'font-style:B');
 $table->printRow(); 

 $table->easyCell('Elementary Graduate');
 $table->easyCell($egm1);
 $table->easyCell($egf1);
       $total3 = $egm1 + $egf1; 
 $table->easyCell($total3,'font-style:B');
 $table->printRow(); 

 $table->easyCell('High School Level');
 $table->easyCell($hlm1);
 $table->easyCell($hlf1);
       $total4 = $hlm1 + $hlf1; 
 $table->easyCell($total4,'font-style:B');
 $table->printRow();  

 $table->easyCell('High School Graduate');
 $table->easyCell($hgm1);
 $table->easyCell($hgf1);
       $total5 = $hgm1 + $hgf1;
 $table->easyCell($total5,'font-style:B');
 $table->printRow();

 $table->easyCell('Vocational');
 $table->easyCell($cvm1);
 $table->easyCell($cvf1);
       $total6 = $cvm1 + $cvf1;
 $table->easyCell($total6,'font-style:B');
 $table->printRow();

 $table->easyCell('College Undergraduate');
 $table->easyCell($cugm1);
 $table->easyCell($cugf1);
       $total7 = $cugm1 + $cugf1;
 $table->easyCell($total7,'font-style:B');
 $table->printRow();

 $table->easyCell('Academic Degree Holder');
 $table->easyCell($cdm1);
 $table->easyCell($cdf1);
       $total8 = $cdm1 + $cdf1;
 $table->easyCell($total8,'font-style:B');
 $table->printRow();

 $table->easyCell('Post Baccalaureate');
 $table->easyCell($cbm1);
 $table->easyCell($cbf1);
       $total9 = $cbm1 + $cbf1;
 $table->easyCell($total9,'font-style:B');
 $table->printRow();

 $table->easyCell('Total','font-style:B');
 $total10 = $ngm1 + $elm1 + $egm1 + $hlm1 + $hgm1 + $cvm1 + $cugm1 + 
  $cdm1 + $cbm1 ;

  $total11 = $ngf1 + $elf1 + $egf1 + $hlf1 + $hgf1 + $cvf1 + $cugf1 + 
  $cdf1 + $cbf1 ;

  // $total12 = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + 
  // $total8 + $total9 ;
  $total12 = $total10 + $total11; 
 $table->easyCell($total10,'font-style:B');
 $table->easyCell($total11,'font-style:B');
 $table->easyCell($total12,'font-style:B');
 $table->printRow();
 

 $filename = "barangay-population.pdf";
 $pdf->Output('I', $filename); 
 ob_end_flush(); 
}
?>