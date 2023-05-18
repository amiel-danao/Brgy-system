<?php 
      include('include/function/config.php');
      include('include/login-function/session.php'); 
      include('include/admin/header.php');  
?>

<?php 
 function maxyear(){
    global $db; 
    $sqlmyear = "SELECT MAX(year) FROM `abkd_tbl` WHERE `brgy_code`=? ";
    $stmtmyear = $db->prepare($sqlmyear);
    $stmtmyear->bind_param('s',$brgycode);
    $stmtmyear->execute();
    $stmtmyear->bind_result($max_year);
    $stmtmyear->fetch();
    $stmtmyear->close();
    return $max_year;
 }

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
                                <!-- <a href="#" class="ml-4">
                                    <img src="bimages/icon/Resize.png" alt="CoolAdmin" />
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
                                      <h2 class="text-center">ABKD RECORD</h2>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-3">
                 <div class="col-md-7 mx-auto">
                <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <select name="quarter" class="form-control">
                        <!--<option value="" selected="select" disabled="disabled">Filter by Quarter</option>-->
                        <option value="<?php echo isset($_POST['quarter']) ? $_POST['quarter'] : '' ?>">  <?php echo isset($_POST['quarter']) ? $_POST['quarter'] : 'Filter by Quarter' ?> quarter</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                        
                    </select>
                    <select name="year" class="form-control">
                        <!--<option value="" selected="select" disabled="disabled" class="form-control">Filter by  Year</option>-->
                 <option value="<?php echo isset($_POST['year']) ? $_POST['year'] : '' ?>"><?php echo isset($_POST['year']) ? $_POST['year'] : 'Filter by  Year' ?></option>
                <?php 
                $sqlyear = "SELECT `year` FROM `abkd_tbl` WHERE `brgy_code`=? group by `year` ";
                $stmtyear = $db->prepare($sqlyear);
                $stmtyear->bind_param('s',$brgycode);
                $stmtyear->execute();
                $rezult = $stmtyear->get_result();
                while ($data = $rezult->fetch_assoc())
                {
            ?>
             <option value="<?php echo $data['year'] ?>"><?php echo $data['year'] ?></option>
                    <?php } ?>
                        <!--<option value="2018">2018</option>-->
                        <!--<option value="2019">2019</option>-->
                        <!--<option value="2020">2020</option>-->
                        <!--<option value="2021">2021</option>-->
                        <!--<option value="2022">2022</option>-->
                        <!--<option value="2023">2023</option>-->
                    
                    </select>
                    <button class="au-btn--submit" type="submit" name="searchfilter">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
            </section>
<?php include("include/modal/abkd_delete.php"); ?>
              <div class="main-contents m-t-15">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left mr-3 mb-2">
                                     <a href="abkd.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-wrapper-scroll-y">
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <th class="text-center">QUARTER</th>
                            <th class="text-center">ORDINANCE (B1)</th>
                            <th class="text-center">FUND ALLOCATION (B2)</th>
                            <th class="text-center">DISTRIBUTION CENTER (B3)</th>
                            <th class="text-center">DISTRIBUTION OF IEC MATERIALS (C1)</th>
                            <th class="text-center">ANTI DENGUE CAMPAIGN (C2)</th>
                            <th class="text-center">CLEAN UP DRIVE (C3)</th>
                            <th class="text-center">OL TRAP SYSTEM APLLICATION (C4)</th>
                            <th class="text-center">NO.DENGUE CASES</th>
                            <th class="text-center">REMARKS</th>
                            <th class="text-center">YEAR</th>
                            <th class="text-center" width="5%">REMOVE</th>
                            <th class="text-center" width="5%">UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
date_default_timezone_set('Asia/Manila'); 
// $date = date("Y");
$date = maxyear();
//$brgycode = "BC2";
$MYsql = "SELECT * FROM `abkd_tbl` WHERE `brgy_code`=? ORDER BY `year` DESC ";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('s',$brgycode);
$MYstmt->execute();
$Result = $MYstmt->get_result();

if (isset($_POST['searchfilter']) && !empty($_POST['year']) && !empty($_POST['quarter']))
{   
    $date = $_POST['year'];
    $quarter = $_POST['quarter'];
    $MYsql = "SELECT * FROM `abkd_tbl` WHERE `year` = ? AND  `quarter` = ? AND `brgy_code`=? ";
    $MYstmt = $db->prepare($MYsql);
    $MYstmt->bind_param('iis',$date,$quarter,$brgycode);
    $MYstmt->execute();
    $Result = $MYstmt->get_result();
}

    while ($data = $Result->fetch_assoc())
        {
           $id = $data['id'];
           $quarter  = $data['quarter'];
           $ordinance = $data['ordinance(b1)'];
           $fund = $data['fund_allocation(b2)'];
           $dcenter = $data['distribution_center(b3)'];
           $dmaterials = $data['distribution_iec_material_(c1)'];
           $antidengue = $data['anti_dengue_campaign(c2)'];
           $clean = $data['clean_up_drive(c3)'];
           $trapsystem = $data['ol_trap_system_applicaton(c4)'];
           $cases = $data['number_dengue_case'];
           $remarks = $data['remarks'];
            $year = $data['year'];
?>
        <tr>
            <td><?php echo $quarter ?></td>
            <td><?php echo $ordinance ?></td>
            <td><?php echo $fund ?></td>
            <td><?php echo $dcenter ?></td>
            <td><?php echo $dmaterials ?></td>
            <td><?php echo $antidengue ?></td>
            <td><?php echo $clean ?></td> 
            <td><?php echo $trapsystem  ?></td>
            <td><?php echo $cases ?></td>
            <td><?php echo $remarks ?></td>
                <td><?php echo $year ?></td>
            <td><a class="btn btn-danger btn-sm btnsz" href="javascript:void(0)" rel="<?php echo $id ?>"><i class="fa fa-times"></i> Remove</a></td>
          <td><a class="btn btn-primary btn-sm" href="abkd_update.php?report=<?php echo $id ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
        </tr>
<?php } ?>
                </tbody>
                </table>
                        
                        </div>
<div class="row">
    <div class="col-md-12">
        <form action="report_printing.php" method="POST" > 
        <input type="hidden" id="print" name="prints"  class="form-control" value="abkd">
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="print">
                    <i class="zmdi zmdi-print"> Print</i>
                </button>
            </div>
        </form>
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

<script type="text/javascript">
    $(document).ready(function(){
        $(".btnsz").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "include/function/abkd_function.php?report="+ id +" ";
            $(".abkd_delete_link").attr("href", deleteurl);
            $("#myModalabkd").modal('show');
        });
    });
</script>