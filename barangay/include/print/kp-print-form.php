       
<?php $postions = "Punong Barangay%";
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
        <strong>KP & VAWC FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/print_function/print_kp.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="MSWDO" class="form-control-label">MSWDO</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="MSWDO" name="MSWDO"  class="form-control" maxlength="40" required>
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-3">
                <label for="captain" class="form-control-label">Brgy. Captain</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="captain" name="captain"  class="form-control bg-light" required value="<?php echo $brgycaptain ?>" readonly="readonly">
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-3">
                <label for="month" class=" form-control-label">Month</label>
            </div>
            <div class="col-12 col-md-6">
                <select name="month" class="form-control" required>
                <option value="" selected="true" disabled="disabled">select Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            </div>
        </div>

            <div class="row form-group">
            <div class="col col-md-3">
                <label for="year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-6">
               <select name="year" class="form-control" required>
                    <option value="" selected="select" disabled="disabled" class="form-control">Select Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>             
            </div>
</div>
      
    <div class="card-footer">
	    <button type="submit" class="btn btn-primary btn-sm" name="print_kp_vawc" value="ADD">
	        <i class="fa fa-dot-circle-o"></i> PRINT
	    </button>
    	</div>
    </form>
</div>
</div>