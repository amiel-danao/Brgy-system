<?php 
  	include("include/config.php");
  	include('include/header.php'); ?>

  	<div class=" google-map px-0 mx-0 mb-4">
		<div class="container google">
		<!-- 	<frameset> -->
			<div id="maps" class="shadow p-3 mb-5 bg-white rounded"></div>
			<!-- </frameset> -->
		</div>
    </div>

	<?php include('include/footer.php'); ?>
	


<script src="include/js/jquery-3.3.1.js"></script>
<script src="include/js/bootstrap.min.js"></script>
<script src="java/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL0vpE4FIvhD5bK1BOgy_iFjzBYNFiHqY&callback=loadMap"></script>
  </body>
</html>