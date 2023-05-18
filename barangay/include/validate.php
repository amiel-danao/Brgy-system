
<?php 

include("function/config.php")


if (isset($_POST[]) && $_POST[] != null)
{
	$fname = $_POST['Fname'];
	$sql = "SELECT * FROM `residents_tbl` WHERE `first_name` LIKE ? ";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('s',$fname);
    $stmt->execute();
    $stmt->store_result();;
    $stmt->num_rows();


    if ($stmt <= 1)
    {
    	echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";


    }
    else
    {
    	echo "<div class='alert alert-danger'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";
    }
}
?>