<?php 

if (isset($_GET['indigency']))
    {
        $id = $_GET['indigency'];
        $sql = "SELECT * FROM `residents_tbl` WHERE `id`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->bind_result($id,$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$ctctno,$job,$street,$religion,$status,$elem,$high,$college,$collegename,$collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno,$picture,$brgy_code);
        $stmt->fetch();
        $stmt->close();

        $fullname = $Fname . " " . substr($Mname,0,1). "." . " " . $Lname ;
    }
    
    $postions = "%Punong Barangay";
    $sql = "SELECT `first_name`, `last_name`, `middle_name` FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss',$postions,$brgycode);
    $stmt->execute();
    $stmt->bind_result($fname,$lname,$Mname);
    $stmt->fetch();
    $stmt->close();
    $brgycaptain = $fname . " " . substr($Mname,0,1). "." . " " . $lname;

?>

<div class="card">
    <div class="card-header">
        <strong>BARANGAY INDIGENCY FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/certificate/brgy-indigency.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="Rid" name="Rid" class="form-control" value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="fname" class="form-control-label">Full Name</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="text" id="fname" name="fname" class="form-control bg-light" required value="<?php echo $fullname ?>" readonly="readonly" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="purpose" class="form-control-label">Purpose</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="text" id="purpose" name="purpose" class="form-control" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                
                <label for="age" class="form-control-label">Age</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="text" id="age" name="age" class="form-control bg-light" value="<?php echo $age ?>" readonly="readonly" required>
            </div>
        </div>
         <div class="row form-group">
            <div class="col col-md-3">
                <label for="captain" class="form-control-label">Barangay Captain</label>
            </div>
            <div class="col-12 col-md-7">
                <input type="text" id="captain" name="captain" class="form-control bg-light" value="<?php 
                echo $brgycaptain ?>" readonly="readonly" required>
            </div>
        </div>
      
    <div class="card-footer">
	    <button type="submit" class="btn btn-primary btn-sm" name="p_indigency">
	        <i class="fa fa-dot-circle-o"></i> PRINT
	    </button>
    	</div>
    </form>
</div>
</div>

      <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y mt-3">
                    <thead>
                        <tr>
            <th class="text-center" colspan="6">BARANGAY INDIGENCY REQUESTING HISTORY</th>
        </tr>
                        <tr>
                            <th>#</th>
                            <th>FULL NAME</th>
                            <th class="text-center">ID</th>
                            <th class="text-center">DATE (Y-M-D)</th>
                            <th class="text-center"  width="70%">PURPOSE</th>
                            <th class="text-center">CERTIFICATE</th>
                
                        </tr>
                    </thead>
                    <tbody>
<?php $sql = "SELECT * FROM `brgy_indigency_tbl` WHERE `residents_id` = ? ";
      $stmt = $db->prepare($sql);
      $stmt->bind_param('i',$id);
      $stmt->execute();
      $result = $stmt->get_result();
      $num = 1;
      while ($data = $result->fetch_assoc())
            {
              echo "<tr>";
              echo "<td>{$num}</td>";
              echo "<td>{$data['fullname']}</td>";
              echo "<td>{$data['residents_id']}</td>";
              echo "<td>{$data['date']}</td>";
              echo "<td>{$data['purpose']}</td>";
              echo "<td>{$data['type_of_certificate']}</td>";
              echo "</tr>";
              $num++;
            }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>   