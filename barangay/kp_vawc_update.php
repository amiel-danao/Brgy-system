<?php  
    include('include/login-function/session.php');
    include('include/function/config.php');   
    include('include/function/kp_function.php');

// if (!isset($_GET['record']) && $_GET['record'] == null)
//     {
//         header("Location: kp_record.php");
//     }

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
                                <div class="au-breadcrumb-content ">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">VAWC Update Form</h2>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>
<?php 

if (isset($_GET['record']))
    {
        $keyword = $_GET['record'];
        $MYsql = "SELECT * FROM `kp_tbl_c2` WHERE `id` = ? ";
        $MYstmt = $db->prepare($MYsql);
        $MYstmt->bind_param('i',$keyword);
        $MYstmt->execute();
        $MYstmt->bind_result($id,$physical,$sexual_abuse,$physcological_abuse,
            $economic_abuse,$total,$refferred_dswdo,$refferred_pnp,$refferred_court,
            $issued_bpo,$refferred_medical,$total_vawc_case,$training,$iec,$funds_allocated,
            $funds_remarks,$month,$year,$brgycode);
        $MYstmt->fetch();
        $MYstmt->close();
         // while ($datacollect = $Result->fetch_assoc())
         //    {
         //        $id = $datacollect['id'];
         //        $physical = $datacollect['physical_abuse'];
         //        $sexual_abuse = $datacollect['sexual_abuse'];
         //        $physcological_abuse = $datacollect['physcological_abuse'];
         //        $economic_abuse = $datacollect['economic_abuse'];
         //        $total = $datacollect['total'];
         //        $refferred_dswdo = $datacollect['refferred_dswdo'];
         //        $refferred_pnp = $datacollect['refferred_pnp'];
         //        $refferred_court = $datacollect['refferred_court'];
         //        $issued_bpo = $datacollect['issued_bpo'];
         //        $refferred_medical = $datacollect['refferred_medical'];
         //        $total_vawc_case = $datacollect['total_vawc_case'];
         //        $training = $datacollect['training'];
         //        $iec = $datacollect['iec'];
         //        $funds_allocated = $datacollect['funds_allocated'];
         //        $funds_remarks = $datacollect['funds_remarks'];
         //        $month = $datacollect['month'];
         //        $year = $datacollect['year'];
         //    }
    }
 ?>
             <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>VAWC Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
    <input type="hidden" id="ID" name="ID"  class="form-control" value="<?php echo $id ?>">
    <input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode?>">
            <div class="col col-md-4">
                <label for="physical" class="form-control-label">PHYSICAL ABUSE</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="physical" name="physical"  class="form-control" value="<?php echo $physical ?>" maxlength="3">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="sexual" class=" form-control-label">SEXUAL ABUSE</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="sexual" name="sexual"  class="form-control" value="<?php echo $sexual_abuse ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="phsychological" class=" form-control-label">PHSYCHOLOGICAL ABUSE</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="phsychological" name="phsychological"  class="form-control" value="<?php echo $physcological_abuse ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="economic" class=" form-control-label">ECONOMIC ABUSE</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="economic" name="economic"  class="form-control" value="<?php echo $economic_abuse ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="total1" class=" form-control-label">TOTAL</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="total1" name="total1"  class="form-control" value="<?php echo $total ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="dswd" class=" form-control-label">REFERRED TO DSWD</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="dswd" name="dswd"  class="form-control" value="<?php echo 
                $refferred_dswdo ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="pnp" class=" form-control-label">REFERRED TO PNP</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="pnp" name="pnp"  class="form-control" value="<?php echo 
                $refferred_pnp ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="court" class=" form-control-label">REFERRED TO COURT</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="court" name="court"  class="form-control" value="<?php echo 
                $refferred_court ?>" maxlength="3">
               
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="bpo" class=" form-control-label">ISSUED BPOs</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="bpo" name="bpo"  class="form-control" value="<?php echo 
                $issued_bpo ?>" maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="medical" class=" form-control-label">REFERRED TO MEDICAL</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="medical" name="medical"  class="form-control" value="<?php echo $refferred_medical ?>" maxlength="3">
            </div>
        </div>

           <div class="row form-group">
            <div class="col col-md-4">
                <label for="total_vawc" class=" form-control-label">TOTAL NO. OF VAWC CASES ACTED UPON</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="total_vawc" name="total_vawc" class="form-control" value="<?php echo $total_vawc_case ?>" maxlength="3">
            </div>
        </div>

           <div class="row form-group">
            <div class="col col-md-4">
                <label for="training" class=" form-control-label">TRAINING</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="training" name="training"  class="form-control" value="<?php echo $training ?>" maxlength="3">
            </div>
        </div>

           <div class="row form-group">
            <div class="col col-md-4">
                <label for="iec" class=" form-control-label">IEC</label>
            </div>
            <div class="col-12 col-md-4">
                <input type="text" id="iec" name="iec"  class="form-control" value="<?php echo $iec ?>"
                maxlength="3">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="funds" class=" form-control-label">FUNDS ALLOCATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="funds" name="funds"  class="form-control" value="<?php echo $funds_allocated ?>" maxlength="50">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">REMARKS</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="remarks" name="remarks"  class="form-control" value="<?php echo $funds_remarks ?>" maxlength="30">
            </div>
        </div>

       
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="month" class=" form-control-label">MONTH</label>
            </div>
            <div class="col-12 col-md-4">
               <select name="month" id="month" class="form-control-md form-control" required="required">
                <option value="<?php echo $month ?>"><?php echo $month ?></option>
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
                <option value="<?php echo $year ?>"><?php echo $year ?></option>
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
            <button type="submit" class="btn btn-primary btn-sm" name="updatevawc" value="ADD">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
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

        $("#physical,#sexual,#phsychological,#economic,#total1,#dswd,#pnp,#court,#bpo,#medical,#total_vawc,#training,#iec").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

    }); 

</script>