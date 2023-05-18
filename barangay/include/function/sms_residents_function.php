<?php  
require_once('config.php');
  if(isset($_POST['sendsmsresidents']))
  	{
  			$bcode = filter_var($_POST['bcode'], FILTER_SANITIZE_STRING);
  			$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  			$message = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);

        $sql = "SELECT `contact_no` FROM `residents_tbl` WHERE `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('s',$bcode);
        $stmt->execute();
        $Result = $stmt->get_result();
    
        $number = array();
  	    while ($data = $Result->fetch_assoc())
  	        {
  	            $number[] = $data['contact_no'];
  	        }
    if(implode(null,$number) == null)
        {
          echo "<script>alert('Sorry No Numbers Available in Your Residents Record.');</script>";
          echo "<script>window.location.href = 'sms_residents.php'; </script>";
        }

	  		if(sendsms($number,$title,$message) == true) 
	  			{
	  				echo "<script>alert('Successful Send Message to all Residents in your Barangay Community.');</script>";
            echo "<script>window.location.href = 'sms_residents.php'; </script>";
	  			}
	  		else 
	  			{
					 echo "<script>alert('Not Successful Send Message to all Residents in your Barangay Community.');</script>";
           echo "<script>window.location.href = 'sms_residents.php'; </script>";
	  			}
     // }

  	}

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

 function sendsms($number,$title,$message)
      {
        $name = "BARANGAY SECRETARY";
        $apicode = "TR-OBIST010257_23TFB";
        $text = $name . ":" . " " . $title . " " . $message;   

        foreach($number as $keys)
          {
        		$result = itexmo($keys,$text,$apicode);
    	    }
		        if($result == "")
		        {
		          return false;
		        }
		        else{
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
	$sql = "SELECT `contact_no` FROM `residents_tbl` WHERE `brgy_code`=? LIMIT 2";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$bcode);
		$stmt->execute();
		$number = array();
		$Result = $stmt->get_result();

		 while ($dataz = $Result->fetch_array())
			{
	            $number[] = $dataz;
			}
		return $number;
	}

?>
