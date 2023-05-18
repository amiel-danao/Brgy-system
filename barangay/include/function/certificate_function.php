<?php 
include('config.php');// if (isset($_POST['']))
	 if(!empty($_POST['datax']))
	 {
	    //$brgycode = "BC2"; 
	    $searchs =  filter_var($_POST['datax'].'%', FILTER_SANITIZE_STRING);
          $brgycode = $_POST['brgycode'];
	   // $sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code` = ? AND `last_name` LIKE ? ";
	   $sql = "SELECT * FROM `residents_tbl` WHERE (`first_name` LIKE ? OR `last_name` LIKE ? OR 
    `middle_name` LIKE ? OR `street` LIKE ?) AND `brgy_code` = ? ";
	    $stmt = $db->prepare($sql);
	    $stmt->bind_param('sssss',$searchs,$searchs,$searchs,$searchs,$brgycode);
	    $stmt->execute();
	    $result = $stmt->get_result();
        
        // while ($data = $result->fetch_assoc())
	    while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
            	echo "<tr>";
            	echo "<td>{$data['first_name']}</td>";
            	echo "<td>{$data['last_name']}</td>";
            	echo "<td>{$data['middle_name']}</td>";
            	echo "<td>{$data['gender']}</td>";
            	echo "<td>{$data['street']}</td>";
            	
            	 $image = $data['picture'] ;
                  $Picture = !empty($image) ? $image : 'default-image.png';
                  echo "<td><img src='bimages/".$brgycode."/".$Picture."' style='width:190px!important;height:100px!important;'></td>";
                  
                  
            	echo "<td>
            	<a href='report_printing.php?brgy-clearance={$data['id']}' target='_blank' class='btn btn-primary btn-sm '>Barangay Clearance</a>
            	
            	<a href='report_printing.php?indigency={$data['id']}' target='_blank' class='btn btn-success btn-sm '>Barangay Indigency</a>
            	
            	<a href='report_printing.php?b-permit={$data['id']}' target='_blank' class='btn btn-warning btn-sm '>Barangay Business  </a></td>";
            	

                //   echo "<td>
                //   <a href='certificate_history.php?Residents-id={$data['id']}' target='_blank' class='btn btn-secondary btn-sm'>History</a></td>";
                  echo "</tr>";
            } 
	 }
	 
	 
	 
	 
	 if(isset($_POST['brgycodeall']))
       {
          //$brgycode = "BC2"; 
          $brgycodealls =  filter_var($_POST['brgycodeall'], FILTER_SANITIZE_STRING);
          $sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code` = ? ";
          $stmt = $db->prepare($sql);
          $stmt->bind_param('s',$brgycodealls);
          $stmt->execute();
          $result = $stmt->get_result();
          
        //   while ($data = $result->fetch_assoc())
          while ($data = $result->fetch_array(MYSQLI_ASSOC))
            {
                  echo "<tr>";
                  echo "<td>{$data['first_name']}</td>";
                  echo "<td>{$data['last_name']}</td>";
                  echo "<td>{$data['middle_name']}</td>";
                  echo "<td>{$data['gender']}</td>";
                  echo "<td>{$data['street']}</td>";
                  
                  $image = $data['picture'] ;
                  $code =  $data['brgy_code'];
                  $Picture = !empty($image) ? $image : 'default-image.png';
                  echo "<td><img src='bimages/" .$code. "/" .$Picture. 
                  "' style='width:190px!important; height:100px!important;' class='img-fluid'></td>";
                  
                  echo "<td>
                  <a href='report_printing.php?brgy-clearance={$data['id']}' target='_blank' class='btn btn-primary btn-sm '>Barangay Clearance</a>
                  <a href='report_printing.php?indigency={$data['id']}' target='_blank' class='btn btn-success btn-sm '>Barangay Indigency</a>
                  
                  <a href='report_printing.php?b-permit={$data['id']}' target='_blank' class='btn btn-warning btn-sm '>Barangay Business  </a></td>";
                  

                  // echo "<td>
                  // <a href='certificate_history.php?Residents-id={$data['id']}' target='_blank' class='btn btn-secondary btn-sm'>History</a></td>";
                  echo "</tr>";
            } 
       }
 ?>