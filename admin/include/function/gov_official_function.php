<?php 


if(isset($_POST['updategovernmentofficial']))
	 {
	 	$govid = $_POST['government_id'];
	 	$Fname = $_POST['Fname'];
	 	$Position = $_POST['Position'];

	   $sql = "UPDATE `maragondon_official_tbl` SET `full_name`=?,`position`=? WHERE `id`=?";
	   	if($stmtupdate = $db->prepare($sql))
	   		{
	   			$stmtupdate->bind_param('ssi',$Fname,$Position,$govid);
	 			$stmtupdate->execute();
	 			echo "<script>alert('We have Successful Update.') </script>";
            	echo "<script>window.location.href = 'government_official.php'; </script>";
	   		}
	   	else{
	   		echo "<script>alert('We have error encounter.') </script>";
	   	}
	 		$stmtupdate->close();
            $db->close();
	 }


if(isset($_POST['updategovpicture']))
{

if ( !isset($_FILES['new_gov_image']['tmp_name']) 
	&& !empty($_FILES['new_gov_image']['tmp_name'])) 
    {
      echo "<script>alert('We have Error encounter in image') </script>";
    }
  else
    {
      $image = $_FILES['new_gov_image']['name'];
      $tmp_img = $_FILES['new_gov_image']['tmp_name'];
      $govid = $_POST['govid'];
        if(file_exists("gov_image/$image"))
          {
            $digit_random_number = mt_rand(100000, 999999);
            $image = $digit_random_number . $image ;  
          }
            move_uploaded_file($tmp_img,"gov_image/$image");
      
            deleteimage($govid);
            $mysql = "UPDATE `maragondon_official_tbl` SET `picture`=? WHERE `id`=?";
            $mystmt = $db->prepare($mysql);
            $mystmt->bind_param('si',$image,$govid);
        
           
          if($mystmt->execute())
            {
    
              $mystmt->close();
              $db->close();
              echo "<script>alert('We have Successful Update Image.')</script>";
              echo "<script>window.location.href = 'government_official.php'; </script>";
            }
           else
            {
              echo "<script>alert('We have Error encounter in deleting record') </script>";
            }

    }
}

function deleteimage($govid)
    {
      global $db;
          $MYsqls = "SELECT `picture` FROM `maragondon_official_tbl` WHERE `id`=? ";
          $MYstmts = $db->prepare($MYsqls);
          $MYstmts->bind_param('i',$govid);
          $MYstmts->execute();
          $MYstmts->bind_result($pictures);
          $MYstmts->fetch();
          $MYstmts->close();

          if($pictures != null || $pictures != "")
            {
              if(file_exists("gov_image/$pictures") == true)
                {
                   unlink("gov_image/$pictures");
                }
            }
  
    }
 ?>