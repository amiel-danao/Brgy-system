<?php 



if(isset($_POST['barangaygoal']))
	{
		$bcode = $_POST['bcode'];
		$goal = $_POST['Goalmessage'];
		$type = "goal";
		$sqlg ="INSERT INTO `brgy_info_tbl`( `message`, `barangay_code`, `type`) VALUES (?,?,?)";
		if($stmtg = $db->prepare($sqlg))
			{
				$stmtg->bind_param('sss',$goal,$bcode,$type);
				$stmtg->execute();
				echo "<script>alert('Succesful Added New Goal.') </script>";
			    echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
			}
		else{
			echo "<script>alert('There was an error encounter.') </script>";
			echo "<script>window.location.href = 'barangay_goal.php'; </script>";
			exit();
		}
		
	}

// if(isset($_POST['barangaygoal']))
// 	{
// 		$bcode = $_POST['bcode'];
// 		$goal = $_POST['Goalmessage'];
// 		$type = "goal";
// 		$sqlg ="INSERT INTO `barangay_goal_tbl`( `goal`, `bcode`) VALUES (?,?)";
// 		if($stmtg =$db->prepare($sqlg))
// 			{
// 				$stmtg->bind_param('ss',$goal,$bcode);
// 				$stmtg->execute();
// 				echo "<script>alert('Succesful Added New Goal.') </script>";
// 			    echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
// 			}
// 		else{
// 			echo "<script>alert('There was an error encounter.') </script>";
// 			echo "<script>window.location.href = 'barangay_goal.php'; </script>";
// 			exit();
// 		}
		
// 	}


if(isset($_POST['barangaymission']))
	{
		$bcode = $_POST['bcode'];
		$mission = $_POST['Missionmessage'];
		$type = "mission";
		$sqlm ="INSERT INTO `brgy_info_tbl`( `message`, `barangay_code`, `type`) VALUES (?,?,?)";
		if($stmtm = $db->prepare($sqlm))
			{
				$stmtm->bind_param('sss',$mission,$bcode,$type);
				$stmtm->execute();
				echo "<script>alert('Succesful Added New Mission.') </script>";
			    echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
			}
		else{
			echo "<script>alert('There was an error encounter.') </script>";
			echo "<script>window.location.href = 'barangay_mission.php'; </script>";
			exit();
		}
		
	}

// if(isset($_POST['barangaymission']))
// 	{
// 		$bcode = $_POST['bcode'];
// 		$mission = $_POST['Missionmessage'];
// 		$sqlm ="INSERT INTO `barangay_mission_tbl`( `mission`, `bcode`) VALUES (?,?)";
// 		if($stmtm = $db->prepare($sqlm))
// 			{
// 				$stmtm->bind_param('ss',$mission,$bcode);
// 				$stmtm->execute();
// 				echo "<script>alert('Succesful Added New Mission.') </script>";
// 			    echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
// 			}
// 		else{
// 			echo "<script>alert('There was an error encounter.') </script>";
// 			echo "<script>window.location.href = 'barangay_mission.php'; </script>";
// 			exit();
// 		}
		
// 	}



if(isset($_POST['barangayvission']))
	{
		$bcode = $_POST['bcode'];
		$vission = $_POST['Vissionmessage'];
		$type = "vision";
		$sqlv ="INSERT INTO `brgy_info_tbl`( `message`, `barangay_code`, `type`) VALUES (?,?,?)";
		if($stmtv = $db->prepare($sqlv))
			{
				$stmtv->bind_param('sss',$vission,$bcode,$type);
				$stmtv->execute();
				echo "<script>alert('Succesful Added New Vission.') </script>";
			    echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
			}
		else{
			echo "<script>alert('There was an error encounter.') </script>";
			echo "<script>window.location.href = 'barangay_vission.php'; </script>";
			exit();
		}
		
	}
// if(isset($_POST['barangayvission']))
// 	{
// 		$bcode = $_POST['bcode'];
// 		$vission = $_POST['Vissionmessage'];
// 		$sqlv ="INSERT INTO `barangay_vision_tbl`( `vision`, `bcode`) VALUES (?,?)";
// 		if($stmtv = $db->prepare($sqlv))
// 			{
// 				$stmtv->bind_param('ss',$vission,$bcode);
// 				$stmtv->execute();
// 				echo "<script>alert('Succesful Added New Vission.') </script>";
// 			    echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
// 			}
// 		else{
// 			echo "<script>alert('There was an error encounter.') </script>";
// 			echo "<script>window.location.href = 'barangay_vission.php'; </script>";
// 			exit();
// 		}
		
// 	}


if(isset($_GET['deletegoal']))
  {
    $deletegoalid = filter_var($_GET['deletegoal'], FILTER_SANITIZE_NUMBER_INT);
    $sqldg = "DELETE FROM `brgy_info_tbl` WHERE `id`=?";
  	if($stmtdg = $db->prepare($sqldg))
  		{
		  $stmtdg->bind_param('i',$deletegoalid);
		  $stmtdg->execute();
          echo "<script>alert('We have Successful Delete Goal.') </script>";
          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
          exit();
        }
        $stmtdg->close();
        $db->close();
  }

// if(isset($_GET['deletegoal']))
//   {
//     $deletegoalid = filter_var($_GET['deletegoal'], FILTER_SANITIZE_NUMBER_INT);
//     $sqldg = "DELETE FROM `barangay_goal_tbl` WHERE `id`=?";
//   	if($stmtdg = $db->prepare($sqldg))
//   		{
// 		  $stmtdg->bind_param('i',$deletegoalid);
// 		  $stmtdg->execute();
//           echo "<script>alert('We have Successful Delete Goal.') </script>";
//           echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
//         }
//         else
//         {
//           echo "<script>alert('Sorry We have Error Encounter.') </script>";
//           echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
//           exit();
//         }
//         $stmtdg->close();
//         $db->close();
//   }


if(isset($_GET['deletemission']))
  {
    $deletemissionid = filter_var($_GET['deletemission'], FILTER_SANITIZE_NUMBER_INT);
    $sqldm = "DELETE FROM `brgy_info_tbl` WHERE `id`=?";
  	if($stmtdm = $db->prepare($sqldm))
  		{
		  $stmtdm->bind_param('i',$deletemissionid);
		  $stmtdm->execute();
          echo "<script>alert('We have Successful Delete Mission.') </script>";
          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
          exit();
        }
        $stmtdm->close();
        $db->close();
  }
 // if(isset($_GET['deletemission']))
 //  {
 //    $deletemissionid = filter_var($_GET['deletemission'], FILTER_SANITIZE_NUMBER_INT);
 //    $sqldm = "DELETE FROM `barangay_mission_tbl` WHERE `id`=?";
 //  	if($stmtdm = $db->prepare($sqldm))
 //  		{
	// 	  $stmtdm->bind_param('i',$deletemissionid);
	// 	  $stmtdm->execute();
 //          echo "<script>alert('We have Successful Delete Mission.') </script>";
 //          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
 //        }
 //        else
 //        {
 //          echo "<script>alert('Sorry We have Error Encounter.') </script>";
 //          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
 //          exit();
 //        }
 //        $stmtdm->close();
 //        $db->close();
 //  }



if(isset($_GET['deletevision']))
  {
    $deletevision = filter_var($_GET['deletevision'], FILTER_SANITIZE_NUMBER_INT);
    $sqldv = "DELETE FROM `brgy_info_tbl` WHERE `id`=?";
  	if($stmtdv = $db->prepare($sqldv))
  		{
		  $stmtdv->bind_param('i',$deletevision);
		  $stmtdv->execute();
          echo "<script>alert('We have Successful Delete Vision.') </script>";
          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
          echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
          exit();
        }
        $stmtdv->close();
        $db->close();
  }
// if(isset($_GET['deletevision']))
//   {
//     $deletevision = filter_var($_GET['deletevision'], FILTER_SANITIZE_NUMBER_INT);
//     $sqldv = "DELETE FROM `barangay_vision_tbl` WHERE `id`=?";
//   	if($stmtdv = $db->prepare($sqldv))
//   		{
// 		  $stmtdv->bind_param('i',$deletevision);
// 		  $stmtdv->execute();
//           echo "<script>alert('We have Successful Delete Vision.') </script>";
//           echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
//         }
//         else
//         {
//           echo "<script>alert('Sorry We have Error Encounter.') </script>";
//           echo "<script>window.location.href = 'barangay_goal_mission_vission.php'; </script>";
//           exit();
//         }
//         $stmtdv->close();
//         $db->close();
//   }
 ?>