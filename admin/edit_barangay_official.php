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
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center font-weight-bold">UPDATE BARANGAY OFFICIAL FORM</h2>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
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
    $stmt->bind_result($brgyid,$first_name,$last_name,$middle_name,$gender,$age,$bod,$birth_of_place,
        $address,$email,$contact_no,$religion,$civil_status,$highest_education,$educ_status,
        $course_school,$occupation,$brgy_code,$barangay,$position,$term,$dateelec,$picture,$post);
    $stmt->fetch();
    $stmt->close();
//     $result = $stmt->get_result();
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
//         $educ_status = $data['educ_status']; 
//         $course_school = $data['course_school'];
//         $occupation = $data['occupation']; 
//         $brgy_code = $data['brgy_code']; 
//         $barangay = $data['barangay']; 
//         $position = $data['position']; 
//         $picture = $data['picture'];   
// }   
}
 ?>
 <div class="main-contents m-t-30">
    <div class="section__content section__content--p20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Barangay Official Information</strong>
                        </div>
                        <div class="card-body card-block">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal" 
  onsubmit="return validateForms()" name="barangay_official">
    <!-- <fieldset disabled> -->
    <input type="hidden" name="brgy_official_id" value="<?php echo $brgyid ?>">
    <input type="hidden" name="brgy_code" value="<?php echo $brgy_code ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="brgyid" class=" form-control-label">Brgy ID</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="number" id="brgyid" name="brgyid"  class="form-control bg-light" required
                value="<?php echo $brgyid ?>" readonly="readonly">    
            </div>
        </div>
   <!--  </fieldset> -->
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Fnamet" class=" form-control-label">First Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Fname" name="Fname"  class="form-control" required="required"
                value="<?php echo $first_name ?>" maxlength="70">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Lname" class=" form-control-label">Last Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Lname" name="Lname" class="form-control" required="required"
                value="<?php echo $last_name ?>" maxlength="70">

            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Mname" class=" form-control-label">Middle Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Mname" name="Mname" class="form-control" required="required"
                value="<?php echo $middle_name ?>" maxlength="70">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Gender" class=" form-control-label">Select Gender</label>
            </div>
            <div class="col-12 col-md-2">
                <select name="Gender" id="Gender" class="form-control" required="required" >
                    <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="age" class=" form-control-label">Age</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="age" name="age" class="form-control" required="required"
                value="<?php echo $age ?>" maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="password-input" class=" form-control-label">Birth of date</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="date" id="dob" name="dob" class="form-control" required="required"
                value="<?php echo $bod ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="bop" class=" form-control-label">Birth of place</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="bop" name="bop" class="form-control" required="required"
                value="<?php echo $birth_of_place ?>" maxlength="80">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Address" class=" form-control-label">Residence Address </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Address" name="Address" class="form-control" value="<?php echo $address ?>" required="required" maxlength="80">
            </div>
        </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="email" class=" form-control-label">Email </label>
        </div>
        <div class="col-12 col-md-9">
            <input type="email" id="email" name="email" class="form-control" required="required" value="<?php echo $email ?>" maxlength="50">
        </div>
    </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="contactno" class=" form-control-label">Mobile No. </label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="contactno" name="contactno" class="form-control" maxlength="11" required placeholder="**11 digits Cellphone Number Ex. 09000000000**" value="<?php echo $contact_no ?>" required="required">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="religion" class=" form-control-label">Select Religion</label>
            </div>
            <div class="col-12 col-md-6">
                <select name="religion" id="religion" class="form-control-md form-control" required="required">
                    <option value="<?php echo $religion ?>"><?php echo $religion ?></option>
                    <option value="Roman Catholic">Roman Catholic</option>
                <option value="Protestant Christianity">Protestant Christianity</option>
                <option value="Foursquare">Foursquare</option>
                <option value="Jehovah’s Witnesses">Jehovah’s Witnesses</option>
                <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                <option value="Seventh Day Adventist">Seventh Day Adventist</option>
                <option value="Alliance of Bible Christian">Alliance of Bible Christian</option>
                <option value="Missionary Baptist Church of the  Philippines">Missionary Baptist Church of the  Philippines</option>
                 <option value="International One Way Outreach">International One Way Outreach</option>
                 <option value="Baptist Conference of the Philippines">Baptist Conference of the Philippines</option>
                 <option value="Islam">Islam</option>
                 <option value="UCCP">UCCP</option>
                 <option value="Born Again Christian">Born Again Christian</option>
                 <option value="Pentecostal">Pentecostal</option>
                 <option value="Mormons">Mormons</option>
                 <option value="Victory Chapel">Victory Chapel</option>
                 <option value="Conservative Baptist Church">Conservative Baptist Church</option>
                 <option value="Ceboley Baptist Church">Ceboley Baptist Church</option>
                 <option value="Aglipay">Aglipay</option>
                 <option value="Evangelical">Evangelical</option>
                 <option value="Faith Tabernacle">Faith Tabernacle</option>
                 <option value="Christian Sower">Christian Sower</option>
                 <option value="Quiboloy">Quiboloy</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="status" class=" form-control-label">Select Civil Status</label>
            </div>
            <div class="col-12 col-md-6">
                <select name="status" id="status" class="form-control-md form-control" required="required">
                    <option value="<?php echo $civil_status ?>"><?php echo $civil_status ?></option>
                      <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Separated">Separated</option>
                    <option value="Live-in">Live-in</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="education" class=" form-control-label">Select Higher Education Attain</label>
            </div>
            <div class="col-12 col-md-6">
                <select name="education" id="education" class="form-control-md form-control" required="required">
                    <option value="<?php echo $highest_education ?>"><?php echo $highest_education ?></option>
                    <option value="ELEMENTARY">ELEMENTARY</option>
                    <option value="HIGH SCHOOL">HIGH SCHOOL</option>
                    <option value="COLLEGE">COLLEGE</option>
                    <option value="POST GRADUATE">POST GRADUATE</option>
                    <option value="VOCATIONAL">VOCATIONAL</option>

                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Specify" class=" form-control-label">Please Specify</label>
            </div>
            <div class="col-12 col-md-6">
                <select name="Specify" id="Specify" class="form-control-md form-control" required="required">
                    <option value="<?php echo $educ_status ?>"><?php echo $educ_status ?></option>
                    <option value="GRADUATE">GRADUATE</option>
                    <option value="UNDER GRADUATE">UNDER GRADUATE</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="school" class=" form-control-label">Course </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="school" name="school" class="form-control" required="required" value="<?php echo $course_school ?>" maxlength="70">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Occupation" class=" form-control-label">Occupation</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Occupation" name="Occupation" class="form-control" required="required"
                value="<?php echo $occupation ?>" maxlength="50">
            </div>
        </div>
       
     
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="brgy_official_position" class=" form-control-label">Select Position</label>
            </div>
            <div class="col-12 col-md-6">
            <select name="brgy_official_position" id="brgy_official_position" class="form-control" required="required">
            <option value="<?php echo $position ?>"><?php echo $position ?></option>
            <option value="Punong Barangay">Punong Barangay</option>
            <option value="Barangay Kagawad 1">Barangay Kagawad 1</option>
            <option value="Barangay Kagawad 2">Barangay Kagawad 2</option>
            <option value="Barangay Kagawad 3">Barangay Kagawad 3</option>
            <option value="Barangay Kagawad 4">Barangay Kagawad 4</option>
            <option value="Barangay Kagawad 5">Barangay Kagawad 5</option>
            <option value="Barangay Kagawad 6">Barangay Kagawad 6</option>
            <option value="Barangay Kagawad 7">Barangay Kagawad 7</option>
            <option value="SK Chairman">SK Chairman</option>
            <option value="Secretary">Secretary</option>
            <option value="Treasurer">Treasurer</option>
                </select>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Term" class=" form-control-label">Term</label>
            </div>
            <div class="col-12 col-md-2">
            <select name="Term" id="Term" class="form-control" required="required">
            <option value="<?php echo $term ?>"><?php echo $term ?></option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
                </select>
            </div>
        </div>
        
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="dateelec" class=" form-control-label">Date Elected/Appointed</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="date" id="dateelec" name="dateelec" class="form-control" required="required"
                value="<?php echo $dateelec ?>">
            </div>
        </div>
        
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="brgy_name" class=" form-control-label">Select barangay name</label>
            </div>
            <div class="col-12 col-md-6">
            <select name="brgy_name" id="brgy_name" class="form-control-md form-control" required="required">
        <option value="<?php echo $barangay ?>"><?php echo $barangay ?></option> 
        <?php 
    $sql = "SELECT `brgy_name` FROM `brgy_code_tbl`";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$bid);
    $stmt->execute();
    $result = $stmt->get_result();
     while ($data = $result->fetch_assoc())
    {
     ?>
    <option value="<?php echo  $data['brgy_name']; ?>"><?php echo  $data['brgy_name'];  ?></option>
     <?php 
    } ?>
        </select>
            </div>
        </div>
    
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="updatebrgyofficial">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE OFFICIAL
            </button>

        </div>

    </form>
                                    </div>
                                </div>
                            </div>  
                  
                    </div>
                <?php include('include/admin/footer2.php'); ?>
                </div>
            </div>
    </div>
<script type="text/javascript">
    function validateForms()
{
      /*var email = document.barangay_official.email.value;v*/
      var email=document.forms["barangay_official"]["email"].value;
      if(!validateEmail(email))
        {
          alert("Pls. Enter the valid email address account");
          /* email.value ="";
           email.value = null; */
          document.barangay_official.email.focus();
          return false;
        }

      var cn = document.forms["barangay_official"]["contactno"].value;
      var numbers = /^[0-9]+$/;
      if (isNaN(cn))
        {
            alert("You have invalid input in contact number");
            document.barangay_official.contactno.focus();
            return false;
        }
      if( cn.length < 11)
        {
          alert("Pls. Provide Valid Contact Number with 11 Digits Ex: 0999 999 9999");
          document.barangay_official.contactno.focus();
          return false;
        }
        /*  vommm */
}
</script>
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function(){

        $("#contactno,#age").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    });
</script>