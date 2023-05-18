<?php 
include('config.php');// if (isset($_POST['']))
	 if(!empty($_POST['clearance']))
	 {
	    //$brgycode = "BC2"; 
	    $searchs =  filter_var($_POST['clearance'].'%', FILTER_SANITIZE_STRING);
      $brgycode = $_POST['brgycode'];
	    // $sql = "SELECT * FROM `brgy_bclearance_tbl` WHERE `bcode` = ? AND `lname` LIKE ? ORDER BY date DESC";

      $sql = "SELECT * FROM `brgy_bclearance_tbl` WHERE (`fname` LIKE ? OR `lname` LIKE ? OR `mname` LIKE ? OR `date` LIKE ?) AND `bcode` = ? ORDER BY date DESC";
	    $stmt = $db->prepare($sql);
	    $stmt->bind_param('sssss',$searchs,$searchs,$searchs,$searchs,$brgycode);
	    $stmt->execute();
	    $result = $stmt->get_result();
        $number = 1;
	   // while ($data = $result->fetch_assoc())
	    while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
            	echo "<tr>";
              echo "<td>{$number}</td>";
            	echo "<td>{$data['fname']}</td>";
            	echo "<td>{$data['lname']}</td>";
            	echo "<td>{$data['mname']}</td>";
            	echo "<td>{$data['residents_id']}</td>";
            	echo "<td>{$data['date']}</td>";
            	echo "<td>{$data['bcno']}</td>";
              echo "<td>{$data['ctcno']}</td>";
              echo "<td>{$data['orno']}</td>";
              echo "<td>{$data['paid']}</td>";
              echo "</tr>";
              $number++;
            } 
	 }



    if(!empty($_POST['barangaycode']))
       {
          //$brgycode = "BC2"; 
          //$searchs =  filter_var($_POST['barangaycode'].'%', FILTER_SANITIZE_STRING);
          $barangaycode = $_POST['barangaycode'];
          $sql = "SELECT * FROM `brgy_bclearance_tbl` WHERE `bcode` = ? ORDER BY date DESC";
          $stmt = $db->prepare($sql);
          $stmt->bind_param('s',$barangaycode);
          $stmt->execute();
          $result = $stmt->get_result();
          $number = 1;
        //   while ($data = $result->fetch_assoc())
          while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
                  echo "<tr>";
                  echo "<td>{$number}</td>";
                  echo "<td>{$data['fname']}</td>";
                  echo "<td>{$data['lname']}</td>";
                  echo "<td>{$data['mname']}</td>";
                  echo "<td>{$data['residents_id']}</td>";
                  echo "<td>{$data['date']}</td>";
                  echo "<td>{$data['bcno']}</td>";
                  echo "<td>{$data['ctcno']}</td>";
                  echo "<td>{$data['orno']}</td>";
                  echo "<td>{$data['paid']}</td>";
                  echo "</tr>";
                  $number++;
            } 
       }




if(!empty($_POST['serchindigency']))
   {
      //$brgycode = "BC2"; 
      $searchindigency =  filter_var('%'.$_POST['serchindigency'].'%', FILTER_SANITIZE_STRING);
      $brgycode = $_POST['brgycodess'];
      // $sql = "SELECT * FROM `brgy_indigency_tbl` WHERE `bcode` = ? AND `fullname` LIKE ? ORDER BY date DESC";
      $sql = "SELECT * FROM `brgy_indigency_tbl` WHERE (`fullname` LIKE ? OR `date` LIKE ? OR `purpose` LIKE ? OR `residents_id` = ? ) AND `bcode` = ? ORDER BY date DESC";
      $stmt = $db->prepare($sql);
      $stmt->bind_param('sssis',$searchindigency,$searchindigency,$searchindigency,$searchindigency,
        $brgycode);
      $stmt->execute();
      $result = $stmt->get_result();
      $num = 1;
    //   while ($data = $result->fetch_assoc())
      while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
              echo "<tr>";
              echo "<td>{$num}</td>";
              echo "<td>{$data['fullname']}</td>";
              echo "<td>{$data['residents_id']}</td>";
              echo "<td>{$data['date']}</td>";
              echo "<td>{$data['purpose']}</td>";
              // echo "<td>{$data['type_of_certificate']}</td>";
              echo "</tr>";
              $num++;
            } 
   }



    if(!empty($_POST['barangaycodeindigency']))
       {
          //$brgycode = "BC2"; 
          //$searchs =  filter_var($_POST['barangaycode'].'%', FILTER_SANITIZE_STRING);
          $barangaycodeindigency = $_POST['barangaycodeindigency'];
          $sql = "SELECT * FROM `brgy_indigency_tbl` WHERE `bcode` = ? ORDER BY date DESC";
          $stmt = $db->prepare($sql);
          $stmt->bind_param('s',$barangaycodeindigency);
          $stmt->execute();
          $result = $stmt->get_result();
          $nums = 1;
        //   while ($data = $result->fetch_assoc())
          while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
               
                  echo "<tr>";
              echo "<td>{$nums}</td>";
              echo "<td>{$data['fullname']}</td>";
              echo "<td>{$data['residents_id']}</td>";
              echo "<td>{$data['date']}</td>";
              echo "<td>{$data['purpose']}</td>";
              // echo "<td>{$data['type_of_certificate']}</td>";
              echo "</tr>";
              $nums++;
            } 
       }



  if(!empty($_POST['serchbpermit']))
   {
      //$brgycode = "BC2"; 
      $serchbpermit =  filter_var('%'.$_POST['serchbpermit'].'%', FILTER_SANITIZE_STRING);
      $brgycode = $_POST['brgycodezz'];
      // $sql = "SELECT * FROM `brgy_bpermit_tbl` WHERE `bcode` = ? AND `fullname` LIKE ? ORDER BY date DESC";
      $sql = "SELECT * FROM `brgy_bpermit_tbl` WHERE (`fullname` LIKE ? OR `date` LIKE ? OR `business` LIKE ? OR `bcno` = ? OR `residents_id` = ?) AND `bcode` = ? ORDER BY date DESC";
      $stmt = $db->prepare($sql);
      $stmt->bind_param('sssiis',$serchbpermit,$serchbpermit,$serchbpermit,$serchbpermit,$serchbpermit,$brgycode);
      $stmt->execute();
      $result = $stmt->get_result();
      $num = 1;
      
    //   while ($data = $result->fetch_assoc())
      while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
              echo "<tr>";
              echo "<td>{$num}</td>";
              echo "<td>{$data['fullname']}</td>";
              echo "<td>{$data['date']}</td>";
              echo "<td>{$data['residents_id']}</td>";
              echo "<td>{$data['bcno']}</td>";
              echo "<td>{$data['business']}</td>";
              // echo "<td>{$data['type_of_certificate']}</td>";
              echo "</tr>";
              $num++;
            } 
   }



    if(!empty($_POST['barangaycodebpermit']))
       {
          //$brgycode = "BC2"; 
          //$searchs =  filter_var($_POST['barangaycode'].'%', FILTER_SANITIZE_STRING);
          $barangaycodebpermit = $_POST['barangaycodebpermit'];
          $sql = "SELECT * FROM `brgy_bpermit_tbl` WHERE `bcode` = ? ORDER BY date DESC";
          $stmt = $db->prepare($sql);
          $stmt->bind_param('s',$barangaycodebpermit);
          $stmt->execute();
          $result = $stmt->get_result();
          $nums = 1;
        //   while ($data = $result->fetch_assoc())
          while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
               
                  echo "<tr>";
              echo "<td>{$nums}</td>";
              echo "<td>{$data['fullname']}</td>";
              echo "<td>{$data['date']}</td>";
              echo "<td>{$data['residents_id']}</td>";
              echo "<td>{$data['bcno']}</td>";
              echo "<td>{$data['business']}</td>";
              // echo "<td>{$data['type_of_certificate']}</td>";
              echo "</tr>";
              $nums++;
            } 
       }
 ?>