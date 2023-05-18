<?php 
    $postions = "%Punong Barangay";
    $sql = "SELECT `first_name`, `last_name`, `middle_name` FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss',$postions,$brgycode);
    $stmt->execute();
    $stmt->bind_result($fname,$lname,$Mname);
    $stmt->fetch();
    $stmt->close();
    $brgycaptain = $fname . " " . substr($Mname,0,1). "." . " " . $lname;

    $postion4 = "%Secretary%";
    $mysqli = "SELECT `first_name`, `last_name`, `middle_name` FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmti = $db->prepare($mysqli);
    $mystmti->bind_param('ss',$postion4,$brgycode);
    $mystmti->execute();
    $mystmti->bind_result($sfname,$slname,$sMname);
    $mystmti->fetch();
    $mystmti->close();
    $Secretaryname = $sfname . " " . substr($sMname,0,1). "." . " " . $slname;
 ?>
<div class="card">
    <div class="card-header">
        <strong>ABKD FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/print_function/print_abkd.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="secretary" class="form-control-label">Secretary</label>
            </div>
            <div class="col-12 col-md-5">
                <input type="text" id="secretary" name="secretary"  class="form-control bg-light" value="<?php echo $Secretaryname ?>" readonly="readonly">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="PunongBarangay" class="form-control-label">Punong Barangay</label>
            </div>
            <div class="col-12 col-md-5">
            <input type="text" id="PunongBarangay" name="PunongBarangay" class="form-control bg-light" value="<?php echo $brgycaptain ?>" readonly="readonly">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="month" class=" form-control-label">Quarter</label>
            </div>
            <div class="col-12 col-md-5">
                <select name="quarter" class="form-control" required>
                <option value="" selected="select" disabled="disabled">Filter by Quarter</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
            </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-5">
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
	    <button type="submit" class="btn btn-primary btn-sm" name="print_abkd" value="ADD">
	        <i class="fa fa-dot-circle-o"></i> PRINT
	    </button>
    	</div>
    </form>
</div>
</div>