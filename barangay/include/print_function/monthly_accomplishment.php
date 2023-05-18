<?php 
ob_start();
	require('config.php');
	require('../fpdf/fpdf.php');

// 270 in landscape width cell
	// 190 in portrait width cell

	if(isset($_POST['print_kp_month']) && !empty($_POST['month']) && !empty($_POST['year']))
	{
		$month = $_POST['month'];
		$year = $_POST['year'];
	$pdf = new FPDF('P', 'mm',array(215.9,279.4));
	$pdf->AddPage('');
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(190 , 6,'MONTHLY ACCOMPLISHMENT REPORT ',0,1,'C');
			$pdf->SetFont('Arial', 'BU', 12);
			$pdf->Image('../../bimages/dilg.jpg',30,7,26);
			$pdf->Cell(190 , 6,'Month of'. ' ' . 'January' . ' ' . '2018',0,1,'C');
			$pdf->Cell(190 , 6,$_POST['bname'],0,1,'C');
			$pdf->Cell(190 , 15,'',0,1);
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(35 , 8,'City/Municipality:',1,0);
			$pdf->SetFont('Arial', 'BI', 12);
			$pdf->Cell(30 , 8,'Maragondon',1,0);
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(35 , 8,'Province:',1,0,'R');
			$pdf->SetFont('Arial', 'BI', 12);
			$pdf->Cell(30 , 8,'Cavite',1,0);
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(30 , 8,'Region:',1,0,'R');
			$pdf->SetFont('Arial', 'BI', 12);
			$pdf->Cell(30 , 8,'IV-A',1,1);
			$pdf->Cell(190 , 10,'',1,1);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(15 , 5,'Part I',1,0);
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(175 , 5,'Project/Activities Undertaken',1,1);
			$pdf->Cell(15 , 5,'',1,0);
			$pdf->Cell(175 , 5,'(Excutive Power of the Barangay)',1,1);

			$pdf->Cell(190 , 8,'',1,1);


			$pdf->Cell(43 , 15,'',1,0);
			$pdf->Cell(36 , 5,'Status',1,0,'C');
			$pdf->Cell(36 , 5,'Date',1,0,'C');
			$pdf->Cell(25 , 15,'',1,0);
			$pdf->Cell(25 , 15,'',1,0);
			$pdf->Cell(25 , 15,'',1,0);
			$pdf->Cell(0 , 5,'',0,1);

			//looping
			$pdf->Cell(43 , 10,'',1,0);
			$pdf->Cell(18 , 10,'',1,0);
			$pdf->Cell(18 , 10,'0000-00-00',1,0);
			$pdf->Cell(18 , 10,'',1,0);
			$pdf->Cell(18 , 10,'',1,1);


			$pdf->Cell(190 , 8,'',1,1);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(15 , 5,'Part II',1,0);
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(175 , 5,'Local Legislation',1,1);
			$pdf->Cell(15 , 5,'',1,0);
			$pdf->Cell(175 , 5,'(Legistative Power of the Brgy. Council)',1,1);
			$pdf->Cell(190 , 5,'',1,1);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(95 , 5,'A Resolution/Ordinance Passed/Enacted',1,0,'C');
			$pdf->Cell(95 , 5,'B Barangay Council Meeting Conducted',1,1,'C');


			$pdf->Cell(26 , 15,'',1,0,'C');
			$pdf->Cell(14 , 15,'',1,0,'C');
			$pdf->Cell(40 , 15,'',1,0,'C');
			$pdf->Cell(13 , 15,'',1,0,'C');
			$pdf->Cell(5 , 15,'',0,0,'C');

			$pdf->Cell(20 , 15,'',1,0,'C');
			$pdf->Cell(10 , 15,'',1,0,'C');
			$pdf->Cell(24 , 15,'',1,0,'C');
			$pdf->Cell(18 , 15,'',1,0,'C');
			$pdf->Cell(20 , 15,'',1,1,'C');

			$pdf->Cell(26 , 5,'',1,0,'C');
			$pdf->Cell(14 , 5,'',1,0,'C');
			$pdf->Cell(40 , 5,'',1,0,'C');
			$pdf->Cell(13 , 5,'',1,0,'C');
			$pdf->Cell(5 , 5,'',0,0,'C');

			$pdf->Cell(20 , 5,'',1,0,'C');
			$pdf->Cell(10 , 5,'',1,0,'C');
			$pdf->Cell(24 , 5,'',1,0,'C');
			$pdf->Cell(18 , 5,'',1,0,'C');
			$pdf->Cell(20 , 5,'',1,1,'C');

			$pdf->Cell(26 , 5,'',1,0,'C');
			$pdf->Cell(14 , 5,'',1,0,'C');
			$pdf->Cell(40 , 5,'',1,0,'C');
			$pdf->Cell(13 , 5,'',1,0,'C');
			$pdf->Cell(5 , 5,'',0,0,'C');

			$pdf->Cell(20 , 5,'',1,0,'C');
			$pdf->Cell(10 , 5,'',1,0,'C');
			$pdf->Cell(24 , 5,'',1,0,'C');
			$pdf->Cell(18 , 5,'',1,0,'C');
			$pdf->Cell(20 , 5,'',1,1,'C');
			
				// $pdf->SetFont('Arial', 'B', 12);

				// $pdf->Cell(35 , 10,'First Name',1,0,'C');
			 // 	$pdf->Cell(35 , 10,'Last Name',1,0,'C');
			 // 	$pdf->Cell(35 , 10,'Middle Name',1,0,'C');
			 // 	$pdf->Cell(20 , 10,'Gender',1,0,'C');
			 // 	$pdf->Cell(25 , 10,'BOD',1,0,'C');
			 // 	$pdf->Cell(20 , 10,'House #',1,0,'C');
			 // 	$pdf->Cell(35 , 10,'Street',1,0,'C');
			 // 	$pdf->Cell(55 , 10,'Religion',1,0,'C');
			 // 	$pdf->Cell(20 , 10,'Status',1,1,'C');
	
			$pdf->Cell(190 , 8,'',1,1);
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->Cell(15 , 5,'Part III',1,0);
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(175 , 5,'Katarangun Pambarangay',1,1);
			$pdf->Cell(190 , 5,'',1,1);
		
			$pdf->SetFont('Arial', 'BU', 12);
			$pdf->Cell(95 , 5,'(Judicial Function of Brgy. Council)',1,0,'C');
			$pdf->Cell(95 , 5,'[Name of Captain]',1,1,'C');
			$pdf->Cell(25 , 5,'Type of ',1,0);
			$pdf->Cell(70 , 5,'Number of Dispute',1,0);
			$pdf->Cell(95 , 5,'[Captain]',1,1,'C');
			$pdf->SetFont('Arial', 'B', 11);
			$pdf->Cell(25 , 5,'Dispute',1,0);
			$pdf->Cell(15 , 5,'Filled',1,0);
			$pdf->Cell(15 , 5,'Settled',1,0);
			$pdf->Cell(18 , 5,'Reffered',1,0);
			$pdf->Cell(20 , 5,'Withdraw',1,0);
			$pdf->Cell(95 , 5,'',1,1,'C');
		//looping
			$pdf->Cell(25 , 8,'Criminal',1,0);
			$pdf->Cell(15 , 8,'0',1,0);
			$pdf->Cell(15 , 8,'0',1,0);
			$pdf->Cell(18 , 8,'0',1,0);
			$pdf->Cell(20 , 8,'0',1,0);

			$pdf->Cell(49 , 8,'[Name of kagawad1]',1,0,'C');
			$pdf->Cell(49 , 8,'[Name of kagawad2]',1,1,'C');
			
			$pdf->Cell(25 , 8,'Civil',1,0);
			$pdf->Cell(15 , 8,'0',1,0);
			$pdf->Cell(15 , 8,'0',1,0);
			$pdf->Cell(18 , 8,'0',1,0);
			$pdf->Cell(20 , 8,'0',1,0);

			$pdf->Cell(49 , 8,'kagawad',1,0,'C');
			$pdf->Cell(49 , 8,'kagawad',1,1,'C');

			$pdf->Cell(25 , 8,'Others',1,0);
			$pdf->Cell(15 , 8,'0',1,0);
			$pdf->Cell(15 , 8,'0',1,0);
			$pdf->Cell(18 , 8,'0',1,0);
			$pdf->Cell(20 , 8,'0',1,0);

			$pdf->Cell(49 , 8,'[Name of kagawad3]',1,0,'C');
			$pdf->Cell(49 , 8,'[Name of kagawad4]',1,1,'C');

			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'kagawad',1,0,'C');
			$pdf->Cell(49 , 8,'kagawad',1,1,'C');

			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'[Name of kagawad5]',1,0,'C');
			$pdf->Cell(49 , 8,'[Name of kagawad6]',1,1,'C');

			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'kagawad',1,0,'C');
			$pdf->Cell(49 , 8,'kagawad',1,1,'C');

			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'[Name of kagawad7]',1,0,'C');
			$pdf->Cell(49 , 8,'[Name Sk Chairmain]',1,1,'C');
			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'kagawad',1,0,'C');
			$pdf->Cell(49 , 8,'Sk Chairmain',1,1,'C');

			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'[Name of Kalihim]',1,0,'C');
			$pdf->Cell(49 , 8,'[Name Sk Treasurer]',1,1,'C');

			$pdf->Cell(47 , 8,'kagawad',1,0,'C');
			$pdf->Cell(46 , 8,'kagawad',1,0,'C');

			$pdf->Cell(49 , 8,'Kalihim',1,0,'C');
			$pdf->Cell(49 , 8,'Treasurer',1,1,'C');

			$filename = "barangay-monthly.pdf";
			$pdf->Output('I', $filename);
ob_end_flush(); 
	}

?>