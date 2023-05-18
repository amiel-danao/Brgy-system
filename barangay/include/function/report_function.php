<?php

   require_once('config.php');

   if (isset($_POST['sendfiles']))
   {
        $reportitle = filter_var($_POST['reporttitle'], FILTER_SANITIZE_STRING);
        $datesend = $_POST['datesend'];
        $Description = filter_var($_POST['Description'], FILTER_SANITIZE_STRING);
        $month = $_POST['month']; 
        $brgy_code = $_POST['bcode']; 
        $file = $_FILES['report_file']['name'];
        $tmp_file = $_FILES['report_file']['tmp_name'];

        if (file_exists("../../../Files/$file"))
        {
              $six_digit_random_number = mt_rand(1000, 9999);
              $file = $six_digit_random_number . $file ;
        }
        move_uploaded_file($tmp_file,"../../../Files/$file");

        $mysql = "INSERT INTO `reports`( `title`, `description`, `file`, `date`, `month`, `sender`) VALUES (?,?,?,?,?,?)";

        $mystmt = $db->prepare($mysql);
        $mystmt->bind_param('ssssss',$reportitle,$Description,$file,$datesend,$month,$brgy_code);
        $mystmt->execute();
          if($mystmt)
          {
            $mystmt->close();
            $db->close();
            echo "<script>alert('We have Successful Send File.') </script>";
            echo "<script>window.location.href = '../../report.php'; </script>";
          }
          else  {
              echo "<script>alert('Sorry We Have Error encounter') </script>";
          }
    }

?>