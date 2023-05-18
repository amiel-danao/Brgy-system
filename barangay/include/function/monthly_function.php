<?php 
	require_once('config.php');

if (isset($_POST['addmonthly1']))
{
	$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
	$on_going = filter_var($_POST['on_going'], FILTER_SANITIZE_STRING);
	$completed = filter_var($_POST['completed'], FILTER_SANITIZE_STRING);
	$started_date = $_POST['started_date'];
	$completed_date = $_POST['completed_date'];
	$cost = filter_var($_POST['cost'], FILTER_SANITIZE_STRING);
	$fund = filter_var($_POST['fund'], FILTER_SANITIZE_STRING);
	$remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
	$month = $_POST['month'];
	$year = $_POST['year'];
  $bcode =$_POST['bcode'];

 $mysql = "INSERT INTO `monthly_p1_tbl`( `description`, `on_going_status`, `completed_status`, `started_date`, `completed date`, `project_cost`, `funds`, `remarks`, `month`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssssssssss',$description,$on_going,$completed,$started_date,$completed_date,$cost,$fund,$remarks,$month,$year,$bcode);
    // $stmt->execute();
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'monthly_part1.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error encounter') </script>";
           exit();
      }

}

if(isset($_GET['records1']))
  {
    $id = filter_var($_GET['records1'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `monthly_p1_tbl` WHERE `id`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          //header ("Location: monthly_record.php");
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'monthly_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }


if(isset($_POST['updatemonthly1']))
  {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
    $on_going = filter_var($_POST['on_going'], FILTER_SANITIZE_STRING);
    $completed = filter_var($_POST['completed'], FILTER_SANITIZE_STRING);
    $started_date = $_POST['started_date'];
    $completed_date = $_POST['completed_date'];
    $cost = filter_var($_POST['cost'], FILTER_SANITIZE_STRING);
    $fund = filter_var($_POST['fund'], FILTER_SANITIZE_STRING);
    $remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
    $month = $_POST['month'];
    $year = $_POST['year'];
    $bcode =$_POST['bcode'];

    $mySql1 = "UPDATE `monthly_p1_tbl` SET `description`=?,`on_going_status`=?,`completed_status`=?,`started_date`=?,`completed date`=?,`project_cost`=?,`funds`=?,`remarks`=?,`month`=?,`year`=?,`brgy_code`=? WHERE `id` = ?";
    $myStmt1 = $db->prepare($mySql1);
    $myStmt1->bind_param('sssssssssssi',$description,$on_going,$completed,$started_date,$completed_date,$cost,$fund,$remarks,$month,$year,$bcode,$id);
    if($myStmt1->execute())
        {         
          $myStmt1->close();
          $db->close();
          echo "<script>alert('We have Successful Update Record.')</script>";
          echo "<script>window.location.href = 'monthly_record.php';</script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";  
        }
  }


//==================================================================================

if (isset($_POST['addmonthly2']))
{
	$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
	$order = filter_var($_POST['order'], FILTER_SANITIZE_STRING);
	$description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
	$remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
	$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
	$number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);
	$conducted = $_POST['conducted'];
	$present = filter_var($_POST['present'], FILTER_SANITIZE_NUMBER_INT);
	$absent =filter_var( $_POST['absent'], FILTER_SANITIZE_NUMBER_INT);
	$month = $_POST['month'];
	$year = $_POST['year'];
  $bcode =$_POST['bcode'];

 $mysql = "INSERT INTO `monthly_p2_tbl`( `title`, `order_no`, `description`, `remarks`, `type`, `no`, `date_conducted`, `no_present`, `no_absent`, `month`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

 $mystmt = $db->prepare($mysql);
 $mystmt->bind_param('sssssisiisss',$title,$order,$description,$remarks,$type,$number,$conducted,$present,$absent,$month,$year,$bcode);
    // $stmt->execute();
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'monthly_part2.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error encounter') </script>";
           exit();
      }

}

if(isset($_GET['records2']))
  {
    $id = filter_var($_GET['records2'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `monthly_p2_tbl` WHERE `id`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          //header ("Location: monthly_record.php");
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'monthly_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
            
        }
  }


if(isset($_POST['updatemonthly2']))
  {
    $id = filter_var($_POST['ids'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $order = filter_var($_POST['order'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
    $remarks = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);
    $conducted = $_POST['conducted'];
    $present = filter_var($_POST['present'], FILTER_SANITIZE_NUMBER_INT);
    $absent = filter_var($_POST['absent'], FILTER_SANITIZE_NUMBER_INT);
    $month = $_POST['month'];
    $year = $_POST['year'];
    $bcode =$_POST['bcode'];

    $mySql2 = "UPDATE `monthly_p2_tbl` SET `title`=?,`order_no`=?,`description`=?,`remarks`=?,`type`=?,`no`=?,`date_conducted`=?,`no_present`=?,`no_absent`=?,`month`=?,`year`=?,`brgy_code`=? WHERE `id` = ?";
    $myStmt2 = $db->prepare($mySql2);
    $myStmt2->bind_param('sssssisiisssi',$title,$order,$description,$remarks,$type,$number,$conducted,$present,$absent,$month,$year,$bcode,$id);
    if($myStmt2->execute())
        {
          $myStmt2->close();
          $db->close();
          echo "<script>alert('We have Successful Update Record.') </script>";
          echo "<script>window.location.href = 'monthly_record.php'; </script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";
             exit();
        }
  }


//============================================================================

if (isset($_POST['addmonthly3']))
{
	$dispute = filter_var($_POST['dispute'], FILTER_SANITIZE_STRING);
	$filed = filter_var($_POST['filed'], FILTER_SANITIZE_NUMBER_INT);
	$settled = filter_var($_POST['settled'], FILTER_SANITIZE_NUMBER_INT);
	$referred = filter_var($_POST['referred'], FILTER_SANITIZE_NUMBER_INT);
	$withdraw = filter_var($_POST['withdraw'], FILTER_SANITIZE_NUMBER_INT);
	$month = $_POST['month'];
	$year = $_POST['year'];
  $bcode =$_POST['bcode'];

 $mysql = "INSERT INTO `monthly_p3_tbl`( `dispute`, `filed`, `settled`, `reffered`, `withdraw`, `monthly`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?)";
 $mystmt = $db->prepare($mysql);
 $mystmt->bind_param('siiiisss',$dispute,$filed,$settled,$referred,$withdraw,$month,$year,$bcode);
    // $stmt->execute();
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'monthly_part3.php'; </script>";
      }
      else
      {
         echo "<script>alert('Sorry We have Error encounter') </script>";
         exit();
      }

}

if(isset($_GET['records3']))
  {
    $id = filter_var($_GET['records3'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `monthly_p3_tbl` WHERE `id`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          //header ("Location: monthly_record.php");
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'monthly_record.php'; </script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";
             exit();
        }
  }


  if(isset($_POST['updatemonthly3']))
  {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $dispute = filter_var($_POST['dispute'], FILTER_SANITIZE_STRING);
    $filled = filter_var($_POST['filed'], FILTER_SANITIZE_NUMBER_INT);
    $settled = filter_var($_POST['settled'], FILTER_SANITIZE_NUMBER_INT);
    $referred = filter_var($_POST['referred'], FILTER_SANITIZE_NUMBER_INT);
    $withdraw = filter_var($_POST['withdraw'], FILTER_SANITIZE_NUMBER_INT);
    $month = $_POST['month'];
    $year = $_POST['year'];
    $bcode =$_POST['bcode'];

    $mySql3 = "UPDATE `monthly_p3_tbl` SET `dispute`=?,`filed`=?,`settled`=?,`reffered`=?,`withdraw`=?,`monthly`=?,`year`=?,`brgy_code`=? WHERE `id` = ?";
    $myStmt3 = $db->prepare($mySql3 );
    $myStmt3->bind_param('siiiisssi',$dispute,$filled,$settled,$referred,$withdraw,$month,$year,
      $bcode,$id);
    if($myStmt3->execute())
        {
          $myStmt3->close();
          $db->close();
          echo "<script>alert('We have Successful Update Record.') </script>";
          echo "<script>window.location.href = 'monthly_record.php'; </script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";
             exit();
        }
  }
?>