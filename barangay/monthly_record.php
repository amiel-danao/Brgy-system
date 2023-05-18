<?php  
      include('include/login-function/session.php'); 
      include('include/function/config.php'); 
      include('include/function/monthly_function.php');
      //$brgycode = "BC2";
      include('include/admin/header.php');
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
                                      <h2 class="text-center">MONTHLY ACCOMPLISHMENT RECORD</h2>
                                    </div>
                                </div>
                            </div>
                            
         
        </div>
                    </div>
                </div>
    </section>

    <section class="mt-3">
        <div class="col-md-6 mx-auto">
                <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <select name="month_record" class="form-control" >
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
                <select name="year_record" class="form-control">
                    <option value="" selected="select" disabled="disabled" class="form-control">Filter by  Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    option
                </select>
                    <button class="au-btn--submit" type="submit" name="searchmonthly">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
    </section>
<?php
 include("include/modal/monthly_part1_delete.php");
 include("include/modal/monthly_part2_delete.php"); 
 include("include/modal/monthly_part3_delete.php"); 
 ?>

              <div class="main-contents m-t-10">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left mr-3 mb-2">
                                     <a href="monthly_part1.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                                </div>
                            </div>
                        </div>
<?php 
date_default_timezone_set('Asia/Manila'); 
$date = date("Y");
// $MYsql1 = "SELECT * FROM `monthly_p1_tbl` WHERE `year` = ? AND `brgy_code`=? ORDER BY `id`";
$MYsql1 = "SELECT * FROM `monthly_p1_tbl` WHERE `brgy_code`=? ORDER BY `year` DESC";
$mystmt1 = $db->prepare($MYsql1);
$mystmt1->bind_param('s',$brgycode);
$mystmt1->execute();
$result = $mystmt1->get_result();

if(isset($_POST['searchmonthly']) && !empty($_POST['month_record']) && !empty($_POST['year_record']) )
    {
        $month1 = $_POST['month_record'];
        $year1 = $_POST['year_record'];
        $MYsql1 = "SELECT * FROM `monthly_p1_tbl` WHERE `month` = ? AND `year` = ? AND `brgy_code`=? ORDER BY `id`";
        $mystmt1 = $db->prepare($MYsql1);
        $mystmt1->bind_param('sis',$month1,$year1,$brgycode);
        $mystmt1->execute();
        $result = $mystmt1->get_result();
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-bordered table-striped tables-wrapper-scroll-y">
    <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th class="text-center" colspan="19">PROJECT / ACTIVITIES UNDERTAKEN</th>
        </tr>
    </thead>
                <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                    <tr>
                <th class="text-center" width="25%">NAME / DESCRIPTION OFPROJECTS ACTIVITIES</th>       
                <th class="text-center" width="7%">ON GOING</th>
                <th class="text-center" width="7%">COMPLETED</th>
                <th class="text-center" width="7%">STARTED DATE</th>
                <th class="text-center" width="7%">COMPLETED DATE</th>
                <th class="text-center" width="10%">PROJECT ACTIVITIES COST</th>
                <th class="text-center" width="10%">FUNDS SOURCE</th>
                <th class="text-center" width="10%">REMARKS</th>
                <th class="text-center">YEAR</th>
                <th class="text-center">REMOVE</th>   
                <th class="text-center">UPDATE</th>        
                    </tr>
                </thead>
                    <tbody>
                        <?php 
            while ($data = $result->fetch_assoc())
            {
            ?>
                <tr>
                    <td><?php echo $data['description']; ?></td>
                    <td><?php echo $data['on_going_status']; ?></td>
                    <td><?php echo $data['completed_status']; ?></td>
                    <?php   
                    $time1 = strtotime($data['started_date']);
                    $dc1 = date("F-d-Y", $time1);
                    ?>
                    <td><?php echo $dc1 ?></td>
                    <?php   
                    $time2 = strtotime($data['completed date']);
                    $dc2 = date("F-d-Y", $time2);
                    ?>
                    <td><?php echo $dc2 ?></td>
                    <td><?php echo $data['project_cost']; ?></td>
                    <td><?php echo $data['funds']; ?></td> 
                    <td><?php echo $data['remarks']; ?></td>
                      <td><?php echo $data['year']; ?></td>
                    <td><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove1" rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td>
                    <td><a href="monthly_update_report.php?part1=<?php echo $data['id'] ?>"  class="btn btn-primary btn-sm mb-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
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
                          <h3 class="text-center">Local Legislation Part 2</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left mr-3 mb-2">
                         <a href="monthly_part2.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                    </div>
                </div>
            </div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped tables-wrapper-scroll-y">
    <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th class="text-center" colspan="19">LOCAL LEGISLATION PART 2</th>
        </tr>
    </thead>
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <th class="text-center" width="25%">TITLE RESOLUTION</th>
                            <th class="text-center" width="5%">ORD. NO</th>
                            <th class="text-center" width="30%">DESCRIPTION PASSED ENACTED</th>
                            <th class="text-center" width="30%">REMARKS ACTION TAKEN</th>
                            <th class="text-center" width="10%">TYPE</th>
                            <th class="text-center">NO</th>
                            <th class="text-center">DATE CONDUCTED</th>
                            <th class="text-center">NO. OF PRESENT</th>
                            <th class="text-center">NO. OF ABSENT</th>
                            <th class="text-center">YEAR</th>
                            <th class="text-center">REMOVE</th>
                            <th class="text-center">UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
<?php 

$date = date("Y");
// $MYsql2 = "SELECT * FROM `monthly_p2_tbl` WHERE `year` = ? AND `brgy_code`=? ORDER BY `id`";
$MYsql2 = "SELECT * FROM `monthly_p2_tbl` WHERE `brgy_code`=? ORDER BY `year` DESC";
$mystmt2 = $db->prepare($MYsql2);
$mystmt2->bind_param('s',$brgycode);
$mystmt2->execute();
$result2 = $mystmt2->get_result();
if(isset($_POST['searchmonthly']) && !empty($_POST['month_record']) && !empty($_POST['year_record']) )
    {
        $month2 = $_POST['month_record'];
        $year2 = $_POST['year_record'];
        $MYsql2 = "SELECT * FROM `monthly_p2_tbl` WHERE `month` = ? AND `year` = ? AND `brgy_code`=? ORDER BY `id`";
        $mystmt2 = $db->prepare($MYsql2);
        $mystmt2->bind_param('sis',$month2,$year2,$brgycode);
        $mystmt2->execute();
        $result2 = $mystmt2->get_result();
    }
     while ($data = $result2->fetch_assoc())
            {
?>
                <tr>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['order_no']; ?></td>
                    <td><?php echo $data['description']; ?></td>
                    <td><?php echo $data['remarks']; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td><?php echo $data['no']; ?></td>
                    <?php   
                    $time3 = strtotime($data['date_conducted']);
                    $dc3 = date("F-d-Y", $time3);
                    ?>
                    <td><?php echo $dc3 ?></td>
                    <td><?php echo $data['no_present']; ?></td> 
                    <td><?php echo $data['no_absent']; ?></td>
                    <td><?php echo $data['year']; ?></td>
                    <td><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove2" rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td>
                    <td><a href="monthly_update_report.php?part2=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm mb-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
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
                          <h3 class="text-center">Katarungan pambarangay Part 3</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left mr-3 mb-2">
                         <a href="monthly_part3.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                    </div>
                </div>
            </div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped tables-wrapper-scroll-y">
    <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th class="text-center" colspan="19">KATARUNGAN PAMBARANGAY PART 3</th>
        </tr>
    </thead>
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <th class="text-center" width="50%">DISPUTE</th>
                            <th class="text-center" width="10%">FILED</th>
                            <th class="text-center" width="10%">SETTLED</th>
                            <th class="text-center" width="10%">REFERRRED</th>
                            <th class="text-center" width="10%">WITHDRAW</th>
                            <th class="text-center">YEAR</th>
                            <th class="text-center">REMOVE</th>
                            <th class="text-center">UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

$date = date("Y");
// $MYsql3 = "SELECT * FROM `monthly_p3_tbl` WHERE `year` = ? AND `brgy_code`=? ORDER BY `id`";
$MYsql3 = "SELECT * FROM `monthly_p3_tbl` WHERE `brgy_code`=? ORDER BY `year` DESC";
$mystmt3 = $db->prepare($MYsql3);
$mystmt3->bind_param('s',$brgycode);
$mystmt3->execute();
$result3 = $mystmt3->get_result();

if(isset($_POST['searchmonthly']) && !empty($_POST['month_record']) && !empty($_POST['year_record']) )
    {
        $month3 = $_POST['month_record'];
        $year3 = $_POST['year_record'];
        $MYsql3 = "SELECT * FROM `monthly_p3_tbl` WHERE `monthly` = ? AND `year` = ? AND `brgy_code`=? ORDER BY `id`";
        $mystmt3 = $db->prepare($MYsql3);
        $mystmt3->bind_param('sis',$month3,$year3,$brgycode);
        $mystmt3->execute();
        $result3 = $mystmt3->get_result();
    }
     while ($data = $result3->fetch_assoc())
            {
            ?>
                <tr>
                    <td class="text-center"><?php echo $data['dispute']; ?></td>
                    <td class="text-center"><?php echo $data['filed']; ?></td>
                    <td class="text-center"><?php echo $data['settled']; ?></td>
                    <td class="text-center"><?php echo $data['reffered']; ?></td>
                    <td class="text-center"><?php echo $data['withdraw']; ?></td>
                    <td class="text-center"><?php echo $data['year']; ?></td>
                    <td class="text-center"><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove3" rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td> 
                    <td class="text-center"><a href="monthly_update_report.php?part3=<?php echo $data['id'] ?>"  class="btn btn-primary btn-sm mb-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Update</a></td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
                        
            </div>
        </div>
    </div> 

 <div class="row">
    <div class="col-md-12">
        <form  action="report_printing.php" method="POST" >
                   <!--      <select name="month" class="form-control" required>
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
                        </select> -->
                    <!--     <select name="year" class="form-control" required>
                            <option value="" selected="select" disabled="disabled" class="form-control">Select Year</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            option
                        </select> -->
    <input type="hidden" id="print" name="prints"  class="form-control" value="monthly">
        <div class="card-footer">
            <button class=" btn-primary btn " type="submit" name="print">
                <i class="zmdi zmdi-print"></i> Print
            </button>
        </div>
    </form>
    </div>
     <div class="col-md-3">
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
        $(".btnremove1").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "monthly_record.php?records1="+ id +" ";
            $(".monthly1_delete_link").attr("href", deleteurl);
            $("#myModalmonthly1").modal('show');
        });

         $(".btnremove2").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "monthly_record.php?records2="+ id +" ";
            $(".monthly1_delete_link").attr("href", deleteurl);
            $("#myModalmonthly1").modal('show');
        });

        $(".btnremove3").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "monthly_record.php?records3="+ id +" ";
            $(".monthly1_delete_link").attr("href", deleteurl);
            $("#myModalmonthly1").modal('show');
        });
    });
</script>