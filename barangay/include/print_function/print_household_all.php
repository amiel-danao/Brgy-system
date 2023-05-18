<?php 
ob_start();
  require('config.php');
  // require('../fpdf/fpdf.php');
  include('../fpdf_class/pdf_mc_table_residents.php');
  // 270 in landscape width cell
  // 190 in portrait width cell
  //Long Bond Paper 'mm',array(215.9,279.4)
      $pdf = new PDF_MC_Table('L', 'mm','Legal');
      $pdf->AddPage('L');
      $pdf->SetFont('Arial', '', 9);
      $pdf->SetWidths(Array(23,23,23,13,20,9,13,22,18,23,29,16,27,27,27,19));
      //$pdf->SetBorder()

      $pdf->SetLineHeight(5);
     if(isset($_GET['printhousehold']) && $_GET['printhousehold'] != null)
    {
      $code = $_GET['printhousehold'];
      // $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->Image('../../logoimg/'. $code.'.png',80,3,40,35);
      $pdf->SetFont('Arial', 'BU', 13);
      
      $pdf->Cell(330 , 6,$_GET['bname'],0,1,'C');
      $pdf->Cell(330 , 6,'Barangay Residents Record By House Hold',0,1,'C');
      $pdf->Cell(280 , 15,'',0,1);
      $pdf->SetFont('Arial', '', 12);
      $pdf->Ln(7);
        $pdf->Cell(37 , 8,'City/Municipality:',0,0);
        $pdf->SetFont('Arial', 'BI', 12);
        $pdf->Cell(40 , 8,'Maragondon',0,0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(37 , 8,'Province:',0,0,'R');
        $pdf->SetFont('Arial', 'BI', 12);
        $pdf->Cell(40 , 8,'Cavite',0,0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40 , 8,'Region:',0,0,'R');
        $pdf->SetFont('Arial', 'BI', 12);
        $pdf->Cell(40 , 8,'IV-A',0,1);
        $pdf->Cell(280 , 10,'',0,1);

      $pdf->SetFont('Arial', 'B', 8);
      // $pdf->Cell(15 , 10,'#',1,0,'C');
      $pdf->Cell(23 , 10,'First Name',1,0,'C');
      $pdf->Cell(23 , 10,'Last Name',1,0,'C');
      $pdf->Cell(23 , 10,'Middle Name',1,0,'C');
      $pdf->Cell(13 , 10,'Gender',1,0,'C');
      $pdf->Cell(20 , 10,"BOD",1,0,'C');
      $pdf->Cell(9 , 10,"Age",1,0,'C');
      $pdf->Cell(13 , 10,'House #',1,0,'C');
      $pdf->Cell(22 , 10,"Contact no",1,0,'C');
      $pdf->Cell(18 , 10,"Job Status",1,0,'C');
      $pdf->Cell(23 , 10,'Street',1,0,'C');
      $pdf->Cell(29 , 10,'Religion',1,0,'C');
      $pdf->Cell(16 , 10,'Status',1,0,'C');
      $pdf->Cell(27 , 10,'Elementary Status',1,0,'C');
      $pdf->Cell(27 , 10,'High School Status',1,0,'C');
      $pdf->Cell(27 , 10,'college Status',1,0,'C');
      $pdf->Cell(19 , 10,'Head Family',1,1,'C');
        $realage = 0;  

        $bsql = "SELECT Distinct `house_no` FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY `house_no`";
        $bstmt = $db->prepare($bsql);
        $bstmt->bind_param('s',$code);
        $bstmt->execute();
        $housenumberResult = $bstmt->get_result();
        $hh = array();
        while ($housenumber = $housenumberResult->fetch_assoc())
          { 
            $hh[] = $housenumber;
          }


    for($i = 0; $i < count($hh); $i++) {


        $sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`=? AND `house_no`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('si',$code,$hh[$i]['house_no']);
        $stmt->execute();
        $result = $stmt->get_result();
        $number = 0;
         while ($data = $result->fetch_assoc())
          { 

            $f = $data['first_name'];
            $l = $data['last_name'];
            $m = $data['middle_name'];
            $g = $data['gender'];
            // $d = $data['bod'];
            $time = strtotime($data['bod']);
            $d = date("M-d-Y", $time);

            $dates = date("Y-m-d");

            $realage = $dates - $data['bod'];
              $a = $data['age'];
              $h = $data['house_no'];
              $c = $data['contact_no'];
              $j = $data['job'];
              $s = $data['street'];
              $r = $data['religion'];
              $st = $data['status'];
              $elem = $data['elementary'];
              $high = $data['highschool'];
              $college = $data['college'];
              $role = $data['family_role'];
              $number++;
          
          $pdf->SetFont('Arial', '', 8);
          $pdf->Row(Array(
            // $number,
            $f,
            $l,
            $m,
            $g,
            $d,
            $a,
            $h,
            $c,
            $j,
            $s,
            $r,
            $st,
            $elem,
            $high,
            $college,
            $role,
          ));

        }
         $pdf->Ln(2);

        }
$filename = "barangay-residents.pdf";        

$pdf->Output('I', $filename);
ob_end_flush();
}
?>