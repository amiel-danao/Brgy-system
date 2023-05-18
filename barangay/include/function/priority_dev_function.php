<?php 

if(isset($_POST['addPDP']))
	{
		$aip = filter_var($_POST['aip'], FILTER_SANITIZE_STRING);
		$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
		$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
		$amount = $_POST['amount'];
		$year = $_POST['year'];
    $bcode =$_POST['bcode'];

	$mysql = "INSERT INTO `pdp_tbl`( `aip_reference`, `program_project`, `funding`, `amount`, `year`, 
  `brgy_code`) VALUES (?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssdis',$aip,$program,$funding,$amount,$year,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'priority_dev_project.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}

if(isset($_GET['record']))
  {
    $id = filter_var($_GET['record'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `pdp_tbl` WHERE `id`=?";
	  $mystmt = $db->prepare($mysql);
	  $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'priority_dev_project_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }


if (isset($_POST['updatePDP']))
  {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
  	$aip = filter_var($_POST['aip'], FILTER_SANITIZE_STRING);
  	$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
  	$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
  	$amount = $_POST['amount'];
  	$year = $_POST['year'];
    $bcode =$_POST['bcode'];

  $mysql = "UPDATE `pdp_tbl` SET `aip_reference`=?,`program_project`=?,`funding`=?,`amount`=?,`year`=?, `brgy_code`=?  WHERE `id`=?";
  $mystmt = $db->prepare($mysql);
  $mystmt->bind_param('sssdisi',$aip,$program,$funding,$amount,$year,$bcode,$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Update Record.') </script>";
          echo "<script>window.location.href = 'priority_dev_project_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }

  }
?>