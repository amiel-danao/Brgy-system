<?php 

if (isset($_GET['brgy-clearance']))
    {
        $id = $_GET['brgy-clearance'];
        $sql = "SELECT * FROM `residents_tbl` WHERE `id`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->bind_result($id,$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$ctctno,$job,$street,$religion,$status,$elem,$high,$college,$collegename,$collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno,$picture,$brgy_code);
        $stmt->fetch();
        $stmt->close();

        $fullname = $Fname . " " . $Mname . " " . $Lname ;
    }


?>

<div class="card">
    <div class="card-header">
        <strong>BARANGAY CLEARANCE FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/certificate/brgy-clearance.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="Rid" name="Rid" class="form-control" value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="fname" class="form-control-label">First Name</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="fname" name="fname" class="form-control bg-light" required value="<?php echo $Fname ?>" readonly="readonly" >
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="mi" class="form-control-label">Middle Initial</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="mi" name="mi" class="form-control bg-light" required value="<?php echo 
                substr($Mname,0,1) ?>" readonly="readonly">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="sname" class="form-control-label">Last Name</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="sname" name="sname" class="form-control bg-light" required value="<?php echo $Lname ?>" readonly="readonly">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
               
                <label for="age" class="form-control-label">AGE</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="age" name="age" class="form-control bg-light" value="<?php echo $age ?>" readonly="readonly" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="status" class="form-control-label">Status</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="status" name="status" class="form-control bg-light" value="<?php echo $status ?>" readonly="readonly" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="clerk" class="form-control-label">Clerk</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="clerk" name="clerk" class="form-control" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="purpose" class="form-control-label">Purpose</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="purpose" name="purpose" class="form-control" required>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="bcno" class="form-control-label">BC No</label>
            </div>
            <div class="col-12 col-md-5">
                <?php 
                date_default_timezone_set('Asia/Manila');
                $date = date("Y");
                $fulldate = $date + "-01-01";
                $sql = "SELECT MAX(`bcno`), MAX(`ctcno`), MAX(`orno`) FROM `brgy_bclearance_tbl` WHERE `bcode`=? AND `date` >=? ";
                if($stmtmax = $db->prepare($sql))
                    {
                        $stmtmax->bind_param('ss',$brgycode,$fulldate);
                        $stmtmax->execute();
                        $stmtmax->bind_result($maxcbcno,$maxctcno,$maxorno);
                        $stmtmax->fetch();
                        $stmtmax->close();
                    }
                 ?>
                <input type="text" id="bcno" name="bcno" class="form-control" 
            value="<?php echo $mbcno = isset($maxcbcno) && !empty($maxcbcno) ? $maxcbcno + 1 : '';?>" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="ctcno" class="form-control-label">CTC No</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="ctcno" name="ctcno" class="form-control" 
                value="<?php echo $mbctcno = isset($maxctcno) && !empty($maxctcno) ? $maxctcno + 1 : '';?>" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="paid" class="form-control-label">Amount Paid Php:</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="paid" name="paid" class="form-control" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="or" class="form-control-label">OR No</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="or" name="or" class="form-control" value="<?php echo $morno = isset($maxorno) && !empty($maxorno) ? $maxorno + 1 : '';?>" required>
            </div>
        </div>

      
    <div class="card-footer">
	    <button type="submit" class="btn btn-primary btn-sm" name="p_bclearance">
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
                            <th class="text-center" colspan="9">BARANGAY CLEARANCE REQUESTING HISTORY</th>
                        </tr>
                        <tr>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th class="text-center">MIDDLE NAME</th>
                            <th class="text-center">ID</th>
                            <th class="text-center">DATE (Y-M-D)</th>
                            <th class="text-center"  width="70%">BC NO#</th>
                            <th class="text-center">CTC NO#</th>
                             <th class="text-center"  width="70%">OR NO#</th>
                            <th class="text-center">PAID</th>
                        </tr>
                    </thead>
                    <tbody>
  <?php $sql = "SELECT * FROM `brgy_bclearance_tbl` WHERE `residents_id` = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($data = $result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>{$data['fname']}</td>";
                echo "<td>{$data['lname']}</td>";
                echo "<td>{$data['mname']}</td>";
                echo "<td>{$data['residents_id']}</td>";
                echo "<td>{$data['date']}</td>";
                echo "<td>{$data['bcno']}</td>";
                echo "<td>{$data['ctcno']}</td>";
                echo "<td>{$data['orno']}</td>";
                echo "<td>{$data['paid']}</td>";
                echo "</tr>";
            }  ?>
  <!-- <tr>
      <td></td>
  </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>  