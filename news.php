<?php
	include('include/config.php');
  	include('include/header.php'); 
  	
 ?>
 <div class="main mt-3">
 	<div class="news_content" >
 		<div class="container px-0">

 	<!-- 		<div class="header p-3 px-0 border border-dark bg-light">
 				<div class="row">
 		<div class="col-md-7">
 			<form action="" method="POST" accept-charset="utf-8" class="form-inline">
 				<div class="col-md-12">
 						<select name="Filter" class="form-control form-control-sm">
 							<option value=""selected="selected" disabled="disabled">Filter By Months</option>
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
 		
 						<select name="Filter" class="form-control">
 							<option value=""selected="selected" disabled="disabled">Filter By Year</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
 						</select>
 					 <button type="submit" class="btn btn-primary" name="Search"> Filter</button>
 				</div>
 			</form>
 		</div>
<div class="col-md-4">
	<form action="" method="POST" class="form-header">
		<input type="text" name="Snews" class="form-control border-dark" placeholder="Search for Topic...                   ">
		<button type="submit" class="btn btn-primary mt-2" name="SearNews">Search </button>
	</form>
</div>
 				</div>
 			</div> -->
<?php 

 if(isset($_GET['page'])) 
 {
 	$page = $_GET['page'];
 	
 }else{
 	$page = 1;
 }

 $sqlp = "SELECT * FROM `cms_table`";
 $stmtpage = $db->prepare($sqlp);
 $stmtpage->execute();
 $resultdata = $stmtpage->get_result();
 // $stmtpage->fetch();
 // $stmtpage->close();
 $row = $resultdata->num_rows;
 //echo $row;
   $no_of_records_per_page = 5;

  $offset = ($page - 1) *   $no_of_records_per_page;
  $pages = ceil($row / $no_of_records_per_page);
 //echo $pages; 
 	?>
<?php 
date_default_timezone_set('Asia/Manila'); 
	$current =  date("Y");
	$currents = $current ."-31" ."-12";
	$currentz = $current ."-01" ."-01";
	// ORDER BY published_date
	//ORDER BY published_date
	//WHERE `published_date`>=? AND `published_date`<=?
	//ORDER BY id
	$sql = "SELECT * FROM `cms_table` ORDER BY published_date DESC LIMIT $offset, $no_of_records_per_page ";
	$stmt = $db->prepare($sql);
   // $stmt->bind_param('ii',$currentz,$currents);
	$stmt->execute();
	$result = $stmt->get_result();




		// if($result->num_rows === 0)
		// 	{
		// 		 echo "<script>alert('Sorry We have No News.') </script>";
		//         echo "<script>window.location.href = 'index.php'; </script>";

  //           ORDER BY published_date
		// 	$sql2 = "SELECT * FROM `cms_table` LIMIT $offset, $no_of_records_per_page ";
		// 	$stmt2 = $db->prepare($sql2);
		// 	$stmt2->execute();
		// 	$result = $stmt2->get_result();
		// 		if($result->num_rows === 0)
		// 			{
		// 				 echo "<script>alert('Sorry We have No News.') </script>";
		// 				echo "<script>window.location.href = 'index.php'; </script>";
		// 				echo "No record found";
		// 			}
		// 	}

 if(isset($_POST['SearNews']))
	{
		$Keyword = filter_var("%".$_POST['Snews']."%", FILTER_SANITIZE_STRING);
		$sql = "SELECT * FROM `cms_table` WHERE `title` LIKE ? OR `author` LIKE ? OR `content1` LIKE ? OR `published_date` LIKE ? LIMIT 
		$offset, $no_of_records_per_page";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ssss',$Keyword,$Keyword,$Keyword,$Keyword);
		$stmt->execute();
		$result = $stmt->get_result();
			if($result->num_rows === 0)
				{
					echo "<script>alert('Sorry No Found Result.') </script>";
			        echo "<script>window.location.href = 'news.php'; </script>";
			        //echo "No record found";
				}
	}

// if(isset($_POST['filterNews']))
// 	{
// 		$Keyword = filter_var($_POST['Filter']."%", FILTER_SANITIZE_STRING);
// 		$sql = "SELECT * FROM `cms_table` WHERE `published_date` LIKE ? ORDER BY `id` DESC ";
// 		$stmt = $db->prepare($sql);
// 		$stmt->bind_param('s',$Keyword);
// 		$stmt->execute();
// 		$result = $stmt->get_result();
// 			if($result->num_rows === 0)
// 				{
// 					echo "<script>alert('Sorry No Found Result.') </script>";
// 			        echo "<script>window.location.href = 'news.php'; </script>";
// 				}
// 	}
 ?>
 
 <div class="row">
	<section>
		<div class="container">
		<div class="row justify-content-center mx-auto">
                <div class="col-12 col-xl-8">
 <?php 
	while ($data = $result->fetch_assoc())
	 	{
	 		$id = $data['id'];
			$cms_title = $data['title'];
	        $cms_author =  $data['author'];  
            $time1 = strtotime($data['published_date']);
            $published_date = date("F-d-Y", $time1);
	        $cms_content1 =  $data['content1'];
	        $cms_content2 =  $data['content2'];
	        $img = $data['image']; 
	?>
			
	<!-- //<div class="col-md-8"> -->
	<div class="article-head">
		<div class="articles" style="background-color: white;">
			<div class="article mx-auto">
				<div class="article-body">
					<!-- <div> -->
	<h3 class="ml-3 mt-3" style="margin-bottom: 0; font-weight: bolder;"><?php echo 
	$cms_title ?></h3>
		<hr>
	<p class="ml-3"><strong>Written by: </strong><?php echo $cms_author ?>.<strong> on: </strong><?php echo $published_date ?></p>
		<div class="wrapper-img text-center ml-3">
        	<img src="admin/images/<?php echo $img ?>" style="width: 750px; height: 280px;" class="img-fluid">
		</div>
		<div class="container">
			<div class="col-md-12">
   			<p class="content text-justify">
        		<?php echo substr($cms_content1,0,100) ?></p>
        	</div>
        	<div class="col-md-12">
   			<p class="content text-justify "><?php echo substr($cms_content2,0,150)?></p>
   			</div>
   		<a href="view_news.php?news_id=<?php echo $id ?>" class="btn btn-primary btn-sm"><i class="fa fa-book" aria-hidden="true"></i>
 READ MORE....</a>
	</div>
	<hr size="3px">
				</div>
				<!-- </div> -->		
			</div>
		</div>
	</div>
<!-- </div> -->
<?php } 
// for($page=1;$page<=$pages;$page++)  {
// 	echo '<a href="news.php?page='.$page.'">'.$page.'</a>';
// }

?>	


<ul class="pagination justify-content-center mb-4 mt-2">
        <li class="page-item"><a href="?page=1"  class="page-link">First</a></li>
        <li class="<?php if($page <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($page >= $pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($page >= $pages){ echo '#'; } else { echo "?page=".($page + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?page=<?php echo $pages; ?>" class="page-link">Last</a></li>
    </ul>
</div>


<div class="col-12 col-md-6 col-lg-5 col-xl-4">
    <div class="sidebar-area bg-white mb-30 box-shadow">
	
	<section class="pt-4">
		<div class="mx-4 shadow p-3 mb-5 bg-white rounded">
			<form action="news_search.php" method="POST" class="form-header">
				<input type="text" name="Searchnews" class="form-control border-dark" placeholder="Search for Topic..." required maxlength="27">
				<button type="submit" class="btn btn-primary btn-sm mt-2" name="Search"><i class="fa fa-search" aria-hidden="true"></i> Search </button>
			</form>
		</div>
    </section>

<!--  <section class="pb-1">
	<div class="mx-4 shadow p-3 mb-5 bg-white rounded">
	 <form action="" method="POST" class="form-header">
		<select name="Filter" class="form-control border-dark" required>
			<option value=""selected="selected" disabled="disabled">Filter By Year</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2022">2023</option>
	 	</select>
	 		<button type="submit" class="btn btn-primary btn-sm mt-2" name="filterNews"><i class="fa fa-filter" aria-hidden="true"></i> Filter by Year</button>
		</form>
	</div>
 </section> -->

    <section class="pb-1">
	  	<div class="mx-4 card-header bg-primary text-center">
	       <strong class="text-white">PHILIPPINES STANDARD TIME</strong>
	    </div>
	  	
		<div class="mx-4 shadow p-3 mb-5 bg-white rounded">
		 	<h3 class="text-center" id="clock"></h3>
		 	<h6 class="text-center" id="date"></h6>
		</div><?php //echo date("d F Y l") ?>
    </section>

     <!-- <div class="single-sidebar-widget p-50 mt-4 mx-4 pb-3">
   
        <div class="section-heading">
            <h3 class="text-center">Categories</h3>
        </div>
  
        <ul class="catagory-widgets list-unstyled list-group">
            <li class="list-group-item list-unstyled"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</span> <span>35</span></a></li>
            <li class="list-group-item"><a href="#" class="group-item-action"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</span> <span>30</span></a></li>
        </ul>
    </div> -->

	</div>
</div>

</div>
</div>
</section>

	

		
			<!-- 	</div> -->

			</div>
		</div>	
	</div>
</div>
<!-- <script>
function renderTime() {
	var currentTime = new Date();
	var diem = "AM";
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
	setTimeout('renderTime()',1000);
    if (h == 0) {
		h = 12;
	} else if (h > 12) { 
		h = h - 12;
		diem="PM";
	}
	if (h < 10) {
		h = "0" + h;
	}
	if (m < 10) {
		m = "0" + m;
	}
	if (s < 10) {
		s = "0" + s;
	}
    var myClock = document.getElementById('clock');
	myClock.textContent = h + " : " + m + " : " + s + "  " + diem;
	myClock.innerText = h + " : " + m + " : " + s + "  " + diem;

}
renderTime();
</script> -->
<?php include('include/footer.php'); ?>
<script src="include/js/jquery-3.3.1.js"></script>
<script src="include/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$('#clock').load('include/time.php');
			$('#date').load('include/date.php');
		},1000);

	});
</script>
  </body>
</html>
<style>
.sidebar-area {
    position: relative;
    z-index: 1;
}

.catagory-widgets {
  position: relative;
  z-index: 1; }
  .catagory-widgets li a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 15px;
    font-size: 16px; }
    .catagory-widgets li a:hover, .catagory-widgets li a:focus {
      color: #ed3974; }
  .catagory-widgets li:last-child a {
    margin-bottom: 0; }
/*  .side  {
     z-index: 0;
    position: fixed;
    top: 203px;
    left:815px;
}
.content {
	  z-index: 0;
    position: absolute;
    left: 70px;
}*/
</style>