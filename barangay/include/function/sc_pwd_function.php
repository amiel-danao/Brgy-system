<?php 

if(isset($_POST['addsc']))
	{
		$referencecode = filter_var($_POST['referencecode'], FILTER_SANITIZE_STRING);
		$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
		$implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
		$quarter1 = $_POST['quarter1'];
		$quarter2 = $_POST['quarter2'];
		$quarter3 = $_POST['quarter3'];
		$quarter4 = $_POST['quarter4'];
		$year = $_POST['year'];
    $bcode =$_POST['bcode'];

	$mysql = "INSERT INTO `sc_tbl`( `aipcode`, `program`, `implemetingoffice`, `quarter1`, `quarter2`, `quarter3`, `quarter4`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssddddis',$referencecode,$program,$implementing,$quarter1,$quarter2,$quarter3,$quarter4,$year,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'sc.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}

if(isset($_GET['sc']))
  {
    $id = filter_var($_GET['sc'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `sc_tbl` WHERE `id`=?";
  	$mystmt = $db->prepare($mysql);
  	$mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'sc_pwd_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }


  if (isset($_POST['updatesc']))
  {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
      	$aipcode = filter_var($_POST['referencecode'], FILTER_SANITIZE_STRING);
      	$program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
      	$implemetingoffice = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
      	$quarter1 = $_POST['quarter1'];
      	$quarter2 = $_POST['quarter2'];
      	$quarter3 = $_POST['quarter3'];
      	$quarter4 = $_POST['quarter4'];
      	$year = $_POST['year'];
        $bcode =$_POST['bcode'];

$mysql = "UPDATE `sc_tbl` SET `aipcode`=?,`program`=?,`implemetingoffice`=?,`quarter1`=?,`quarter2`=?,`quarter3`=?,`quarter4`=?,`year`=?,`brgy_code`=? WHERE `id`=?";
$mystmt = $db->prepare($mysql);
$mystmt->bind_param('sssddddisi',$aipcode,$program,$implemetingoffice,$quarter1,$quarter2,$quarter3,$quarter4,$year,$bcode,$id);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'sc_pwd_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

  }



//=============================================================


if(isset($_POST['addpwd']))
  {
    $referencecode = filter_var($_POST['referencecode'], FILTER_SANITIZE_STRING);
    $program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
    $implementing = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
    $quarter1 = $_POST['quarter1'];
    $quarter2 = $_POST['quarter2'];
    $quarter3 = $_POST['quarter3'];
    $quarter4 = $_POST['quarter4'];
    $year = $_POST['year'];
    $bcodes =$_POST['bcodes'];

  $mysql = "INSERT INTO `pwd_tbl`( `aipcode`, `program`, `implemetingoffice`, `quarter1`, `quarter2`, `quarter3`, `quarter4`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('sssddddis',$referencecode,$program,$implementing,$quarter1,$quarter2,
      $quarter3,$quarter4,$year,$bcodes);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'pwd.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
  }


if(isset($_GET['pwd']))
  {
    $id = filter_var($_GET['pwd'], FILTER_SANITIZE_NUMBER_INT);
    $mysql = "DELETE FROM `pwd_tbl` WHERE `id`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('i',$id);
        if($mystmt->execute())
        {
          $mystmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete Record.') </script>";
          echo "<script>window.location.href = 'sc_pwd_record.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
  }
  
  if (isset($_POST['updatepwd']))
  {
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $aipcode = filter_var($_POST['referencecode'], FILTER_SANITIZE_STRING);
        $program = filter_var($_POST['program'], FILTER_SANITIZE_STRING);
        $implemetingoffice = filter_var($_POST['implementing'], FILTER_SANITIZE_STRING);
        $quarter1 = $_POST['quarter1'];
        $quarter2 = $_POST['quarter2'];
        $quarter3 = $_POST['quarter3'];
        $quarter4 = $_POST['quarter4'];
        $year = $_POST['year'];
        $bcode =$_POST['bcode'];

$mysql = "UPDATE `pwd_tbl` SET `aipcode`=?,`program`=?,`implemetingoffice`=?,`quarter1`=?,`quarter2`=?,`quarter3`=?,`quarter4`=?,`year`=?,`brgy_code`=? WHERE `id`=?";
$mystmt = $db->prepare($mysql);
$mystmt->bind_param('sssddddisi',$aipcode,$program,$implemetingoffice,$quarter1,$quarter2,$quarter3,$quarter4,$year,$bcode,$id);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = 'sc_pwd_record.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }

  }
?>