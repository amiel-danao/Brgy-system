<?php  
    include('include/login-function/session.php'); 
    include('include/function/config.php');  
    include('include/function/monthly_function.php'); 
    //$brgycode = "BC2";
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
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">montlhy Add Form</h2>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-offset-2">-->
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
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Part I Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="description" class="form-control-label">NAME / DESCRIPTION OF ACTIVITIES UNDERTAKEN</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="description" name="description"  class="form-control" maxlength="100">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="on_going" class=" form-control-label">STATUS ON GOING</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="on_going" name="on_going"  class="form-control" maxlength="30">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="completed" class=" form-control-label">STATUS COMPLETED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="completed" name="completed"  class="form-control" maxlength="30">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="started_date" class=" form-control-label">DATE STARTED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="date" id="started_date" name="started_date" class="form-control" required="required">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="completed_date" class=" form-control-label">DATE COMPLETED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="date" id="completed_date" name="completed_date" class="form-control" required="required">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="cost" class=" form-control-label">PROJECT ACTIVITIES COST</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cost" name="cost"  class="form-control" maxlength="20">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="fund" class=" form-control-label">FUND SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="fund" name="fund"  class="form-control" maxlength="35">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">REMARKS</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="remarks" name="remarks"  class="form-control" maxlength="30">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="month" class=" form-control-label">MONTH</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="month" id="month" class="form-control-md form-control" required="required">
               	<option value="" selected="true" disabled="disabled">Please select Month</option>
               <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
               </select>
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
		    <button type="submit" class="btn btn-primary btn-sm" name="addmonthly1" value="ADD">
		        <i class="fa fa-plus" aria-hidden="true"></i> ADD
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

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?> 
