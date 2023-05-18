<?php 

if (isset($_GET['b-permit']))
    {
        $id = $_GET['b-permit'];
        $sql = "SELECT * FROM `residents_tbl` WHERE `id`= ? ";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->bind_result($id,$Fname,$Lname,$Mname,$Gender,$dob,$age,$Hno,$ctctno,$job,$street,$religion,$status,$elem,$high,$college,$collegename,$collegecourse,$familyrole,$familiesno,$hhno,$femaleno,$maleno,$picture,$brgy_code);
        $stmt->fetch();
        $stmt->close();

        $fullname = $Fname . " " . substr($Mname,0,1). "." . " " . $Lname ;
    }


?>

<div class="card">
    <div class="card-header">
        <strong>BARANGAY BUSINESS FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/certificate/brgy-business-permit.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="Rid" name="Rid" class="form-control" value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="fname" class="form-control-label">Full Name</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="fname" name="fname" class="form-control bg-light" required value="<?php echo $fullname ?>" readonly="readonly">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="bcno" class="form-control-label">BC No</label>
            </div>
            <div class="col-12 col-md-6">
                <?php 
                date_default_timezone_set('Asia/Manila');
                $date = date("Y");
                $fulldate = $date + "-01-01";
                $sql = "SELECT MAX(`bcno`) FROM `brgy_bpermit_tbl` WHERE `bcode`=? AND `date` >=? ";
                if($stmtmax = $db->prepare($sql))
                    {
                        $stmtmax->bind_param('si',$brgycode,$fulldate);
                        $stmtmax->execute();
                        $stmtmax->bind_result($maxcbcn);
                        $stmtmax->fetch();
                        $stmtmax->close();
                    }
                 ?>
                <input type="text" id="bcno" name="bcno" class="form-control" required
                value="<?php echo $mbcno = isset($maxcbcn) && !empty($maxcbcn) ? $maxcbcn + 1 : '';?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="business" class="form-control-label">business</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="business" name="business" class="form-control" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">

                <label for="clerk" class="form-control-label">Clerk</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="clerk" name="clerk" class="form-control" required>
            </div>
        </div>

      <!--   <div class="row form-group">
            <div class="col col-md-3">
                <label for="ctcno" class="form-control-label">CTC No</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="ctcno" name="ctcno" class="form-control" >
            </div>
        </div> -->

        <!-- <div class="row form-group">
            <div class="col col-md-3">
                <label for="paid" class="form-control-label">Amount Paid Php:</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="paid" name="paid" class="form-control" >
            </div>
        </div> -->

      <!--   <div class="row form-group">
            <div class="col col-md-3">
                <label for="or" class="form-control-label">OR No</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="or" name="or" class="form-control" >
            </div>
        </div> -->

      
    <div class="card-footer">
	    <button type="submit" class="btn btn-primary btn-sm" name="p_bpermit">
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
            <th class="text-center" colspan="7">BARANGAY BUSINESS PERMIT REQUESTING HISTORY</th>
        </tr>
            <tr>
                <th>#</th>
                <th>FULL NAME</th>
                <th class="text-center">DATE (Y-M-D)</th>
                 <th class="text-center">ID</th>
                <th class="text-center"  width="70%">BC NO#</th>
                 <th class="text-center"  width="70%">BUSINESS</th>
                <th class="text-center">CERTIFICATE</th>
    
            </tr>
        </thead>
                    <tbody>
   
<?php $sql = "SELECT * FROM `brgy_bpermit_tbl` WHERE `residents_id` = ? ";
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
              echo "<td>{$data['date']}</td>";
              echo "<td>{$data['residents_id']}</td>";
              echo "<td>{$data['bcno']}</td>";
              echo "<td>{$data['business']}</td>";
              echo "<td>{$data['type_of_certificate']}</td>";
              echo "</tr>";
              $num++;
            } 
             ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 