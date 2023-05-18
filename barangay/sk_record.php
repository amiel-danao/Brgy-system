<?php  
      include('include/login-function/session.php');
      include('include/function/config.php'); 
      include('include/function/sk_function.php'); 
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
                                      <h2 class="text-center">SK FUND RECORD</h2>
                                    </div>
                                </div>
                            </div>
                            

        </div>
                    </div>
                </div>
            </section>
    <section class="mt-3">
         <div class="col-md-4 mx-auto">
                <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <select name="yearrecord" class="form-control" >
                        <option value="" selected="select" disabled="disabled" class="form-control">Filter by  Year</option>
             <?php 

                $sqlyear = "SELECT `year` FROM `sk_tbl` WHERE `brgy_code`=? group by `year` ";
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
                    <button class="au-btn--submit" type="submit" name="searchrecord">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
    </section>
<?php include("include/modal/sk.php"); ?>
              <div class="main-contents m-t-15">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left mr-3 mb-2">
                                     <a href="sk.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-wrapper-scroll-y">
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">

                        <tr>
                            <th class="text-center" width="20%">GAP/ISSUES</th>
                            <th class="text-center" width="30%">PROGRAMS/PROJECTS/ACTIVITIES</th>
                            <th class="text-center" width="15%">RESULT TARGET/BENEFICIARIES</th>
                            <th class="text-center" width="10%">AMOUNT</th>
                            <th class="text-center" width="10%">SOURCE</th>
                            <th class="text-center" width="10%">PERIOD OF IMPLEMENTATION</th>
                             <th class="text-center">YEAR</th>
                            <th class="text-center">REMOVE</th>
                            <th class="text-center">UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
date_default_timezone_set('Asia/Manila'); 
$date = date("Y");
// $MYsql = "SELECT * FROM `sk_tbl` WHERE `year` = ? AND `brgy_code`= ?";
 $MYsql = "SELECT * FROM `sk_tbl` WHERE `brgy_code`= ? ORDER BY `year` DESC";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('s',$brgycode);
$MYstmt->execute();
$Result = $MYstmt->get_result();

if (isset($_POST['searchrecord']) && !empty($_POST['yearrecord']))
        {   
            $date = $_POST['yearrecord'];
             $MYsql = "SELECT * FROM `sk_tbl` WHERE `year` = ? AND `brgy_code`= ?";
        
            $MYstmt = $db->prepare($MYsql);
             $MYstmt->bind_param('is',$date,$brgycode);
         
            $MYstmt->execute();
            $Result = $MYstmt->get_result();
        }

 while ($data = $Result->fetch_assoc())
    {
?>
                <tr>
                    <td><?php echo $data['gap_issues']; ?></td>
                    <td><?php echo $data['p_a_d']; ?></td>
                    <td><?php echo $data['result_target']; ?></td>
                    <td><?php echo $data['amount']; ?></td> 
            
                    <td><?php echo $data['source']; ?></td>
                    <td><?php echo $data['implementantion']; ?></td>
                    <td><?php echo $data['year']; ?></td>
                    <td><a class="btn btn-danger btn-sm skbtn" href="javascript:void(0)" rel="<?php 
                    echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td>
                    <td><a class="btn btn-primary btn-sm" href="sk_update.php?sk_record=<?php echo $data['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
                </tr>
<?php } ?>
                </tbody>
                </table>
                        
                        </div>
<div class="row">
    <div class="col-md-12">
    <form action="report_printing.php" method="POST" >
        <input type="hidden" id="print" name="prints"  class="form-control" value="sk">
        <div class="card-footer">
              <button class="btn btn-primary" type="submit" name="print">
                <i class="fa fa-print" aria-hidden="true"> Print</i>

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
        $(".skbtn").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "sk_record.php?record="+ id +" ";
            $(".sk_delete_link").attr("href", deleteurl);
            $("#myModalssk").modal('show');
        });
    });
</script>
