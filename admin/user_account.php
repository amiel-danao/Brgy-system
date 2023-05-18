<?php 
    include('include/login-function/session.php');
    include('include/function/config.php');
    include('include/function/account_function.php'); 
    if(isset($_GET['create_account']))
    {
        $brgycode = $_GET['create_account'];
        $position = "Secretary";
        $sql = "SELECT * FROM `brgy_official_tbl` WHERE `brgy_code`=? AND `position`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ss',$brgycode,$position);
        $stmt->execute();
        $stmt->store_result();
     if($stmt->num_rows === 0)
        {
        echo "<script>alert('No record account found for use to create account.') </script>";
        echo "<script>window.location.href = 'create_account.php'; </script>";
        }
        $stmt->bind_result($brgy_id,$first_name,$last_name,$middle_name,$gender,$age,$bod,$birth_of_place,$address,$email,$contact_no,$religion,$civil_status,$highest_education,$educstatus,$course_school,$occupation,$brgy_code,$barangay,$position,$term,$dateelec,$picture,$post);
        $stmt->fetch();
        $stmt->close();
    }
    // else{
    //     header("Location: brgy_info.php");
    // }
      
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

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">Users Account Form</h2>
                                    </div>
                                </div>
                            </div>

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
                                        <strong>User Account Information</strong>
                                    </div>
                                    <div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validation();" name="account">
               <!--  <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="accountid" class=" form-control-label">Account ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="accountid" name="accountid" placeholder="Minumum 6 digits or higher" class="form-control" required>
                    </div>
                </div> -->
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="" class=" form-control-label">Barangay</label>
        </div>
        <div class="col-12 col-md-9">
            <label for="" class="form-control-label"><?php echo $barangay ?></label>
        </div>
    </div>
    
                <input type="hidden" id="officialid" name="officialid" class="form-control"  value="<?php echo $brgy_id ?>">
                <fieldset disabled>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="id" class=" form-control-label">Brgy ID</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="id" name="id" class="form-control bg-light"  value="<?php echo $brgy_id ?>">
                    </div>
                </div>
                </fieldset>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="userusername" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="userusername" name="userusername" class="form-control" 
                        placeholder="**Minimum 10 characters username**">
                        <span id="erroruser"></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="passworduser" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="passworduser" name="passworduser" class="form-control" placeholder="**Minimum 8 characters password 1 uppercase, 1 lowercase letter and 1 numbers**"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <span id="errorpass"></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="emailuser" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="emailuser" name="emailuser" class="form-control bg-light" required value="<?php echo  $email ?>" readonly="readonly">
                    </div>
                </div>
                
                <!--<fieldset disabled>-->
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="contactno" class=" form-control-label">Mobile No#</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="contactno" name="contactno" class="form-control bg-light"  value="<?php echo $contact_no ?>" required maxlength="11" placeholder="**11 Digits Mobile Number. ex: 09000000000**" readonly="readonly">
                        <span id="errorcontact"></span>
                    </div>
                </div>
                 <!--</fieldset>-->
                 <!--<input type="hidden" id="contactno" name="contactno" class="form-control"  value="<?php echo $contact_no ?>">-->
               <!--  <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="regdate" class=" form-control-label">Registration of date</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="regdate" name="regdate" class="form-control" required>
                    </div>
                </div> -->

                <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="status" class=" form-control-label">Select Status</label>
                    </div>
                    <div class="col-12 col-md-3">
                        <select name="status" id="status" class=" form-control-sm" required>
                            <option value="" selected="true" disabled="disabled">Select Status</option>
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="DEACTIVATE">DEACTIVATE</option>
                        </select>
                    </div>
                </div>
                <fieldset disabled>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Brgy Code</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control bg-light" value="<?php echo $brgycode ?>">
                    </div>
                </div>
                </fieldset>
                <input type="hidden" id="brgycode" name="brgycode" value="<?php echo $brgycode ?>">
                <input type="hidden" id="brgyname" name="brgyname" value="<?php echo $barangay ?>">
    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm" 
                    name="addaccount">
            <i class="fa fa-plus" aria-hidden="true"></i> CREATE
                    </button>
                </div>
        </form>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>                 
                                <!-- END DATA TABLE -->
                   <?php include('include/admin/footer2.php'); ?>
                        
                        
                    </div>
                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
  
     $("#contactno").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    //$("#contactno").prop('disabled', true);
     $("#passworduser").on("keyup blur",function (event) {    
         var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
          //var values = $("#passworduser").val();
          if(!$(this).val().match(strongRegex) || $(this).val().length < 8)
            {
                $("#errorpass").text("Provide Username with 8 Characters with 1 lowercase, 1 uppercase and 1 numbers");
                $("#errorpass").addClass("H1");
                
                    
                }
                else{
                $("#errorpass").text("");
                $("#errorpass").removeClass("H1");
                
            }
        });


                                     //keypress
            $("#userusername").on("keyup blur",function (event) {    
              var retest = /^\w+$/;
              if(!$(this).val().match(retest) || $(this).val().length < 10)
                {
                    $("#erroruser").text("Provide 10 Characters Username must contain only letters, numbers and underscores.");
                    $("#erroruser").addClass("H1");
                    
                        
                    }
                    else{
                    $("#erroruser").text("");
                    $("#erroruser").removeClass("H1");
                    
                }
        });

                                 //keypress
            $("#contactno").on("keyup blur",function (event) {    
              var value = $("#contactno").val();
              if(value.length < 11)
                {
                    $("#errorcontact").text("Provide Valid Contact Number with 11 Digits Ex: 0999 999 9999.");
                    $("#errorcontact").addClass("H1");
                    
                        
                    }
                    else{
                    $("#errorcontact").text("");
                    $("#errorcontact").removeClass("H1");
                    
                }
        });
        
        
    });
</script>

<style>
.field-icon {
  float: right;
  /*margin-left: -15px;*/
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
.H1 {
    color: red;
    border-color: red;
}
</style>


<script type="text/javascript">
    $(document).ready(function(){
        $(".toggle-password").click(function() {

          var $pwd = $("#passworduser");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
    });
</script>