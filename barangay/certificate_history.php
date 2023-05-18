<?php 
      include('include/login-function/session.php'); 
      include('include/function/config.php');
 if(!isset($_GET['Residents-id']))
 {
    header("Location: certificate.php");
 }
 else {
     $rid = $_GET['Residents-id'];
 }


if(isset($_POST['deletehistory']))
{
    $record_id = $_POST['residents_id'];
    $dsql = "DELETE FROM `brgy_certificate_tbl` WHERE `residents_id` = ?";
    $dstmt = $db->prepare($dsql);
    $dstmt->bind_param('i',$record_id);
        if($dstmt->execute())
        {
          $dstmt->close();
          $db->close();
          echo "<script>alert('We have Successful Delete All Record.') </script>";
          echo "<script>window.location.href = 'certificate_history.php?Residents-id={$record_id}'; </script>";
        }
        else
        {
          echo "<script>alert('Sorry We have Error Encounter.') </script>";
        }
}
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
                                <a href="#">
                                    <img src="bimages/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
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
<!-- <script>
    $(document).ready(function() {
        $('#serchajax').keyup(function(){
            var datax =  $('#serchajax').val();
$.ajax({
    url:'include/function/certificate_function.php',
    data:{datax:datax},
    type:'POST',
    success:function(data){
        if(!datax.error)
            {
                $('#certificateform').html(data);
            }
                }
            });
        });
    });
</script> -->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">RESIDENTS CERTIFICATE REQUESTING HISTORY</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

              <div class="main-contents m-t-15">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">

        <div class="row "> 
        <!-- <div class="col-md-3">
        </div>   -->
         <!--    <div class="col-md-5 mx-auto">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl form-control" type="text" name="search" id="serchajax" placeholder="Search for Residents Last Name...." />
                    <input type="hidden" name="brgycode" id="brgycode" value="<?php //echo $brgycode ?>" />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button> -->
                </form>
            </div> 
       <!--  <div class="col-md-3">
        </div> --> 
        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y mx-auto">
                    <thead>
                        <tr>
                            <th class="text-center" width="150">#</th>
                            <th class="text-center" width="150">ID</th>
                            <th class="text-center" width="350">DATE</th>
                            <th class="text-center" width="405">CERTIFICATE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
$sql = "SELECT * FROM `brgy_certificate_tbl` WHERE `residents_id` = ? ";
$stmt = $db->prepare($sql);
$stmt->bind_param('i',$rid );
$stmt->execute();
$result = $stmt->get_result();
$number = 1;
 while ($data = $result->fetch_assoc())
            {
                
 ?>
                <tr>
                    <td class="text-center"><?php echo $number ?></td>
                    <td class="text-center"><?php echo $data['residents_id']; ?></td>
                    <?php $time1 = strtotime($data['date']);
                    $request_date = date("F-d-Y", $time1); ?>
                    <td class="text-center"><?php echo $request_date ?></td>
                    <td class="text-center"><?php echo $data['type_of_certificate']; ?></td>
                </tr>
<?php $number++; } ?>
                    </tbody>
                </table>
                                </div>
                            </div>
                        </div>    

                <div class="row">
 
    <div class="col-md-12">
        <form action="" method="POST" >
            <div class="card-footer">
    <input type="hidden" id="residents_id" name="residents_id" class="form-control" value="<?php echo $rid?>">
              <button class="btn btn-primary btn-sm" type="submit" name="deletehistory">
                <i class="fa fa-times"></i> Delete All
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

