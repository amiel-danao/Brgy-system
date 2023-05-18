<?php 	
	include('include/config.php');
	include('include/header.php');
  ?>
		<div class="container">
		<div class="geography">
			<div class="geography-header">
				<h2 class="text-uppercase font-weight-bold">Geography of Maragondon</h2>
				<hr>
			</div>
				<div class="geography-contents">
					<p>Maragondon is 54 kilometers south of Metro Manila and lies at the western part of the province of Cavite. The Municipality is an upland town of Cavite located at the western part of the province at approximately 120-degree 40.4-minute east longitude 120% and 140-degree 10.6 minute north latitude. It is situated along the foothills of the mountain ranges bordering the provinces of Cavite and Batangas and is bounded to the north by Naic and Indang, to the south by Nasugbu, Batangas to the west by Ternate, to the east by Gen. Aguinaldo and Alfonso and to the southeast by Magallanes. Corregidor Island located on the northwest of Maragondon is about 15 kilometers from the nearest coast of Maragondon. Travel between Maragondon and Metro Manila is approximately 54 km and 17 km to Trece Martirez City.</p>
					<?php// echo $six_digit_random_number = mt_rand(100000, 999999); ?>
				</div>
			<div class="g-header">
			<h3 class="ml-3">Maragondon is politically subdivided into 27 barangays.</h3>
			<hr>
			
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-5 col-xs-2">
				<ul>
					<?php 
					$sql = "SELECT `brgy_name`, `address`, `brgy_code` FROM `brgy_code_tbl` ORDER BY brgy_name";
					$stmt = $db->prepare($sql);
					$stmt->execute();
					$output = $stmt->get_result();

					while($result = $output->fetch_assoc()){

					 ?>
				<a href="barangay-history.php?barangay=<?php echo $result['brgy_code'] ?>&barangayname=<?php echo $result['brgy_name'] ?>"><li><?php echo $result['brgy_name'] ?></li></a>
			<?php } ?>
	<!-- 			<li>Bucal II</li>
				<li>Bucal III A</li>
				<li>Bucal III B</li>
				<li>Bucal IV A</li>
				<li>Bucal IV B</li>
				<li>Caingin Pob.</li>
				<li>Garita A</li>
				<li>Garita B</li>
				<li>Layong Mabilog</li>
				<li>Mabato</li>
				<li>Pantihan I</li>
				<li>Pantihan II</li>
				<li>Pantihan III</li>
				<li>Pantihan IV</li>
				<li>Patungan</li>
				<li>Pinagsanhan I A</li>
				<li>Pinagsanhan I B</li>
				<li>Poblacion I A</li>
				<li>Poblacion I B</li>
				<li>Poblacion II A</li>
				<li>Poblacion II B</li>
				<li>San Miguel I A</li>
				<li>San Miguel I B</li>
				<li>Talipusngo</li>
				<li>Tulay Silangan</li>
				<li>Tulay Kanluran</li> -->
				</ul>
			</div>


		</div>
		</div>
	</div>
  	<?php include('include/footer.php'); ?>
<script src="include/js/jquery-3.3.1.js"></script>
<script src="include/js/bootstrap.min.js"></script>

  </body>
</html>