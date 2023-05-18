<?php  

  /**
   * 
   */
  class ObisFunction
  {
  	private $db;
  	function __construct($db)
  	{
  		$this->db = $db;
  	}


  	function AddResidents($Fname, $Lname, $Mname, $Gender, $dob, $street)
  	{
  		$stmt = $this->db->prepare ("INSERT INTO `residents_tbl`( `first_name`, `last_name`, `middle_name`, `gender`, `bod`, `house_no`, `street`, `brgy_code`) VALUES (?,?,?,?,?,?,?,?)");
  		$stmt->bind_param("ssssdiss", $Fname, $Lname, $Mname, $Gender, $dob, $Hno, $street);

		if($stmt->execute())
		{

			echo "YES";
		}
  	}
  }
?>