<?php

   include ('config.php');


  // if (isset($_POST['updatebrgyofficial']))
  //  {
  //   $id = filter_var($_POST['brgy_official_id'], FILTER_SANITIZE_NUMBER_INT);
  //   $brgyid = filter_var($_POST['brgyid'], FILTER_SANITIZE_NUMBER_INT);
  //   $Fname = filter_var($_POST['Fname'], FILTER_SANITIZE_STRING);
  //   $Lname = filter_var($_POST['Lname'], FILTER_SANITIZE_STRING);
  //   $Mname = filter_var($_POST['Mname'], FILTER_SANITIZE_STRING);
  //   $Gender = filter_var($_POST['Gender'], FILTER_SANITIZE_STRING);
  //   $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
  //   $dob = $_POST['dob'];
  //   $bop = filter_var($_POST['bop'], FILTER_SANITIZE_STRING);
  //   $Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING); 
  //   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  //   $contactno = $_POST['contactno'];
  //   $religion = filter_var($_POST['religion'], FILTER_SANITIZE_STRING); 
  //   $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING); 
  //   $education = filter_var($_POST['education'], FILTER_SANITIZE_STRING); 
  //   $school = filter_var($_POST['school'], FILTER_SANITIZE_STRING); 
  //   $Occupation = filter_var($_POST['Occupation'], FILTER_SANITIZE_STRING); 
  //   $brgy_name = filter_var($_POST['brgy_name'], FILTER_SANITIZE_STRING); 
  //   $brgy_official_position = filter_var($_POST['brgy_official_position'], FILTER_SANITIZE_STRING);
  //   $brgy_code = "BC2"; 

  //   if (checkemail($email) == false)
  //   {
  //       echo "<script>alert('The email has been already use pls. provide another email account.') </script>";
  //       echo "<script>window.location.href = 'barangay_official.php'; </script>";
  //   }
  //   else
  //     {
  // $mysql = "UPDATE `brgy_bucal2_tbl` SET `first_name`=?, `last_name`=?, `middle_name`=?, `gender`=?, `age`=?, `bod`=?, `birth_of_place`=?, `address`=?, `email`=?, `contact_no`=?, `religion`=?, `civil_status`=?, `highest_education`=?, `course_school`=?, `occupation`=?, `brgy_code`=?, `barangay`=?, `position`=? WHERE `brgy_id`=?";

  // $mystmt = $db->prepare($mysql);
  // $mystmt->bind_param('ssssissssissssssssi',$Fname,$Lname,$Mname,$Gender,$age,$dob,$bop,$Address,$email,$contactno,$religion,$status,$education,$school,$Occupation,$brgy_code,$brgy_name,$brgy_official_position,$id);
  //   // $stmt->execute();
  //           if($mystmt->execute())
  //           {
  //             echo "<script>window.location.href = 'barangay_official_list.php'; </script>";
  //             $mystmt->close();
  //             $db->close();
  //           }
  //           else
  //           {
  //                echo "<script>alert('We have Error encounter') </script>";
  //           }
  //   }
  // }


    // function checkid()
    // {
    //   $six_digit_random_number = mt_rand(100000000, 999999999);
    // }

    if (!isset($_FILES['new_official_image']['tmp_name']) && !empty($_FILES['new_official_image']['tmp_name'])) 
      {
        echo "<script>alert('We have Error encounter in image') </script>";
      }
      else
        {
      $image = $_FILES['new_official_image']['name'];
      $tmp_img = $_FILES['new_official_image']['tmp_name'];

          if (file_exists("../../bimages/$image"))
            {
              $digit_random_number = mt_rand(1000, 9999);
              $image = $digit_random_number . $image ;
            }
      move_uploaded_file($tmp_img,"../../bimages/$image");
      $profileid=$_POST['profileid'];

      if (deleteimage($profileid) == true)
      {
            $mysql = "UPDATE `brgy_bucal2_tbl` SET `picture`=? WHERE `brgy_id`=?";
            $mystmt = $db->prepare($mysql);
            $mystmt->bind_param('si',$image,$profileid);
          // $stmt->execute();
            if($mystmt->execute())
            {
              header("Location: ../../barangay_official_list.php");
              $mystmt->close();
              $db->close();
            }
            else
            {
            echo "<script>alert('We have Error encounter in deleting record') </script>";
            }

      }else
        {
        echo "<script>alert('We have Error encounter in deleting image') </script>";
        }

      
    }


    function deleteimage($profileid)
        {
          global $db;
              $MYsqls = "SELECT `picture` FROM `brgy_bucal2_tbl` WHERE `brgy_id`=? ";
              $MYstmts = $db->prepare($MYsqls);
              $MYstmts->bind_param('i',$profileid);
              $MYstmts->execute();
              $Results = $MYstmts->get_result();
               while ($datas = $Results->fetch_assoc())
              {
                      $pictures = $datas['picture'];
              }

             unlink("../../bimages/$pictures");
             return true;
        }

    // function checkemail($email)
    //   {
    //       global $db;
    //       $sqls = "SELECT `email` FROM `brgy_bucal2_tbl` WHERE `email`=? ";
    //       $stmts = $db->prepare($sqls);
    //       $stmts->bind_param('i',$email);
    //       $stmts->execute();
    //       $stmts->store_result();

    //       if ($stmts->num_rows == 0)
    //       {
    //         return true;
    //       }
    //       else
    //       {
    //         return false;
    //       }

    //   }
?>