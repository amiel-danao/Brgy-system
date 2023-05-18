<?php

require_once('config.php');

$path = "../../../Files";
  if (isset($_GET['deletereportid']))
    {
      $rid = $_GET['deletereportid'];   
      if (deletefile($rid) == true)
        {
        $sqls = "DELETE FROM `reports` WHERE `id`= ? ";
        $statem = $db->prepare($sqls);
        $statem->bind_param('i',$rid);
       // $statem->execute();

            if($statem->execute())
            {
              $statem->close();
              $db->close();
              //header("Location: ../../report_send.php?Remove_Success");
               echo "<script>alert('We have Successful Delete.') </script>";
            echo "<script>window.location.href = '../../report_send.php'; </script>";
            }
            else  {
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
          $Sql = "SELECT `file` FROM `reports` WHERE `id`= ? ";
          $Stmt = $db->prepare($Sql);
          $Stmt->bind_param('i',$rid);
          $Stmt->execute();
          $Result = $Stmt->get_result();
          while ($Data = $Result->fetch_assoc())
            { 
              $FILES= $Data['file'];
            }
            unlink("../../../Files/$FILES");
            return true;
    }
?>