<?php 
    include('include/login-function/session.php');
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

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">ADD BARANGAY INFORMATION</h2>
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
                                        <strong>Barangay Information</strong>
                                    </div>
                                <div class="card-body card-block">

        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Brgy Code</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="text-input"  class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Brgy Name</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" name="email-input" class="form-control" required>

                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Address</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password-input" name="password-input" class="form-control" required>
                </div>
            </div>
       
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> ADD
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