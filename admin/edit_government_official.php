<?php  
    include('include/login-function/session.php');        
    include('include/function/config.php'); 
     include('include/function/gov_official_function.php');

    if(isset($_GET['gov_id']))
        {
            $gov_id = $_GET['gov_id'];
            $sql = "SELECT * FROM `maragondon_official_tbl` WHERE `id` = ?";
            $stmtd = $db->prepare($sql);
            $stmtd->bind_param('i',$gov_id);
            $stmtd->execute();
            $stmtd->bind_result($id,$fname,$position,$picture);
            $stmtd->fetch();
            $stmtd->close();
        }
?>

<?php include('include/admin/header.php'); ?>
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
                                      <h2 class="text-center">UPDATE FORM</h2>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </section>

<?php 
 
  ?>
 <div class="main-contents m-t-30">
    <div class="section__content section__content--p20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Government Official</strong>
                        </div>
                        <div class="card-body card-block">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
 
    <input type="hidden" name="government_id" value="<?php echo $id ?>">
    
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Fnamet" class=" form-control-label">Full Name</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="Fname" name="Fname"  class="form-control" required="required"
                value="<?php echo $fname ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="Position" class=" form-control-label">Position</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="Position" id="Position" class="form-control-md form-control" required="required">
                    <option value="<?php echo $position ?>"><?php echo $position ?></option>
                    <option value="Mayor">Mayor</option>
                    <option value="Vice Mayor">Vice Mayor</option>
                    <option value="Councilor">Councilor</option>
                    <option value="LNB President">LNB President</option>
                </select>
            </div>
        </div>

         <!--    <div class="row form-group">
                <div class="col col-md-3">
                    <label for="gov_official_image" class="form-control-label">Browse Image</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="gov_official_image" name="gov_official_image" class="form-control" required value="" accept="image/png,image/gif,image/jpeg" >
                </div>
            </div> -->
        
    
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="updategovernmentofficial">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE ELECTED OFFICIAL
            </button>
        </div>

    </form>
                                    </div>
                                </div>
                            </div>
          
                    </div>
                    
            <?php include('include/admin/footer2.php'); ?>
                </div>
            </div>
    </div>
<?php include('include/admin/footer.php'); ?>