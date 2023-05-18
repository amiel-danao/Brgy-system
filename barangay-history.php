<?php 
	include('include/config.php');
	include('include/header.php');
  		  
  		if(!isset($_GET['barangay']) || empty($_GET['barangayname']))
			{
				header("Location: index.php");
			} 
		else
			{
				$bcode = filter_var($_GET['barangay'], FILTER_SANITIZE_STRING);
				$bname = filter_var($_GET['barangayname'], FILTER_SANITIZE_STRING);
			}?>
	<div class="container d-flex h-100 flex-column" >
		<div class="history" >
		<!-- style="min-height:100vh;"> -->
			<div class="header text-center">
				<h2 class="font-weight-bold text-uppercase">Barangay <?php echo $bname ?></h2>
				<hr class="border-dark">
			</div>
			<div class="contents">
				<div class="row">
					<div class="container">
	              <div class="col-md-12 h-100">
				
			 <?php switch ($bcode) {
				    case "BC1":
				        include('include/barangay-history/bucal1.php');
				        break;
				    case "BC2":
				        include('include/barangay-history/bucal2.php');
				        break;
				    case "BC3A":
				        include('include/barangay-history/bucal3a.php');
				        break;
				    case "BC3B":
				        include('include/barangay-history/bucal3b.php');
				        break;
				    case "BC4A":
				        include('include/barangay-history/bucal4a.php');
				        break;
				    case "BC4B":
				        include('include/barangay-history/bucal4b.php');
				        break;
				    case "CP":
				        include('include/barangay-history/caingin.php');
				        break;
				    case "G1A":
				        include('include/barangay-history/garitaA.php');
				        break;
				    case "G1B":
				        include('include/barangay-history/garitaB.php');
				        break;
				    case "LM":
				        include('include/barangay-history/layong-mabilog.php');
				        break;
				    case "MB":
				        include('include/barangay-history/mabato.php');
				        break;
				    case "PT1":
				        include('include/barangay-history/pantihan1.php');
				        break;
				    case "PT2":
				        include('include/barangay-history/pantihan2.php');
				        break;
				    case "PT3":
				        include('include/barangay-history/pantihan3.php');
				        break;
				    case "PT4":
				        include('include/barangay-history/pantihan4.php');
				        break;
				    case "PSA":
				        include('include/barangay-history/pinagsanhanA.php');
				        break;
				    case "PSB":
				        include('include/barangay-history/pinagsanhanB.php');
				        break;
				    case "PB1A":
				        include('include/barangay-history/poblacion1.php');
				        break;

				    case "PB2A":
				        include('include/barangay-history/poblacion2A.php');
				        break;
				    case "PB2B":
				        include('include/barangay-history/poblacion2B.php');
				        break;
				    case "SMA":
				        include('include/barangay-history/sanmiguelA.php');
				        break;
				    case "SMB":
				        include('include/barangay-history/sanmiguelB.php');
				        break;
				    case "STM":
				        include('include/barangay-history/stamercedes.php');
				        break;
				    case "PB1B":
				        include('include/barangay-history/poblacion1b.php');
				        break;
				    case "TLP":
				        include('include/barangay-history/talipusngo.php');
				        break;
				    case "TSM":
				        include('include/barangay-history/tulay-silangan.php');
				        break;
				    case "TKM":
				        include('include/barangay-history/tulay-kanluran.php');
				        break;
				    } ?>
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>

  	<?php include('include/footer.php'); ?>
<script src="include/js/jquery-3.3.1.js"></script>
<script src="include/js/bootstrap.min.js"></script>

  </body>
</html>