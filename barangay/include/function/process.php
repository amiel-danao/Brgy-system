<?php

   require_once('config.php');

   if (isset($_POST['addresidents']))
   {
        $bcode = $_POST['bcode'];
        $Fname = filter_var($_POST['Fname'], FILTER_SANITIZE_STRING);
        $Lname = filter_var($_POST['Lname'], FILTER_SANITIZE_STRING);
        $Mname = filter_var($_POST['Mname'], FILTER_SANITIZE_STRING);
        $Gender = filter_var($_POST['Gender'], FILTER_SANITIZE_STRING);
        $dob = $_POST['dob'];
        $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
        $Hno = filter_var($_POST['Hno'], FILTER_SANITIZE_NUMBER_INT);
        $contactno = filter_var($_POST['contactno'], FILTER_SANITIZE_NUMBER_INT);
        $job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
        $street = filter_var($_POST['street'], FILTER_SANITIZE_STRING);
        $Religion = filter_var($_POST['Religion'], FILTER_SANITIZE_STRING);
        $Status = filter_var($_POST['Status'], FILTER_SANITIZE_STRING);

        $ElementaryStatus = filter_var($_POST['ElementaryStatus'], FILTER_SANITIZE_STRING);
        $HighSchoolStatus = filter_var($_POST['HighSchoolStatus'], FILTER_SANITIZE_STRING);
        $CollegeStatus = filter_var($_POST['CollegeStatus'], FILTER_SANITIZE_STRING);
        $Collegename = filter_var($_POST['Collegename'], FILTER_SANITIZE_STRING);
        $Collegecourse = filter_var($_POST['Collegecourse'], FILTER_SANITIZE_STRING);

        $familyrole = filter_var($_POST['familyrole'], FILTER_SANITIZE_STRING);
        $familiesno = filter_var($_POST['familiesno'], FILTER_SANITIZE_NUMBER_INT);
        $hhno = filter_var($_POST['hhno'], FILTER_SANITIZE_NUMBER_INT);
        $femaleno = filter_var($_POST['femaleno'], FILTER_SANITIZE_NUMBER_INT);
        $maleno = filter_var($_POST['maleno'], FILTER_SANITIZE_NUMBER_INT);


        $image = $_FILES['new_resident_image']['name'];
        $tmp_img = $_FILES['new_resident_image']['tmp_name'];
        $images = addimage($image,$tmp_img,$bcode);
        // $picture = "";
$sql = "INSERT INTO `residents_tbl`(`first_name`, `last_name`, `middle_name`, `gender`, `bod`, `age`,
`house_no`, `contact_no`, `job`, `street`, `religion`, `status`, `elementary`, `highschool`, `college`, `college_school`, `college_course`, `family_role`, `no_of_families`, `no_of_hh`, `no_of_female`, `no_of_male`, `picture`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

  $stmt = $db->prepare($sql);
  $stmt->bind_param('sssssiisssssssssssiiiiss',$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$contactno,$job,$street,$Religion,$Status,$ElementaryStatus,$HighSchoolStatus,$CollegeStatus,$Collegename,
      $Collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno, $image, $bcode);
    //$stmt->execute();
      if($stmt->execute())
      {
        $stmt->close();
        $db->close();
        echo "<script>alert('We have Successful Insert Record.') </script>";
        echo "<script>window.location.href = 'barangay_residents.php'; </script>";
      }
      else  {
           echo "<script>alert('Sorry We Have Error encounter') </script>";
           exit();
      }
    //   addimage($image,$tmp_img,$bcode);
    }


   if (isset($_POST['editresidents']))
   {
        $id = filter_var($_POST['resident_id'], FILTER_SANITIZE_NUMBER_INT);
        $Fname = filter_var($_POST['Fname'], FILTER_SANITIZE_STRING);
        $Lname = filter_var($_POST['Lname'], FILTER_SANITIZE_STRING);
        $Mname = filter_var($_POST['Mname'], FILTER_SANITIZE_STRING);
        $Gender = filter_var($_POST['Gender'], FILTER_SANITIZE_STRING);
        $dob = $_POST['dob'];
        $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
        $Hno = filter_var($_POST['Hno'], FILTER_SANITIZE_NUMBER_INT);
        $contactno = filter_var($_POST['contactno'], FILTER_SANITIZE_NUMBER_INT);
        $job = filter_var($_POST['job'], FILTER_SANITIZE_STRING);
        $street = filter_var($_POST['street'], FILTER_SANITIZE_STRING);
        $religion = filter_var($_POST['religion'], FILTER_SANITIZE_STRING);
        $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);

        $ElementaryStatus = filter_var($_POST['ElementaryStatus'], FILTER_SANITIZE_STRING);
        $HighSchoolStatus = filter_var($_POST['HighSchoolStatus'], FILTER_SANITIZE_STRING);
        $CollegeStatus = filter_var($_POST['CollegeStatus'], FILTER_SANITIZE_STRING);
        $Collegename = filter_var($_POST['Collegename'], FILTER_SANITIZE_STRING);
        $Collegecourse = filter_var($_POST['Collegecourse'], FILTER_SANITIZE_STRING);

        $familyrole = filter_var($_POST['familyrole'], FILTER_SANITIZE_STRING);
        $familiesno = filter_var($_POST['familiesno'], FILTER_SANITIZE_NUMBER_INT);
        $hhno = filter_var($_POST['hhno'], FILTER_SANITIZE_NUMBER_INT);
        $femaleno = filter_var($_POST['femaleno'], FILTER_SANITIZE_NUMBER_INT);
        $maleno = filter_var($_POST['maleno'], FILTER_SANITIZE_NUMBER_INT);

        $brgy_code = $_POST['resident_code'];

    $sql = "UPDATE `residents_tbl` SET `first_name`=?, `last_name`=?, `middle_name`=?, `gender`=?, `bod`=?, `age`=?, `house_no`=?, `contact_no`=?, `job`=?, `street`=?, `religion`=?,`status`=?,
    `elementary`=?,`highschool`=?,`college`=?,`college_school`=?,`college_course`=?,  `family_role`=?,
    `no_of_families`=?, `no_of_hh`=?, `no_of_female`=?, `no_of_male`=?, `brgy_code`=? WHERE `id`=? ";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sssssiisssssssssssiiiisi',$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$contactno,$job,
      $street,$religion,$status,$ElementaryStatus,$HighSchoolStatus,$CollegeStatus,$Collegename,
      $Collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno,$brgy_code,$id);
      //|| $stmt->affected_rows === 1
          if($stmt->execute())
            {
              $stmt->close();
              $db->close();
              echo "<script>alert('We have Successful Update Record.') </script>";
              echo "<script>window.location.href = 'barangay_residents.php'; </script>";
            }
          else  {
              echo "<script>alert('Sorry We have Error encounter') </script>";
              exit();
          }
    }

    if (isset($_GET['remove_id']))
    {
        $id = filter_var($_GET['remove_id'], FILTER_SANITIZE_NUMBER_INT);
        //$brgy_code = "BC2";
        $code = filter_var($_GET['bcode'], FILTER_SANITIZE_STRING);
        deleteimage($id,$code);
        $mysql = "DELETE FROM `residents_tbl` WHERE `id`= ?";
        $mystmt = $db->prepare($mysql);
        $mystmt->execute();
        $mystmt->bind_param('i',$id);
        $mystmt->execute();
          if($mystmt)
          {
            $mystmt->close();
            $db->close();
            echo "<script>alert('We have Successful Delete Record.') </script>";
            echo "<script>window.location.href = '../../barangay_residents.php'; </script>";
          }
          else  {
               echo "<script>alert('Sorry We Have Error encounter') </script>";
               exit();
          }
    }


function deleteimage($id,$code)
    {
      //include('config.php');
      global $db;
          $MYsqls = "SELECT `picture` FROM `residents_tbl` WHERE `id`=? ";
          $MYstmts = $db->prepare($MYsqls);
          $MYstmts->bind_param('i',$id);
          $MYstmts->execute();
          $MYstmts->bind_result($pictures);
          $MYstmts->fetch();
          $MYstmts->close();

      if($pictures != null || $pictures != "")
        {
          if(file_exists("../../bimages/$code/$pictures"))
            {
             unlink("../../bimages/$code/$pictures");
            }
        }
    }

function addimage($image,$tmp_img,$bcode)
    {

      if(!empty($image) && !empty($tmp_img))
        {

          if (file_exists("bimages/$bcode/$image"))
            {
              $digit_random_number = mt_rand(100000, 999999);
              $image = $digit_random_number . $image ;
            }
              move_uploaded_file($tmp_img,"bimages/$bcode/$image");
        }
        return $image;
    }

?>