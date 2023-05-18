<?php   
    include('include/login-function/session.php');
    include('include/function/config.php');
    include('include/function/account_function.php');

if (!isset($_GET['view_account']) && empty($_GET['view_account']))
    {
        header("Location: brgy_info.php");
    }

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
                       <!--  <div class="row"> -->
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">ACCOUNT LIST</h2>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-5">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for Residents..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div> -->

                        <!-- </div> -->
                    </div>
                </div>
            </section>
            
<?php include("include/modals/acc_delete.php"); ?> 
              <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y" style="display: table;">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">USERNAME</th>
                                                <th class="text-center">EMAIL</th>
                                                <th class="text-center">REGISTRATION DATE</th>
                                                <th class="text-center">STATUS</th>
                                                <th class="text-center">BRGY CODE</th>
                                                <th class="text-center">ACTIVATE/DEACTIVATE</th>
                                                <th class="text-center">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
if(isset($_GET['view_account']))
    {
        $brgycode = $_GET['view_account'];
        $sql = "SELECT * FROM `user_account_tbl` WHERE `brgy_code`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('s',$brgycode);
        $stmt->execute();
        $rezult = $stmt->get_result();
    }
        while ($data = $rezult->fetch_assoc())
            { 
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <?php $newDate = date("F - d - Y", strtotime($data['registration_date'])); ?>
        <td><?php echo $newDate ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><?php echo $data['brgy_code']; ?></td>
        <td class="text-center "><a href="user_account_list.php?acc_activate=<?php echo $data['id'] ?>" class="btn btn-success btn-sm">ACTIVATE</a>
            <a href="user_account_list.php?acc_deactivate=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm">DEACTIVATE</a></td>
        <td class="text-center">
        <a href="user_account_update.php?acc_update=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a>
        <a href="javascript:void(0)" rel="<?php echo $data['id'] ?>" class="btn btn-danger btn-sm btn-removeacc" id="btn-removeacc"><i class="fa fa-times"></i> Remove</a>
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
               <?php include('include/admin/footer2.php'); ?>
                        
                        
                    </div>
                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

<script>
    $(document).ready(function(){
        $(".btn-removeacc").on('click', function(){
            var accid = $(this).attr("rel");
            var delete_url = "user_account_list.php?acc_remove="+ accid +" ";
            $(".acc_delete_link").attr("href", delete_url);
            $("#myModalacc").modal('show');
        });

    });
</script>