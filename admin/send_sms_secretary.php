<?php 
      include('include/login-function/session.php');
      include('include/function/config.php');  
      include('include/function/sms_secretary_function.php');
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
                                      <h2 class="text-center">SMS FORM</h2>
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
                                        <strong>Send SMS Message to All Brgy. Secretary</strong>
                                    </div>
                                    <div class="card-body card-block">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
    
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="smstitle" class=" form-control-label">Title</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="smstitle" name="smstitle"  class="form-control" maxlength="50" style="text-transform:uppercase">
        </div>
    </div>
 
     <div class="row form-group">
        <div class="col col-md-3">
            <label for="Message" class=" form-control-label">Message</label>
        </div>
        <div class="col-12 col-md-9">
            <textarea name="Message" id="Message" rows="7" placeholder="Content..." class="form-control" 
            required="required"></textarea>
        </div>
    </div>

    <div class="card-footer">
<button type="submit" class="btn btn-primary btn-sm" name="sendsmstosecretary">
    <i class="fa fa-paper-plane" aria-hidden="true"></i> SEND SMS
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