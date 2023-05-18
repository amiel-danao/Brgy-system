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


    $postion3 = "%Treasurer%";
    $mysqls = "SELECT `first_name`, `last_name`, `middle_name` FROM `brgy_official_tbl` WHERE `position` LIKE ? AND `brgy_code`=?";
    $mystmts = $db->prepare($mysqls);
    $mystmts->bind_param('ss',$postion3,$brgycode);
    $mystmts->execute();
    $mystmts->bind_result($tfname,$tlname,$tMname);
    $mystmts->fetch();
    $mystmts->close();
    $treasurername = $tfname . " " . substr($tMname,0,1). "." . " " . $tlname;
?>

<div class="card">
    <div class="card-header">
        <strong>PDP FILL UP FORM</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars("include/print_function/pdp.php"); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" target="_blank">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
<input type="hidden" id="bname" name="bname" class="form-control" value="<?php echo $brgyname ?>">

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="PunongBarangay" class="form-control-label">PUNONG BARANGAY</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="PunongBarangay" name="PunongBarangay" class="form-control bg-light" value="<?php echo $brgycaptain ?>" readonly="readonly">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="secretary" class="form-control-label">Secretary</label>
            </div>
            <div class="col-12 col-md-6"> 
                <input type="text" id="secretary" name="secretary" class="form-control bg-light" 
                value="<?php echo $Secretaryname ?>" readonly="readonly">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="treasurer" class="form-control-label">TREASURER</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="treasurer" name="treasurer" class="form-control bg-light" 
            value="<?php echo $treasurername ?>" readonly="readonly">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-3">
                <label for="planningofficer" class="form-control-label">MUNICIPALITY PLANNING & DEVELOPMENT COORDINATOR</label>
            </div>
            <div class="col-12 col-md-6">
            <input type="text" id="planningofficer" name="planningofficer" class="form-control" maxlength="40" required>
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
	    <button type="submit" class="btn btn-primary btn-sm" name="print_pdp">
	        <i class="fa fa-dot-circle-o"></i> PRINT
	    </button>
    	</div>
    </form>
</div>
</div>