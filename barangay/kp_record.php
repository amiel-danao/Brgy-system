<?php 
      include('include/login-function/session.php');
      include('include/function/config.php');  
      include('include/function/kp_function.php');
      include('include/admin/header.php'); 
      //$brgycode = "BC2";
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
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">Karapatang Pambarangay Record</h2>
                                    </div>
                                </div>
                            </div>
                            
          <!--   <div class="col-md-6">
                <form class="form-header" action="" method="POST">
                    <select name="month" class="form-control" >
                        <option value="" selected="true" disabled="disabled">Filter By Month</option>
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
                <select name="year" class="form-control">
                    <option value="" selected="select" disabled="disabled" class="form-control">Filter by  Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    option
                </select>
                    <button class="au-btn--submit" type="submit" name="searchkp">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div> -->


        </div>
                    </div>
                </div>
    </section>

    <section class="mt-3">
          <div class="col-md-6 mx-auto">
                <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <select name="month" class="form-control" >
                        <option value="" selected="true" disabled="disabled">Filter By Month</option>
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
                <select name="year" class="form-control">
                    <option value="" selected="select" disabled="disabled" class="form-control">Filter by  Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    option
                </select>
                    <button class="au-btn--submit" type="submit" name="searchkp">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
    </section>
<?php
         include("include/modal/kp_delete.php");
         include("include/modal/kp_vawc_delete.php"); 
 ?>
<?php 
date_default_timezone_set('Asia/Manila'); 
$date = date("Y");
$MYsql = "SELECT * FROM `kp_tbl_c1` WHERE `brgy_code` =? ORDER BY `year` DESC";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('s',$brgycode);
$MYstmt->execute();
$Result = $MYstmt->get_result();

if(isset($_POST['searchkp'] ,$_POST['month'] , $_POST['year']) && !empty($_POST['month']) &&
 !empty($_POST['year'])) 
{
    $keyword1 = $_POST['month'];
    $keyword2 = $_POST['year'];
    $MYsql = "SELECT * FROM `kp_tbl_c1` WHERE `month` LIKE ? AND `year` = ? AND `brgy_code` =? ";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('sis',$keyword1,$keyword2,$brgycode);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
}
 ?>

              <div class="main-contents m-t-10">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left mr-3 mb-2 ">
                                     <a href="kp.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                                </div>
                            </div>
                        </div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-bordered table-striped tables-wrapper-scroll-y">
                <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                <tr>
                    <th class="text-center" colspan="20">KP</th>
                </tr>
            </thead>
                <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                    <tr>
                <th class="text-center">MONTH</th>       
                <th class="text-center">YEAR</th>   
                <th class="text-center">CRIMINAL (2a.1)</th>
                <th class="text-center">CIVIL (2a.2)</th>
                <th class="text-center">OTHERS (2a.3)</th>
                <th class="text-center">TOTAL (2a.4)</th>
                <th class="text-center">MEDIATON (2b.1)</th>
                <th class="text-center">CONCILIATION (2b.2)</th>
                <th class="text-center">ARBITRATION (2b.3)</th>
                <th class="text-center">TOTAL (2b.4)</th>
                <th class="text-center">REPUDIATED CASES (2c.1)</th>
                <th class="text-center">WITHDRAWN CASES (2c.2)</th>
                <th class="text-center">PENDING CASES (2c.3)</th>
                <th class="text-center">DISMISSED CASES (2c.4)</th>
                <th class="text-center">CERTIFIED CASES (2c.5)</th>
                <th class="text-center">REFFERED TO CONCERNED AGENCIES CASES (2c.6)</th>
                <th class="text-center">TOTAL (2c.7)</th>    
                <th class="text-center">ESTIMATED GOVERNMENT SAVINGS (in PhP) 9,500.00*(3)</th> 
                <th class="text-center">REMOVE</th>   
                <th class="text-center">UPDATE</th>        
                    </tr>
                </thead>
                    <tbody>
            <?php 
            while ($data = $Result->fetch_assoc())
            {
            ?>
                <tr>
                    <td class="text-center"><?php echo $data['month']; ?></td>
                     <td><?php echo $data['year']; ?></td>
                    <td class="text-center"><?php echo $data['criminal(2a.1)']; ?></td>
                    <td><?php echo $data['civil(2a.2)']; ?></td>
                    <td><?php echo $data['others(2a.3)']; ?></td>
                    <td><?php echo $data['totals(2a.4)']; ?></td>
                    <td><?php echo $data['mediation_(2b.1)']; ?></td>
                    <td><?php echo $data['concillation_(2b.2)']; ?></td>
                    <td><?php echo $data['arbitrition_(2b.3)']; ?></td> 
                    <td><?php echo $data['total_(2b.4)']; ?></td>
                    <td><?php echo $data['repudiated_cases_(2c.1)']; ?></td>
                    <td><?php echo $data['withdrawn_cases_(2c.2)']; ?></td>
                    <td><?php echo $data['pending_cases_(2c.3)']; ?></td>
                    <td><?php echo $data['dismissed_cases_(2c.4)']; ?></td>
                    <td><?php echo $data['certified_cases_(2c.5)']; ?></td> 
                    <td><?php echo $data['reffered_agencies_(2c.6)']; ?></td>
                    <td><?php echo $data['total_(2c.7)']; ?></td>
                    <td><?php echo $data['estimated_savings']; ?></td>
                    <td><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove" rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a>
                    </td>
                    <td><a href="kp_update.php?record=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
                </tr>
            <?php } ?>
                </tbody>
            </table>           
        </div>  
    </div>
</div>  

<!-- <div class="row">
    <section class="au-breadcrumb m-t-0 w-100 mb-2">
        <div class="section__content section__content--p30">
            <div class="container-fluid">    
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                          <h3 class="text-center">Karapatang Pambarangay Record (VAWC)</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> -->


    <?php 

$date = date("Y");
$MYzql = "SELECT * FROM `kp_tbl_c2` WHERE `brgy_code` =? ORDER BY `year` DESC";
$MYstmt = $db->prepare($MYzql);
$MYstmt->bind_param('s',$brgycode);
$MYstmt->execute();
$Result = $MYstmt->get_result();

if(isset($_POST['searchkp'] ,$_POST['month'] , $_POST['year']))
{
    $keyword3 = $_POST['month'];
    $keyword4 = $_POST['year'];
    $MYzql = "SELECT * FROM `kp_tbl_c2` WHERE `month` LIKE ? AND `year` = ? AND `brgy_code` =? ";
    $MYstmt = $db->prepare($MYzql);
    $MYstmt->bind_param('sis',$keyword3,$keyword4,$brgycode);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
}
 ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left mr-3 mb-2">
                         <a href="kp_vawc.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                    </div>
                </div>
            </div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped tables-wrapper-scroll-y">
            <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                <tr>
                    <th class="text-center" colspan="19">(VAWC)</th>
                </tr>
            </thead>
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <th class="text-center">MONTH</th>
                             <th class="text-center">YEAR</th>
                            <th class="text-center">PHYSICAL ABUSE</th>
                            <th class="text-center">SEXUAL ABUSE</th>
                            <th class="text-center">PHSYCHOLOGICAL ABUSE</th>
                            <th class="text-center">ECONOMIC ABUSE</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center">REFERRED TO DSWD</th>
                            <th class="text-center">REFERRED TO PNP</th>
                            <th class="text-center">REFERRED TO COURT</th>
                            <th class="text-center">ISSUED BPOs</th>
                            <th class="text-center">REFERRED TO MEDICAL</th>
                            <th class="text-center">TOTAL NO. OF VAWC CASES ACTED UPON</th>
                            <th class="text-center">TRAINING</th>
                            <th class="text-center">IEC</th>
                            <th class="text-center">FUNDS ALLOCATION</th>
                            <th class="text-center">REMARKS</th>
                            <th class="text-center">REMOVE</th>
                            <th class="text-center">UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
                          <?php 
            while ($datacollect = $Result->fetch_assoc())
                {
                 ?>
                <tr>
                    <td class="text-center"><?php echo $datacollect['month']; ?></td>
                    <td><?php echo $datacollect['year']; ?></td>
                    <td><?php echo $datacollect['physical_abuse']; ?></td>
                    <td><?php echo $datacollect['sexual_abuse']; ?></td>
                    <td><?php echo $datacollect['physcological_abuse']; ?></td>
                    <td><?php echo $datacollect['economic_abuse']; ?></td>
                    <td><?php echo $datacollect['total']; ?></td>
                    <td><?php echo $datacollect['refferred_dswdo']; ?></td>
                    <td><?php echo $datacollect['refferred_pnp']; ?></td> 
                    <td><?php echo $datacollect['refferred_court']; ?></td>
                    <td><?php echo $datacollect['issued_bpo']; ?></td>
                    <td><?php echo $datacollect['refferred_medical']; ?></td>
                    <td><?php echo $datacollect['total_vawc_case']; ?></td>
                    <td><?php echo $datacollect['training']; ?></td>
                    <td><?php echo $datacollect['iec']; ?></td> 
                    <td><?php echo $datacollect['funds_allocated']; ?></td>
                    <td><?php echo $datacollect['funds_remarks']; ?></td>
                    <td><a href="javascript:void(0)" class="btn btn-danger btn-sm mb-1 butonz" rel="<?php echo $datacollect['id'] ?>"><i class="fa fa-times"></i> Remove</a></td>
                    <td><a href="kp_vawc_update.php?record=<?php echo $datacollect['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
                        
            </div>
        </div>
    </div> 
 <div class="row">
 
    <div class="col-md-12">
        <form action="report_printing.php" method="POST" >
     <!--        <select name="month" class="form-control" required>
                <option value="" selected="true" disabled="disabled">select Month</option>
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
            <select name="year" class="form-control" required>
                <option value="" selected="select" disabled="disabled" class="form-control">Select Year</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                option
            </select> -->
            <input type="hidden" id="print" name="prints"  class="form-control" value="kp">
            <div class="card-footer">
              <button class="btn btn-primary" type="submit" name="print">
                <i class="zmdi zmdi-print"> Print</i>
            </button>
        </div>
        </form>
    </div>
<!--      <div class="col-md-3">
    </div> -->
</div>
                                <!-- END DATA TABLE -->
            <?php include('include/admin/footer2.php'); ?>
            
                    </div>
                </div>
            </div>
      
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $(".btnremove").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "kp_record.php?records="+ id +" ";
            $(".kp_delete_link").attr("href", deleteurl);
            $("#myModalkp").modal('show');
        });


        $(".butonz").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "kp_record.php?recordz="+ id +" ";
            $(".kpvawc_delete_link").attr("href", deleteurl);
            $("#myModalkpvawc").modal('show');
        });
    });
</script>