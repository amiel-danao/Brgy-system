<?php
//$brgy_code = "BC2"; 
$sql = "SELECT * FROM `residents_tbl` WHERE `brgy_code`= '$brgycode' ";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

?>

            <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
        <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th class="text-center">MIDDLE NAME</th>
                    <th class="text-center">GENDER</th>
                    <th class="text-center">VIEW</th>
                    <th class="text-center">ACTION</th>
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
                    <td class="text-center "><a href="view_residents.php?view_id=<?php echo $data['id'] ?>" class="btn btn-success btn-sm">view</a></td>
                    <td class="text-center"><a href="include/function/process.php?remove_id=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm">Remove</a>
                    <a href="edit_residents.php?edit_id=<?php echo $data['id'] ?>" class="btn btn-primary btn-sm">Update</a>
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
               
                                <!-- END DATA TABLE -->
                       <?php include('include/admin/footer2.php'); ?>
                        
                        
                    </div>
                </div>
            </div>