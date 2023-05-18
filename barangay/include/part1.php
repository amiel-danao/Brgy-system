<?php 

    if(isset($_GET['part1']))
    {
        $key = $_GET['part1'];
        $MYsql1 = "SELECT * FROM `monthly_p1_bucal2_tbl` WHERE `id` = ?";
        $mystmt1 = $db->prepare($MYsql1);
        $mystmt1->bind_param('i',$key);
        $mystmt1->execute();
        $result = $mystmt1->get_result();
         while ($data = $result->fetch_assoc())
            {
                $id = $data['id'];
                $description = $data['description'];
                $on_going_status = $data['on_going_status'];
                $completed_status = $data['completed_status'];
                $started_date = $data['started_date'];
                $completed_date = $data['completed date'];
                $project_cost = $data['project_cost'];
                $funds = $data['funds'];
                $remarks = $data['remarks'];
                $month = $data['month'];
                $year = $data['year'];
            }
    }

 ?>

<div class="card">
        <div class="card-header">
            <strong>Part I Information</strong>
        </div>
        <div class="card-body card-block">
            <!-- monthly_part1.php -->
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
            <input type="hidden" id="id" name="id"  class="form-control" 
                value="<?php echo $id ?>">
            <div class="col col-md-4">
                <label for="description" class="form-control-label">NAME / DESCRIPTION OF ACTIVITIES UNDERTAKEN</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="description" name="description"  class="form-control" 
                value="<?php echo $description ?>">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="on_going" class=" form-control-label">STATUS ON GOING</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="on_going" name="on_going"  class="form-control" 
                value="<?php echo $on_going_status ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="completed" class=" form-control-label">STATUS COMPLETED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="completed" name="completed"  class="form-control" 
                value="<?php echo $completed_status ?>">              
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="started_date" class=" form-control-label">DATE STARTED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="date" id="started_date" name="started_date"  class="form-control" 
                value="<?php echo $started_date ?>">               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="completed_date" class=" form-control-label">DATE COMPLETED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="date" id="completed_date" name="completed_date"  class="form-control" 
                value="<?php echo $completed_date ?>">           
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="cost" class=" form-control-label">PROJECT ACTIVITIES COST</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="cost" name="cost"  class="form-control" 
                value="<?php echo $project_cost ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="fund" class=" form-control-label">FUND SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="fund" name="fund"  class="form-control" 
                value="<?php echo $funds ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">REMARKS</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="remarks" name="remarks"  class="form-control" 
                value="<?php echo $remarks ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="month" class=" form-control-label">MONTH</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="month" id="month" class="form-control-md form-control" required>
               	<option value="<?php echo $month ?>"><?php echo $month ?></option>
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
		    <button type="submit" class="btn btn-primary btn-sm" name="updatemonthly1" value="ADD">
		        <i class="fa fa-dot-circle-o"></i> UPDATE
		    </button>
    	</div>
</form>
</div>
</div>