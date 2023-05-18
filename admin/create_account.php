<?php 
    include('include/login-function/session.php');
    include('include/function/config.php');  

    
$sql = "SELECT * FROM `brgy_code_tbl` ORDER BY brgy_name";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

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
                                      <h2 class="text-center">Create Barangay Account</h2>
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
                           <!--  <div class="col-lg-1">
                            </div> -->
                            <div class="col-lg-12">
                                <!-- <a href="add_barangay_info.php" class="btn btn-primary">ADD</a> -->
                                <div class="table-responsive table--no-card m-b-30">
            <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y">
                <thead>
                    <tr>
                        <th class="text-center" width="35%">BRGY NAME</th>
                        <th class="text-center" width="35%">ADDRESS</th>
                        <th class="text-center" width="20%">BARANGAY CODE</th>
                        <th class="text-center" width="100%">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        while ($data = $result->fetch_assoc())
                        { ?>
                    <tr>
                        <td><?php echo $data['brgy_name']; ?></td>
                        <td><?php echo $data['address']; ?></td>
                        <td><?php echo $data['brgy_code']; ?></td>
                        <td class="text-center">
                            <a href="user_account.php?create_account=<?php echo $data['brgy_code']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> Create Account</a>
                            
                        </td>
                    </tr> 
                <?php   
                    } 
                    ?>
                </tbody>
            </table>
                                </div>
                            </div>
                        </div>                    
                                <!-- END DATA TABLE -->
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="copyright bg-light">
                                     <p>Copyright © <?php echo date("Y") ?> Maragondon Cavite. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>