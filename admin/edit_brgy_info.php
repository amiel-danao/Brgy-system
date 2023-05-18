<?php 
        include('include/login-function/session.php');         
        include('include/function/config.php'); 
        include('include/function/brgy_info_function.php');
    if(isset($_GET['edit_brgy']))
    {
        $ID =   $_GET['edit_brgy']; 
        $sql = "SELECT * FROM `brgy_code_tbl` WHERE `id`=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$ID);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($data = $result->fetch_assoc())
        {
            $id         = $data['id'];
            $brgy_name      = $data['brgy_name'];
            $address      = $data['address'];
            $brgy_code      = $data['brgy_code'];
        }
    }

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
                                      <h2 class="text-center">EDIT BARANGAY INFORMATION</h2>
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="brgyinfo_id" value="<?php echo $id ?>">
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="brgy_name" class=" form-control-label">Brgy Name</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="text-input" name="brgy_name"  class="form-control" required value="<?php echo $brgy_name ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="address" class=" form-control-label">Brgy Address</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="email-input" name="address" class="form-control" required value="<?php echo $address ?>">

        </div>
    </div>
    <fieldset disabled>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="brgy_code" class=" form-control-label">Barangay Code</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="password-input" name="brgy_code" class="form-control" required value="<?php echo $brgy_code ?>">
            </div>
        </div>
    </fieldset>
    
    <div class="card-footer">
<button type="submit" class="btn btn-success btn-sm" name="updatebrgyinfo">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
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