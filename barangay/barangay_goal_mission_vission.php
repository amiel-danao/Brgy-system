<?php  
      include('include/login-function/session.php'); 
      include('include/function/config.php'); 
      include('include/function/barangay_g_m_v_function.php'); 
      
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
                                      <h2 class="text-center">GOAL, MISSION & VISION</h2>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            </section>

   
<?php
 include("include/modal/goal_delete.php");
 include("include/modal/mission_delete.php"); 
 include("include/modal/vision_delete.php"); 
 ?>

              <div class="main-contents m-t-10">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left mr-3 mb-2">
                                     <a href="barangay_goal.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                                </div>
                            </div>
                        </div>
<?php 

$goal = "goal";
$MYsql1 = "SELECT * FROM `brgy_info_tbl` WHERE `barangay_code`=? AND `type`=?";
$mystmt1 = $db->prepare($MYsql1);
$mystmt1->bind_param('ss',$brgycode,$goal);
$mystmt1->execute();
$result = $mystmt1->get_result();

// $MYsql1 = "SELECT * FROM `barangay_goal_tbl` WHERE `bcode`=? ";
// $mystmt1 = $db->prepare($MYsql1);
// $mystmt1->bind_param('s',$brgycode);
// $mystmt1->execute();
// $result = $mystmt1->get_result();

?>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-bordered table-striped tables-wrapper-scroll-y">
    <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th class="text-center" colspan="19">GOAL</th>
        </tr>
    </thead>
                <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                    <tr>
                <th class="text-center" width="5%">#</th>       
                <th class="text-center" width="100%">GOAL</th>
                <th class="text-center" width="15%">ACTION</th>
  
                    </tr>
                </thead>
                    <tbody>
                        <?php
                         $numberg = 1; 
            while ($data = $result->fetch_assoc())
               
            {
            ?>
                <tr>
                    <td><?php echo $numberg ?></td>
                     <!-- <td> --><?php// echo $data['goal']; ?><!-- </td> --> 
                    <td><?php echo $data['message']; ?></td>      
                    <td class="text-center"><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove1" 
                        rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td>
                </tr>
      <?php $numberg++;}
       ?>
                </tbody>
            </table>           
        </div>  
    </div>
</div>  


            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left mr-3 mb-2 ">
                         <a href="barangay_mission.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                    </div>
                </div>
            </div>

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped tables-wrapper-scroll-y">
    <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th class="text-center" colspan="19">MISSION</th>
        </tr>
    </thead>
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <th class="text-center" width="5%">#</th>       
                            <th class="text-center" width="100%">MISSION</th>
                            <th class="text-center" width="15%">ACTION</th>

                        </tr>
                    </thead>
                    <tbody>
<?php 

$mission = "mission";
$MYsql2 = "SELECT * FROM `brgy_info_tbl` WHERE `barangay_code`=? AND `type`=?";
$mystmt2 = $db->prepare($MYsql2);
$mystmt2->bind_param('ss',$brgycode,$mission);
$mystmt2->execute();
$result2 = $mystmt2->get_result();
$numberm =1;

// $MYsql2 = "SELECT * FROM `barangay_mission_tbl` WHERE `bcode`=?";
// $mystmt2 = $db->prepare($MYsql2);
// $mystmt2->bind_param('s',$brgycode);
// $mystmt2->execute();
// $result2 = $mystmt2->get_result();
// $numberm =1;
     while ($data = $result2->fetch_assoc())
            {
?>
                <tr>
                    <td><?php echo $numberm ?></td>
                     <!--  <td><?php// echo $data['mission']; ?></td> --> 
                    <td><?php echo $data['message']; ?></td>  
                    <td class="text-center"><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove2" rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td>
                
                </tr>
        <?php 
        $numberm++;
    } ?>
                </tbody>
            </table>
                        
            </div>
        </div>
    </div> 




            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left mr-3 mb-2 ">
                         <a href="barangay_vision.php" class="btn btn-primary"> <i class="zmdi zmdi-open-in-new "> Add Data</i></a>
                    </div>
                </div>
            </div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped tables-wrapper-scroll-y">
    <thead class="bg-dark text-white" style="font-size: 25px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
        <tr>
            <th class="text-center" colspan="19">VISION</th>
        </tr>
    </thead>
                    <thead class="bg-dark text-white" style="font-size: 14px; font-style: normal; font-family: Arial, Helvetica, sans-serif;">
                        <tr>
                            <th class="text-center" width="5%">#</th>       
                <th class="text-center" width="100%">VISION</th>
                <th class="text-center" width="15%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php 

$vision = "vision";
$MYsql3 = "SELECT * FROM `brgy_info_tbl` WHERE `barangay_code`=? AND `type`=?";
$mystmt3 = $db->prepare($MYsql3);
$mystmt3->bind_param('ss',$brgycode,$vision);
$mystmt3->execute();
$result3 = $mystmt3->get_result();
$numberv =1 ;

// $MYsql3 = "SELECT * FROM `barangay_vision_tbl` WHERE `bcode`=?";
// $mystmt3 = $db->prepare($MYsql3);
// $mystmt3->bind_param('s',$brgycode);
// $mystmt3->execute();
// $result3 = $mystmt3->get_result();
// $numberv =1 ;
     while ($data = $result3->fetch_assoc())
            
       {
            ?>
                <tr>
                     <td><?php echo $numberv ?></td>
                     <!--  <td><?php //echo $data['vision']; ?></td>  -->
                    <td><?php echo $data['message']; ?></td> 
                    <td class="text-center"><a href="javascript:void(0)"  class="btn btn-danger btn-sm mb-1 btnremove3" rel="<?php echo $data['id'] ?>"><i class="fa fa-times"></i> Remove</a></td> 
                </tr>
            <?php
            $numberv++;
             } ?>
                </tbody>
            </table>
                        
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
        $(".btnremove1").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "barangay_goal_mission_vission.php?deletegoal="+ id +" ";
            $(".goal_delete_link").attr("href", deleteurl);
            $("#myModalgoal").modal('show');
        });

         $(".btnremove2").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "barangay_goal_mission_vission.php?deletemission="+ id +" ";
            $(".mission_delete_link").attr("href", deleteurl);
            $("#myModalmission").modal('show');
        });

        $(".btnremove3").on('click', function(){
            var id = $(this).attr("rel");
            var deleteurl = "barangay_goal_mission_vission.php?deletevision="+ id +" ";
            $(".vision_delete_link").attr("href", deleteurl);
            $("#myModalvision").modal('show');
        });
    });
</script>