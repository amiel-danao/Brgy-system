<div class="card">
    <div class="card-header">
        <strong>BDF INFORMATION</strong>
    </div>
        <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="aip" class="form-control-label">AIP REFERENCE CODE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="aip" name="aip" class="form-control" maxlength="50">
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="program" class=" form-control-label">PROGRAM / PROJECT / ACTIVITY DESCRIPTION </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="program" name="program"  class="form-control" maxlength="100">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTATING  OFFICE / DEPARTMENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing"  class="form-control" maxlength="30">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="sdate" class=" form-control-label">STARTED DATE </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="sdate" name="sdate"  class="form-control" maxlength="20">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="cdate" class=" form-control-label">COMPLETED DATE </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cdate" name="cdate"  class="form-control" maxlength="20">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="expectedoutput" class=" form-control-label">EXPECTED OUTPUT </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="expectedoutput" name="expectedoutput"  class="form-control" maxlength="100">
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="funding" class=" form-control-label">FUNDING SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="funding" name="funding"  class="form-control" maxlength="20">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="pservice" class="form-control-label">PERSONAL SERVICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="pservice" name="pservice" class="form-control" maxlength="12">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="mooe" class=" form-control-label">MOOE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="mooe" name="mooe"  class="form-control" maxlength="12">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="capital" class=" form-control-label">CAPITAL OUTLAY</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="capital" name="capital"  class="form-control" maxlength="12" >
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="total" class=" form-control-label">TOTAL</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="total" name="total"  class="form-control" maxlength="12">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="adaptation" class=" form-control-label">CLIMATE CHANGE ADAPTATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="adaptation" name="adaptation" class="form-control" maxlength="20">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="mitigation" class=" form-control-label">CLIMATE CHANGE MITIGATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="mitigation" name="mitigation"  class="form-control" maxlength="20">
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">YEAR</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required="required">
                <option value="" selected="true" disabled="disabled">Please Select Year</option>
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
		    <button type="submit" class="btn btn-primary btn-sm" name="addbdf">
		        <i class="fa fa-plus" aria-hidden="true"></i> ADD
		    </button>
    	</div>
</form>
</div>
</div>