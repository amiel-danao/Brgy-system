 <?php
        if(isset($_GET['part2']))
        {
            $key = $_GET['part2'];
            $MYsql2 = "SELECT * FROM `monthly_p2_bucal2_tbl` WHERE `id` = ? ";
            $mystmt2 = $db->prepare($MYsql2);
            $mystmt2->bind_param('i',$key);
            $mystmt2->execute();
            $result2 = $mystmt2->get_result();
                 while ($data = $result2->fetch_assoc())
                    {
                        $id =   $data['id'];
                        $title = $data['title'];
                        $order_no = $data['order_no'];
                        $description = $data['description'];
                        $remarks = $data['remarks'];
                        $type = $data['type'];
                        $no = $data['no'];
                        $date_conducted = $data['date_conducted'];
                        $no_present = $data['no_present'];
                        $no_absent = $data['no_absent'];
                        $month = $data['month'];
                        $year = $data['year'];
                    }
        }
  ?>

 <div class="card">
    <div class="card-header">
        <strong>Part II Information</strong>
    </div>
<div class="card-body card-block">
    <!-- monthly_part2.php -->
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
            <input type="hidden" id="ids" name="ids"  class="form-control" 
                value="<?php echo $id ?>">
            <div class="col col-md-4">
                <label for="title" class="form-control-label">TITLE RESOLUTION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="title" name="title"  class="form-control" 
                value="<?php echo $title ?>">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="order" class=" form-control-label">ORD. NO</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="order" name="order"  class="form-control" 
                value="<?php echo $order_no ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="description" class=" form-control-label">DESCRIPTION OF PASSED ENACTED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="description" name="description"  class="form-control" 
                value="<?php echo $description ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="remarks" class=" form-control-label">REMARKS ACTION TAKEN</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="remarks" name="remarks"  class="form-control" 
                value="<?php echo $remarks ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="type" class=" form-control-label">TYPE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="type" name="type"  class="form-control" 
                value="<?php echo $type ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="number" class=" form-control-label">NO</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="number" name="number"  class="form-control" 
                value="<?php echo $no ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="conducted" class=" form-control-label">DATE CONDUCTED</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="date" id="conducted" name="conducted"  class="form-control" 
                value="<?php echo $date_conducted ?>">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="present" class=" form-control-label">NO. OF PRESENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="present" name="present"  class="form-control" 
                value="<?php echo $no_present ?>">
               
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="absent" class=" form-control-label">NO. OF ABSENT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="absent" name="absent"  class="form-control" 
                value="<?php echo $no_absent ?>">
               
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
		    <button type="submit" class="btn btn-primary btn-sm" name="updatemonthly2" value="ADD">
		        <i class="fa fa-dot-circle-o"></i> UPDATE
		    </button>
    	</div>
    </form>
</div>
</div>