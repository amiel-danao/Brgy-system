
<?php
include('include/login-function/session.php');  
include('include/function/config.php'); 
 

    if (isset($_GET['view_id']))
    {
        $id = $_GET['view_id'];
       // $brgy_code = "BC2"; 
        $sql = "SELECT * FROM `residents_tbl` WHERE `id`= ? AND `brgy_code`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$id,$brgycode);
        $stmt->execute();
        $stmt->bind_result($id,$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$contact,$job,$street,$Religion,$Status,$elem,$high,$college,$collegename,$collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno,$picture,$brgy_code);
        $stmt->fetch();
        $stmt->close();

         // while ($data = $result->fetch_assoc())
         // {
         //    $id         = $data['id'];
         //    $Fname      = $data['first_name'];
         //    $Lname      = $data['last_name'];
         //    $Mname      = $data['middle_name'];
         //    $Gender     = $data['gender'];
         //    $dob        = $data['bod'];
         //    $Hno        = $data['house_no'];
         //    $street     = $data['street'];
         //    $Religion   = $data['religion']; 
         //    $Status     = $data['status']; 
         //    $brgy_code  = $brgycode;

         // }
    }
include('include/admin/header.php');
?>


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
                                <!-- <a href="#">
                                    <img src="bimages/icon/logo-white.png" alt="CoolAdmin" />
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

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">View Resident Information</h2>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>
 
             <div class="main-contents m-t-5">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong></strong>
                                    </div>
                                    <div class="card-body card-block">

<div class="row">
<div class="col-md-1">
    
</div>


<div class="col-md-4 mx-auto organizational mt-5 pull-left">
<div class="card mx-0">
<!-- <div class="card-header bg-info"><h6 class="text-center"style="color:white;">Residents</h6></div> -->
 <?php// $Picture = !empty($picture) ? $picture :'default-image.png';?>
            <img class="card-img-top mx-auto img-fluid border border-dark w-100" src="bimages/<?php echo $brgy_code ?>/<?php echo $Picture = !empty($picture) ? $picture :'default-image.png'; ?>" alt="Card image cap" style="width:500px;height:300px;">
        </div>
    </div>
                                    
<!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
    <fieldset disabled> -->
<div class="pull-right mx-auto col-md-6 mt-5">
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="text-input" class=" form-control-label font-weight-bold">First Name</label>
        </div>
        <div class="col-12 col-md-7">
           <!--  <input type="text" id="text-input" name="Fname"  class="form-control" required value=""> -->
           <label for="text-input" class=" form-control-label"><?php echo  $Fname ?></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="email-input" class=" form-control-label font-weight-bold">Last Name</label>
        </div>
        <div class="col-12 col-md-7">
            <!-- <input type="text" id="email-input" name="Lname" class="form-control" required value=""> -->
        <label for="email-input" class=" form-control-label"><?php echo $Lname ?></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">Middle Name</label>
        </div>
        <div class="col-12 col-md-7">
         <!-- <input type="text" id="password-input" name="Mname" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $Mname ?></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">Sex</label>
        </div>
        <div class="col-12 col-md-7">
        <!-- <input type="text" id="password-input" name="Mname" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $Gender ?></label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="date" class=" form-control-label font-weight-bold">Birth of date</label>
        </div>
        <div class="col-12 col-md-7">
            <!-- <input type="date" id="date" name="dob" class="form-control" required value=""> -->
            <label for="date" class=" form-control-label"><?php echo $dob ?></label>
        </div>
    </div>
     <div class="row form-group">
        <div class="col col-md-5">
            <label for="age" class=" form-control-label font-weight-bold">Age</label>
        </div>
        <div class="col-12 col-md-7">
            <!-- <input type="text" id="age" name="age" class="form-control" required value=""> -->
            <label for="age" class=" form-control-label"><?php echo $age ?></label>
        </div>
    </div>
     <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">House No.</label>
        </div>
        <div class="col-12 col-md-7">
    <!-- <input type="number" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $Hno ?></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="contactno" class=" form-control-label font-weight-bold">Mobile No. </label>
        </div>
        <div class="col-12 col-md-7">
         <!-- <input type="text" id="contactno" name="contactno" class="form-control" required value=""> -->
        <label for="contactno" class=" form-control-label"><?php echo $contact ?></label>
        </div>
    </div>
      <div class="row form-group">
        <div class="col col-md-5">
            <label for="contactno" class=" form-control-label font-weight-bold">Job</label>
        </div>
        <div class="col-12 col-md-7">
         <!-- <input type="text" id="contactno" name="contactno" class="form-control" required value=""> -->
            <label for="contactno" class=" form-control-label"><?php echo $job ?></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="street" class=" form-control-label font-weight-bold">Street </label>
        </div>
        <div class="col-12 col-md-7">
      <!--   <input type="text" id="street" name="street" class="form-control" required value=""> -->
            <label for="street" class=" form-control-label"><?php echo $street ?> </label>
        </div>
    </div>
     

             <div class="row form-group">
        <div class="col col-md-5">
            <label for="religion" class=" form-control-label font-weight-bold">Religion </label>
        </div>
        <div class="col-12 col-md-7">
       <!--      <input type="text" id="religion" name="religion" class="form-control" required value=""> -->
            <label for="religion" class=" form-control-label"><?php echo $Religion ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">Status </label>
        </div>
        <div class="col-12 col-md-7">
<!--         <input type="text" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $Status ?> </label>
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">Elemnetary Status </label>
        </div>
        <div class="col-12 col-md-7">
<!--         <input type="text" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $elem ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">High School Status </label>
        </div>
        <div class="col-12 col-md-7">
<!--         <input type="text" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $high ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">College Status </label>
        </div>
        <div class="col-12 col-md-7">
<!--         <input type="text" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $college ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">College School Name </label>
        </div>
        <div class="col-12 col-md-7">
<!--         <input type="text" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $collegename ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">College Course </label>
        </div>
        <div class="col-12 col-md-7">
<!--         <input type="text" id="password-input" name="street" class="form-control" required value=""> -->
            <label for="password-input" class=" form-control-label"><?php echo $collegecourse ?> </label>
        </div>
    </div>
    
    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">HEAD of the Household</label>
        </div>
        <div class="col-12 col-md-7">
            <label for="password-input" class=" form-control-label"><?php echo $familyrole ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">No. of Families</label>
        </div>
        <div class="col-12 col-md-7">
            <label for="password-input" class=" form-control-label"><?php echo $familiesno ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">No. of Household Members</label>
        </div>
        <div class="col-12 col-md-7">
            <label for="password-input" class=" form-control-label"><?php echo $hhno ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">No. of Female</label>
        </div>
        <div class="col-12 col-md-7">
            <label for="password-input" class=" form-control-label"><?php echo $femaleno ?> </label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="password-input" class=" form-control-label font-weight-bold">No. of Male</label>
        </div>
        <div class="col-12 col-md-7">
            <label for="password-input" class=" form-control-label"><?php echo $maleno ?> </label>
        </div>
    </div>

</div>
   <div class="col-md-1">
    
</div>
  <!-- </fieldset>
</form> --></div>
                                    </div>
                                </div>
                            </div>  


                      

                    </div>

<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <div class="card-footer">-->
<!--            <a href="barangay_residents.php" class="btn btn-sm btn-primary">Back</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

                    <?php include('include/admin/footer2.php'); ?>

                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>