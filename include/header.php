<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>OBIS DILG</title>
	    <link rel="icon" href="image/Untitled-1.png" type = "image/png">
	    <!-- Customizable CSS -->
	    <link href="stylecss/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	    
	    <link rel="stylesheet" href="stylecss/main-styles.css">   
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="include/css/bootstrap.min.css">
	
	    <link rel="stylesheet" href="stylecss/second-style.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
</head>
  <body>
<div class="wrapper">
	

<div class="headers">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 mx-0 p-0">
				<img class="h-img" src="image/Bagong Maragondon.png">
			</div>
		</div>
	</div>
</div>


<div class="header bg-primary">
	   <div class="container-fluid">
	  		<nav class="navbar navbar-expand-lg bg-primary navbar-light">

		<button class="navbar-toggler mr-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation" style="border: 0.5px solid whitesmoke; color: white;">
          <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="navbar-toggler-icon">   
			</span>
       	</button>

	<div class="collapse navbar-collapse" id="navbarNav">
	<ul class=" nav navbar-nav mx-lg-auto">
		<li class="nav-item">
			<a href="index.php" class="nav-link" id="Home" style="color: white; text-decoration: none; display: block;">Home</a>
		</li>

		<li class="nav-item dropdown">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" area-expanded="false" id="home" style="color: white; text-decoration: none; display: block;">About </a>
			<ul class="dropdown-menu bg-primary border-0" role="menu">
				<li><a href="history.php" style="color: white; text-decoration: none; display: block;">History</a></li>
				<li><a href="geography.php" style="color: white; text-decoration: none; display: block;">Geography</a></li>
			</ul>
		</li>

		<li class="nav-item">
			<a href="news.php" class="nav-link" id="news" style="color: white; text-decoration: none; display: block;">News & Announcements</a>
		</li>

<li class="nav-item dropdown">
	<a href="#"  class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" area-expanded="false" id="org" style="color: white; text-decoration: none; display: block;">Barangay Official</a>

	<ul class="dropdown-menu bg-primary border-0" role="menu">
<?php $sql = "SELECT * FROM `brgy_code_tbl` ORDER BY brgy_name";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result(); 
	 while ($data = $result->fetch_assoc())
        {?>
<li><a href="organizational.php?barangay=<?php echo $data['brgy_code']; ?>" style="color: white; text-decoration: none; display: block;"><?php echo
$data['brgy_name']; ?></a></li>
<?php } ?>
<li><a href="organizational.php?barangay=BC2" style="color: white; text-decoration: none;">Bucal II </a></li>
<li><a href="organizational.php?barangay=BC3A" style="color: white; text-decoration: none;">Bucal III A </a></li>
<li><a href="organizational.php?barangay=BC3B" style="color: white; text-decoration: none;">Bucal III B </a></li>
<li><a href="organizational.php?barangay=BC4A" style="color: white; text-decoration: none;">Bucal IV A</a></li>
<li><a href="organizational.php?barangay=BC4B" style="color: white; text-decoration: none;">Bucal IV B </a></li>
<li><a href="organizational.php?barangay=CP" style="color: white; text-decoration: none;">Caingin Pob.</a></li>
<li><a href="organizational.php?barangay=G1A" style="color: white; text-decoration: none;">Garita I A</a></li>
<li><a href="organizational.php?barangay=G1B" style="color: white; text-decoration: none;">Garita I B</a></li>
<li><a href="organizational.php?barangay=LM" style="color: white; text-decoration: none;">Layong Mabilog</a></li>
<li><a href="organizational.php?barangay=MB" style="color: white; text-decoration: none;">Mabato </a></li>
<li><a href="organizational.php?barangay=PT1" style="color: white; text-decoration: none;">Pantihan I</a></li>
<li><a href="organizational.php?barangay=PT2" style="color: white; text-decoration: none;">Pantihan II </a></li>
<li><a href="organizational.php?barangay=PT3" style="color: white; text-decoration: none;">Pantihan III</a></li>
<li><a href="organizational.php?barangay=PT4" style="color: white; text-decoration: none;">Pantihan IV</a></li>
<li><a href="organizational.php?barangay=STM" style="color: white; text-decoration: none;">Sta. Mercedes (Patungan) </a></li>
<li><a href="organizational.php?barangay=PSA" style="color: white; text-decoration: none;">Pinagsanhan I A</a></li>
<li><a href="organizational.php?barangay=PSB" style="color: white; text-decoration: none;">Pinagsanhan I B</a></li>
<li><a href="organizational.php?barangay=PB1A" style="color: white; text-decoration: none;">Poblacion I A</a></li>
<li><a href="organizational.php?barangay=PB1B" style="color: white; text-decoration: none;">Poblacion I B </a></li>
<li><a href="organizational.php?barangay=PB2A" style="color: white; text-decoration: none;">Poblacion II A</a></li>
<li><a href="organizational.php?barangay=PB2B" style="color: white; text-decoration: none;">Poblacion II B</a></li>
<li><a href="organizational.php?barangay=SMA" style="color: white; text-decoration: none;">San Miguel I A</a></li>
<li><a href="organizational.php?barangay=SMB" style="color: white; text-decoration: none;">San Miguel I B</a></li>
<li><a href="organizational.php?barangay=TLP" style="color: white; text-decoration: none;">Talipusngo</a></li>
<li><a href="organizational.php?barangay=TKM" style="color: white; text-decoration: none;">Tulay Kanluran</a></li>
<li><a href="organizational.php?barangay=TSM" style="color: white; text-decoration: none;">Tulay Silangan</a></li> 


	</ul>
</li>
        
        <li class="nav-item">
			<a href="maragondon_elected_official.php" class="nav-link" id="org" style="color: white; text-decoration: none; display: block;">Maragondon Elected Official</a>
		</li>
		
		<li class="nav-item">
			<a href="map.php" class="nav-link" id="org" style="color: white; text-decoration: none; display: block;">Map</a>
		</li>

		<li class="nav-item">
			<a href="barangay" class="nav-link" id="org" style="color: white; text-decoration: none; display: block;">LogIn</a>
		</li>
   	</ul>
				   </div>
			</nav>
		</div>
	</div>


	
</div>

