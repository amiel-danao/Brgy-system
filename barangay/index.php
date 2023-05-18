<?php
 include('include/login-function/config.php');
 include('include/login-function/login.php'); 

 // if(!isset($_GET['barangay']) || empty($_GET['barangay']))
	// {
	// 	header("Location: ../index.php");
	// }
 // else
	// {
	// 	$code = filter_var($_GET['barangay'], FILTER_SANITIZE_STRING);
	// }

 include('include/login/header.php'); 
	  // include('include/login-function/config.php'); 
	  // include('include/login-function/login.php'); 
?>
		<div class="head" style="min-height:100vh;">
			<div class="container" >
				<div class="body mx-auto" style="margin-top: 100px;">
<form class="formbody" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="brgylogins" onsubmit="return loginacc()">
	<h2>LOG IN</h2>
	<hr style="border: 1px solid black;">
	<input type="hidden" class="form-control" id="code" name="code" value="<?php echo $code ?>">
  <div class="form-group">
    <label for="busername">Username</label>
    <input type="text" class="form-control" id="busername" name="busername" placeholder="Your Username*" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="bpassword">Password</label>
    <input type="password" class="form-control" id="bpassword" name="bpassword" placeholder="Your Password*" autocomplete="off">
  </div>
  <br />
	<button type="submit" name="barangaylogin" class="btn btn-primary btn-block">LOG-IN</button>
</form>
				</div>
			</div>
		</div>
<script type="text/javascript">
   
  function loginacc()
    {
        var username = document.forms["brgylogins"]["busername"].value;
            if ( username == null || username == "")
            {
              alert("Pls. Provide Username.");
              brgylogins.busername.focus();
              return false;
            }

	    var password = document.forms["brgylogins"]["bpassword"].value;
		    if( password == null || password == "")
			      {
			        alert("Pls. Provide Password.");
			        brgylogins.bpassword.focus();
			        return false;
			      }

	  console.log("logging in...");
    }
</script>
<?php include('include/login/footer.php'); ?>