
<?php 
    include('include/login-function/session.php');
    include('include/function/config.php'); 
    include('include/function/account_function.php'); 

if(isset($_GET['acc_update']))
    {
        $key = $_GET['acc_update'];
        $sql = "SELECT * FROM `user_account_tbl` WHERE `id`=? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$key);
        $stmt->execute();
        // $stmt->store_result();
        // if($stmt->num_rows === 0)
        // {
        // echo "<script>alert('No record account found for use to create account.') </script>";
        // echo "<script>window.location.href = 'user_account_list.php'; </script>";
        // }
        $stmt->bind_result($id,$brgy_id,$username,$password,$email,$contactno,$registration_date,$status,$brgy_name,$brgycode);
        $stmt->fetch();
        $stmt->close();
    }
      
    // if (!isset($_GET['acc_update']))
    // {
    //   header("Location: brgy_info.php");
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
                                      <h2 class="text-center">Users Account Form</h2>
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
                                        <strong>User Account New Password</strong>
                                    </div>
                                    <div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="uaccount" onsubmit="return validatez()">
   
<input type="hidden" id="accid" name="accid" class="form-control"  value="<?php echo $key ?>">
<input type="hidden" id="accemail" name="accemail" class="form-control"  value="<?php echo $email ?>">
<input type="hidden" id="accnumber" name="accnumber" class="form-control"  value="<?php echo 
$contactno ?>">
  <div class="row form-group">
        <div class="col col-md-3">
            <label for="Barangay" class=" form-control-label">Barangay</label>
        </div>
        <div class="col-12 col-md-9">
            <label for="Barangay" class=" form-control-label"><?php echo $brgy_name ?></label>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="updatepasswords" class=" form-control-label">Password</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="password" id="upasswords" name="upasswords" class="form-control">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
             <span id="errorpass"></span>
        </div>
         <div class="col col-md-3">
         <!-- <label for="updatepasswords" class=" form-control-label">Password</label> -->
        </div>
        <div class="col-12 col-md-9 text-center" id="error" >
        
        </div>
    </div>

               
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" 
        name="updateacc">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
        </button>
        <a href="brgy_info.php" class="btn btn-warning btn-sm"><i class="fa fa-times" aria-hidden="true"></i> CANCEL</a>
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
function validatez(){
  var form = document.forms.uaccount;
         if( form.upasswords.value == "" )
         {
          alert("Provide New Password");
          document.uaccount.upasswords.focus();
           // upasswords.classList.add("border-danger");
           // $("#error").html("<span class='text-danger'>Pls. Provide New password</span>");
           return false;
         }

          if(form.upasswords.value.length < 8  )
         {
           alert("Provide 8 characters or higher characters Password and make sure its Strong");
           document.uaccount.upasswords.focus();
           return false;
           // upasswords.classList.add("border-danger");
           // $("#error").html("<span class='text-danger'>Pls. Provide 6 characters or higher characters Password and make sure its Strong</span>");
           // return false;
         }
         var pass = form.upasswords.value;
    if(!checkpass(pass))
         {
        alert("Provide Password Have contain 1 number, 1 uppercase Letter and 1 lowercase Letter.");
           document.uaccount.upasswords.focus();
           return false;
         }
     }

  function checkpass(password)
    {
      var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
      return re.test(password);
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

          var $pwd = $("#upasswords");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
        
         $("#upasswords").on("keyup blur",function (event) {    
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
        
    });
</script>
