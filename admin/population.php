<?php 
      include('include/login-function/session.php');
      include('include/function/config.php');
      //include('include/function/bdf_function.php');
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
                              <!--   <a href="#">
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
          <?php 
        if(isset($_GET['by']) && $_GET['by'] == "gender") 
            {
                include("include/form/gender.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "religion") 
            {
                include("include/form/religion.php");
            }

        if(isset($_GET['by']) && $_GET['by'] == "civil-status") 
            {
                include("include/form/civil_status.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "age") 
            {
                include("include/form/age.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "job") 
            {
                include("include/form/job_employment.php");
            }
        if(isset($_GET['by']) && $_GET['by'] == "school") 
            {
                include("include/form/school.php");
            }
        if(isset($_GET['allpopulation'])) 
            {
                include("include/form/civil_status.php");
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