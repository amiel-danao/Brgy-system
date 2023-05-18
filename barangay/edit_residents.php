<?php  
    include('include/login-function/session.php');
    include('include/function/config.php');  
    include('include/function/process.php'); 

    if (isset($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        //$brgy_code = "BC2"; 
        $sql = "SELECT * FROM `residents_tbl` WHERE `id`= ? AND `brgy_code`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('is',$id,$brgycode);
        $stmt->execute();
        $stmt->bind_result($id,$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$contact,$job,$street,$religion,$status,$elem,$high,$college,$collegename,$collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno,$picture,$brgy_code);
        $stmt->fetch();
        $stmt->close();
            // while ($data = $result->fetch_assoc())
            //     {
            //         $id         = $data['id'];
            //         $Fname      = $data['first_name'];
            //         $Lname      = $data['last_name'];
            //         $Mname      = $data['middle_name'];
            //         $Gender     = $data['gender'];
            //         $dob        = $data['bod'];
            //         $Hno        = $data['house_no'];
            //         $street     = $data['street'];
            //         $religion   = $data['religion'];
            //         $status     = $data['status'];
            //         $brgy_code  = $data['brgy_code'];
            //     }
    }
    // else 
    //     {
    //         header("Location: barangay_residents.php");
    //     }
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
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">Edit resident Form</h2>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>

             <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Residents Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="resident_id" id="resident_id" value="<?php echo $id ?>">
<input type="hidden" name="resident_code" id="resident_code" value="<?php echo $brgy_code ?>">

<div class="col-md-12 text-center mb-2">
           <h3 class="text-uppercase font-weight-bold">Personal Information</h3>
        </div>
        <hr class="border-dark">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="text-input" class=" form-control-label">First Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Fname" name="Fname"  class="form-control" required="required" value="<?php echo  $Fname ?>" maxlength="60">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Lname" class=" form-control-label">Last Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Lname" name="Lname" class="form-control"  required="required" value="<?php echo $Lname ?>" maxlength="60">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Mname" class=" form-control-label">Middle Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Mname" name="Mname" class="form-control"  value="<?php echo 
                $Mname ?>" required="required" maxlength="60">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Gender" class=" form-control-label">Select Sex</label>
            </div>
            <div class="col-12 col-md-3">
                <select name="Gender" id="Gender" class="form-control" required="required">
                    <option value="<?php echo $Gender ?>"><?php echo $Gender ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="dob" class=" form-control-label">Birth of date</label>
            </div>
            <div class="col-12 col-md-3">
                <input type="date" id="dob" name="dob" class="form-control" required="required" value="<?php echo $dob ?>">
            </div>
          
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="age" class=" form-control-label">Age</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="age" name="age" class="form-control" maxlength="3" value="<?php echo $age ?>" required="required">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Hno" class=" form-control-label">House No#</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Hno" name="Hno" class="form-control" required="required" value="<?php echo $Hno ?>" maxlength="10">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="contactno" class=" form-control-label">Mobile No </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="contactno" name="contactno" class="form-control" maxlength="11" value="<?php echo $contact ?>" placeholder="**11 Digits Cellphone Number. ex: 09000000000**">
            </div>
        </div>

       <!--  <div class="row form-group">
            <div class="col col-md-3">
                <label for="job" class=" form-control-label">Job Status</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="job" name="job" class="form-control" placeholder="**If not available input none**" required="required" value="<?php // echo $job ?>">
            </div>
        </div> -->

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="job" class="form-control-label">Occupation</label>
            </div>
            <div class="col-12 col-md-3">
                <select name="job" id="job" class="form-control-md form-control" required="required">
                    <option value="<?php  echo $job ?>"><?php  echo $job ?></option>
                    <option value="Employed">Employed</option>
                    <option value="Unemployed">Unemployed</option>
                    <option value="none">Not in the Labor Force</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="street" class=" form-control-label">Street </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="street" name="street" class="form-control" required="required" value="<?php echo $street ?>" maxlength="50">
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-3">
                <label for="religion" class=" form-control-label">Select Religion</label>
            </div>
            <div class="col-12 col-md-9">
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
                <label for="status" class=" form-control-label">Select Status</label>
            </div>
            <div class="col-12 col-md-3">
                <select name="status" id="status" class="form-control-md form-control" required="required">
                    <option value="<?php echo $status ?>"><?php echo $status ?></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Separated">Separated</option>
                    <option value="Live-in">Live-in</option>
                </select>
            </div>
        </div>
        
        <div class="col-md-12 text-center mb-2">
           <h3 class="text-uppercase font-weight-bold">Educational Information</h3>
        </div>
        <hr class="border-dark">

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="ElementaryStatus" class="form-control-label">Elementary Status</label>
            </div>
            <div class="col-12 col-md-5">
                <select name="ElementaryStatus" id="ElementaryStatus" class="form-control-md form-control">
                    <option value="<?php echo $elem ?>"><?php echo $elem ?></option>
                    <option value="Elementary Level">Elementary Level</option>
                    <option value="Elementary Graduate">Elementary Graduate</option>
                    <option value="None">None</option>
                </select>
            </div>
        </div>
        
        <!-- <div class="row form-group">
            <div class="col col-md-3">
                <label for="elemname" class="form-control-label">Elementary School Name </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="elemname" name="elemname" class="form-control">
            </div>
        </div> -->
        

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="HighSchoolStatus" class="form-control-label">High School Status</label>
            </div>
            <div class="col-12 col-md-5">
                <select name="HighSchoolStatus" id="HighSchoolStatus" class="form-control-md form-control">
                    <option value="<?php echo $high ?>"><?php echo $high ?></option>
                    <option value="High School Level">High School Level</option>
                    <option value="High School Graduate">High School Graduate</option>
                    <option value="None">None</option>
                </select>
            </div>
        </div>


        <!-- <div class="row form-group">
            <div class="col col-md-3">
                <label for="highsname" class="form-control-label">High School Name </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="highsname" name="highsname" class="form-control">
            </div>
        </div> -->

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="CollegeStatus" class="form-control-label">College Status</label>
            </div>
            <div class="col-12 col-md-5">
                <select name="CollegeStatus" id="CollegeStatus" class="form-control-md form-control">
                    <option value="<?php echo $college ?>"><?php echo $college ?></option>
                    <option value="Vocational">Vocational</option>
                    <option value="College Undergraduate">College Undergraduate</option>
                    <option value="Academic Degree Holder">Academic Degree Holder</option>
                    <option value="Post Baccalaureate">Post Baccalaureate</option>
                    <option value="None">None</option>
                </select>
            </div>
        </div>


        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Collegename" class="form-control-label">College School Name </label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Collegename" name="Collegename" class="form-control"
                value="<?php echo $collegename ?>" maxlength="65">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Collegecourse" class="form-control-label">College Course</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Collegecourse" name="Collegecourse" class="form-control"
                value="<?php echo $collegecourse ?>" maxlength="65">
            </div>
        </div>
       
        
        <div class="col-md-12 text-center mb-2">
           <h3 class="text-uppercase font-weight-bold">Household Information</h3>
        </div>
        <hr class="border-dark">

        <div class="row form-group">
            <div class="col col-md-5">
                <label for="familyrole" class="form-control-label">Is the person is <strong>HEAD</strong> of the Household?</label>
            </div>
            <div class="col-12 col-md-3">
                <select name="familyrole" id="familyrole" class="form-control-sm form-control" required="required">
                    <option value="<?php echo $familyrole ?>"><?php echo $familyrole ?></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="familiesno" class="form-control-label">No. of Families</label>
            </div>
            <div class="col-12 col-md-3">
                <input type="text" id="familiesno" name="familiesno" class="form-control" required="required" value="<?php echo $familiesno ?>" maxlength="2">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="hhno" class="form-control-label">No. of Household Members</label>
            </div>
            <div class="col-12 col-md-3">
                <input type="text" id="hhno" name="hhno" class="form-control" required="required" 
                value="<?php echo $hhno ?>" maxlength="2">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="femaleno" class="form-control-label">No. of Female</label>
            </div>
            <div class="col-12 col-md-3">
                <input type="text" id="femaleno" name="femaleno" class="form-control" required="required" value="<?php echo $femaleno ?>" maxlength="2">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="maleno" class="form-control-label">No. of Male</label>
            </div>
            <div class="col-12 col-md-3">
                <input type="text" id="maleno" name="maleno" class="form-control" required="required"
                value="<?php echo $maleno ?>" maxlength="2">
            </div>
        </div>
        
       
        <div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm" name="editresidents" >
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE RESIDENTS
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
   
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        age();
          function age(){
            var dob = $("#dob").val();
            var dobs = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dobs) / (365.25 * 24 * 60 * 60 * 1000));
            var ages = age / 365.25 * 24 * 60 * 60 * 1000;
            $('#age').val(age);
        }
         $("#dob").keyup(function(){
            var dob = $("#dob").val();
            var dobs = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dobs) / (365.25 * 24 * 60 * 60 * 1000));
            var ages = age / 365.25 * 24 * 60 * 60 * 1000;
            $('#age').val(age);

        });

          // $(".allownumericwithdecimal").on("keypress keyup blur",function (event) {
    //         //this.value = this.value.replace(/[^0-9\.]/g,'');
    //  $(this).val($(this).val().replace(/[^0-9\.]/g,''));
    //         if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
    //             event.preventDefault();
    //         }
    //     });

     $("#contactno,#age,#Hno,#maleno,#femaleno,#hhno,#familiesno").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    });
</script>

