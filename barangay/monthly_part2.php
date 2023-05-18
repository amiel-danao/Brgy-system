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
                                      <h2 class="text-center text-uppercase">monthly Add Form</h2>
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
                                        <strong>KP Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="title" class="form-control-label">TITLE RESOLUTION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="title" name="title"  class="form-control" maxlength="80">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="order" class=" form-control-label">ORD. NO</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="order" name="order"  class="form-control" maxlength="20">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="description" class=" form-control-label">DESCRIPTION OF PASSED ENACTED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="description" name="description"  class="form-control" maxlength="80">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">REMARKS ACTION TAKEN</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="remarks" name="remarks"  class="form-control" maxlength="50">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="type" class=" form-control-label">TYPE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="type" name="type"  class="form-control" maxlength="50">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="number" class=" form-control-label">NO</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="number" name="number"  class="form-control" maxlength="20">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="conducted" class=" form-control-label">DATE CONDUCTED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="date" id="conducted" name="conducted"  class="form-control" >
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="present" class=" form-control-label">NO. OF PRESENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="present" name="present"  class="form-control" maxlength="5">
               
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="absent" class=" form-control-label">NO. OF ABSENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="absent" name="absent"  class="form-control" maxlength="5">
               
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
		    <button type="submit" class="btn btn-primary btn-sm" name="addmonthly2" value="ADD">
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


<script type="text/javascript">

    $(document).ready(function (){

    $("#present,#absent,#number").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    }); 

</script>
