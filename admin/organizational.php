<?php  
    include('include/login-function/session.php');
    include('include/function/config.php'); 

    if (isset($_GET['barangayname']) && !empty($_GET['code'])) 
    {
        $brgycode = $_GET['code'];
        $barangayname = $_GET['barangayname'];
    }
    else
    {
        header("Location: brgy_info.php");
    }
?>

<?php include('include/admin/header.php'); ?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php include('include/admin/sidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                               <!--  <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a> -->
                            </div>
                                <div class="header-button-item mr-0 js-sidebar-btn d-lg-none">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>

             <?php include('include/admin/sidebar2.php'); ?>
            <!-- END HEADER DESKTOP-->


<?php 
    $postions = "%Punong Barangay";
    $sql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss',$postions,$brgycode);
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
                            <strong>Barangay Organizational Chart of Barangay <?php echo $barangayname ?> in Maragondon Cavite</strong>
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
            <div class="col-md-3 mx-auto organizational mt-2">
                <div class="card mx-0 h-75 w-100">
                  <div class="card-header bg-info"><h6 class="text-center"style="color:white;"><?php echo $position ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="barangayimages/<?php echo $brgycode ?>/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-2" style="font-size:0.9rem;"><?php echo $first_name. " " . substr($middle_name,0,1) ."." . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } 
        ?>

     
<?php 
    $postion2 = "%barangay Kagawad%";
    $mysql = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmt = $db->prepare($mysql);
    $mystmt->bind_param('ss',$postion2,$brgycode);
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
                <div class="card mx-0 h-75 w-100">
                  <div class="card-header bg-success"><h6 class="text-center"style="color:white;"><?php echo $position ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="barangayimages/<?php echo $brgycode ?>/<?php echo $picture ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-2" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
<?php }
?>
</div>

<?php 
    $postion3 = "%SK Chairman%";
    $mysqls = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$brgycode);
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
        $picture = $dataz['picture'];    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-75 w-100">
                  <div class="card-header bg-warning"><h6 class="text-center"style="color:white;"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="barangayimages/<?php echo $brgycode ?>/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-2" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."." . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php }     
     ?>
        </div>

<?php 
    $postion3 = "%Treasurer%";
    $mysqls = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$brgycode);
    $mystmts->execute();
    $resultz = $mystmts->get_result();
 ?>

<?php 
    $postion4 = "%Secretary%";
    $mysqli = "SELECT * FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmti = $db->prepare($mysqli);
    $mystmti->bind_param('ss',$postion4,$brgycode);
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
        $picture = $output['picture'];    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-75 w-100">
                  <div class="card-header bg-danger"><h6 class="text-center" style="color:white;"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="barangayimages/<?php echo $brgycode ?>/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-2" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php } 
        ?>
</div>


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
        $picture = $dataz['picture'];    ?>
            <div class="col-md-3 mx-auto organizational">
                <div class="card mx-0 h-75 w-100">
                  <div class="card-header bg-secondary"><h6 class="text-center"style="color:white;"><?php echo $position  ?></h6></div>
                    <img class="card-img-top mx-auto img-fluid border border-dark" src="barangayimages/<?php echo $brgycode ?>/<?php echo $picture  ?>" alt="Card image cap" style="width:80px;height: 80px;">
                    <div class="card-body">
                        <p class="card-text text-center mb-2" style="font-size:0.9rem;"><?php echo $first_name . " " .  substr($middle_name,0,1) ."."  . " " . $last_name  ?></p>
                    </div>
                </div>
            </div>
        <?php }     
     ?>
        </div>
                            </div>
                        </div>
                     </div>                  
                  </div>
              </div>
          </div>
        </div>


        <!--<div class="row">-->
        <!--    <div class="col-md-12 p-0">-->
        <!--        <div class="copyright bg-light">-->
        <!--             <input type="button" class="btn btn-primary" onclick="printDiv('org')" value="Print the Organziational Chart!" />-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
         <div class="row">
            <div class="col-md-12 p-0">
                <div class="copyright bg-light">
                     <a href="include/print-function/barangay_official_organizational.php?barangaycode=<?php echo $brgycode ?>&barangayname=<?php echo $barangayname?>" class="btn btn-primary" target="_blank">Print the Organziational Chart!</a>
                </div>
            </div>
        </div>

<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     //exit();
     window.location.href= 'organizational.php?barangayname=<?php echo $barangayname ?>&code=<?php echo 
        $brgycode ?>';
}
</script>
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>