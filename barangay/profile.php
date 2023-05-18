<?php  
    include('include/login-function/session.php'); 
    include('include/function/config.php'); 
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

          <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content ">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">HELLO SECRETARY</h2>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>

<?php 
    $position = "%Secretary%";
    $sql = "SELECT * FROM `brgy_official_tbl` WHERE `brgy_code`=? AND `position` LIKE ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss',$brgycode,$position);
    $stmt->execute();
    $stmt->bind_result($brgy_id,$first_name,$last_name,$middle_name,$gender,$age,$bod,$birth_of_place,
        $address,$email,$contact_no,$religion,$civil_status,$highest_education,$educ_status,
        $course_school,$occupation,$brgy_code,$barangay,$position,$term,$dateelec,$picture,$post);
    $stmt->fetch();
    $stmt->close();  

 ?>
 <div class="main-contents m-t-5">
    <div class="section__content section__content--p20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong class="text-center">Barangay Secretary Profile</strong>
                        </div>
                        <div class="card-body card-block">
 
<div class="row">
<div class="col-md-1">
    
</div>
    <div class="col-md-4 mx-auto organizational mt-5 pull-left">
        <div class="card mx-0">
          <!-- <div class="card-header bg-info"><h6 class="text-center"style="color:white;"><?php// echo $position ?></h6></div> -->
            <img class="card-img-top mx-auto img-fluid border border-dark w-100" src="../admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture ?>" style="width:500px;height:300px;">
        </div>
    </div>

<div class="pull-right mx-auto col-md-6 mt-5">
        <div class="row form-group">
            <div class="col col-md-5">
                <label for="brgyid" class="form-control-label font-weight-bold">Brgy ID</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="number" id="brgyid" name="brgyid"  class="form-control bg-light" required
                value="<?php //echo $brgy_id ?>" readonly="readonly">  -->   
                <label for="brgyid" class=" form-control-label "><?php echo $brgy_id ?></label>
            </div>
        </div>
   <!--  </fieldset> -->
        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Fnamet" class=" form-control-label font-weight-bold">First Name</label>
            </div>
            <div class="col-12 col-md-7">
               <!--  <input type="text" id="Fname" name="Fname"  class="form-control  bg-light" required
                value="<?php// echo $first_name ?>" readonly="readonly"> -->
                <label for="Fnamet" class=" form-control-label "><?php echo $first_name ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Lname" class=" form-control-label font-weight-bold">Last Name</label>
            </div>
            <div class="col-12 col-md-7">
               <!--  <input type="text" id="Lname" name="Lname" class="form-control bg-light" required
                value="<?php// echo $last_name ?>" readonly="readonly"> -->
                <label for="Lname" class=" form-control-label"><?php echo $last_name ?></label>

            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Mname" class=" form-control-label font-weight-bold">Middle Name</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="Mname" name="Mname" class="form-control bg-light" required
                value="<?php// echo $middle_name ?>" readonly="readonly"> -->
                <label for="Mname" class=" form-control-label"><?php echo $middle_name ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Gender" class=" form-control-label font-weight-bold">Gender</label>
            </div>
            <div class="col-12 col-md-7">
              <!--   <input type="text" id="Gender" name="Gender" class="form-control bg-light" 
                value="<?php// echo $gender ?>" readonly="readonly"> -->
                 <label for="Gender" class=" form-control-label"><?php echo $gender ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="age" class=" form-control-label font-weight-bold">Age</label>
            </div>
            <div class="col-12 col-md-7">
             <!--    <input type="number" id="age" name="age" class="form-control bg-light" 
                value="<?php// echo $age ?>" readonly="readonly"> -->
                <label for="age" class=" form-control-label"><?php echo $age ?></label>
            </div>
        </div>


    </div>
 <div class="col-md-1">
    
</div>
                                    </div>
                                </div>
    </div>
                            </div> 
                        </div>


                <?php include('include/admin/footer2.php'); ?>

            </div>
        </div>
    </div>


<?php include('include/admin/footer.php'); ?>
