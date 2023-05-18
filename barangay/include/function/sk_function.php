<?php 
	if(isset($_POST['addsk']))
	{
		$gap = filter_var($_POST['gap'], FILTER_SANITIZE_STRING);
		$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
		$result = filter_var($_POST['result'], FILTER_SANITIZE_STRING);
		$amount = $_POST['amount'];
		$source = filter_var($_POST['source'], FILTER_SANITIZE_STRING);
		$period = filter_var($_POST['period'], FILTER_SANITIZE_STRING);
		$budget = $_POST['budget'];
		$year = $_POST['year'];
    $bcode =$_POST['bcode'];

$mysql = "INSERT INTO `sk_tbl`( `gap_issues`, `p_a_d`, `result_target`, `amount`, `source`, `implementantion`, `year`, `total_budget`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?)";

  $mystmt = $db->prepare($mysql);
  $mystmt->bind_param('sssdssids',$gap,$program,$result,$amount,$source,$period,$year,$budget,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'sk.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}

if(isset($_GET['record']))
  {
    $id = filter_var($_GET['record'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `sk_tbl` WHERE `id`=?";
  	$mystmt = $db->prepare($mysql);
  	$mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'sk_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }


  if (isset($_POST['updatesk']))
  {
      $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
      $gap = filter_var($_POST['gap'], FILTER_SANITIZE_STRING);
      $program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
      $result = filter_var($_POST['result'], FILTER_SANITIZE_STRING);
      $amount = $_POST['amount'];
      $source = filter_var($_POST['source'], FILTER_SANITIZE_STRING);
      $period = filter_var($_POST['period'], FILTER_SANITIZE_STRING);
      $budget = $_POST['budget'];
      $year = $_POST['year'];
      $bcode =$_POST['bcode'];

$mysql = "UPDATE `sk_tbl` SET `gap_issues`=?,`p_a_d`=?,`result_target`=?,`amount`=?,`source`=?,`implementantion`=?,`year`=?,`total_budget`=?,`brgy_code`=? WHERE `id`=?";
$mystmt = $db->prepare($mysql);
$mystmt->bind_param('sssdssidsi',$gap,$program,$result,$amount,$source,$period,$year,$budget,$bcode,
  $id);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'sk_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

}
 ?>