
<?php 
    $brgy_code = "BC1"; 
    $postions = "%Punong Barangay";
    $sql = "SELECT * FROM `brgy_bucal2_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $stmt = $db->prepare($sql);
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
                        <div class="card-header text-center">
                            <strong>Barangay Organizational Chart of Bucal 1</strong>
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
   ?>
            <div class="col-md-3 mx-auto organizational mt-3">
                <div class="card mx-0">
                  <div class="card-header bg-info"><h6 class="text-center"><?php echo $position ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid" src="bucal1/images/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:0.9rem;"><?php echo $first_name. " " . $middle_name . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } 
        ?>

     
<?php 
    $postion2 = "%barangay Kagawad%";
    $mysql = "SELECT * FROM `brgy_bucal2_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
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
        $picture = $datas['picture'];    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0">
                  <div class="card-header bg-success"><h6 class="text-center"><?php echo $position ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid" src="bucal1/images/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:0.9rem;"><?php echo $first_name . " " .  $middle_name  . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
<?php }
?>
</div>


<?php 
    $postion3 = "%SK Chairman%";
    $mysqls = "SELECT * FROM `brgy_bucal2_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
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
    ?>

            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0">
                  <div class="card-header bg-danger"><h6 class="text-center"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid" src="bucal1/images/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:0.9rem;"><?php echo $first_name . " " .  $middle_name  . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>


<?php 
    $postion3 = "%Treasurer%";
    $mysqls = "SELECT * FROM `brgy_bucal2_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
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
    ?>

            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0">
                  <div class="card-header bg-danger"><h6 class="text-center"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid" src="bucal1/images/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:0.9rem;"><?php echo $first_name . " " .  $middle_name  . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>

<?php 
    $postion4 = "%Secretary%";
    $mysqli = "SELECT * FROM `brgy_bucal2_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmti = $db->prepare($mysqli);
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
    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0">
                  <div class="card-header bg-danger"><h6 class="text-center"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid" src="bucal1/images/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:0.9rem;"><?php echo $first_name . " " .  $middle_name  . " " . $last_name  ?></p>
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
