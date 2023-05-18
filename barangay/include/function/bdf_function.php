<?php 
	
if(isset($_POST['addbdf']))
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
		$total = $_POST['total'];
		$adaptation = filter_var($_POST['adaptation'], FILTER_SANITIZE_STRING);
		$mitigation = filter_var($_POST['mitigation'], FILTER_SANITIZE_STRING);
		$year = $_POST['year'];
    $bcode = $_POST['bcode'];

	$bdfsql = "INSERT INTO `bdf_tbl`( `aip`, `program`, `implemetationoffice`, `sdate`, `cdate`, `ExpectedOutput`, `FundingSource`, `ps`, `mooe`, `capital`, `total`, `climateadapt`, `climatemitigation`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $bdfstmt = $db->prepare($bdfsql);
    $bdfstmt->bind_param('sssssssddddssis',$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$total,$adaptation,$mitigation,$year,$bcode);
      if($bdfstmt->execute())
      {
        $bdfstmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'bdf.php?bdfadd=bdfadd'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}


if(isset($_GET['deletebdf']))
  {
    $id = filter_var($_GET['deletebdf'], FILTER_SANITIZE_NUMBER_INT);
    $bdfsqld = "DELETE FROM `bdf_tbl` WHERE `id`=?";
  	$bdfstmtd = $db->prepare($bdfsqld);
  	$bdfstmtd->bind_param('i',$id);
        if($bdfstmtd->execute())
        {
          $bdfstmtd->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'bdf_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }



if (isset($_POST['updatebdf']))
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
	$total = $_POST['total'];
	$adaptation = filter_var($_POST['adaptation'], FILTER_SANITIZE_STRING);
	$mitigation = filter_var($_POST['mitigation'], FILTER_SANITIZE_STRING);
	$year = $_POST['year'];
  $bcode = $_POST['bcode'];

$bdfsqlu = "UPDATE `bdf_tbl` SET `aip`=?,`program`=?,`implemetationoffice`=?,`sdate`=?,`cdate`=?,`ExpectedOutput`=?,`FundingSource`=?,`ps`=?,`mooe`=?,`capital`=?,`total`=?,`climateadapt`=?,`climatemitigation`=?,`year`=?, `brgy_code`=?  WHERE `id`=?";
$bdfstmtu = $db->prepare($bdfsqlu);
$bdfstmtu->bind_param('sssssssddddssisi',$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$total,$adaptation,$mitigation,$year,$bcode,$id);
      if($bdfstmtu->execute())
      {
        $bdfstmtu->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'bdf_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

}
//============================================================

 ?>