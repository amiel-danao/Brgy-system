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
                                <a href="#">
                                    <!-- <img src="bimages/icon/OBISH6.png" class="img-fluid w-25 h-25 pull-left" alt="CoolAdmin" /> -->
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
           <section class="au-breadcrumb m-t-75 headb">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
            
       <!--  <div class="col-md-5">
            <form class="form-header" action="barangay_residents.php" method="POST">
                <input class="au-input au-input--xl form-control" type="text" name="search" placeholder="Search for Residents Last Name..."  />
            <button class="au-btn--submit" type="submit" name="searchs">
                    <i class="zmdi zmdi-search"></i>
                </button>
               
            </form>
        </div> -->
         <div class="col-md-12">
            <div class="au-breadcrumb-content">
                <div class="au-breadcrumb-left mx-auto">
                  <h2 class="text-center">RESIDENTS LIST</h2>
                </div>
            </div>
        </div>

                            
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-3">
                 <div class="col-md-5 mx-auto">
            <form class="form-header" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input class="au-input au-input--xl form-control" type="text" name="search" placeholder="Search for Residents..." maxlength="40"  value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" />
            <button class="au-btn--submit" type="submit" name="searchs">
                    <i class="zmdi zmdi-search"></i>
                </button>
               
            </form>
        </div>
            </section>
<?php include("include/modal/residents_delete.php"); ?>
            
<?php

//$brgycode = "BC2"; 
$sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`=? ";
$stmt = $db->prepare($sql);
$stmt->bind_param('s',$brgycode);
$stmt->execute();
$result = $stmt->get_result();

if (isset($_POST['searchs'], $_POST['search']) && !empty($_POST['search']))
{
    //$brgy_code = "BC2"; 
    $search =  filter_var($_POST['search']."%", FILTER_SANITIZE_STRING);
    //`last_name` LIKE ?
    // $sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`= ? AND (`first_name` = ? OR `last_name` =?)";

    $sql = "SELECT * FROM `residents_tbl` WHERE (`first_name` LIKE ? OR `last_name` LIKE ? OR 
    `middle_name` LIKE ? OR `house_no` LIKE ? OR `street` LIKE ?) AND `brgy_code` = ? ";
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssssss',$search,$search,$search,$search,$search,$brgycode);
    $stmt->execute();
    $result = $stmt->get_result();
}

?>

            <div class="main-contents m-t-15">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y">
            <thead>
                <tr>
                    <th class="text-center">NO</th>
                    <th width="15%">FIRST NAME</th>
                    <th width="15%">LAST NAME</th>
                    <th width="15%">MIDDLE NAME</th>
                    <th class="text-center">GENDER</th>
                    <th class="text-center">HOUSE #</th>
                    <th class="text-center">STREET</th>
                    <th >PICTURE OF RESIDENT</th>
                    <th >VIEW</th>
                    <th class="text-center" width="50%">ACTION</th>
                </tr>
            </thead>
          <tbody>
              <tr>
                <?php
                $number = 1;
                while ($data = $result->fetch_assoc())
                { ?>
                        
                    <td><?php echo $number; ?></td>
                    <td><?php echo $data['first_name']; ?></td>
                    <td><?php echo $data['last_name']; ?></td>
                    <td><?php echo $data['middle_name']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td><?php echo $data['house_no']; ?></td>
                    <td><?php echo $data['street']; ?></td>
                    <?php// $image = $data['picture']; ?>
   <?php //$Picture = !empty($data['picture']) ? $data['picture'] :'default-image.png';?>
                    <td class="w-25" align="center" valign="center"><a rel="facebox" href="edit_residents_image.php?imageid=<?php echo $data['id'];?>">
        <img src="bimages/<?php echo $brgycode ?>/<?php echo $Picture = !empty($data['picture']) ? $data['picture'] :'default-image.png'; ?>"
            style="width:130px;height: 90px;" alt="Click to Update Image"> </a></td>

                    <td class="text-center "><a href="view_residents.php?view_id=<?php echo $data['id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>
<td class="text-center"><!-- <a href="include/function/process.php?remove_id=<?php /*echo $data['id'] */?>" class="btn btn-danger btn-sm">Remove</a> --><a href="javascript:void(0)" class="btn btn-danger btn-sm buttons_links" rel="<?php echo $data['id']?>" id="buttons_links"><i class="fa fa-times"></i> Remove</a>
<a href="edit_residents.php?edit_id=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a>
</td>
                </tr>
               <?php
               $number++;
                } ?>

          </tbody>
        </table>
    </div>
</div>
</div>  

<div class="row">
    <div class="col-md-12">
        <div class="card-footer">
            <a href="include/print_function/print_residents.php?print=<?php echo $brgycode ?>&bname=<?php echo $brgyname ?>" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"> Print All</i> </a>
            <a href="include/print_function/print_household_all.php?printhousehold=<?php echo $brgycode ?>&bname=<?php echo $brgyname ?>" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"> Print By House Hold</i> </a>
            <a href="include/print_function/print_all_under_18.php?printunder18=<?php echo $brgycode ?>&bname=<?php echo $brgyname ?>" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"> Print By Under 18</i> </a>
            <a href="include/print_function/print_all_senior_citezen.php?printsenior=<?php echo $brgycode ?>&bname=<?php echo $brgyname ?>" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"> Print By Senoir Citezen</i> </a>
        </div>
    </div>
</div>
                                <!-- END DATA TABLE -->
                <?php include('include/admin/footer2.php'); ?>
                        
                        
                    </div>
                </div>
            </div>
    </div>

<?php

?>
    <!-- Jquery JS-->

<?php include('include/admin/footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $(".buttons_links").on('click', function(){
            var id = $(this).attr("rel");
            var code = "<?= $brgycode; ?>";
            var deleteurl = "include/function/process.php?remove_id="+ id +"&bcode="+code;
            $(".residents_delete_link").attr("href", deleteurl);
            $("#myModalresidents").modal('show');
        });

        $("#dob").keyup(function(){
            var dob = $("#dob").val();
            var dobs = new Date(dob);
            var today = new Date();
            var age = Math.floor((today-dobs) / (365.25 * 24 * 60 * 60 * 1000));
            var ages = age / 365.25 * 24 * 60 * 60 * 1000;
            $('#age').val(age);

        });

        $("#contactno").on("keypress keyup blur",function (event) {    
           $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    });
</script>