<?php 
	
if(isset($_POST['addbdrrmfA']))
	{
		$aip = filter_var($_POST['aip'], FILTER_SANITIZE_STRING);
		$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
		$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
		$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
		$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
		$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
		$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
		$pservice = $_POST['pservice'];
		$mooe = $_POST['mooe'];
		$capital = $_POST['capital'];
		$totala = $_POST['totala'];
		$year = $_POST['year'];
		$bcode = $_POST['bcode'];

	$mysql = "INSERT INTO `bdrrmf_a_tbl`( `aipcode`, `program`, `implementoffice`, `starteddate`, `completiondate`, `expectedoutput`, `fundsource`, `personalservice`, `mooe`, `capital`, `totalbudgetallocation`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssssssddddis',$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$totala,$year,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'bdrrmf.php'; </script>";
      }
      else
      {
           echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}


if(isset($_GET['recorda']))
  {
    $id = filter_var($_GET['recorda'], FILTER_SANITIZE_NUMBER_INT);
    $mysqld1 = "DELETE FROM `bdrrmf_a_tbl` WHERE `id`=?";
	$mystmtd1 = $db->prepare($mysqld1);
	$mystmtd1->bind_param('i',$id);
        if($mystmtd1->execute())
        {
          $mystmtd1->close();
          $db->close();
            echo "<script>alert('We have Successful Delete Record.') </script>";
        	echo "<script>window.location.href = 'bdrrmf_record.php'; </script>";
        }
        else
        {
             echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }



if (isset($_POST['updatebdrrmfA']))
{
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$aip = filter_var($_POST['aip'], FILTER_SANITIZE_STRING);
	$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
	$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
	$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
	$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
	$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
	$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
	$pservice = $_POST['pservice'];
	$mooe = $_POST['mooe'];
	$capital = $_POST['capital'];
	$totala = $_POST['totala'];
	$year = $_POST['year'];
	$bcode = $_POST['bcode'];

$mysqlu1 = "UPDATE `bdrrmf_a_tbl` SET `aipcode`=?,`program`=?,`implementoffice`=?,`starteddate`=?,`completiondate`=?,`expectedoutput`=?,`fundsource`=?,`personalservice`=?,`mooe`=?,`capital`=?,`totalbudgetallocation`=?,`year`=?, `brgy_code`=? WHERE `id`=?";
$mystmtu1 = $db->prepare($mysqlu1);
$mystmtu1->bind_param('sssssssddddisi',$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$totala,$year,$bcode,$id);
      if($mystmtu1->execute())
      {
        $mystmtu1->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'bdrrmf_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

}
//============================================================


if(isset($_POST['addbdrrmfB']))
	{
		$aip = filter_var($_POST['aip'], FILTER_SANITIZE_STRING);
		$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
		$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
		$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
		$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
		$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
		$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
		$pservice = $_POST['pservice'];
		$mooe = $_POST['mooe'];
		$capital = $_POST['capital'];
		$totala = $_POST['totala'];
		$year = $_POST['year'];
		$bcode = $_POST['bcode'];

	$mysql = "INSERT INTO `bdrrmf_b_tbl`( `aipcode`, `program`, `implementoffice`, `starteddate`, `completiondate`, `expectedoutput`, `fundsource`, `personalservice`, `mooe`, `capital`, `totalbudgetallocation`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssssssddddis',$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$totala,$year,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'bdrrmf.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
}

if(isset($_GET['recordb']))
  	{
	    $id = filter_var($_GET['recordb'], FILTER_SANITIZE_NUMBER_INT);
	    $mysqld2 = "DELETE FROM `bdrrmf_b_tbl` WHERE `id`=?";
		$mystmtd2 = $db->prepare($mysqld2);
		$mystmtd2->bind_param('i',$id);
	        if($mystmtd2->execute())
	        {
	         	$mystmtd2->close();
	         	$db->close();
	         	echo "<script>alert('We have Successful Delete Record.') </script>";
	        	echo "<script>window.location.href = 'bdrrmf_record.php'; </script>";
	        }
	        else
	        {
	             echo "<script>alert('Sorry We have Error Encounter.') </script>";
	        }
  	}



if (isset($_POST['updatebdrrmfB']))
{
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$aip = filter_var($_POST['aip'], FILTER_SANITIZE_STRING);
	$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
	$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
	$sdate = filter_var($_POST['sdate'], FILTER_SANITIZE_STRING);
	$cdate = filter_var($_POST['cdate'], FILTER_SANITIZE_STRING);
	$expectedoutput = filter_var($_POST['expectedoutput'], FILTER_SANITIZE_STRING);
	$funding = filter_var($_POST['funding'], FILTER_SANITIZE_STRING);
	$pservice = $_POST['pservice'];
	$mooe = $_POST['mooe'];
	$capital = $_POST['capital'];
	$totala = $_POST['totala'];
	$year = $_POST['year'];
	$bcode = $_POST['bcode'];

$mysqlu2 = "UPDATE `bdrrmf_b_tbl` SET `aipcode`=?,`program`=?,`implementoffice`=?,`starteddate`=?,`completiondate`=?,`expectedoutput`=?,`fundsource`=?,`personalservice`=?,`mooe`=?,`capital`=?,`totalbudgetallocation`=?,`year`=?, `brgy_code`=? WHERE `id`=?";
$mystmtu2 = $db->prepare($mysqlu2);
$mystmtu2->bind_param('sssssssddddisi',$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$totala,$year,$bcode,$id);
      if($mystmtu2->execute())
      {
        $mystmtu2->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'bdrrmf_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
}
 ?>