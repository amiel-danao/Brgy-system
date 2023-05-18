<?php
    require_once 'PHPMailer-5.2.26/PHPMailerAutoload.php';
    require_once 'PHPMailer-5.2.26/class.phpmailer.php';
    require_once('config.php');

 if (isset($_POST['addaccount']))
    {
        $brgyid = $_POST['officialid'];
        $userusername = filter_var($_POST['userusername'], FILTER_SANITIZE_STRING);
        $passworduser = filter_var($_POST['passworduser'], FILTER_SANITIZE_STRING);
        $emailuser = filter_var($_POST['emailuser'], FILTER_SANITIZE_EMAIL);
        $contactno = $_POST['contactno'];
        $regdate = date("Y-m-d");
        $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING); 
        $brgycode = filter_var($_POST['brgycode'], FILTER_SANITIZE_STRING); 
        $brgyname = filter_var($_POST['brgyname'], FILTER_SANITIZE_STRING); 
        $password = password_hash($passworduser, PASSWORD_DEFAULT);

    //   || checkusername($userusername) == true || checkconctactno($contactno) == true || sendaccount($userusername,$passworduser,$emailuser) == false
      
if(checkusername($userusername) == true) {
      echo "<script>alert('The username has been already use pls. check and provide another for account.') </script>";
      echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
    }
    
elseif (checkemail($emailuser) == true)
    {
      echo "<script>alert('The email has been already use pls. check and provide another for account.') </script>";
      echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
    }

// elseif(checkusername($userusername) == true) {
//  echo "<script>alert('The username has been already use pls. check and provide another for account.') </script>";
//  echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
//     }

elseif (checkconctactno($contactno) == true) {
    //   echo "<script>alert('The Contact Number has been already use pls. please try again to 
    //   check and provide another for account.') </script>";
    //   echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
    echo "<script>alert('The Number # has been already use pls. check and provide another for account.') </script>";
      echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
    }

elseif (sendaccount($userusername,$passworduser,$emailuser) != true) {
      echo "<script>alert('We have an error in sending message in email of password and username') </script>";
      echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
    }
elseif (sendviasms($contactno) == false) {
      echo "<script>alert('We have an error in sending message in email of password and username') </script>";
      echo "<script>window.location.href = 'user_account.php?create_account={$brgycode}'; </script>";
    }
else
    {
        
    $sql = "INSERT INTO `user_account_tbl`( `brgy_id`, `username`, `password`, `email`, `contactno`, `registration_date`, `status`, `brgy_name`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('issssssss',$brgyid,$userusername,$password,$emailuser,$contactno,$regdate,$status,$brgyname,$brgycode);
          if($stmt->execute())
              {
                header("Location: success.php?success");
                $stmt->close();
                $stmt->db();
                
              }
          else{
                echo "<script>alert('We Have Error Encounter.') </script>";
        }
        
   }
 
  }

//============================================

    function checkemail($emailuser)
    {
      global $db;
          $sqls = "SELECT `email` FROM `user_account_tbl` WHERE `email`= ? ";
          $stmt1 = $db->prepare($sqls);
          $stmt1->bind_param('s',$emailuser);
          $stmt1->execute();
          $stmt1->store_result();
          if ($stmt1->num_rows == 1 || $stmt1->affected_rows == 1)
              {
                
                return true;
              }
          // else
          // {
          //   return false;
          // }
          $stmt1->close();
    }
  //===================================================

    function checkpassword()
    {

    }
  //=====================================================

    function itexmo($number,$message,$apicode){
      $url = 'https://www.itexmo.com/php_api/api.php';
      $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
      $param = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($itexmo),
          ),
      );
      $context  = stream_context_create($param);
      return file_get_contents($url, false, $context);
    }
//===============================================================

    function sendviasms($contactno)
      {
        $name = "OBIS ADMIN";
        $message = "Hello Secretary the username and password was already sent in ur gmail.";
        $apicode = "TR-OBIST010257_23TFB";
        $text = $name . ":" . " " . $message .".";       
        $result = itexmo($contactno,$text,$apicode);
        if ($result == "")
        {
          return false;
        }else{
          return true;
        }
        // else{ 
        //   echo "Error Num ". $result . " was encountered!";
        //   exit();
        // }
      }


    function sendviasmsagain($contactno)
      {
        $name = "OBIS ADMIN";
        $message = "Hello Secretary the new password was already sent in your Gmail Account.";
        $apicode = "TR-OBIST010257_23TFB";
        $text = $name . ":" . " " . $message .".";       
        $result = itexmo($contactno,$text,$apicode);
        if ($result == "")
        {
          return false;
        }else{
          return true;
        }
        // else{ 
        //   echo "Error Num ". $result . " was encountered!";
        //   exit();
        // }
      }
//========================================================

    function checkusername($userusername)
    {
      global $db;
        $sql = "SELECT `username` FROM `user_account_tbl` WHERE `username`= ?";
        $stmt2 = $db->prepare($sql);
        $stmt2->bind_param('s',$userusername);
        $stmt2->execute();
        $stmt2->store_result();
        if ($stmt2->num_rows == 1 || $stmt2->affected_rows == 1)
        {
          return true;
        }
        // else
        // {
        //   return false;
        // }
        $stmt2->close();
    }
//===============================================

    function checkconctactno($contactno)
    {
      global $db;
        $sqlc = "SELECT `contactno` FROM `user_account_tbl` WHERE `contactno`= ?";
        $stmt3 = $db->prepare($sqlc);
        $stmt3->bind_param('s',$contactno);
        $stmt3->execute();
       // $user = $stmt3->fetch();
        $number = $stmt3->get_result();
      //  || $stmt3->affected_rows == 1
        // if ($stmt3->num_rows == 1 || $stmt3->affected_rows == 1)
        //     {
        //       return true;
        //     }
        if ($number->num_rows > 0)
            {
              return true;
            }
         $stmt3->close();
        
    }
    
//=========================================================

  function sendaccount($userusername,$passworduser,$emailuser)
    {
        require_once 'PHPMailer-5.2.26/PHPMailerAutoload.php';
        require_once 'PHPMailer-5.2.26/class.phpmailer.php';
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 2;                               // Enable verbose debug output
        $mail->CharSet = 'utf-8';                                      // Set mailer to use SMTP
          // Specify main and backup SMTP servers
        $mail->SMTPSecure = 'ssl'; 
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                // SMTP password
                          // Enable TLS encryption, `ssl` also accepted   
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; 

        $mail->Username = 'OBISDILG@gmail.com';                 // SMTP username
        $mail->Password = 'OBIS@DILG@15';                                // TCP port to connect to
        $mail->Priority    = 1;
        $mail->setFrom('OBISDILG@gmail.com', 'OBIS ADMIN');
        $mail->addAddress($emailuser);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('ericsonlimpasan@gmail.com', 'Information');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is message from admin of OBIS of DILG. to give the username and password to use the template system for your barangay<br/>Username: ' .$userusername. ' 
        <br/> Password: ' .$passworduser;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo "<script>alert('Message could not be sent.') </script>";
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
          //echo "<script>alert('Success.') </script>";
            return true;
        }
    }
//=================================================

     function sendagainaccount($newpassword,$accemail)
    {
        require_once 'PHPMailer-5.2.26/PHPMailerAutoload.php';
        require_once 'PHPMailer-5.2.26/class.phpmailer.php';
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 2;                               // Enable verbose debug output
        $mail->CharSet = 'utf-8';                                      // Set mailer to use SMTP
          // Specify main and backup SMTP servers
        $mail->SMTPSecure = 'ssl'; 
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                // SMTP password
                          // Enable TLS encryption, `ssl` also accepted   
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; 

        $mail->Username = 'OBISDILG@gmail.com';                 // SMTP username
        $mail->Password = 'OBIS@DILG@15';                                // TCP port to connect to
        $mail->Priority    = 1;
        $mail->setFrom('OBISDILG@gmail.com', 'OBIS ADMIN');
        $mail->addAddress($accemail);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('ericsonlimpasan@gmail.com', 'Information');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is message from admin of OBIS of DILG. to give the new  password to use the template system for your barangay<br/>Password: '.' ' .$newpassword;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo "<script>alert('Message could not be sent.') </script>";
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
          //echo "<script>alert('Success.') </script>";
            return true;
        }
    }

//=================================================================


    if (isset($_GET['acc_activate']))
      {
          $key = $_GET['acc_activate'];
          $statuz = "ACTIVE";
          $usql = "UPDATE `user_account_tbl` SET `status`=? WHERE `id`=?";
          $ustmt = $db->prepare($usql);
          $ustmt->bind_param('si',$statuz,$key);
          
          if($ustmt->execute())
          {
             $ustmt->close();
             $db->close();
             echo "<script>window.location.href = 'user_account.php'; </script>";
          }
          else
          {
            echo "<script>alert('We have error encounter.') </script>";
          }
      }

//================================================================

      if (isset($_GET['acc_deactivate']))
      {
          $key = $_GET['acc_deactivate'];
          $statuz = "DEACTIVATE";
          $usql = "UPDATE `user_account_tbl` SET `status`=? WHERE `id`=?";
          $ustmt = $db->prepare($usql);
          $ustmt->bind_param('si',$statuz,$key);
          
          if($ustmt->execute())
          {
             $ustmt->close();
             $db->close();
             echo "<script>window.location.href = 'user_account.php'; </script>";
          }
          else
          {
            echo "<script>alert('We have error encounter.') </script>";
          }
      }

//=======================================================================

    if(isset($_POST['updateacc']) && !empty($_POST['upasswords']))
      {
        $id = $_POST['accid'];
       // $newusername = $_POST['updateusername'];
        $newpassword = $_POST['upasswords'];
        $accemail =  $_POST['accemail'];
        $contactno = $_POST['accnumber'];
        $updatedpass = password_hash($newpassword, PASSWORD_DEFAULT);

        $uasql = "UPDATE `user_account_tbl` SET `password`=? WHERE `id`=?";
        $uastmt = $db->prepare($uasql);
        $uastmt->bind_param('si',$updatedpass,$id);
        

      if (sendagainaccount($newpassword,$accemail) == false) 
          {
            echo "<script>alert('We have error encounter sending in email account.') </script>";
          }

      elseif(sendviasmsagain($contactno) == false)
      {
        echo "<script>alert('We have error encounter sending the message notification.') </script>";
      }
      else {
        $uastmt->execute();
        $uastmt->close();
        $db->close();
        echo "<script>alert('Succesfully Update The Password.') </script>";
        echo "<script>window.location.href = 'successful.php?successful'; </script>";

      }
            
          
  }


  if(isset($_GET['acc_remove']))
      {
        $acc_id = $_GET['acc_remove'];
        $sql = "DELETE FROM `user_account_tbl` WHERE `id`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$acc_id);
        if($stmt->execute())
          {
            $stmt->close();
            $db->close();
            echo "<script>alert('We have Successful Delete Account.') </script>";
            echo "<script>window.location.href = 'user_account_list.php'; </script>";
          }
          else{
            echo "<script>alert('Sorry We Have Error Encounter.') </script>";
          }
      }
?>