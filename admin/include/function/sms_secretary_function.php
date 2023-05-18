<?php 

if(isset($_POST['sendsmstosecretary']))
	{
			$title = $_POST['smstitle'];
			$message = $_POST['Message'];
			//$bcode = $_POST['brgycode'];

      $position = "%" . "Secretary" . "%";
			$sql = "SELECT `contact_no` FROM `brgy_official_tbl` WHERE `position` LIKE ?";
      $stmt = $db->prepare($sql);
      $stmt->bind_param('s',$position);
      $stmt->execute();
      $result = $stmt->get_result();
      $number = array();

    	while ($data = $result->fetch_assoc())
          {
            $number[] = $data['contact_no'];
          }
          
        if(implode(null,$number) == null)
          {
            echo "<script>alert('Sorry No Mobile Numbers Available.');</script>";
            echo "<script>window.location.href = 'send_sms_secretary.php'; </script>";
          }
          
        if(sendviasms($number,$title,$message) == true)
      
    			{
    				echo "<script>alert('Successfully Sent The Message To All Barangay Secretary in Maragondon Cavite.');</script>";
            echo "<script>window.location.href = 'send_sms_secretary.php'; </script>";
    			}
        else
            {
	            echo "<script>alert('Not Successfully Sent The Message To All Barangay Secretary in Maragondon Cavite.');</script>";
	            echo "<script>window.location.href = 'send_sms_secretary.php'; </script>";
            }

	}


//function itexmo($number,$message,$apicode)
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
        $name = "ADMIN DILG";
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

?>