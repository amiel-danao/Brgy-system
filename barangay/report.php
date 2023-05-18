<?php
    include('include/login-function/session.php'); 
    date_default_timezone_set('Asia/Manila');
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
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">SENDING FILE FORM</h2>
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
                                        <strong>Sending File Information</strong>
                                    </div>
                                    <div class="card-body card-block">
<?php 
$month = date('F Y');
$datesend = date('Y-m-d');
 ?>
<form action="<?php echo htmlspecialchars("include/function/report_function.php"); ?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="formfile">

    <input type="hidden" name="month" value="<?php echo $month ?>">
    <input type="hidden" name="datesend" value="<?php echo $datesend ?>">
    <input type="hidden" name="bcode" value="<?php echo $brgycode ?>">
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="reporttitle" class=" form-control-label">Title</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="reporttitle" name="reporttitle"  class="form-control" required>
        </div>
    </div>
  <!--   <div class="row form-group">
        <div class="col col-md-3">
            <label for="datesend" class=" form-control-label">date</label>
        
    
        </div>
        <div class="col-12 col-md-9">
            <input type="date" id="datesend" name="datesend" class="form-control" required>
        </div>
    </div> -->
     <div class="row form-group">
        <div class="col col-md-3">
            <label for="Description" class=" form-control-label">Description</label>
            
        </div>
        <div class="col-12 col-md-9">
            <textarea name="Description" id="Description" rows="7" placeholder="Content..." class="form-control"></textarea>
        </div>
    </div>

    <div class="row form-group">
        <div class="col col-md-3">
            <label for="report_file" class=" form-control-label">Browse File</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="file" id="report_file" name="report_file" class="form-control" >
        </div>
    </div>

    <div class="card-footer">
<button type="submit" class="btn btn-primary btn-sm" name="sendfiles">
    <i class="fa fa-upload" aria-hidden="true"></i> SEND FILE
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