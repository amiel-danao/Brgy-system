<?php 
        include('include/login-function/session.php'); 
        include('include/login-function/config.php'); 
        include('include/login-function/update-account.php'); 
if(isset($_GET['edit_account']))
    {
        $ID =   $_GET['edit_account']; 
        $sql = "SELECT * FROM `admin_tbl` WHERE `id`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$ID);
        $stmt->execute();
        $stmt->bind_result($id,$first_name,$last_name,$middle_name,$email,$username,$pass,$token);
        $stmt->fetch();
        $stmt->close();
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

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">EDIT ACCOUNT INFORMATION</h2>
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
                                        <strong>Admin Account Information</strong>
                                    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return updateaccounts()" name="updateaccount">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="fname" class=" form-control-label">FIRST NAME</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="fname" name="fname"  class="form-control" required value="<?php echo $first_name ?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="lname" class=" form-control-label">LAST NAME</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="lname" name="lname" class="form-control" required 
                value="<?php echo $last_name ?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="mname" class=" form-control-label">MIDDLE NAME</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="mname" name="mname" class="form-control" required 
                value="<?php echo $middle_name ?>">
            </div>
        </div>
       <!--  <fieldset disabled> -->
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="adminemail" class=" form-control-label">EMAIL</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="adminemail" name="adminemail" class="form-control" required value="<?php echo $email ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="adminusername" class=" form-control-label">USERNAME</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="adminusername" name="adminusername" class="form-control" required value="<?php echo $username ?>">
                    <span id="erroruser"></span>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="adminpass" class=" form-control-label">PASSWORD</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="adminpass" name="adminpass" class="form-control" required >
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    <span id="errorpass"></span>
                </div>
            </div>
       <!--  </fieldset> -->
        <div class="card-footer">
    <button type="submit" class="btn btn-success btn-sm" name="updateacc">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
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
<script type="text/javascript">
    function validateEmail(email) 
    {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

    function updateaccounts()
    {
         var username = document.forms["updateaccount"]["adminusername"].value;
            if (username.length < 10 || username == null || username == "")
            {
              alert("Provide 10 characters or higher length Username");
              updateaccount.adminusername.focus();
              return false;
            }
        
    if(!checkusername(username))
      { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        updateaccount.adminusername.focus();
        return false;
      }

    var password = document.forms["updateaccount"]["adminpass"].value;
    if( password.length < 8 || password == null )
        {
            alert("Provide 8 characters or higher characters of Password");
            updateaccount.adminpass.focus();
            return false;
        }
    if(!checkpass(password))
        {
            alert("Provide Password Have contain 1 number, 1 uppercase Letter and 1 lowercase Letter.");
            updateaccount.adminpass.focus();
            return false;
        }

    var email=document.forms["updateaccount"]["adminemail"].value;
    if(!validateEmail(email))
        {
          alert("Enter the valid Email Address account");
          account.adminemail.focus();
          return false;
        }
    }

function checkpass(password)
    {
      var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
      return re.test(password);
    }
function checkusername(username)
    {
      var retest = /^\w+$/; 
      return retest.test(username);
    }
</script>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

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

          var $pwd = $("#adminpass");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
        
        $("#adminpass").on("keyup blur",function (event) {    
         var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
          //var values = $("#passworduser").val();
          if(!$(this).val().match(strongRegex) || $(this).val().length < 8)
            {
                $("#errorpass").text("Provide Password with 8 Characters with 1 lowercase, 1 uppercase and 1 numbers");
                $("#errorpass").addClass("H1");
                
                    
                }
                else{
                $("#errorpass").text("");
                $("#errorpass").removeClass("H1");
                
            }
        });


                                    //keypress
            $("#adminusername").on("keyup blur",function (event) {    
              var retest = /^\w+$/;
              if(!$(this).val().match(retest) || $(this).val().length < 10)
                {
                    $("#erroruser").text("Provide Username 10 Characters must contain only letters, numbers and underscores.");
                    $("#erroruser").addClass("H1");
                    
                        
                    }
                    else{
                    $("#erroruser").text("");
                    $("#erroruser").removeClass("H1");
                    
                }
        });
    });
</script>