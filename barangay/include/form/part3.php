<?php 
    if(isset($_GET['part3']))
    {
        $key = $_GET['part3'];
        $MYsql3 = "SELECT * FROM `monthly_p3_tbl` WHERE `id` = ?";
        $mystmt3 = $db->prepare($MYsql3);
        $mystmt3->bind_param('i',$key);
        $mystmt3->execute();
        $mystmt3->bind_result($id,$dispute,$filled,$settled,$reffered,$withdraw,$month,$year,$brgycode);
        $mystmt3->fetch();
        $mystmt3->close();
        // $result3 = $mystmt3->get_result();
        // while ($data = $result3->fetch_assoc())
        //     {
        //         $id = $data['id'];
        //         $dispute = $data['dispute'];
        //         $filled = $data['filed'];
        //         $settled = $data['settled'];
        //         $reffered = $data['reffered'];
        //         $withdraw = $data['withdraw'];
        //         $month = $data['monthly'];
        //         $year = $data['year'];
        //         $brgycode = $data['brgy_code'];
        //     }
    }
?>


<div class="card">
    <div class="card-header">
        <strong>KP Information</strong>
    </div>
<div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <input type="hidden" id="id" name="id"  class="form-control" 
                value="<?php echo $id ?>">
            <div class="col col-md-3">
                <label for="dispute" class="form-control-label">DISPUTE</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="dispute" name="dispute"  class="form-control" 
                value="<?php echo $dispute ?>" maxlength="70">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-3">
                <label for="filed" class=" form-control-label">FILED</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="filed" name="filed"  class="form-control" 
                value="<?php echo $filled ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="settled" class=" form-control-label">SETTLED</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="settled" name="settled"  class="form-control" 
                value="<?php echo $settled ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="referred" class=" form-control-label">REFERRED</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="referred" name="referred"  class="form-control" 
                value="<?php echo $reffered ?>" maxlength="3">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-3">
                <label for="withdraw" class=" form-control-label">WITHDRAW</label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" id="withdraw" name="withdraw"  class="form-control" 
                value="<?php echo $withdraw ?>" maxlength="3">
               
            </div>
        </div>


          <div class="row form-group">
            <div class="col col-md-3">
                <label for="month" class=" form-control-label">MONTH</label>
            </div>
            <div class="col-12 col-md-9">
               <select name="month" id="month" class="form-control-md form-control" required="required">
               	<option value="<?php echo $month ?>" ><?php echo $month ?></option>
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
                <label for="year" class=" form-control-label">YEAR</label>
            </div>
            <div class="col-12 col-md-9">
               <select name="year" id="year" class="form-control-md form-control" required="required">
                <option value="<?php echo $year ?>" ><?php echo $year ?></option>
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
		    <button type="submit" class="btn btn-primary btn-sm" name="updatemonthly3" value="update">
		        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
		    </button>
    	</div>
    </form>
</div>
</div>