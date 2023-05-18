<?php 
      include('include/login-function/config.php'); 
      include('include/login-function/recovery-password.php');
      include('include/login/header.php');
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
                <p>We need your email address account to send the link and instruction to update your password.</p>
                </div>
            <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="forgetpass" onsubmit="return sendrequest()">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-md" name="sendrequest">
            <i class="fa fa-dot-circle-o"></i> SEND
        </button>

    <!--     <button type="submit" class="btn btn-primary btn-md" name="cancelrequest">
            <i class="fa fa-dot-circle-o"></i> CANCEL
        </button> -->
        </div>
        </form>
                                    </div>
                                </div>
                            </div> 
                        <div class="col-lg-3">    
                        </div>                 
                    </div>
            
                </div>
            </div>
        </div>
<script type="text/javascript">
function sendrequest()
    {
      var email = document.forgetpass.email.value;

      if(!validateEmail(email))
        {
          alert("Pls. Enter the valid email address account");
          forgetpass.email.focus();
          return false;
        }
    }
function validateEmail(email) 
    {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
</script>
<?php include('include/login/footer.php'); ?>