<?php
     include("include/config.php"); 
	 include('include/header.php'); 

?>
<div class="org">
	<div class="container org-body">
<?php 

// $sqlbname = "SELECT `brgy_name` FROM `brgy_code_tbl` WHERE `brgy_code`=?";
// $stmtbname = $db2->prepare($sqlbname);
// $stmtbname->bind_param('s',$brgy_code);
// $stmtbname->execute();
// $stmtbname->bind_result($bname);
// $stmtbname->fetch();
// $stmtbname->close();
 ?>

<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $postions = "Mayor";
    $sql = "SELECT * FROM `maragondon_official_tbl` WHERE `position` = ?";
    $stmt = $db2->prepare($sql);
    if (!$stmt) {
		die("Error: " . $db2->error); // Display the error message
	}
    $stmt->bind_param('s',$postions);
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
                            <strong><h3 class="font-weight-bold">Maragondon Elected Official Organizational Chart</h3></strong>
                        </div>
                        <div class="card-body card-block">
   
<?php 
 while ($data = $result->fetch_assoc())
    {
        $id = $data['id']; 
        $full_name = $data['full_name']; 
        $position = $data['position']; 
        $picture = $data['picture'];   
   ?>
            <div class="col-md-3 mx-auto organizational mt-3">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-success"><h6 class="text-center"style="color:white"><?php echo $position ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/gov_image/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo 
                        $full_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } 
        ?>

     
<?php 
    $postion2 = "Vice Mayor";
    $mysql = "SELECT * FROM `maragondon_official_tbl` WHERE `position` = ?";
    $mystmt = $db2->prepare($mysql);
    $mystmt->bind_param('s',$postion2);
    $mystmt->execute();
    $results = $mystmt->get_result();
 ?>
 <div class="row">
 <?php 
 while ($datas = $results->fetch_assoc())
    {
        $id = $datas['id']; 
        $full_name = $datas['full_name']; 
        $position = $datas['position']; 
        $picture = $datas['picture'];     ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-success"><h6 class="text-center"style="color:white"><?php echo $position ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/gov_image/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo 
                        $full_name ?></p>
                    </div>
                </div>
            </div>
<?php }
?>
</div>


<?php 
    $postion3 = "%Councilor%";
    $mysqls = "SELECT * FROM `maragondon_official_tbl` WHERE `position` LIKE ?";
    $mystmts = $db2->prepare($mysqls);
    $mystmts->bind_param('s',$postion3);
    $mystmts->execute();
    $resultz = $mystmts->get_result();
 ?>

 <div class="row">

    <?php 
        while ($dataz = $resultz->fetch_assoc())
            {
               $id = $dataz['id']; 
        $full_name = $dataz['full_name']; 
        $position = $dataz['position']; 
        $picture = $dataz['picture'];  
    ?>

            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-success"><h6 class="text-center"style="color:white"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/gov_image/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo 
                        $full_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>

<?php 
    $postion4 = "%LNB President%";
    $mysqli = "SELECT * FROM `maragondon_official_tbl` WHERE `position` LIKE ? ";
    $mystmti = $db2->prepare($mysqli);
    $mystmti->bind_param('s',$postion4);
    $mystmti->execute();
    $rezult = $mystmti->get_result();
 ?>

 <div class="row">

    <?php 
 while ($output = $rezult->fetch_assoc())
    {
        $id = $output['id']; 
        $full_name = $output['full_name']; 
        $position = $output['position']; 
        $picture = $output['picture'];   
    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-100 w-100">
                  <div class="card-header bg-success"><h6 class="text-center" style="color:white"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="admin/gov_image/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-4" style="font-size:0.9rem;"><?php echo 
                        $full_name  ?></p>
                    </div>
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
	