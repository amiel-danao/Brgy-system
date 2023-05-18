<?php 

    if (isset($_GET['bdfupdate']) )
    {
        $key = $_GET['bdfupdate'];
        $bdfsql = "SELECT * FROM `bdf_tbl` WHERE `id` = ? ";
        $bdfstmt = $db->prepare($bdfsql);
        $bdfstmt->bind_param('i',$key);
        $bdfstmt->execute();
        $bdfstmt->bind_result($id,$aip,$program,$implementing,$sdate,$cdate,$expectedoutput,$funding,$pservice,$mooe,$capital,$total,$adaptation,$mitigation,$year,$brgycode);
        $bdfstmt->fetch();
        $bdfstmt->close();
    }


 ?>
<div class="card">
    <div class="card-header">
        <strong>BDF INFORMATION</strong>
    </div>
        <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="aip" class="form-control-label">AIP REFERENCE CODE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="aip" name="aip" class="form-control" value="<?php echo $aip ?>" maxlength="50">
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="program" class=" form-control-label">PROGRAM / PROJECT / ACTIVITY DESCRIPTION </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="program" name="program"  class="form-control" 
                value="<?php echo $program ?>" maxlength="100">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTATING  OFFICE / DEPARTMENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing"  class="form-control" 
                value="<?php echo $implementing ?>" maxlength="30">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="sdate" class=" form-control-label">STARTED DATE </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="sdate" name="sdate"  class="form-control" 
                value="<?php echo $sdate ?>" maxlength="20">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="cdate" class=" form-control-label">COMPLETED DATE </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cdate" name="cdate"  class="form-control" 
                value="<?php echo $cdate ?>" maxlength="20">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="expectedoutput" class=" form-control-label">EXPECTED OUTPUT </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="expectedoutput" name="expectedoutput"  class="form-control" value="<?php echo $expectedoutput ?>" maxlength="100">
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="funding" class=" form-control-label">FUNDING SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="funding" name="funding"  class="form-control" 
                value="<?php echo $funding ?>" maxlength="20">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="pservice" class="form-control-label">PERSONAL SERVICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="pservice" name="pservice" class="form-control" 
                value="<?php echo $pservice ?>" maxlength="12">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="mooe" class=" form-control-label">MOOE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="mooe" name="mooe"  class="form-control" 
                value="<?php echo $mooe ?>" maxlength="12">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="capital" class=" form-control-label">CAPITAL OUTLAY</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="capital" name="capital" class="form-control" 
                value="<?php echo $capital ?>" maxlength="12">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="total" class=" form-control-label">TOTAL</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="total" name="total" class="form-control" 
                value="<?php echo $total ?>" maxlength="12">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="adaptation" class=" form-control-label">CLIMATE CHANGE ADAPTATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="adaptation" name="adaptation" class="form-control" 
                value="<?php echo $adaptation ?>" maxlength="20">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="mitigation" class=" form-control-label">CLIMATE CHANGE MITIGATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="mitigation" name="mitigation" class="form-control" 
                value="<?php echo $mitigation ?>" maxlength="20">
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">YEAR</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required="required">
                <option value="<?php echo $year ?>"><?php echo $year ?></option>
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
		    <button type="submit" class="btn btn-primary btn-sm" name="updatebdf">
		        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
		    </button>
    	</div>
    </form>
                                    </div>
                                </div>