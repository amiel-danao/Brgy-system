<?php  
include('config.php');

if (!isset($_FILES['new_resident_image']['tmp_name']) && 
  !empty($_FILES['new_resident_image']['tmp_name'])) 
    {
      echo "<script>alert('We have Error encounter in image') </script>";
    }
  else
    {
      $image = $_FILES['new_resident_image']['name'];
      $tmp_img = $_FILES['new_resident_image']['tmp_name'];
      $profileid = $_POST['residentsid'];
      $brgycode = $_POST['brgycode'];
        if (file_exists("../../bimages/$brgycode/$image"))
          {
            $digit_random_number = mt_rand(100000, 999999);
            $image = $digit_random_number . $image ;  
          }
            move_uploaded_file($tmp_img,"../../bimages/$brgycode/$image");
      
  // if(deleteimage($profileid) == true)
  //     {
        //if
            deleteimage($profileid,$brgycode);
            $mysql = "UPDATE `residents_tbl` SET `picture`=? WHERE `id`=?";
            $mystmt = $db->prepare($mysql);
            $mystmt->bind_param('si',$image,$profileid);
          // $stmt->execute();
          if($mystmt->execute())
            {
              //header("Location: ../../barangay_official_list.php?Update_Success");
              $mystmt->close();
              $db->close();
              echo "<script>alert('We have Successful Update Residents Image.')</script>";
              echo "<script>window.location.href = '../../barangay_residents.php'; </script>";
            }
            else
            {
            echo "<script>alert('We have Error encounter in deleting record') </script>";
            }
    }


function deleteimage($profileid,$brgycode)
    {
      global $db;
          $MYsqls = "SELECT `picture` FROM `residents_tbl` WHERE `id`=? ";
          $MYstmts = $db->prepare($MYsqls);
          $MYstmts->bind_param('i',$profileid);
          $MYstmts->execute();
          $MYstmts->bind_result($pictures);
          $MYstmts->fetch();
          $MYstmts->close();
    
      if($pictures != null || $pictures != "")
        {
          if(file_exists("../../bimages/$brgycode/$pictures"))
            {
             unlink("../../bimages/$brgycode/$pictures");
            }
        }
    }

 ?>