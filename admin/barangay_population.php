<?php 
      
      include('include/function/config.php');
      include('include/login-function/session.php');
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

   

<div class="row">
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
</div>
        <section class="au-breadcrumb m-t-20">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                          <h3 class="text-center">POPULATION OF BARANGAY BY CIVIL STATUS</h3>
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
    <div class="table-responsive table--no-card m-b-30 ta">
        <table class="table table-bordered table-striped table-earning">
            <thead class="bg-dark text-white" style="font-size: 15px;">
                <tr>
                    <th class="text-center">BARANGAY</th>
                    <th class="text-center">Single</th>
                    <th class="text-center">Married</th>
                    <th class="text-center">Widowed</th>
                    <th class="text-center">Divorced</th>
                    <th class="text-center">Separated</th>
                    <th class="text-center">TOTAL</th>
                </tr>
            </thead>
            <tbody>


                </tbody>
                </table>
                        
        </div>
    </div>
</div>    

<div class="row">
    <div class="col-md-12">
        <div class="card-footer">
            <a href="include/print-function/status-report.php?print=status" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"></i> Print</a>
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