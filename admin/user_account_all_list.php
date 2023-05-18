<?php 
    
    include('include/login-function/session.php');
    include('include/function/config.php');
   
include('include/admin/header.php'); 
?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php include('include/admin/sidebar.php'); 
    ?>
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
                                      <h2 class="text-center">ALL ACCOUNT LIST</h2>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-5">-->
                            <!--    <form class="form-header" action="" method="POST">-->
                            <!--        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for Residents..." />-->
                            <!--        <button class="au-btn--submit" type="submit">-->
                            <!--            <i class="zmdi zmdi-search"></i>-->
                            <!--        </button>-->
                            <!--    </form>-->
                            <!--</div>-->

                        </div>
                    </div>
                </div>
            </section>
            

              <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y">
                                        <thead>
                                            <tr>
                                                <th class="text-center">NO</th>
                                                <th class="text-center">USERNAME</th>
                                                <th class="text-center">EMAIL</th>
                                                <th class="text-center">REGISTRATION DATE</th>
                                                <th class="text-center">STATUS</th>
                                                <th class="text-center">BRGY CODE</th>
                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

        $sql = "SELECT * FROM `user_account_tbl`";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $rezult = $stmt->get_result();
        $number = 1;
        while ($data = $rezult->fetch_assoc())
            { 
    ?>
    <tr>
        <td class="text-center"><?php echo $number ?></td>
        <td class="text-center"><?php echo $data['username']; ?></td>
        <td class="text-center"><?php echo $data['email']; ?></td>
        <?php $newDate = date("F - d - Y", strtotime($data['registration_date'])); ?>
        <td class="text-center"><?php echo $newDate ?></td>
        <td class="text-center"><?php echo $data['status']; ?></td>
        <td class="text-center"><?php echo $data['brgy_code']; ?></td>
    </tr>
        <?php $number++; 
           }
        ?>
                                                 
                                        </tbody>
                                    </table>
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