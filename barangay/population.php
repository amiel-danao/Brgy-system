<?php 
      include('include/function/config.php');
      include('include/login-function/session.php'); 
      include('include/admin/header.php'); 
      //include('include/function/bdf_function.php');
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

   

<!-- <div class="row">
    <div class="col-md-12">
        <form action="report_printing.php" method="POST" >
        <input type="hidden" id="print" name="prints"  class="form-control" value="bdf">
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="print">
                    <i class="zmdi zmdi-print">Print</i>
                </button>
            </div>
        </form>
    </div>
</div> -->
          <?php 
        if(isset($_GET['by']) && $_GET['by'] == "gender") 
            {
                include("include/form/gender.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "religion") 
            {
                include("include/form/religion.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "age") 
            {
                include("include/form/age.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "jobemployment") 
            {
                include("include/form/job_employment.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "civil-status") 
            {
                include("include/form/civil_status.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "sitio") 
            {
                include("include/form/sitio.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "school") 
            {
                include("include/form/school.php");
            }
          ?>
                                <!-- END DATA TABLE -->
                        <?php include('include/admin/footer2.php'); ?>
                    </div>
                </div>
            </div>
      
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>