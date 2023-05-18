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
                                      <h2 class="text-center">BARANGAY RESIDENTS LIST</h2>
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
        <!--<div class="col-md-3">-->
        <!--</div>  -->
            <div class="col-md-4 mx-auto">
                <form class="form-header" action="" method="" >
                    <select name="filterbybarangay" class="form-control" required>
        <option value="" selected="true" disabled="disabled">Filter by  Barangay</option>
                        <?php 
$sql = "SELECT * FROM `brgy_code_tbl` ORDER BY brgy_name";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result(); 
     while ($output = $result->fetch_assoc())
        { ?>
                        <option value="<?php echo $output['brgy_code']; ?>"><?php echo
$output['brgy_name']; ?></option>
                    <?php } ?>
                    </select>
                    <button class="au-btn--submit" type="submit" name="filterbarangay" value="Residents">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
            </div>
        <!--<div class="col-md-3">-->
        <!--</div> -->
        
    <div class="col-md-4 mx-auto">
        <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <input type="hidden" name="code" value="<?php echo $_GET['filterbybarangay']; ?>">
          <input type="text" name="searchresidents" class="form-control" placeholder="Search Residents" required
          value="<?php echo isset($_POST['searchresidents']) ? $_POST['searchresidents'] : '' ?>" maxlength="40">
        <button class="au-btn--submit" type="submit" name="searchresidentsbarangay">
            <i class="zmdi zmdi-search"></i>
        </button>
        </form>
    </div>
    
        </div>
        
        
<!--<div class="row mt-3">-->
<!--    <div class="col-md-3">-->
<!--        </div>  -->
<!--      <div class="col-md-4 mx-auto">-->
<!--        <form class="form-header" action="" method="POST">-->
<!--          <input type="hidden" name="code" value="<?php// echo $_GET['filterbybarangay']; ?>">-->
<!--          <input type="text" name="searchresidents" class="form-control" placeholder="Search Residents Name" required>-->
<!--        <button class="au-btn--submit" type="submit" name="searchresidentsbarangay">-->
<!--            <i class="zmdi zmdi-search"></i>-->
<!--        </button>-->
<!--        </form>-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--        </div>  -->
<!--</div>-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y mt-3">
                    <thead>
                        <tr>
                             <th>#</th>
                            <th class="text-center" width="15%">FIRST NAME</th>
                            <th class="text-center" width="15%">LAST NAME</th>
                            <th class="text-center" width="15%">MIDDLE NAME</th>
                            <th class="text-center" width="10%">GENDER</th>
                            <th class="text-center" width="5%">AGE</th>
                            <th class="text-center" width="15%">STREET</th>
                            <th class="text-center">BARANGAY</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php 
if (isset($_GET['filterbarangay']))
        {
            
            $searchs =  filter_var($_GET['filterbybarangay'], FILTER_SANITIZE_STRING);
            $sqls = "SELECT * FROM `residents_tbl` WHERE `brgy_code`= ? ";
            $stmts = $db->prepare($sqls);
            $stmts->bind_param('s',$searchs);
            $stmts->execute();
            $result = $stmts->get_result();
            $number = 1;
                
} 

if(isset($_POST['searchresidentsbarangay']) && !empty($_POST['code']))
    {
        $searchs =  filter_var($_POST['searchresidents']."%", FILTER_SANITIZE_STRING);
        $code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);
        $sqls = "SELECT * FROM `residents_tbl` WHERE (`first_name` LIKE ? OR `last_name` LIKE ? OR `middle_name` LIKE ?) AND `brgy_code`= ? ";
        $stmts = $db->prepare($sqls);
        $stmts->bind_param('ssss',$searchs,$searchs,$searchs,$code);
        $stmts->execute();
        $result = $stmts->get_result();
        $number = 1;
    }
while ($datas = $result->fetch_assoc())
                {?>
                <tr>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $datas['first_name']; ?></td>
                    <td><?php echo $datas['last_name']; ?></td>
                    <td><?php echo $datas['middle_name']; ?></td>
                    <td><?php echo $datas['gender']; ?></td>
                    <td><?php echo $datas['age']; ?></td>
                    <td><?php echo $datas['street']; ?></td>
                    <td><?php echo $datas['brgy_code']; ?></td>
                </tr>
                <?php $number++; } 
                ?>

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