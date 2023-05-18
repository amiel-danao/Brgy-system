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

    $postion4 = "%SK Chairman%";
    $mysqli = "SELECT `first_name`, `last_name`, `middle_name` FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmti = $db->prepare($mysqli);
    $mystmti->bind_param('ss',$postion4,$brgycode);
    $mystmti->execute();
    $mystmti->bind_result($sfname,$slname,$sMname);
    $mystmti->fetch();
    $mystmti->close();
    $Skyname = $sfname . " " . substr($sMname,0,1). "." . " " . $slname;
?>

<div class="card">
    <div class="card-header">
        <strong>SK FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/print_function/sk_fund.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="PunongBarangay" class="form-control-label">Punong Barangay</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="PunongBarangay" name="PunongBarangay" class="form-control bg-light" value="<?php echo  $brgycaptain ?>" readonly="readonly">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="skchair" class="form-control-label">Sk Chairman</label>
            </div>
            <div class="col-12 col-md-6">
                <input type="text" id="skchair" name="skchair" class="form-control bg-light" 
                value="<?php echo $Skyname ?>" readonly="readonly">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="k1" class="form-control-label">Sk Kagawad 1</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k1" name="k1" class="form-control" maxlength="40" required>
            </div>
        </div>


         <div class="row form-group">
            <div class="col col-md-3">
                <label for="k2" class="form-control-label">Sk Kagawad 2</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k2" name="k2" class="form-control" maxlength="40" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="k3" class="form-control-label">Sk Kagawad 3</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k3" name="k3" class="form-control" maxlength="40" required>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="k4" class="form-control-label">Sk Kagawad 4</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k4" name="k4" class="form-control" maxlength="40" required>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="k5" class="form-control-label">Sk Kagawad 5</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k5" name="k5" class="form-control" maxlength="40" required>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="k6" class="form-control-label">Sk Kagawad 6</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k6" name="k6" class="form-control" maxlength="40" required>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="k7" class="form-control-label">Sk Kagawad 7</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="k7" name="k7" class="form-control" maxlength="40" required>
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
	    <button type="submit" class="btn btn-primary btn-sm" name="print_sk">
	        <i class="fa fa-dot-circle-o"></i> PRINT
	    </button>
    	</div>
    </form>
</div>
</div>