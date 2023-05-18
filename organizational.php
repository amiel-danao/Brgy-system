<?php
     include("include/config.php"); 
	 include('include/header.php'); 

	 if(isset($_GET['barangay']))
	 {
	 	 $brgy_code = filter_var($_GET['barangay'], FILTER_SANITIZE_STRING); 
	 }
	 else
	 {
	 	header("Location: index.php");
	 }
?>
<div class="org">
	<div class="container org-body">
<?php 
// if (isset($_GET['barangays']))
// 	{
// 		$keyword = $_GET['barangays'];
// 		switch ($keyword) 
// 		{
// 		    case "bucal1":
// 		        include("include/organizationals/bucal1.php");
// 		        break;
// 		    case "bucal2":
// 		        include("include/organizationals/bucal2.php");
// 		        break;
// 		    default:
// 		        echo "Your favorite color is neither red, blue, nor green!";

// 	    }
// 	}
$sqlbname = "SELECT `brgy_name` FROM `brgy_code_tbl` WHERE `brgy_code`=?";
$stmtbname = $db2->prepare($sqlbname);
$stmtbname->bind_param('s',$brgy_code);
$stmtbname->execute();
$stmtbname->bind_result($bname);
$stmtbname->fetch();
$stmtbname->close();
 ?>

<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $postions = "%Punong Barangay";
    $sql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $stmt = $db2->prepare($sql);
    if (!$stmt) {
		die("Error: " . $db2->error); // Display the error message
	}
    $stmt->bind_param('ss',$postions,$brgy_code);
    $stmt->execute();
    $result = $stmt->get_result();
    
 ?>
 <div class="main-contents m-t-85" >
    <div class="section__content section__content--p20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" id="org">
                    <div class="card">
                        <div class="card-header text-center" style="background-color: white;">
                            <strong><h3 class="font-weight-bold">Barangay Organizational Chart of <?php echo $bname ?></h3></strong>
                        </div>
                        <div class="card-body card-block">
   
<?php 
 while ($data = $result->fetch_assoc())
    {
        $brgy_id = $data['brgy_id']; 
        $first_name = $data['first_name']; 
        $last_name = $data['last_name']; 
        $middle_name = $data['middle_name']; 
        $brgy_code = $data['brgy_code']; 
        $barangay = $data['barangay']; 
        $position = $data['position']; 
        $picture = $data['picture']; 
        $post_validation = $data['post_validation'];  
   ?>
            <div class="col-md-3 mx-auto organizational mt-2">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-info"><h6 class="text-center"style="color:white"><?php echo $position ?></h6></div>
                <?php if($post_validation == "Validate"){ ?>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo $first_name. " " . substr($middle_name,0,1) .".". " " . $last_name  ?></p>
                    </div>
                <?php } else{ ?>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="image/default-image.png" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                <p class="card-text text-center mb-4" style="font-size:0.9rem; color: white;">N/A</p>
                    </div>
                <?php } ?>
                </div>
            </div>
<?php } 
?>

     
<?php 
    $postion2 = "%barangay Kagawad%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db2->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$brgy_code);
    $mystmt->execute();
    $results = $mystmt->get_result();
 ?>
 <div class="row">
 <?php 
 while ($datas = $results->fetch_assoc())
    {
        $brgy_id = $datas['brgy_id']; 
        $first_name = $datas['first_name']; 
        $last_name = $datas['last_name']; 
        $middle_name = $datas['middle_name']; 
        $brgy_code = $datas['brgy_code']; 
        $barangay = $datas['barangay']; 
        $position = $datas['position']; 
        $picture = $datas['picture']; 
        $post_validation = $datas['post_validation'];    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-success"><h6 class="text-center"style="color:white"><?php echo $position ?></h6></div>
                    <?php if($post_validation == "Validate"){ ?>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                <?php }else{ ?>
               <img class="card-img-top mx-auto img-fluid border border-dark" src="image/default-image.png" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                <p class="card-text text-center mb-4" style="font-size:0.9rem; color: white;">N/A</p>
                    </div>
                <?php } ?>
                </div>
            </div>
<?php }
?>
</div>


<?php 
    $postion3 = "%SK Chairman%";
    $mysqls = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db2->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$brgy_code);
    $mystmts->execute();
    $resultz = $mystmts->get_result();
 ?>

 <div class="row">

    <?php 
        while ($dataz = $resultz->fetch_assoc())
            {
                $brgy_id = $dataz['brgy_id']; 
                $first_name = $dataz['first_name']; 
                $last_name = $dataz['last_name']; 
                $middle_name = $dataz['middle_name']; 
                $brgy_code = $dataz['brgy_code']; 
                $barangay = $dataz['barangay']; 
                $position = $dataz['position']; 
                $picture = $dataz['picture'];  
                $post_validation = $dataz['post_validation'];  
    ?>

            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-danger"><h6 class="text-center"style="color:white"><?php echo $position  ?></h6></div>
                  <?php if($post_validation == "Validate"){ ?>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                <?php } else { ?>
                <img class="card-img-top mx-auto img-fluid border border-dark" src="image/default-image.png" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                <p class="card-text text-center mb-4" style="font-size:0.9rem; color: white;">N/A</p>
                    </div>
                    <?php }  ?>
                </div>
            </div>
        <?php } ?>
        </div>

<?php 
    $postion4 = "%Secretary%";
    $mysqli = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmti = $db2->prepare($mysqli);
    $mystmti->bind_param('ss',$postion4,$brgy_code);
    $mystmti->execute();
    $rezult = $mystmti->get_result();
 ?>

 <div class="row">

    <?php 
 while ($output = $rezult->fetch_assoc())
    {
        $brgy_id = $output['brgy_id']; 
        $first_name = $output['first_name']; 
        $last_name = $output['last_name']; 
        $middle_name = $output['middle_name']; 
        $brgy_code = $output['brgy_code']; 
        $barangay = $output['barangay']; 
        $position = $output['position']; 
        $picture = $output['picture'];    
        $post_validation = $output['post_validation']; 
    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-danger"><h6 class="text-center" style="color:white"><?php echo $position  ?></h6></div>
                  <?php if($post_validation == "Validate"){ ?>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                <?php }else{ ?>
                <img class="card-img-top mx-auto img-fluid border border-dark" src="image/default-image.png" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                <p class="card-text text-center mb-4" style="font-size:0.9rem; color: white;">N/A</p>
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php } ?>
        </div>

        

<?php 
    $postion3 = "%Treasurer%";
    $mysqls = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db2->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$brgy_code);
    $mystmts->execute();
    $resultz = $mystmts->get_result();
 ?>

 <div class="row">

    <?php 
        while ($dataz = $resultz->fetch_assoc())
            {
                $brgy_id = $dataz['brgy_id']; 
                $first_name = $dataz['first_name']; 
                $last_name = $dataz['last_name']; 
                $middle_name = $dataz['middle_name']; 
                $brgy_code = $dataz['brgy_code']; 
                $barangay = $dataz['barangay']; 
                $position = $dataz['position']; 
                $picture = $dataz['picture'];    
                $post_validation = $dataz['post_validation']; 
    ?>

            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-danger"><h6 class="text-center"style="color:white"><?php echo $position  ?></h6></div>
                  <?php if($post_validation == "Validate"){ ?>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                <?php }else{ ?>
                <img class="card-img-top mx-auto img-fluid border border-dark" src="image/default-image.png" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                <p class="card-text text-center mb-4" style="font-size:0.9rem; color: white;">N/A</p>
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php } ?>
        </div>

                            </div>
                        </div>
                     </div>                  
                  </div>
              </div>
          </div>
        </div>

	</div>

</div>
	<?php include('include/footer.php'); ?>

			<script src="include/js/jquery-3.3.1.js"></script>
		<script src="include/js/bootstrap.min.js"></script>
	</body>
</html>
	