<?php  
    include('include/login-function/session.php');
    include('include/function/config.php'); 
    include('include/function/gad_function.php');  
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
                            <div class="col-md-offset-2">
                            </div>
                            <div class="col-md-8">
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left">
                                      <h2 class="text-center">Add Form</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-offset-2">
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
                        <strong>GAD PLAN RECORD</strong>
                    </div>
                    <div class="card-body card-block">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="gissue" class="form-control-label">GENDER ISSUE OR GAD MANDATE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="gissue" name="gissue" class="form-control" >
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="gprogram" class=" form-control-label">GAD PROGRAM/PROJECT/ACTIVITY (PPA)</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="gprogram" name="gprogram"  class="form-control" >
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="performance" class=" form-control-label">PERFORMANCE TARGET AND INDICATOR</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="performance" name="performance"  class="form-control" >
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="accomplishment" class=" form-control-label">ACCOMPLISHMENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="accomplishment" name="accomplishment"  class="form-control" >
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="budget" class=" form-control-label">APPROVED GAD BUDGET</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="budget" name="budget" class="form-control" >
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="actualcost" class=" form-control-label">ACTUAL COST OR GAD EXPENDITURE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="actualcost" name="actualcost"  class="form-control" >
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">VARIANCE OR REMARKS</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="remarks" name="remarks"  class="form-control" >
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">YEAR</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required>
                <option value="" selected="true" disabled="disabled">Please Select Year</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
               </select>
            </div>
        </div>
        <div class="card-footer">
		    <button type="submit" class="btn btn-primary btn-sm" name="addbdrrmfA">
		        <i class="fa fa-dot-circle-o"></i> ADD A
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

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?> 
