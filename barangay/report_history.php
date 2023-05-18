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
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">Report Send List</h2>
                                    </div>
                                </div>
                            </div>
                            
                           <!--    <div class="col-md-5">
<form class="form-header" action="" method="POST">
    <input class="au-input au-input--xl" type="text" name="searchhistory" placeholder="Search for Report Title" />
    <button class="au-btn--submit" type="submit" name="reporthistory">
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
                <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input class="au-input au-input--xl" type="text" name="searchhistory" placeholder="Search for Report" maxlength="40" value="<?php echo isset($_POST['searchhistory']) ? $_POST['searchhistory'] : '' ?>" />
                    <button class="au-btn--submit" type="submit" name="reporthistory">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
    </section>
            
<?php
// $brgy_code = "BC2"; 
// $sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`= '$brgy_code' ";
// $stmt = $db->prepare($sql);
// $stmt->execute();
// $result = $stmt->get_result();
?>


            <div class="main-contents m-t-15">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
       <table class="table table-bordered table-striped  table-wrapper-scroll-y">
                            <thead class="bg-dark" style="color: white; font-size: 13px;" >
                                <tr>
            
                                    <th width="30%">TITLE</th>
                                    <th class="text-center" width="30%">DESCRIPTION</th>
                                    <th class="text-center">DATE</th>
                                    <th class="text-center">SENDER</th>
                                    <th class="text-center" width="30%">FILE</th>
                                </tr>
                            </thead>
                                        <tbody>
    <?php 
//$brgy_code = "BC2"; 
$Sql = "SELECT * FROM `reports` WHERE `sender`=? ORDER BY `id` DESC ";
$Stmt = $db->prepare($Sql);
$Stmt->bind_param('s',$brgycode);
$Stmt->execute();
$Result = $Stmt->get_result();



if (isset($_POST['reporthistory']))
    {
    $keywords = filter_var($_POST['searchhistory']."%", FILTER_SANITIZE_STRING);
    // $Sql = "SELECT * FROM `reports` WHERE `sender`=? AND `title` LIKE ?  ORDER BY `id` DESC ";
    $Sql = "SELECT * FROM `reports` WHERE (`title` LIKE ? OR `description` LIKE ? OR 
    `file` LIKE ? OR `date` LIKE ? OR `month` LIKE ?) AND `sender` = ? ";
    $Stmt = $db->prepare($Sql);
   $Stmt->bind_param('ssssss',$keywords,$keywords,$keywords,$keywords,$keywords,$brgycode);
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
        <td><?php echo $title ?></td>
        <td><?php echo $description ?></td>
         <?php $newDate = date("F - d - Y", strtotime($date)); ?>
        <td><?php echo $newDate ?></td>
        <td><?php echo $sender ?></td>
        <td><?php echo $file ?></td>
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