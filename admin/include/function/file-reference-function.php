<?php

   if (isset($_POST['sendfiles']))
   {
        $filetitle = filter_var($_POST['filettitle'], FILTER_SANITIZE_STRING);
        $datesend = $_POST['dateupload'];
        $Description = filter_var($_POST['Description'], FILTER_SANITIZE_STRING);
        $file = $_FILES['file']['name'];
        $tmp_file = $_FILES['file']['tmp_name'];

        if (file_exists("Files/$file"))
        {
              $six_digit_random_number = mt_rand(1000, 9999);
              $file = $six_digit_random_number . $file ;
        }
        move_uploaded_file($tmp_file,"Files/$file");

        $mysql = "INSERT INTO `reference_file_tbl`( `title`, `description`, `date`, `file`) VALUES (?,?,?,?)";

        $mystmt = $db->prepare($mysql);
        $mystmt->bind_param('ssss',$filetitle,$Description,$datesend,$file);
       
          if($mystmt->execute())
          {
            $mystmt->close();
            $db->close();
            echo "<script>alert('We have Successful Send File.') </script>";
            echo "<script>window.location.href = 'add_reference.php'; </script>";
          }
          else  {
              echo "<script>alert('We Have Error encounter') </script>";
              exit();
          }
    }




$path = "Files";
    if (isset($_GET['deletefileid']))
    {
        $rid = $_GET['deletefileid']; 
        
      if (deletefile($rid) == true)
        {
        $sqls = "DELETE FROM `reference_file_tbl` WHERE `id`= ? ";
        $statem = $db->prepare($sqls);
        $statem->bind_param('i',$rid);
        
          if($statem->execute())
            {
              $statem->close();
              $db->close();
              //header("Location: file-reference-list.php");
              echo "<script>alert('We have Successful Delete File.') </script>";
              echo "<script>window.location.href = 'file-reference-list.php'; </script>";
            }
          else  
            {
            echo "<script>alert('We have Error encounter in Deleting Record') </script>";
            }

        }
        else
        {
          echo "<script>alert('We have Error encounter in Deleting files') </script>";

        }
  
    }

  function deletefile($rid)
    {
        global $db;
          $Sql = "SELECT `file` FROM `reference_file_tbl` WHERE `id`= ? ";
          $Stmt = $db->prepare($Sql);
          $Stmt->bind_param('i',$rid);
          $Stmt->execute();
          $Result = $Stmt->get_result();
          while ($Data = $Result->fetch_assoc())
            { 
              $FILES= $Data['file'];
            }
            unlink("Files/$FILES");
            return true;
    }
?>

