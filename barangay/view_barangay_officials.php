<?php
    include('include/login-function/session.php');  
    include('include/function/config.php'); 
    include('include/function/brgy_offcial_function.php'); 
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
                       <div class="col-md-2">
                           
                       </div>
                            <div class="col-md-10">
                                <div class="au-breadcrumb-content">
                                    <div class="justify-content-center ">
                                      <h2 class="text-center">BARANGAY OFFICIAL FULL INFORMATION </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

<?php 
if (isset($_GET['brgyid']))
{
    $bid = $_GET['brgyid'];
    $sql = "SELECT * FROM `brgy_official_tbl` WHERE `brgy_id`=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$bid);
    $stmt->execute();
    $stmt->bind_result($brgy_id,$first_name,$last_name,$middle_name,$gender,$age,$bod,
        $birth_of_place,$address,$email,$contact_no,$religion,$civil_status,$highest_education,
        $educ_status,$course_school,$occupation,$brgy_code,$barangay,$position,$term,$dateelec,$picture,$post);
    $stmt->fetch();
    $stmt->close();
     // while ($data = $result->fetch_assoc())
//     {
//         $brgy_id = $data['brgy_id']; 
//         $first_name = $data['first_name']; 
//         $last_name = $data['last_name']; 
//         $middle_name = $data['middle_name']; 
//         $gender = $data['gender']; 
//         $age = $data['age']; 
//         $bod = $data['bod']; 
//         $birth_of_place = $data['birth_of_place']; 
//         $address = $data['address']; 
//         $email = $data['email']; 
//         $contact_no = $data['contact_no']; 
//         $religion = $data['religion']; 
//         $civil_status = $data['civil_status']; 
//         $highest_education = $data['highest_education']; 
//         $course_school = $data['course_school'];
//         $occupation = $data['occupation']; 
//         $brgy_code = $data['brgy_code']; 
//         $barangay = $data['barangay']; 
//         $position = $data['position']; 
//         $picture = $data['picture'];   
// } 
  }
 ?>
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
  <!-- <form action="" method="" enctype="multipart/form-data" class="form-horizontal" name="barangay_official">
    <fieldset disabled> -->

<div class="row">
<div class="col-md-1">
    
</div>
     <div class="col-md-4 mx-auto organizational mt-5 pull-left">
        <div class="card mx-0">
          <!-- <div class="card-header bg-info"><h6 class="text-center"style="color:white;"><?php //echo $position ?></h6></div> -->
            <img class="card-img-top mx-auto img-fluid border border-dark w-100" src="../admin/barangayimages/<?php echo $brgy_code ?>/<?php echo $picture ?>" alt="Card image cap" style="width:500px;height:300px;">
        </div>
    </div>
<div class="pull-right mx-auto col-md-6 mt-5">
    <input type="hidden" name="brgy_official_id" value="<?php echo $brgy_id ?>">
        <div class="row form-group">
            <div class="col col-md-5">
                <label for="brgyid" class=" form-control-label font-weight-bold">Brgy ID</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="number" id="brgyid" name="brgyid"  class="form-control bg-light" required
                value="" readonly="readonly">  -->
                <label for="brgyid" class=" form-control-label"><?php echo $brgy_id ?></label>   
            </div>
        </div>
   <!--  </fieldset> -->
        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Fnamet" class=" form-control-label font-weight-bold">First Name</label>
            </div>
            <div class="col-12 col-md-7">
               <!--  <input type="text" id="Fname" name="Fname"  class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="Fnamet" class=" form-control-label"><?php echo $first_name ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Lname" class=" form-control-label font-weight-bold">Last Name</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="Lname" name="Lname" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="Lname" class=" form-control-label"><?php echo $last_name ?></label>

            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Mname" class=" form-control-label font-weight-bold">Middle Name</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="Mname" name="Mname" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="Mname" class=" form-control-label"><?php echo $middle_name ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Gender" class=" form-control-label font-weight-bold">Sex</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="Mname" name="Mname" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="Gender" class=" form-control-label"><?php echo $gender ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="age" class=" form-control-label font-weight-bold">Age</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="number" id="age" name="age" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="age" class=" form-control-label"><?php echo $age ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="password-input" class=" form-control-label font-weight-bold">Birth of date</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="date" id="dob" name="dob" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="password-input" class=" form-control-label"><?php echo $bod ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="bop" class=" form-control-label font-weight-bold">Birth of place</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="bop" name="bop" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="bop" class=" form-control-label"><?php echo $birth_of_place ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Address" class=" form-control-label font-weight-bold">Residence Address </label>
            </div>
            <div class="col-12 col-md-7">
               <!--  <input type="text" id="Address" name="Address" class="form-control bg-light" value="" readonly="readonly"> -->
                <label for="Address" class=" form-control-label"><?php echo $address ?></label>
            </div>
        </div>

    <div class="row form-group">
        <div class="col col-md-5">
            <label for="email" class=" form-control-label font-weight-bold">Email </label>
        </div>
        <div class="col-12 col-md-7">
           <!--  <input type="email" id="email" name="email" class="form-control bg-light" required value="" readonly="readonly"> -->
             <label for="email" class=" form-control-label"><?php echo $email ?></label>
        </div>
    </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="contactno" class=" form-control-label font-weight-bold">Mobile No. </label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="contactno" name="contactno" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="contactno" class=" form-control-label"><?php echo $contact_no ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="religion" class=" form-control-label font-weight-bold">Religion</label>
            </div>
            <div class="col-12 col-md-7">
                 <!--  <input type="text" id="contactno" name="contactno" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="religion" class=" form-control-label"><?php echo $religion ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="status" class=" form-control-label font-weight-bold">Civil Status</label>
            </div>
            <div class="col-12 col-md-7">
                <!--  <input type="text" id="contactno" name="contactno" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="status" class=" form-control-label"><?php echo $civil_status ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="education" class=" form-control-label font-weight-bold">Higher Education Attain</label>
            </div>
            <div class="col-12 col-md-7">
               <!--  <input type="text" id="education" name="education" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="education" class=" form-control-label"><?php echo $highest_education ?></label>
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-5">
                <label for="educstatus" class=" form-control-label font-weight-bold">Specify</label>
            </div>
            <div class="col-12 col-md-7">
                <!-- <input type="text" id="educstatus" name="educstatus" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="educstatus" class=" form-control-label"><?php echo $educ_status ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="school" class=" form-control-label font-weight-bold">Course</label>
            </div>
            <div class="col-12 col-md-7">
              <!--   <input type="text" id="school" name="school" class="form-control bg-light" required value="" readonly="readonly"> -->
                <label for="school" class=" form-control-label"><?php echo $course_school ?></label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="Occupation" class=" form-control-label font-weight-bold">Occupation</label>
            </div>
            <div class="col-12 col-md-7">
               <!--  <input type="text" id="Occupation" name="Occupation" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="Occupation" class=" form-control-label"><?php echo $occupation ?></label>
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-5">
                <label for="brgy_official_position" class=" form-control-label font-weight-bold">Position</label>
            </div>
            <div class="col-12 col-md-7">
                <!--  <input type="text" id="Occupation" name="Occupation" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="brgy_official_position" class=" form-control-label"><?php echo $position ?></label>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-5">
                <label for="brgy_official_position" class=" form-control-label font-weight-bold"> Term</label>
            </div>
            <div class="col-12 col-md-7">
                <!--  <input type="text" id="Occupation" name="Occupation" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="brgy_official_position" class=" form-control-label"><?php echo $term ?></label>
            </div>
        </div>
        
         <div class="row form-group">
            <div class="col col-md-5">
                <label for="brgy_official_position" class=" form-control-label font-weight-bold">Date Elected/Appointed</label>
            </div>
            <div class="col-12 col-md-7">
                <!--  <input type="text" id="Occupation" name="Occupation" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="brgy_official_position" class=" form-control-label"><?php echo $dateelec ?></label>
            </div>
        </div>
        
         <div class="row form-group">
            <div class="col col-md-5">
                <label for="brgy_name" class=" form-control-label font-weight-bold">barangay name</label>
            </div>
            <div class="col-12 col-md-7">
          <!-- <input type="text" id="Occupation" name="Occupation" class="form-control bg-light" required
                value="" readonly="readonly"> -->
                <label for="brgy_name" class=" form-control-label"><?php echo $barangay ?></label>
            </div>
        </div>
      <!-- </fieldset>  -->
     <!--    <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="updatebrgyofficial">
                <i class="fa fa-dot-circle-o"></i> UPDATE OFFICIAL
            </button>

        </div> -->

    <!-- </form>
 -->
   </div>
 <div class="col-md-1">
    
</div>
                                    </div>
                                </div>
                            </div>   
                            </div>               
                    </div>
                    
                    
<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <div class="card-footer">-->
<!--            <a href="barangay_official_list.php" class="btn btn-sm btn-primary">Back</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

            <?php include('include/admin/footer2.php'); ?>

                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>
<!-- <script type="text/javascript">

function validatebo()
{
    var cn = document.getElementById("contactno").value;

    if (isNaN(cn))
    {
        alert("You have invalid input in contact number");
        document.cn.focus();
        return false;
    }
}
</script> -->