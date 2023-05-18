<?php  
    include('include/login-function/session.php');
    include('include/function/config.php');  
    include('include/function/kp_function.php');  
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
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left  mx-auto">
                                      <h2 class="text-center text-uppercase">KP Add Form</h2>
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
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="criminal" class="form-control-label">CRIMINAL (2a.1)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="criminal" name="criminal"  class="form-control" maxlength="3">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="civil" class=" form-control-label">CIVIL (2a.2)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="civil" name="civil"  class="form-control" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="others" class=" form-control-label">OTHERS (2a.3)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="others" name="others"  class="form-control" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="totala" class=" form-control-label">TOTAL (2a.4)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="totala" name="totala"  class="form-control" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="mediation" class=" form-control-label">MEDIATON (2b.1)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="mediation" name="mediation"  class="form-control" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="conciliation" class=" form-control-label">CONCILIATION (2b.2)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="conciliation" name="conciliation"  class="form-control" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="arbitration" class=" form-control-label">ARBITRATION (2b.3)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="arbitration" name="arbitration"  class="form-control" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="totalb" class=" form-control-label">TOTAL (2b.4)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="totalb" name="totalb"  class="form-control" maxlength="3">
               
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="repudiated" class=" form-control-label">REPUDIATED CASES (2c.1)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="repudiated" name="repudiated"  class="form-control" maxlength="3">
            </div>
        </div>

           <div class="row form-group">
            <div class="col col-md-4">
                <label for="withdraw" class=" form-control-label">WITHDRAWN CASES (2c.2)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="withdraw" name="withdraw"  class="form-control" maxlength="3">
            </div>
        </div>

           <div class="row form-group">
            <div class="col col-md-4">
                <label for="pending" class=" form-control-label">PENDING CASES (2c.3)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="pending" name="pending"  class="form-control" maxlength="3">
            </div>
        </div>

           <div class="row form-group">
            <div class="col col-md-4">
                <label for="dismissed" class=" form-control-label">DISMISSED CASES (2c.4)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="dismissed" name="dismissed"  class="form-control" maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="certified" class=" form-control-label">CERTIFIED CASES (2c.5)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="certified" name="certified"  class="form-control" maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="refferedconcern" class=" form-control-label">REFFERED TO CONCERNED AGENCIES CASES (2c.6)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="refferedconcern" name="refferedconcern"  class="form-control" maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="totalc" class=" form-control-label">TOTAL (2c.7)</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="totalc" name="totalc"  class="form-control" maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="estimated" class=" form-control-label">ESTIMATED GOVERNMENT SAVINGS</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="estimated" name="estimated"  class="form-control" maxlength="20">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="month" class=" form-control-label">MONTH</label>
            </div>
            <div class="col-12 col-md-4">
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
            <div class="col-12 col-md-4">
               <select name="year" id="year" class="form-control-md form-control" required="required">
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
		    <button type="submit" class="btn btn-primary btn-sm" name="addkp" value="ADD">
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

        $("#criminal,#civil,#others,#totala,#mediation,#conciliation,#arbitration,#totalb,#repudiated,#withdraw,#pending,#dismissed,#certified,#refferedconcern,#totalc").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

    }); 

</script>