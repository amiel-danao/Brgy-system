<?php 
      include('include/login-function/session.php');        
      include('include/function/config.php'); 

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
                                      <h2 class="text-center">ELECTED OFFICIALS LIST</h2>
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
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center" width="40%">FULL NAME</th>
                            <th class="text-center" width="30%">POSITION</th>
                            <th class="text-center" width="30%">PICTURE</th>  
                            <th class="text-center">ACTION</th>   
                        </tr>
                    </thead>
                    <tbody>
        
<?php 
 $sql = "SELECT * FROM `maragondon_official_tbl`";
 $stmtd = $db->prepare($sql);
 $stmtd->execute();
 $data = $stmtd->get_result();
    while ($row = $data->fetch_assoc()) {
  ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td class="text-center"><?php echo $row['full_name']; ?></td>
    <td class="text-center"><?php echo $row['position'];?></td>
    <td class="w-25" align="center" valign="center"><a rel="facebox" href="edit_gov_image.php?gov_image_id=<?php echo $row['id'] ?>"><img 
    src="gov_image/<?php echo $Picture = !empty($row['picture']) ? $row['picture'] :'default-image.png'; ?>" class="w-75"></a></td>
   
    <td>
    <a href="edit_government_official.php?gov_id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
</tr>
<?php } ?>

                    </tbody>
                </table>
                                </div>
                            </div>
                        </div>    

        <!--<div class="card-footer">-->
        <!--    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-street-view" aria-hidden="true"></i> View Organizational Chart</a>-->
        <!--</div>-->
               
                                <!-- END DATA TABLE -->
            <?php include('include/admin/footer2.php'); ?>
                    </div>
                </div>
            </div>
      
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>