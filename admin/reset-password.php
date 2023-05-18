<?php  
      include('include/forgotpassword/config.php'); 
      include('include/forgotpassword/reset-pass-function.php');
if(isset($_GET['email']) && !empty($_GET['token']))
    {
        $email = $_GET['email'];
        $tokens = $_GET['token'];
        $sqlcheck = "SELECT * FROM `admin_tbl` WHERE `email`=?";
        $sqlstmt = $db->prepare($sqlcheck);
        $sqlstmt->bind_param('s',$email);
        $sqlstmt->execute();
        $sqlstmt->store_result();
        if($sqlstmt->num_rows === 0)
            {
                echo "<script>alert('Sorry Email Account that not exist in system..') </script>";
                echo "<script>window.location.href = 'index.php'; </script>";
                exit();
            }
        else 
            {
                $sqlstmt->bind_result($id,$firstname,$lastname,$middlname,$email,$Username,$password,
                    $token);
                $sqlstmt->fetch();
                $sqlstmt->close();

                if(!password_verify($tokens,$token))
                {
                    echo "<script>alert('Sorry you are not authorized to reset password..') </script>";
                    echo "<script>window.location.href = 'index.php'; </script>";
                    exit();
                }
            }

    }else {
         echo "<script>window.location.href = 'index.php'; </script>";
         exit();
    }
include('include/forgotpassword/header.php');
?>
        <div class="head">
            <div class="container">
                <div class="mx-auto">
                    <div class="row">
                        <div class="col-lg-3">    
                        </div>
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-header">
                    <strong>Request Reset Password</strong>
                <p>This is the form that can you reset the password.</p>
                </div>
            <div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="resetadminpassword" onsubmit="return resettingpassword()">
<input type="hidden" id="emailadmin" name="emailadmin" class="form-control" value="<?php echo $email ?>">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="newpassword" class=" form-control-label">New Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="newpassword" name="newpassword" class="form-control" required>
        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    <span id="errorpass"></span>
                </div>
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-md" name="updateadminpassword">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
        </button>
        </div>
        </form>
                                    </div>
                                </div>
                            </div> 
                        <div class="col-lg-3">    
                        </div>                 
                    </div>
                    <?php include('include/admin/footer2.php'); ?>
                </div>
            </div>
        </div>

<script type="text/javascript">
function resettingpassword()
    {
        var form = document.forms.resetadminpassword;
            if( form.newpassword.value.length < 8  )
            {
       alert("Provide 8 characters or higher characters Password and make sure its Strong");
       document.resetadminpassword.newpassword.focus();
       return false;  
            }
            
        if(!checkpass(form.newpassword.value))
            {
                alert("Password Have contain 1 number, 1 uppercase Letter and 1 lowercase Letter.");
                document.resetadminpassword.newpassword.focus();
                return false;
            }
    }
function checkpass(password)
    {
      var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
      return re.test(password);
    }
</script>
<?php include('include/forgotpassword/footer.php'); ?>


<style>
.H1 {
    color: red;
    border-color: red;
}

.field-icon {
  float: right;
  /*margin-left: -15px;*/
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>

<script type="text/javascript">
    $(document).ready(function(){
        
         $(".toggle-password").click(function() {

          var $pwd = $("#newpassword");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });


        $("#newpassword").on("keyup blur",function (event) {    
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