<?php 

if (isset($_POST['updatebrgyofficial']))
   {
    $id = filter_var($_POST['brgy_official_id'], FILTER_SANITIZE_NUMBER_INT);
    $brgyid = filter_var($_POST['brgyid'], FILTER_SANITIZE_NUMBER_INT);
    $Fname = filter_var($_POST['Fname'], FILTER_SANITIZE_STRING);
    $Lname = filter_var($_POST['Lname'], FILTER_SANITIZE_STRING);
    $Mname = filter_var($_POST['Mname'], FILTER_SANITIZE_STRING);
    $Gender = filter_var($_POST['Gender'], FILTER_SANITIZE_STRING);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $dob = $_POST['dob'];
    $bop = filter_var($_POST['bop'], FILTER_SANITIZE_STRING);
    $Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING); 
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contactno = $_POST['contactno'];
    $religion = filter_var($_POST['religion'], FILTER_SANITIZE_STRING); 
    $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING); 
    $education = filter_var($_POST['education'], FILTER_SANITIZE_STRING); 
    $Specify = filter_var($_POST['Specify'], FILTER_SANITIZE_STRING);
    $school = filter_var($_POST['school'], FILTER_SANITIZE_STRING); 
    $Occupation = filter_var($_POST['Occupation'], FILTER_SANITIZE_STRING); 
    $brgy_name = filter_var($_POST['brgy_name'], FILTER_SANITIZE_STRING); 
    $brgy_official_position = filter_var($_POST['brgy_official_position'], FILTER_SANITIZE_STRING);
    $Term = filter_var($_POST['Term'], FILTER_SANITIZE_STRING);
    $dateelec = $_POST['dateelec'];
    $brgy_code = filter_var($_POST['brgy_code'], FILTER_SANITIZE_STRING);

    // if (checkemail($email) == false)
    // {
    //     echo "<script>alert('The email has been already use pls. provide another email account.') </script>";
    //     // echo "<script>window.location.href = 'barangay_official.php'; </script>";
    // }
    // else
    //   {
  $mysql = "UPDATE `brgy_official_tbl` SET `first_name`=?, `last_name`=?, `middle_name`=?, `gender`=?, `age`=?, `bod`=?, `birth_of_place`=?, `address`=?, `email`=?, `contact_no`=?, `religion`=?, `civil_status`=?, `highest_education`=?, `educ_status`=?, `course_school`=?, `occupation`=?, `brgy_code`=?, `barangay`=?, `position`=?, `term`=?, `date_elected`=? WHERE `brgy_id`=?";

  $mystmt = $db->prepare($mysql);
  $mystmt->bind_param('ssssissssssssssssssssi',$Fname,$Lname,$Mname,$Gender,$age,$dob,$bop,$Address,$email,$contactno,$religion,$status,$education,$Specify,$school,$Occupation,$brgy_code,$brgy_name,$brgy_official_position,$Term,$dateelec,$id);
    // $stmt->execute();
          if($mystmt->execute())
            {
              
              $mystmt->close();
              $db->close();
              echo "<script>alert('Successful Updating brgy. Official') </script>";
              echo "<script>window.location.href = 'barangay_official_list.php'; </script>";
            }
          else
            {
               echo "<script>alert('Sorry We have Error encounter') </script>";
            }
    // }
  }

 // function checkemail($email)
 //      {
 //          global $db;
 //          $sqls = "SELECT `email` FROM `brgy_bucal2_tbl` WHERE `email`=? ";
 //          $stmts = $db->prepare($sqls);
 //          $stmts->bind_param('i',$email);
 //          $stmts->execute();
 //          $stmts->store_result();

 //          if ($stmts->num_rows == 0)
 //          {
 //            return true;
 //          }
 //          else
 //          {
 //            return false;
 //          }

 //      }
 ?>