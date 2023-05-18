<?php 
	require_once('config.php');
	if(isset($_POST['addabkd']))
	{
		$ORDINANCE = filter_var($_POST['b1'], FILTER_SANITIZE_STRING);
		$FUND_ALLOCATION = filter_var($_POST['b2'], FILTER_SANITIZE_STRING);
		$DISTRIBUTION_CENTER = filter_var($_POST['b3'], FILTER_SANITIZE_STRING);
		$DISTRIBUTION_IEC_MATERIALS = filter_var($_POST['c1'], FILTER_SANITIZE_STRING);
		$ANTI_DENGUE_CAMPAIGN = filter_var($_POST['c2'], FILTER_SANITIZE_STRING);
		$CLEAN_UP_DRIVE = filter_var($_POST['c3'], FILTER_SANITIZE_STRING);
		$TRAP_SYSTEM_APLLICATION = filter_var($_POST['c4'], FILTER_SANITIZE_STRING);
		$DENGUE_CASES = filter_var($_POST['denguecase'], FILTER_SANITIZE_STRING);
		$REMARKS = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
		$QUARTER = $_POST['quarter'];
		$YEAR = $_POST['year'];
		$bcode =$_POST['bcode'];

	$mysql = "INSERT INTO `abkd_tbl`( `quarter`, `ordinance(b1)`, `fund_allocation(b2)`, `distribution_center(b3)`, `distribution_iec_material_(c1)`, `anti_dengue_campaign(c2)`, `clean_up_drive(c3)`, `ol_trap_system_applicaton(c4)`, `number_dengue_case`, `remarks`, `year`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ssssssssssss',$QUARTER,$ORDINANCE,$FUND_ALLOCATION,$DISTRIBUTION_CENTER,$DISTRIBUTION_IEC_MATERIALS,$ANTI_DENGUE_CAMPAIGN,$CLEAN_UP_DRIVE,$TRAP_SYSTEM_APLLICATION,$DENGUE_CASES,$REMARKS,$YEAR,$bcode);
      if($mystmt->execute())
      {
        $mystmt->close();
        $db->close();
       //	header ("Location: ../../abkd.php");
       	echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'abkd.php'; </script>";
      }
      else
      {
         echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
	}

if(isset($_POST['updateabkd']))
	{
		$id = $_POST['id'];
		$ORDINANCE = filter_var($_POST['b1'], FILTER_SANITIZE_STRING);
		$FUND_ALLOCATION = filter_var($_POST['b2'], FILTER_SANITIZE_STRING);
		$DISTRIBUTION_CENTER = filter_var($_POST['b3'], FILTER_SANITIZE_STRING);
		$DISTRIBUTION_IEC_MATERIALS = filter_var($_POST['c1'], FILTER_SANITIZE_STRING);
		$ANTI_DENGUE_CAMPAIGN = filter_var($_POST['c2'], FILTER_SANITIZE_STRING);
		$CLEAN_UP_DRIVE = filter_var($_POST['c3'], FILTER_SANITIZE_STRING);
		$TRAP_SYSTEM_APLLICATION = filter_var($_POST['c4'], FILTER_SANITIZE_STRING);
		$DENGUE_CASES = filter_var($_POST['denguecase'], FILTER_SANITIZE_STRING);
		$REMARKS = filter_var($_POST['remarks'], FILTER_SANITIZE_STRING);
		$QUARTER = $_POST['quarter'];
		$YEAR = $_POST['year'];
		$bcode =$_POST['bcode'];

	$mysql = "UPDATE `abkd_tbl` SET `quarter`=?,`ordinance(b1)`=?,`fund_allocation(b2)`=?,`distribution_center(b3)`=?,`distribution_iec_material_(c1)`=?,`anti_dengue_campaign(c2)`=?,`clean_up_drive(c3)`=?,`ol_trap_system_applicaton(c4)`=?,`number_dengue_case`=?,`remarks`=?,`year`=?,`brgy_code`=? WHERE `id`=?";

    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ssssssssssssi',$QUARTER,$ORDINANCE,$FUND_ALLOCATION,$DISTRIBUTION_CENTER,$DISTRIBUTION_IEC_MATERIALS,$ANTI_DENGUE_CAMPAIGN,$CLEAN_UP_DRIVE,$TRAP_SYSTEM_APLLICATION,$DENGUE_CASES,$REMARKS,$YEAR,$bcode,$id);
      if($mystmt->execute())
      {
         //header ("Location: ../../abkd_list.php");
        $mystmt->close();
        $db->close();
        echo "<script>alert('We have Successful Update Record.') </script>";
        echo "<script>window.location.href = '../../abkd_list.php'; </script>";
      }
      else
      {
        echo "<script>alert('Sorry We have Error Encounter.') </script>";
      }
          
	}


if(isset($_GET['report']))
	{
		$id = filter_var($_GET['report'], FILTER_SANITIZE_NUMBER_INT);
		$mysql = "DELETE FROM `abkd_tbl` WHERE `id`=?";
	    $mystmt = $db->prepare($mysql);
	    $mystmt->bind_param('i',$id);
	      if($mystmt->execute())
	      {
	        $mystmt->close();
	        $db->close();
	       	echo "<script>alert('We have Successful Delete Record.') </script>";
            echo "<script>window.location.href = '../../abkd_list.php'; </script>";
	      }
	      else
	      {
	        echo "<script>alert('Sorry We have Error Encounter.') </script>";
	      }
	}
?>