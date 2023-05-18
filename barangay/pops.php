<?php  
    include('include/login-function/session.php');
    include('include/function/config.php');  
    include('include/function/pops_function.php');  
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
                                      <h2 class="text-center text-uppercase">pops Add Form</h2>
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
                                        <strong>POPS A. PEACE AND ORDER / B. PUBLIC SAFETY INFORMATION</strong>
                                    </div>
                                    <div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="ppsa" class="form-control-label">PPSA</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="ppsa" name="ppsa" class="form-control" maxlength="50">
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTATING OFFICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing"  class="form-control" maxlength="100">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="sdate" class=" form-control-label">STARTED DATE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="sdate" name="sdate"  class="form-control" maxlength="30">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="cdate" class=" form-control-label">COMPLETED DATE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cdate" name="cdate"  class="form-control" maxlength="30">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="expectedoutput" class=" form-control-label">EXPECTED OUTPUT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="expectedoutput" name="expectedoutput"  class="form-control" maxlength="100">
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="funding" class=" form-control-label">POSSIBLE FUNDING SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="funding" name="funding"  class="form-control" maxlength="70">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="pservice" class="form-control-label">PERSONAL SERVICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="pservice" name="pservice" class="form-control" maxlength="10">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="mooe" class=" form-control-label">MOOE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="mooe" name="mooe"  class="form-control" maxlength="10">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="capital" class=" form-control-label">CAPITAL OUTLAY</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="capital" name="capital"  class="form-control" maxlength="10">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="total" class=" form-control-label">TOTAL</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="total" name="total"  class="form-control" maxlength="10">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="title" class=" form-control-label">TITLE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="title" name="title" class="form-control" maxlength="70">
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">YEAR</label>
            </div>
            <div class="col-12 col-md-8">
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
		    <button type="submit" class="btn btn-primary btn-sm" name="addpopsA">
		        <i class="fa fa-plus" aria-hidden="true"></i> ADD A PEACE AND ORDER
		    </button>
            <button type="submit" class="btn btn-primary btn-sm pull-right" name="addpopsB">
                <i class="fa fa-plus" aria-hidden="true"></i> ADD B PUBLIC SAFETY
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
    $("#pservice,#mooe,#capital,#total").on("keypress keyup blur",function (event) {
    //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g,''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
        }
        });
    }); 

</script>
