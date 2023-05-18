<?php 
	
if(isset($_POST['addpopsA']))
	{
		$ppsa = filter_var($_POST['ppsa'], FILTER_SANITIZE_STRING);
		$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
		$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
		$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
		$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
		$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
		$pservice = $_POST['pservice'];
		$mooe = $_POST['mooe'];
		$capital = $_POST['capital'];
		$total = $_POST['total'];
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
		$year = $_POST['year'];
    $bcode =$_POST['bcode'];

	$mysql = "INSERT INTO `pops_a_tbl`( `ppsa`, `ImplementingOffice`, `Started`, `Completed`, `ExpectedOutput`, `FundingSource`, `ps`, `mooe`, `co`, `total`, `title`, `year`, `brgy_code`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ssssssddddsis',$ppsa,$implementing,$sdate,$cdate,$expectedoutput,
    	$funding,$pservice,$mooe,$capital,$total,$title,$year,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'pops.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}


if(isset($_GET['popsa']))
  {
    $id = filter_var($_GET['popsa'], FILTER_SANITIZE_NUMBER_INT);
    $mysqld1 = "DELETE FROM `pops_a_tbl` WHERE `id`=?";
  	$mystmtd1 = $db->prepare($mysqld1);
  	$mystmtd1->bind_param('i',$id);
        if($mystmtd1->execute())
        {
          	$mystmtd1->close();
          	$db->close();
            echo "<script>alert('We have Successful Delete Record.') </script>";
            echo "<script>window.location.href = 'pops_record.php'; </script>";
        }
        else
        {
            echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }


if (isset($_POST['updatepopsA']))
{
  $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$ppsa = filter_var($_POST['ppsa'], FILTER_SANITIZE_STRING);
	$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
	$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
	$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
	$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
	$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
	$pservice = $_POST['pservice'];
	$mooe = $_POST['mooe'];
	$capital = $_POST['capital'];
	$total = $_POST['total'];
  $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
	$year = $_POST['year'];
  $bcode =$_POST['bcode'];

$mysqlu1 = "UPDATE `pops_a_tbl` SET `ppsa`=?,`ImplementingOffice`=?,`Started`=?,`Completed`=?,`ExpectedOutput`=?,`FundingSource`=?,`ps`=?,`mooe`=?,`co`=?,`total`=?, `title`=?,`year`=?, 
`brgy_code`=? WHERE `id`=?";
$mystmtu1 = $db->prepare($mysqlu1);
$mystmtu1->bind_param('ssssssddddsisi',$ppsa,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$total,$title,$year,$bcode,$id);
      if($mystmtu1->execute())
      {
        $mystmtu1->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'pops_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

}
//============================================================


if(isset($_POST['addpopsB']))
	{
		$ppsa = filter_var($_POST['ppsa'], FILTER_SANITIZE_STRING);
		$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
		$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
		$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
		$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
		$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
		$pservice = $_POST['pservice'];
		$mooe = $_POST['mooe'];
		$capital = $_POST['capital'];
		$total = $_POST['total'];
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
		$year = $_POST['year'];
    $bcode =$_POST['bcode'];

	$mysql = "INSERT INTO `pops_b_tbl`( `ppsa`, `ImplementingOffice`, `Started`, `Completed`, `ExpectedOutput`, `FundingSource`, `ps`, `mooe`, `co`, `total`, `title`, `year`, `brgy_code`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ssssssddddsis',$ppsa,$implementing,$sdate,$cdate,$expectedoutput,
    	$funding,$pservice,$mooe,$capital,$total,$title,$year,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'pops.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}


if(isset($_GET['popsb']))
  	{
	    $id = filter_var($_GET['popsb'], FILTER_SANITIZE_NUMBER_INT);
	    $mysqld2 = "DELETE FROM `pops_b_tbl` WHERE `id`=?";
  		$mystmtd2 = $db->prepare($mysqld2);
  		$mystmtd2->bind_param('i',$id);
	        if($mystmtd2->execute())
	        {
	         	$mystmtd2->close();
	         	$db->close();
            echo "<script>alert('We have Successful Delete Record.') </script>";
            echo "<script>window.location.href = 'pops_record.php'; </script>";
	        }
	        else
	        {
	         echo "<script>alert('Sorry We have Error Encounter.') </script>";
	        }
  	}



if (isset($_POST['updatepopsB']))
{
  $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$ppsa = filter_var($_POST['ppsa'], FILTER_SANITIZE_STRING);
	$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
	$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
	$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
	$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
	$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
	$pservice = $_POST['pservice'];
	$mooe = $_POST['mooe'];
	$capital = $_POST['capital'];
	$total = $_POST['total'];
  $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
	$year = $_POST['year'];
  $bcode =$_POST['bcode'];

$mysqlu2 = "UPDATE `pops_b_tbl` SET `ppsa`=?,`ImplementingOffice`=?,`Started`=?,`Completed`=?,`ExpectedOutput`=?,`FundingSource`=?,`ps`=?,`mooe`=?,`co`=?,`total`=?, `title`=?,`year`=?, 
`brgy_code`=? WHERE `id`=?";
$mystmtu2 = $db->prepare($mysqlu2);
$mystmtu2->bind_param('ssssssddddsisi',$ppsa,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$total,$title,$year,$bcode,$id);
      if($mystmtu2->execute())
      {
        $mystmtu2->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'pops_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

}
 ?>