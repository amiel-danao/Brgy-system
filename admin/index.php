<?php  
	  include('include/login-function/config.php'); 
	  include('include/login-function/login.php');
	  include('include/login/header.php'); 
	?>
		<div class="head" style="min-height:100vh">
			<div class="container">
				<div class="body mx-auto" style="margin-top: 100px">
<form class="formbody" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="adminloginform" onsubmit="return loginaccount()">
			<h2>ADMIN LOG IN</h2>
			<hr style="border: 1px solid black;">
		  <div class="form-group">
		    <label for="loginusername">Username</label>
		    <input type="text" class="form-control" id="loginusername" name="loginusername" placeholder="Username" autocomplete="off">
		  </div>
		  <div class="form-group">
		    <label for="loginpass">Password</label>
		    <input type="password" class="form-control" id="loginpass" name="loginpass" placeholder="Password" autocomplete="off">
		  </div>
		  <br />
			<button type="submit" id="adminbtn" class="btn btn-primary btn-block" name="adminbtn">LOG-IN</button>
			<div class="text-center mt-3">
				<a href="forget_password.php">Forget Password?</a>
			</div>
		</form>
				</div>
			</div>
		</div>
<script type="text/javascript">
   
  function loginaccount()
    {
         var username = document.forms["adminloginform"]["loginusername"].value;
            if ( username == null || username == "")
            {
              alert("Pls. Provide Username.");
              adminloginform.loginusername.focus();
              return false;
            }

    var password = document.forms["adminloginform"]["loginpass"].value;
    if( password == null || password == "")
      {
        alert("Pls. Provide Password.");
        adminloginform.loginpass.focus();
        return false;
      }

   
    }
</script>
<?php include('include/login/footer.php'); ?>