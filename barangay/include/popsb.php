<?php 
    
    if (isset($_GET['popsrecordb']))
            {
                $key = $_GET['popsrecordb'];
                $Mysql = "SELECT * FROM `pops_b_tbl` WHERE `id` = ? ";
                $Mystmt = $db->prepare($Mysql);
                $Mystmt->bind_param('i',$key);
                $Mystmt->execute();
                $Mystmt->bind_result($id,$ppsa,$implementing,$sdate,$cdate,
                $expectedoutput,$funding,$pservice,$mooe,$capital,$total,$title,$year);
                $Mystmt->fetch();
                $Mystmt->close();
            }

 ?>
<div class="card">
    <div class="card-header">
        <strong>POPS B. PUBLIC SAFETY Information</strong>
    </div>
        <div class="card-body card-block">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" id="id" name="id" class="form-control" 
        value="<?php echo $id ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="ppsa" class="form-control-label">PPSA</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="ppsa" name="ppsa" class="form-control" value="<?php echo $ppsa ?>">
            </div>
        </div>
       
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTATING OFFICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing" class="form-control" 
                value="<?php echo $implementing ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="sdate" class=" form-control-label">STARTED DATE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="sdate" name="sdate"  class="form-control" 
                value="<?php echo $sdate ?>">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="cdate" class=" form-control-label">COMPLETED DATE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cdate" name="cdate"  class="form-control" 
                value="<?php echo $cdate ?>">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="expectedoutput" class=" form-control-label">EXPECTED OUTPUT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="expectedoutput" name="expectedoutput"class="form-control" value="<?php echo $expectedoutput ?>">
            </div>
        </div>
          <div class="row form-group">
            <div class="col col-md-4">
                <label for="funding" class=" form-control-label">POSSIBLE FUNDING SOURCE</label>
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
                <label for="total" class=" form-control-label">TOTAL</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="total" name="total" class="form-control" 
                value="<?php echo $total ?>">
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="title" class=" form-control-label">TITLE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="title" name="title" class="form-control" value="<?php echo $title ?>">
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
		    <button type="submit" class="btn btn-primary btn-sm" name="updatepopsB">
		        <i class="fa fa-dot-circle-o"></i>UPDATE
		    </button>
    	</div>
    </form>
                                    </div>
                                </div>