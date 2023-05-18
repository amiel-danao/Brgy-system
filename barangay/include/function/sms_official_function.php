<?php 
require_once('config.php'); 

if(isset($_POST['sendssmsofficial']))
		{
			$bcode = $_POST['bcode'];
			$title = $_POST['title'];
			$message = $_POST['Message'];
      
      $sql = "SELECT `contact_no` FROM `brgy_official_tbl` WHERE `brgy_code`=?";
      $stmt = $db->prepare($sql);
      $stmt->bind_param('s',$bcode);
      $stmt->execute();
      $Results = $stmt->get_result();
      $number = array();

        while ($dataz = $Results->fetch_assoc())
          {
            $number[] = $dataz['contact_no'];
          }

        if(implode(null,$number) == null)
          {
            echo "<script>alert('Sorry No Numbers Available in Your Brgy. Official Record.');</script>";
            echo "<script>window.location.href = 'sms_official.php'; </script>";
          }

        		if(sendviasms($number,$title,$message) == true)
        			{
        				 echo "<script>alert('Successfully Sent The Message To All Barangay Official in ur Barangay.');</script>";
                 echo "<script>window.location.href = 'sms_official.php'; </script>";
        			}
            else
              {
              echo "<script>alert('Not Successfully Sent The Message To All Barangay Official in ur Barangay.');</script>";
              echo "<script>window.location.href = 'sms_official.php'; </script>";
              }
        
    }
        // $sql = "SELECT `contact_no` FROM `brgy_bucal2_tbl` WHERE `brgy_code`=?";
        // $stmt = $db->prepare($sql);
        // $stmt->bind_param('s',$bcode);
        // $stmt->execute();
        // $Result = $stmt->get_result();
        //  $numberx =array();
        //  while ($dataz = $Result->fetch_assoc())
        //    {
        //       $numberx[] = $dataz['contact_no'];
        //    }
        //    foreach ($numberx as $key) 
        //    {
        //      echo $key;
        //    }





         // $numbers = array("09972616235","09972616235");
         // $number = $numbers;


            // $number = $number;
            // var_dump($number);

            // foreach ($number as $key) {
            //   echo $key;
            // }

        // $name = "OBIS ADMIN";
        // $apicode = "TR-ERICS616235_BUWBY";
        // $text = $name . ":" . " " . $title . " " . $message;   
        // $i = 0;
        //     $result = itexmo($numberx,$text,$apicode);
        //   }
        // if ($result == "")
        // {
        //    echo "<script>alert('Not Success');</script>";
        // }else if ($result == 0){
        //  echo "<script>alert('Success');</script>";
        // }
        //  else{ 
        //   echo "Error Num ". $result . " was encountered!";
        //   exit();
        // }

        // $sql = "SELECT `contact_no` FROM `brgy_bucal2_tbl` WHERE `brgy_code`=? LIMIT 3";
        // $stmt = $db->prepare($sql);
        // $stmt->bind_param('s',$bcode);
        // $stmt->execute();
        // $stmt->bind_result($num);
        // $stmt->fetch();
        // $stmt->close();
        //  $number = array(getallcontactno($bcode));
        // // echo $number[];
        // echo$number;
  

      // function itexmo($number,$message,$apicode)
      //   {
      //     $ch = curl_init();
      //     $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
      //     curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
      //     curl_setopt($ch, CURLOPT_POST, 1);
      //     curl_setopt($ch, CURLOPT_POSTFIELDS, 
      //               http_build_query($itexmo));
      //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      //     return curl_exec ($ch);
      //     curl_close ($ch);
      //   }


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

 function sendviasms($number,$title,$message)
      {
        $name = "BARANGAY SECRETARY";
        $apicode = "TR-OBIST010257_23TFB";
        $text = $name . ":" . " " . $title . " " . $message .".";   

        foreach($number as $key)
          {
        		$result = itexmo($key,$text,$apicode);
    	    }
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

function getallcontactno($bcode)
	{
	global $db;
	$sql = "SELECT `contact_no` FROM `brgy_official_tbl` WHERE `brgy_code`=? LIMIT 2";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$bcode);
		$stmt->execute();
		$Result = $stmt->get_result();

		  if($Results->num_rows === 0)
        {
          return false;
        }
      else{
        return true;
      }
	}
?>