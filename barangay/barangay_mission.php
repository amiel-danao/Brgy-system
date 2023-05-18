<?php  
    include('include/login-function/session.php'); 
    include('include/function/config.php');  
    include('include/function/barangay_g_m_v_function.php'); 
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
                            <div class="col-md-offset-2">
                            </div>
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">ADD NEW BARANGAY MISSION</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-offset-2">
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
        <strong>MISSION MESSAGE</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">

    <input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
       

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Missionmessage" class="form-control-label">Mission Message</label>
            </div>
            <div class="col-12 col-md-9">
            <textarea name="Missionmessage" id="Missionmessage" rows="6" class="form-control"></textarea>
            </div>
        </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" name="barangaymission">
            <i class="fa fa-paper-plane" aria-hidden="true"></i> ADD NEW MISSION
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

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?> 
