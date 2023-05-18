<?php  
    include('include/login-function/session.php'); 
    include('include/function/config.php'); 
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
                                    <div class="au-breadcrumb-left">
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
   if (isset($_GET['id']))
   {
	    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	    $MYsql = "SELECT `brgy_code` , `barangay` , `picture` FROM `brgy_official_tbl` WHERE `brgy_id`=? ";
		$MYstmt = $db->prepare($MYsql);
		$MYstmt->bind_param('i',$id);
		$MYstmt->execute();
		$Result = $MYstmt->get_result();
		   while ($data = $Result->fetch_assoc())
		      {
                 $code = $data['brgy_code'];
                 $name = $data['barangay'];
		         $picture = $data['picture'];
		      }
	}
?>
		<div class="text-center mb-3">
    		<img src="barangayimages/<?php echo $code ?>/<?php echo $picture ?>" class="w-25 img-fluid border border-dark" style="height: 150px;"> 
    	</div>
		<form action="<?php echo htmlspecialchars("include/function/barangay_official_function.php"); ?>" method="post" enctype="multipart/form-data" onsubmit="return validateimage()" name="barangay_officials">
			<br>
			<input type="hidden" name="profileid" value="<?php echo $id ?>">
            <input type="hidden" name="brgyname" value="<?php echo $name ?>">
            <input type="hidden" name="brgycode" value="<?php echo $code ?>">
		    <div class="row form-group">
	            <div class="col col-md-3">
	                <label for="new_official_image" class=" form-control-label">Browse New Image</label>
	            </div>
	            <div class="col-12 col-md-9">
	                <input type="file" id="new_official_image" name="new_official_image" class="form-control" required="required" accept="image/png, image/jpeg" value="<?php echo $picture ?>">
	            </div>
       		</div>
			<div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="updatepicture">
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
function validateimage()
{

    /*var image = document.barangay_officials.new_official_image.value; */
      var image= document.forms["barangay_officials"]["new_official_image"].value;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(image))
      {
          alert('You upload an invalid file. Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          return false;
          new_official_image.value = '';
          new_official_image.value = null;
          barangay_official.new_official_image.focus();
         
      }
}
</script>
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

  
