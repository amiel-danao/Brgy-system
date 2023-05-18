<?php
	include('include/config.php');
  	include('include/header.php'); 
  	
 ?>
 <div class="main mt-3">
 	<div class="news_content" >
 		<div class="container px-0">

 

<?php 

if(isset($_POST['Search']))
	{
		$Keyword = filter_var("%".$_POST['Searchnews']."%", FILTER_SANITIZE_STRING);
		$sql = "SELECT * FROM `cms_table` WHERE `title` LIKE ? OR `author` LIKE ? OR `content1` LIKE ? OR `published_date` LIKE ? ";
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
	<p class="ml-3"><strong>Written by: </strong><?php echo $cms_author ?>, <strong>on: </strong><?php echo $published_date ?></p>
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



</div>


<div class="col-12 col-md-6 col-lg-5 col-xl-4">
    <div class="sidebar-area bg-white mb-30 box-shadow">
	
	<section class="pt-4">
		<div class="mx-4 shadow p-3 mb-5 bg-white rounded">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form-header">
				<input type="text" name="Searchnews" class="form-control border-dark" placeholder="Search for Topic..." required maxlength="27" 
				value="<?php echo isset($_POST['Searchnews']) ? $_POST['Searchnews'] : '' ?>">
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