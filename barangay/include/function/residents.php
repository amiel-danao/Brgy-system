<?php 

	include('config.php');
	if(isset($_POST['residents']))
	{
		$brgy_code = "BC2"; 
		$sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`=? ";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$brgy_code);
		$stmt->execute();
		$result = $stmt->get_result();
		$number = 1;
		echo "<tbody>";
		echo "<tr>";
            while ($data = $result->fetch_assoc())
            { 

            	echo "					
					<td> '.$number.'</td>
                    <td>'.$data['first_name'].'</td>
                    <td>'.$data['last_name'].'</td>
                    <td>'.$data['middle_name'].'</td>
                    <td>'.$data['gender'].'</td>
                    <td class='text-center' ><a href='view_residents.php?view_id='.$data['id'].'' class='btn btn-success btn-sm'>view</a></td>
                    <td class='text-center'><a href='include/function/process.php?remove_id='.$data['id'].' class='btn btn-danger btn-sm'>Remove</a>
                    <a href='edit_residents.php?edit_id='.$data['id'].' class='btn btn-primary btn-sm'>Update</a>
                    </td>
             		";
             		$number++;
            }

        echo "</tr>";
        echo "</tbody>";
	}



 ?>