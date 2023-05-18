<?php
ob_start();
 include '../fpdf-easytable/fpdf.php';
 include '../fpdf-easytable/exfpdf.php';
 include '../fpdf-easytable/easyTable.php';
 include '../function/config.php';


if(isset($_GET['barangaycode']) && isset($_GET['barangayname']))
{
 
 $pdf=new exFPDF('P', 'mm','Legal');
 $pdf->AddPage('P'); 

 $pdf->SetFont('helvetica','',10);
 // $pdf->Image('../../images/DILG.jpg',40,2,28,30);
 $table1=new easyTable($pdf, 1);
 $pdf->Ln(3);
 $table1->easyCell('BARANGAY ORGANIZATIONAL CHART OF BARANGAY '. $_GET['barangayname'], 'font-size:12; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();
 $table1->easyCell('OF MARAGONDON CAVITE','font-size:12; font-family:Arial; paddingY:0; align:C');
 $table1->printRow();

 
 $table1->endTable(10);

//====================================================================
 $table= new easyTable($pdf, '{50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{C}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Barangay Captain','bgcolor:#00ace6;');
 $table->printRow();
$postions = "%Punong Barangay";
    $sql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss',$postions,$_GET['barangaycode']);
    $stmt->execute();
    $result = $stmt->get_result();
while ($data = $result->fetch_assoc())
    {
        $brgy_id = $data['brgy_id']; 
        $first_name = $data['first_name']; 
        $last_name = $data['last_name']; 
        $middle_name = $data['middle_name']; 
        $brgy_code = $data['brgy_code']; 
        $barangay = $data['barangay']; 
        $position = $data['position']; 
        $picture = $data['picture'];
    }  
        // $pdf->Image('../../barangayimages/'.$_GET['barangaycode'].'/'.$picture ,50,45,30,25);
$table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
$table->printRow();
$table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->printRow();
 $table->endTable(10);

$table= new easyTable($pdf, '{50,5,50,5,50,5,50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Barangay Kagawad','bgcolor:#FF0000;');
 $table->easyCell('','border:LR');
 $table->easyCell('Barangay Kagawad','bgcolor:#FF0000;');
 $table->easyCell('','border:LR');
 $table->easyCell('Barangay Kagawad','bgcolor:#FF0000;');
 $table->easyCell('','border:LR');
 $table->easyCell('Barangay Kagawad','bgcolor:#FF0000;');
 $table->printRow();

$postion2 = "%barangay Kagawad 1%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 $table->easyCell('','border:LR');

$postion2 = "%barangay Kagawad 2%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 $table->easyCell('','border:LR');

 $postion2 = "%barangay Kagawad 3%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 $table->easyCell('','border:LR');

 $postion2 = "%barangay Kagawad 4%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 $table->easyCell('','border:LR');

 $table->printRow();

//==================================

$postion2 = "%barangay Kagawad 1%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->easyCell('','border:LR');
}
 

 $postion2 = "%barangay Kagawad 2%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->easyCell('','border:LR');
}
 

 $postion2 = "%barangay Kagawad 3%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->easyCell('','border:LR');
}
 

 $postion2 = "%barangay Kagawad 4%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->easyCell('','border:LR');
}
 $table->printRow();

$table->endTable(10);




///========================================================
$table= new easyTable($pdf, '{50,5,50,5,50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{CCCCCCCC}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Barangay Kagawad','bgcolor:#00cd00;');
 $table->easyCell('','border:LR');
 $table->easyCell('Barangay Kagawad','bgcolor:#00cd00;');
 $table->easyCell('','border:LR');
 $table->easyCell('Barangay Kagawad','bgcolor:#00cd00;');
 $table->printRow();

$postion2 = "%barangay Kagawad 5%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 $table->easyCell('','border:LR');

$postion2 = "%barangay Kagawad 6%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 $table->easyCell('','border:LR');

 $postion2 = "%barangay Kagawad 7%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $picture = $datas['picture'];    
    }
 $table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
 
 $table->printRow();





$postion2 = "%barangay Kagawad 5%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->easyCell('','border:LR');
}
 

 $postion2 = "%barangay Kagawad 6%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->easyCell('','border:LR');
}
 

 $postion2 = "%barangay Kagawad 7%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$_GET['barangaycode']);
    $mystmt->execute();
    $results = $mystmt->get_result();
while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 

 $table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 
}
 
 $table->printRow();
$table->endTable(10);

//=============================================

 $table= new easyTable($pdf, '{50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{C}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('SK Chairman','bgcolor:#ffff00;');
 $table->printRow();
$postion3 = "%SK Chairman%";
    $mysqls = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$_GET['barangaycode']);
    $mystmts->execute();
    $resultz = $mystmts->get_result();
while ($dataz = $resultz->fetch_assoc())
    {
        $brgy_id = $dataz['brgy_id']; 
        $first_name = $dataz['first_name']; 
        $last_name = $dataz['last_name']; 
        $middle_name = $dataz['middle_name']; 
        $brgy_code = $dataz['brgy_code']; 
        $barangay = $dataz['barangay']; 
        $position = $dataz['position']; 
        $picture = $dataz['picture'];
    }  
        // $pdf->Image('../../barangayimages/'.$_GET['barangaycode'].'/'.$picture ,50,45,30,25);
$table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
$table->printRow();
$table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->printRow();
 $table->endTable(10);



 //===================================================
 $table= new easyTable($pdf, '{50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{C}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Secretary','bgcolor:#1874cd;');
 $table->printRow();
 $postion4 = "%Secretary%";
    $mysqli = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmti = $db->prepare($mysqli);
    $mystmti->bind_param('ss',$postion4,$_GET['barangaycode']);
    $mystmti->execute();
    $rezult = $mystmti->get_result();
while ($output = $rezult->fetch_assoc())
    {
        $brgy_id = $output['brgy_id']; 
        $first_name = $output['first_name']; 
        $last_name = $output['last_name']; 
        $middle_name = $output['middle_name']; 
        $brgy_code = $output['brgy_code']; 
        $barangay = $output['barangay']; 
        $position = $output['position']; 
        $picture = $output['picture']; 
    }  
        // $pdf->Image('../../barangayimages/'.$_GET['barangaycode'].'/'.$picture ,50,45,30,25);
$table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
$table->printRow();
$table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->printRow();
 $table->endTable(10);

 //====================================================================


  $table= new easyTable($pdf, '{50}',' width:100; border:1; border-color:#000000; align:C');

 $table->rowStyle('align:{C}; valign:M; font-family:Arial; font-size:10; font-style:B');
 $table->easyCell('Treasurer','bgcolor:#ee6aa7;');
 $table->printRow();
  $postion3 = "%Treasurer%";
    $mysqls = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$_GET['barangaycode']);
    $mystmts->execute();
    $resultz = $mystmts->get_result();
while ($dataz = $resultz->fetch_assoc())
    {
        $brgy_id = $dataz['brgy_id']; 
        $first_name = $dataz['first_name']; 
        $last_name = $dataz['last_name']; 
        $middle_name = $dataz['middle_name']; 
        $brgy_code = $dataz['brgy_code']; 
        $barangay = $dataz['barangay']; 
        $position = $dataz['position']; 
        $picture = $dataz['picture'];
    }  
        // $pdf->Image('../../barangayimages/'.$_GET['barangaycode'].'/'.$picture ,50,45,30,25);
$table->easyCell('','img:../../../admin/barangayimages/'.$_GET['barangaycode'].'/'.$picture.', w30, h25; align:C; valign:B; font-style:B; border:LRT');
$table->printRow();
$table->easyCell($first_name . " " .  substr($middle_name,0,1)."."  . " " . $last_name,'font-size:12; align:C; font-style:R; border:LRB;font-size:9');
 $table->printRow();
 $table->endTable();

//========================================
 $filename = "barangay-Organizational ".$_GET['barangayname'].".pdf";
 //ob_end_clean();
 $pdf->Output('I', $filename); 
 //$pdf->Close();
 ob_end_flush();
}
?>
