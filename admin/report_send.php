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
                               <!--  <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
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
                                      <h2 class="text-center">REPORT RECIEVE LIST</h2>
                                    </div>
                                </div>
                            </div>

                      <!--       <div class="col-md-5">
<form class="form-header" action="" method="POST">
    <input class="au-input au-input--xl" type="text" name="searchreport" placeholder="Search for File Title" />
    <button class="au-btn--submit" type="submit" name="recievereport">
        <i class="zmdi zmdi-search"></i>
    </button>
</form>
                            </div> -->

                        </div>
                    </div>
                </div>
            </section>
                
            <section class="mt-3">
                <div class="col-md-5 mx-auto">
                    <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" 
                    method="POST">
                        <input class="au-input au-input--xl" type="text" name="searchreport" placeholder="Search for File" maxlength="65" value="<?php echo isset($_POST['searchreport']) ? $_POST['searchreport'] : '' ?>" />
                        <button class="au-btn--submit" type="submit" name="recievereport">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                </div> 
            </section>
<?php include("include/modals/file_delete.php"); ?> 

      <div class="main-contents m-t-25">
        <div class="section__content section__content--p20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-bordered table-striped  table-wrapper-scroll-y" >
                            <thead class="bg-dark" style="color: white;">
                                <tr>
                                    <!-- <th class="text-center">ID</th> -->
                                    <th class="text-center" width="25%">TITLE</th>
                                    <th class="text-center" width="30%">FILE</th>
                                    <th class="text-center" width="45%">DESCRIPTION</th>
                                    <th class="text-center" width="10%">DATE</th>
                                    <th class="text-center">SENDER</th>
                                   <!--  <th class="text-center">STATUS</th> -->
                                    <th class="text-center">DOWNLOAD</th>
                                    <th class="text-center">REMOVE</th>
                         <!--       <th class="text-center">BOD</th>
                                    <th class="text-center">HOUSE NO</th> -->
                                </tr>
                            </thead>
                                        <tbody>
    <?php 

$Sql = "SELECT * FROM `reports` ORDER BY `id` DESC ";
$Stmt = $db->prepare($Sql);
$Stmt->execute();
$Result = $Stmt->get_result();


if(isset($_POST['recievereport']))
{
    $unique = filter_var("%".$_POST['searchreport']."%", FILTER_SANITIZE_STRING);
    // $Sql = "SELECT * FROM `reports` WHERE `title` LIKE ? OR `file` LIKE ? OR `sender` LIKE ? ORDER BY `id` DESC ";
    $Sql = "SELECT * FROM `reports` WHERE `title` LIKE ? OR `file` LIKE ? OR  `description` LIKE ? OR `sender` LIKE ? OR `date` LIKE ? ORDER BY `id` DESC ";
    $Stmt = $db->prepare($Sql);
    $Stmt->bind_param('sssss',$unique,$unique,$unique,$unique,$unique);
    $Stmt->execute();
    $Result = $Stmt->get_result();

}

$number = 1;
while ($Data = $Result->fetch_assoc())
{ 
    $id = $Data['id'];
    $title = $Data['title'];
    $description = $Data['description'];
    $file = $Data['file'];
    $date = $Data['date'];
    $month = $Data['month'];
    $sender = $Data['sender'];
     ?>
    <tr>
        
        <td class="text-center"><?php echo $title ?></td>
        <td class="text-center"><?php echo $file ?></td>
        <td class="text-center"><?php echo $description ?></td>
        <?php $newDate = date("F - d - Y", strtotime($date)); ?>
        <td class="text-center"><?php echo $newDate ?></td>
        <td class="text-center"><?php echo $sender ?></td>
       <!--  <td class="text-center ">
            <a href="#" class="btn btn-success btn-sm">UPDATE</a></td> -->
        <td class="text-center">
        <a download="<?php echo $file ?>" href="../Files/<?php echo $file ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Download</a>
        </td>
        <td class="text-center ">
 <!-- <a href="include/function/report_function.php?deletereportid=<?php echo $id ?>" class="btn btn-danger btn-sm">REMOVE</a> -->
<a href="javascript:void(0)" rel="<?php echo $id ?>" class="btn btn-danger btn-sm btnz_linkz"><i class="fa fa-times"></i> Remove</a>
 </td>
    </tr>
        <?php } ?>                                   
                                                 
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
<script>
    $(document).ready(function(){
        $(".btnz_linkz").on('click', function(){
        var fileid = $(this).attr("rel");
        var deletez_url = "include/function/report_function.php?deletereportid="+ fileid +" ";
        $(".file_delete_link").attr("href", deletez_url);
        $("#myModalfile").modal('show');
        });

    });
</script>