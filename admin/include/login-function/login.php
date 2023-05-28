<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('config.php');

if(isset($_POST['adminbtn']))
	{
		//$code = $_POST['code'];
		$username = strip_tags(trim($_POST['loginusername']));
		$pass = strip_tags(trim($_POST['loginpass']));

		$usernames = mysqli_real_escape_string($db,$username);
		$passwords = mysqli_real_escape_string($db,$pass);


		if(accountavailability($usernames) == false)
			{
				 echo "<script>alert('Sorry the username account was not exist') </script>";
				 echo "<script>window.location.href = 'index.php'; </script>";
				 exit();
			}
		else
			{
				$sql = "SELECT * FROM `admin_tbl` WHERE  `username` = ? ";
				$stmt = $db->prepare($sql);
		  		$stmt->bind_param('s',$usernames);
		  		$stmt->execute();
			  	$stmt->bind_result($id,$first_name,$last_name,$middle_name,$email,$username,$password,$token);
			    $stmt->fetch();
      			$stmt->close();

      			if(password_verify($passwords, $password))
				  	{
						//  $_SESSION['bcode'] = $brgy_code;
						//$_SESSION['bname'] = $brgy_name;
				  		if(!isset($_SESSION['status']) || empty($_SESSION['status']))
				  		{
					  		$_SESSION['status'] = "Login";

					  		// echo "<script>alert('Succesful') </script>";
					  		// echo "<script>window.location.href = 'barangay_residents.php'; </script>";

				  		}
					  header("Location: dashboard.php");

				  	}
			  	else
				  	{
			  		 echo "<script>alert('The password you’ve entered is incorrect!.') </script>";
			  		 echo "<script>window.location.href = 'index.php';</script>";
			  		 exit();

				  	}
			}

	}

function accountavailability($usernames)
	{
	  global $db;
	  $sqlcheack1 = "SELECT * FROM `admin_tbl` WHERE  `username` = ? ";
	  $stmtcheck1 = $db->prepare($sqlcheack1);
  	  $stmtcheck1->bind_param('s',$usernames);
  	  $stmtcheck1->execute();
  	  $stmtcheck1->store_result();
      if($stmtcheck1->num_rows === 0)
        {
        return false;
        }
        else{
			$stmtcheck1->bind_result($id,$first_name,$last_name,$middle_name,$email,$username,$password,$token);

  	  $stmtcheck1->fetch();
      $stmtcheck1->close();
      return true;
       }
  	  	// if($brgy_code == $code)
  	  	// 	{
      //     		return true;
  	  	// 	}
  	  	// else
  	  	// 	{
  	  	// 		return false;
  	  	// 	}
	}

/// the first log in code
// if(isset($_POST['barangaylogin']))
// 	{
// 		$code = $_POST['code'];
// 		$username = strip_tags(trim($_POST['busername']));
// 		$password = strip_tags(trim($_POST['bpassword']));

// 		$usernames = mysqli_real_escape_string($db,$username);
// 		$passwords = mysqli_real_escape_string($db,$password);


// 		if(registration($usernames,$code) == false)
// 			{
// 				 echo "<script>alert('Sorry this account was not register for your Barangay system. or this account was not exist') </script>";
// 				 echo "<script>window.location.href = '../../index.php?barangay=$code'; </script>";
// 				 exit();
// 			}
// 		elseif (checkstatus($usernames) == false)
// 			{
// 				 echo "<script>alert('Sorry this account was not ACTIVE anymore. Please coordinate in Maragondon DILG for your Account.') </script>";
// 				 echo "<script>window.location.href = '../../index.php?barangay=$code'; </script>";
// 				 exit();
// 			}
// 		else
// 			{
// 				$sql = "SELECT * FROM `user_account_tbl` WHERE  `username` = ? ";
// 				$stmt = $db->prepare($sql);
// 		  		$stmt->bind_param('s',$usernames);
// 		  		$stmt->execute();
// 			  	$stmt->bind_result($id,$brgy_id,$username,$password,$email,$contactno,
// 			  	$registration_date,$status,$brgy_name,$brgy_code);
// 			    $stmt->fetch();
//       			$stmt->close();

//       			if(password_verify($passwords, $password))
// 				  	{
// 				  	if(!isset($_SESSION['status']) || empty($_SESSION['status']))
// 				  		{
// 					  		$_SESSION['status'] = "Login";
// 					  		$_SESSION['bcode'] = $brgy_code;
// 					  		$_SESSION['bname'] = $brgy_name;
// 					  		// echo "<script>alert('Succesful') </script>";
// 					  		// echo "<script>window.location.href = 'barangay_residents.php'; </script>";
// 					  		 header("Location: ../../barangay_residents.php");
// 				  		}else {
// 				  			header("Location: ../../../index.php");
// 				  		}
// 				  	}
// 			  	else
// 				  	{
// 			  		 echo "<script>alert('The password has been not correct!.') </script>";
// 			  		 echo "<script>window.location.href = '../../index.php?barangay=$code';</script>";
// 			  		 exit();

// 				  	}
// 			}

// 	}



function registration($usernames,$code)
	{
	  global $db;
		  $sqlcheack1 = "SELECT * FROM `user_account_tbl` WHERE  `username` = ? ";
		  $stmtcheck1 = $db->prepare($sqlcheack1);
	  	  $stmtcheck1->bind_param('s',$usernames);
	  	  $stmtcheck1->execute();
	  	  $stmtcheck1->bind_result($id,$brgy_id,$username,$password,$email,$contactno,$registration_date,
	  	  $status,$brgy_name,$brgy_code);
	  	  $stmtcheck1->fetch();
	      $stmtcheck1->close();

	  	  	if($brgy_code == $code)
	  	  		{
	          		return true;
	  	  		}
	  	  	else
	  	  		{
	  	  			return false;
	  	  		}
	}
?>