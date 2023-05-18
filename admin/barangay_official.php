<?php 
      include('include/login-function/session.php');        
      include('include/function/config.php');
       include('include/function/brgy_offcial_function.php');

    if(isset($_GET['barangaycode']) && !empty($_GET['barangayname']))
      {
        $brgycode = $_GET['barangaycode'];
        $barangayname = $_GET['barangayname'];
      }
    else{
          header("Location: brgy_info.php");
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
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
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

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">BARANGAY OFFICIAL LIST OF <?php echo 
                                      $barangayname ?></h2>
                                    </div>
                                </div>
                            </div>
                            
         <!--                      <div class="col-md-5">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for Residents..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

              <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y">
                    <thead>
                        <tr>
                            <th class="text-center">BRGY ID</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th class="text-center">MIDDLE NAME</th>
                            <th class="text-center">GENDER</th>
                            <!--<th class="text-center">AGE</th>-->
                            <!--<th class="text-center">CONTACT#</th>-->
                            <th class="text-center">POSITION</th>
                            <th class="text-center">PHOTO</th>
                            <th class="text-center">POST VALIDATE</th>
                            <th class="text-center">ACTION</th>      
                            <th class="text-center">POST ACTION</th> 
                        </tr>
                    </thead>
                    <tbody>
            <?php 
$MYsql = "SELECT * FROM `brgy_official_tbl` WHERE `brgy_code`=? ORDER BY brgy_id";
$MYstmt = $db->prepare($MYsql);
$MYstmt->bind_param('s',$brgycode);
$MYstmt->execute();
$Result = $MYstmt->get_result();
 while ($data = $Result->fetch_assoc())
{
        $brgy_id = $data['brgy_id']; 
        $first_name = $data['first_name']; 
        $last_name = $data['last_name']; 
        $middle_name = $data['middle_name']; 
        $gender = $data['gender']; 
        $age = $data['age']; 
        $bod = $data['bod']; 
        $birth_of_place = $data['birth_of_place']; 
        $address = $data['address']; 
        $email = $data['email']; 
        $contact_no = $data['contact_no']; 
        $religion = $data['religion']; 
        $civil_status = $data['civil_status']; 
        $highest_education = $data['highest_education']; 
        $course_school = $data['course_school'];
        $occupation = $data['occupation']; 
        $brgy_code = $data['brgy_code']; 
        $barangay = $data['barangay']; 
        $position = $data['position']; 
        $picture = $data['picture'];
         $post_validation = $data['post_validation'];
             ?>
<tr>
    <td><?php echo $brgy_id ?></td>
    <td><?php echo $first_name ?></td>
    <td><?php echo $last_name ?></td>
    <td><?php echo $middle_name ?></td>
    <td><?php echo $gender ?></td>
    <!--<td><?php// echo $age ?></td>-->
    <!--<td><?php// echo $contact_no ?></td>-->
    <td><?php echo $position ?></td> 
    <td class="w-25" align="center" valign="center"><a rel="facebox" href="editimage.php?id=<?php echo $brgy_id ?>"><img 
    src="barangayimages/<?php echo $brgycode ?>/<?php echo $picture ?>" class="w-75"></a></td>
    <td><?php echo $post_validation ?></td> 
    <td><a href="barangay_official_info.php?barangayid=<?php echo $brgy_id ?>" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Info.</a>
        <a href="edit_barangay_official.php?brgyid=<?php echo $brgy_id ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a></td>
        
    <td><a href="?brgy_offical_validate=<?php echo $brgy_id ?>&barangaycode=<?= $brgycode ?>&barangayname=<?= $barangayname  ?>" class="btn btn-warning btn-sm">
    <i class="fa fa-thumbs-up" aria-hidden="true"></i> Validate</a>
            <a href="?brgy_offical_not_validate=<?php echo $brgy_id ?>&barangaycode=<?= $brgycode ?>&barangayname=<?= $barangayname  ?>" class="btn btn-info btn-sm">
            <i class="fa fa-thumbs-down" aria-hidden="true"></i> Not Validate</a>
    </td>
        
</tr>
<?php 
} ?>
                    </tbody>
                </table>
                                </div>
                            </div>
                        </div>    

        <div class="card-footer">
            <a href="organizational.php?barangayname=<?php echo $barangayname ?>&code=<?php echo $brgy_code ?>" class="btn btn-sm btn-primary"><i class="fa fa-street-view" aria-hidden="true"></i> View Organizational Chart</a>
        </div>
               
                                <!-- END DATA TABLE -->
                <?php include('include/admin/footer2.php'); ?>
                        
                        
                    </div>
                </div>
            </div>
      
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>