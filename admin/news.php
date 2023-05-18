<?php 
      include('include/login-function/session.php');
      include('include/function/config.php'); 
      include('include/function/cms_function.php');

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
                                      <h2 class="text-center">ADD NEWS FORM</h2>
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
                                        <strong>NEWS Information</strong>
                                    </div>
                                    <div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="newsform" onsubmit="return validateimage()">

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="cms_title" class=" form-control-label">Title</label>
            <?php// echo date("Y");?>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="cms_title"  class="form-control" required>
           
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="cms_author" class=" form-control-label">Author</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="email-input" name="cms_author" class="form-control" required>

        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="published_date" class=" form-control-label">Published_date</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="date" id="password-input" name="published_date" class="form-control" required>
        </div>
    </div>

     <div class="row form-group">
        <div class="col col-md-3">
            <label for="textarea-input" class=" form-control-label">Content 1</label>
        </div>
        <div class="col-12 col-md-9">
            <textarea name="cms_content1" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required=></textarea>
        </div>
    </div>
   
         <div class="row form-group">
        <div class="col col-md-3">
            <label for="cms_content2" class="form-control-label">Content 2</label>
        </div>
        <div class="col-12 col-md-9">
            <textarea name="cms_content2" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="cms_image" class=" form-control-label">Browse Image</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="file" id="cms_image" name="cms_image" class="form-control-file" accept="image/png, image/jpeg" required>
        </div>
    </div>

    <div class="card-footer">
<button type="submit" class="btn btn-primary btn-sm" name="createcms">
    <i class="fa fa-plus" aria-hidden="true"></i> ADD
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
    function validateimage()
{

    /*var image = document.barangay_officials.new_official_image.value; */
      var image= document.forms["newsform"]["cms_image"].value;
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if(!allowedExtensions.exec(image))
      {
          alert('You upload an invalid file. Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
          return false;
          cms_image.value = '';
          cms_image.value = null;
          newsform.cms_image.focus();
         
      }
}
</script>
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>