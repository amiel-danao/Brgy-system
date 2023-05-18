<?php
	include('include/config.php'); 
  	include('include/header.php'); 
  	   
if (isset($_GET['news_id']))
{
	$id = $_GET['news_id'];
	$sql = "SELECT * FROM `cms_table` WHERE `id`=? ";
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i',$id);
	$stmt->execute();
	$result = $stmt->get_result();

	 while ($data = $result->fetch_assoc())
	 	{
	 		$id = $data['id'];
			$cms_title = $data['title'];
	        $cms_author =  $data['author'];
	        $published_date =  $data['published_date'];
	        $cms_content1 =  $data['content1'];
	        $cms_content2 =  $data['content2'];
	        $img = $data['image'];
	    }
}
 ?>
  	<div class="article-head">
		<div class="container articles">
			<div class="row">
				<div class="col-md-1">
					
				</div>
				<div class="col-md-10">
					<div class="article mx-auto">
						<div class="article-body">
							<h1 style="margin-bottom: 0; font-weight: bolder;"><?php echo $cms_title ?></h1>
								<hr>
							<p><strong>Author: </strong><?php echo $cms_author ?>, <strong>Published: </strong><?php echo $published_date ?></p>
								<div class="wrapper-img text-center mb-3">
				                	<img class="img-fluid" src="admin/images/<?php echo $img ?>" style="width: 700px; height: 280px;" >
			           			</div>
			           		<p class="content">
			                		<?php echo $cms_content1 ?></p>
			           		<p class="content"><?php echo $cms_content2 ?></p>
			           		<a href="news.php" class="btn btn-primary btn-sm"><i class="fa fa-backward" aria-hidden="true"></i> BACK</a>
						</div>		
					</div>
				</div>
					<div class="col-md-1">
					
				</div>
			</div>
		</div>

	</div>
  	<?php include('include/footer.php'); ?>
<script src="include/js/jquery-3.3.1.js"></script>
<script src="include/js/bootstrap.min.js"></script>

  </body>
</html>