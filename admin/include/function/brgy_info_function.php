<?php
   //include('config.php');
  require_once('config.php');
  
  if (isset($_POST['updatebrgyinfo']))
   {
        $id = $_POST['brgyinfo_id'];
        $brgy_name = filter_var($_POST['brgy_name'], FILTER_SANITIZE_STRING);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
       // $brgy_code = filter_var($_POST['brgy_code'], FILTER_SANITIZE_STRING);
        $sql = "UPDATE `brgy_code_tbl` SET `brgy_name`=?,`address`=? WHERE `id`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ssi',$brgy_name,$address,$id);
        //$stmt->execute();
          if($stmt->execute())
          {
            $stmt->close();
            $db->close();
            //header("Location: ../../brgy_info.php?Update_Success");
            echo "<script>alert('We have Successful Update.') </script>";
            echo "<script>window.location.href = 'brgy_info.php'; </script>";
          }
          else  {
              echo "<script>alert('We have error encounter.') </script>";
          }
    }


?>