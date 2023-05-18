<?php 
      include('include/login-function/session.php');
      include('include/function/config.php');
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
                            <div class="col-md-7">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                      <h3 class="text-center">GAD RECORD PLAN</h3>
                                    </div>
                                </div>
                            </div>
                            
            <div class="col-md-5">
                <form class="form-header" action="" method="POST">
                    <select name="year" class="form-control" required>
                        <option value="" selected="select" disabled="disabled" class="form-control">Filter by  Year</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        option
                    </select>
                    <button class="au-btn--submit" type="submit" name="searchfilter">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                </div>
            </div>
                    </div>
                </div>
            </section>
<?php //include("include/modal/gad_delete.php"); ?>
              <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right mr-3 ">
                                     <a href="gad.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add</i></a>
                                </div>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-bordered table-striped table-wrapper-scroll-y">
            <thead class="bg-dark text-white" style="font-size: 13px;">
                <tr>
                    <th class="text-center">GENDER ISSUE OR GAD MANDATE</th>
                    <th class="text-center">GAD PROGRAM/PROJECT/ACTIVITY (PPA)</th>
                    <th class="text-center">PERFORMANCE TARGET AND INDICATOR</th>
                    <th class="text-center">ACCOMPLISHMENT</th>
                    <th class="text-center">APPROVED GAD BUDGET</th>
                    <th class="text-center">ACTUAL COST OR GAD EXPENDITURE</th>
                    <th class="text-center">VARIANCE OR REMARKS</th>
                    <th class="text-center">YEAR</th>
                    <th class="text-center">REMOVE</th>
                    <th class="text-center">UPDATE</th>
                </tr>
            </thead>
            <tbody>
            <?php 
// $date = date("Y");
// $MYsql = "SELECT * FROM `bdrrmf_a_tbl` WHERE `year` = ?";
// $MYstmt = $db->prepare($MYsql);
// $MYstmt->bind_param('i',$date);
// $MYstmt->execute();
// $Result = $MYstmt->get_result();

//     if (isset($_POST['searchfilter']) && !empty($_POST['year']))
//         {   
//             $year = $_POST['year'];
//             $MYsql = "SELECT * FROM `bdrrmf_a_tbl` WHERE `year` = ?";
//             $MYstmt = $db->prepare($MYsql);
//             $MYstmt->bind_param('i',$year);
//             $MYstmt->execute();
//             $Result = $MYstmt->get_result();
//         }

//  while ($data = $Result->fetch_assoc())
// {
?>
    <tr>
        <td><?php// echo $data['aipcode']; ?></td>
        <td><?php// echo $data['program']; ?></td>
        <td><?php// echo $data['implementoffice']; ?></td> 
        <td><?php// echo $data['starteddate']; ?></td>
        <td><?php// echo $data['completiondate']; ?></td>
        <td><?php// echo $data['expectedoutput']; ?></td>
        <td><?php// echo $data['fundsource']; ?></td> 
        <td><?php// echo $data['year']; ?></td>
        <td><a class="btn btn-danger btn-sm btnsgad" href="javascript:void(0)" rel="<?php //echo $data['id'] ?>">Remove</a></td>
      <td><a class="btn btn-primary btn-sm" href="gad_update.php?gadrecord=<?php// echo $data['id'] ?>"">Update</a></td>
    </tr>
<?php //} ?>
                </tbody>
                </table>
                        
        </div>
    </div>
</div>    
  

<div class="row">
    <div class="col-md-12">
        <form action="report_printing.php" method="POST" >
        <input type="hidden" id="print" name="prints"  class="form-control" value="gad">
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" name="print">
                    <i class="zmdi zmdi-print">Print</i>
                </button>
            </div>
        </form>
    </div>
</div>
          
                                <!-- END DATA TABLE -->
                        <div class="row mt-3">
                            <div class="col-md-12 p-0">
                                <div class="copyright bg-light">
                                     <p>Copyright © <?php echo date("Y") ?> Maragondon Cavite. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
    </div>

<!-- <script>
    $(document).ready(function(){
        $(".btnsbdrrmfa").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "bdrrmf.php?recorda="+ id +" ";
            $(".bdrrmf_delete_link").attr("href", deleteurl);
            $("#myModalbdrrmf").modal('show');
        });

         $(".btnsbdrrmfb").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "bdrrmf.php?recordb="+ id +" ";
            $(".bdrrmf_delete_link").attr("href", deleteurl);
            $("#myModalbdrrmf").modal('show');
        });
    });
</script> -->

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>