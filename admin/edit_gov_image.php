<?php  
    include('include/login-function/session.php'); 
    include('include/function/config.php'); 
    include('include/function/gov_official_function.php');
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
                          
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">UPDATE BARANGAY OFFICIAL PHOTO FORM</h2>
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
                            <strong>Edit Picture</strong>
                        </div>
                        <div class="card-body card-block">
   
<?php 
   if (isset($_GET['gov_image_id']))
   {
	    $id = filter_var($_GET['gov_image_id'], FILTER_SANITIZE_NUMBER_INT);
	    $MYsql = "SELECT  `picture` FROM `maragondon_official_tbl` WHERE `id`=? ";
		$MYstmt = $db->prepare($MYsql);
		$MYstmt->bind_param('i',$id);
		$MYstmt->execute();
		$MYstmt->bind_result($picture);
        $MYstmt->fetch();
        $MYstmt->close();
	}
?>
		<div class="text-center mb-3">
    		<img src="gov_image/<?php echo $picture = !empty($picture) ? $picture :'default-image.png'; ?>" class="w-25 img-fluid border border-dark" style="height: 150px;"> 
    	</div>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" onsubmit="return validateimagez()" name="gov_official">
			<br>
			<input type="hidden" name="govid" value="<?php echo $id ?>">
		    <div class="row form-group">
	            <div class="col col-md-3">
	                <label for="new_gov_image" class=" form-control-label">Browse New Image</label>
	            </div>
	            <div class="col-12 col-md-9">
	                <input type="file" id="new_gov_image" name="new_gov_image" class="form-control" required="required" accept="image/png, image/jpeg" value="<?php echo $picture ?>">
	            </div>
       		</div>
			<div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="updategovpicture">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE IMAGE
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
function validateimagez()
{

    /*var image = document.barangay_officials.new_official_image.value; */
      var image= document.forms["gov_official"]["new_gov_image"].value;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(image))
      {
          alert('You upload an invalid file. Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          return false;
          new_gov_image.value = '';
          new_gov_image.value = null;
          gov_official.new_gov_image.focus();
         
      }
}
</script>


    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

<script src="text/javascript">
    function validateimagez()
      {
      var image = document.gov_official.new_gov_image.value;
  

   var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.docx|\.doc|\.xlsx|\.xls|\.ppt|\.pptx|\.pdf)$/i;
          if(!allowedExtensions.exec(image)){
              alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
              new_gov_image.value = '';
              gov_official.new_gov_image.focus();
              return false;
          }

      }

 
</script>
  
