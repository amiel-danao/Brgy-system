  <?php 

        if (isset($_GET['urecordb']))
            {
                $key = $_GET['urecordb'];
                $mysql = "SELECT * FROM `bdrrmf_b_tbl` WHERE `id` = ? ";
                $mystmt = $db->prepare($mysql);
                $mystmt->bind_param('i',$key);
                $mystmt->execute();
                $mystmt->bind_result($id,$aip,$program,$implementing,$sdate,$cdate,
                $expectedoutput,$funding,$pservice,$mooe,$capital,$totala,$year);
                $mystmt->fetch();
                $mystmt->close();
            }

   ?>


<div class="card">
<div class="card-header">
    <strong>BDRRMF B. QUICK RESPONSE (30%) Information</strong>
</div>
    <div class="card-body card-block">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
         <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="aip" class="form-control-label">AIP REFERENCE CODE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="aip" name="aip" class="form-control" value="<?php echo $aip ?>">
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="program" class=" form-control-label">PROGRAM / PROJECT / ACTIVITY DESCRIPTION </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="program" name="program" class="form-control" 
                value="<?php echo $program ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTATING  OFFICE / DEPARTMENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing" class="form-control" 
                value="<?php echo $implementing ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="sdate" class=" form-control-label">STARTED DATE </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="sdate" name="sdate"  class="form-control" 
                value="<?php echo $sdate ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="cdate" class=" form-control-label">COMPLETED DATE </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cdate" name="cdate"  class="form-control" 
                value="<?php echo $cdate ?>">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="expectedoutput" class=" form-control-label">EXPECTED OUTPUT </label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="expectedoutput" name="expectedoutput" class="form-control" value="<?php echo $expectedoutput ?>">
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="funding" class=" form-control-label">FUNDING SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="funding" name="funding" class="form-control" 
                value="<?php echo $funding ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="pservice" class="form-control-label">PERSONAL SERVICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="pservice" name="pservice" class="form-control" 
                value="<?php echo $pservice ?>">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="mooe" class=" form-control-label">MOOE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="mooe" name="mooe" class="form-control" 
                value="<?php echo $mooe ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="capital" class=" form-control-label">CAPITAL OUTLAY</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="capital" name="capital" class="form-control" 
                value="<?php echo $capital ?>">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="totala" class=" form-control-label">TOTAL BUDGET PART</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="totala" name="totala" class="form-control" 
                value="<?php echo $totala ?>">
            </div>
        </div>

         <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">YEAR</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required>
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
            <button type="submit" class="btn btn-primary btn-sm" name="updatebdrrmfB">
                <i class="fa fa-dot-circle-o"></i> UPDATE 
            </button>
        </div>
    </form>
                            </div>
                        </div>