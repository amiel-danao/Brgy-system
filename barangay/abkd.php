<?php  
    include('include/login-function/session.php');
    include('include/function/config.php');
    include('include/function/abkd_function.php');   
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

            <section class="au-breadcrumb m-t-75 head">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">abkd Add Form</h2>
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
                                        <strong>ABKD Information</strong>
                                    </div>
                                    <div class="card-body card-block">
                        
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" id="bcode" name="bcode"  class="form-control" value="<?php echo 
        $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="b1" class="form-control-label">ORDINANCE (B1)</label>
            </div>
            <div class="col-12 col-md-4">
                <!-- <input type="text" id="b1" name="b1"  class="form-control" maxlength="30"> -->
                <select id="b1" name="b1" class="form-control-md form-control" required="required">
                    <option value="" selected="true" disabled="disabled">Yes / No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="b2" class=" form-control-label">FUND ALLOCATION (B2)</label>
            </div>
            <div class="col-12 col-md-4">
                <!-- <input type="text" id="b2" name="b2"  class="form-control" maxlength="30"> -->
                <select id="b2" name="b2" class="form-control-md form-control" required="required">
                    <option value="" selected="true" disabled="disabled">Yes / No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="b3" class=" form-control-label">DISTRIBUTION CENTER (B3)</label>
            </div>
            <div class="col-12 col-md-4">
                <!-- <input type="text" id="b3" name="b3"  class="form-control" maxlength="30"> -->
                <select id="b3" name="b3" class="form-control-md form-control" required="required">
                    <option value="" selected="true" disabled="disabled">Yes / No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="c1" class=" form-control-label">DISTRIBUTION OF IEC MATERIALS (C1)</label>
            </div>
            <div class="col-12 col-md-4">
               <!--  <input type="text" id="c1" name="c1"  class="form-control" maxlength="30"> -->
                <select id="c1" name="c1" class="form-control-md form-control" required="required">
                    <option value="" selected="true" disabled="disabled">Yes / No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="c2" class=" form-control-label">ANTI DENGUE CAMPAIGN (C2)</label>
            </div>
            <div class="col-12 col-md-4">
               <!--  <input type="text" id="c2" name="c2"  class="form-control" maxlength="30"> -->
                <select id="c2" name="c2" class="form-control-md form-control" required="required">
                    <option value="" selected="true" disabled="disabled">Yes / No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="c3" class=" form-control-label">CLEAN UP DRIVE (C3)</label>
            </div>
            <div class="col-12 col-md-4" required="required">
                <input type="text" id="c3" name="c3"  class="form-control" maxlength="20">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="c4" class=" form-control-label">OL TRAP SYSTEM APLLICATION (C4)</label>
            </div>
            <div class="col-12 col-md-4">
                <!-- <input type="text" id="c4" name="c4"  class="form-control" maxlength="30"> -->  
                <select id="c4" name="c4" class="form-control-md form-control" required="required">
                    <option value="" selected="true" disabled="disabled">Yes / No</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>          
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="denguecase" class=" form-control-label">NO.DENGUE CASES</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="denguecase" name="denguecase"  class="form-control" maxlength="3" required="required">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">REMARKS</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="remarks" name="remarks"  class="form-control" maxlength="20" required="required">             
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">QUARTER</label>
            </div>
        <div class="col-12 col-md-4">
           <select name="quarter" id="quarter" class="form-control-md form-control" required="required">
           	<option value="" selected="true" disabled="disabled">Please select Quarter</option>
           	<option value="1">1st</option>
           	<option value="2">2nd</option>
           	<option value="3">3rd</option>
           	<option value="4">4th</option>
           </select>   
        </div>
        </div>

            <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-4">
               <select name="year" id="year" class="form-control-md form-control" required="required">
                <option value="" selected="true" disabled="disabled">Please select Year</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
               </select>               
            </div>
</div>
           <!--  <input type="hidden" id="year" name="year" class="form-control" value="<?php /*echo date("Y") */?>">  -->
        
       
        <div class="card-footer">
		    <button type="submit" class="btn btn-primary btn-sm" name="addabkd" value="ADD">
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

        $("#denguecase").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

    }); 

</script>
