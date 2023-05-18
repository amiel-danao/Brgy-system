<?php 
function getallpopulation($bcode){
     global $db; 
  $sql1 = "SELECT COUNT(*) FROM `residents_tbl` WHERE `brgy_code`=?";
  $stmt1 = $db->prepare($sql1);
  $stmt1->bind_param('s',$bcode);
  $stmt1->execute();
  $stmt1->bind_result($totalp);
  $stmt1->fetch();
  $stmt1->close();
  return $totalp;
}

function getallhh($bcode){
     global $db; 
  $sql2 = "SELECT COUNT(DISTINCT `house_no`)  FROM `residents_tbl` WHERE `brgy_code`=?";
  $stmt2 = $db->prepare($sql2);
  $stmt2->bind_param('s',$bcode);
  $stmt2->execute();
  $stmt2->bind_result($totalhh);
  $stmt2->fetch();
  $stmt2->close();
  return $totalhh;
}

function getallreligion($bcode){
  global $db; 
  $bsql = "SELECT COUNT(religion) FROM `residents_tbl` WHERE `brgy_code`= ? ";
  $bstmt = $db->prepare($bsql);
  $bstmt->bind_param('s',$bcode);
  $bstmt->execute();
  $bstmt->bind_result($all);
  $bstmt->fetch();
  $bstmt->close();
  return $all;
}
$vision = "vision";
$mission = "mission";
$goal = "goal";
?>

<div class="row">
  <div class="col-md-3">
    <div class="nav flex-column nav-pills border-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="border: 1px solid black;">History</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="border: 1px solid black;">Vision, Mission & Goal</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="border: 1px solid black;">Profile</a>

      <a class="navbar" href="organizational.php?barangay=<?php echo $bcode ?>"  style="border: 1px solid black;">Organizational Chart</a>
      <!-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="border: 1px solid black;">Organizational Chart</a> -->

    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content" id="v-pills-tabContent">

      <div class="tab-pane fade show active well" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><!-- End History Part -->
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <section>
        <div class="text-center">
          <h3 class="font-weight-bold">HISTORICAL BACKGROUND</h3>  
        </div>
      </section>

 	<div class="tsimg">
				<img src="image/<?php echo $bcode ?>.png" style="height: 230px; width: 250px; border: 1px solid black; float: left; margin-left: 10px; margin-right: 10px;">
	</div>
	<div>
				<p>Ang pangalan ng komunidad ay Bucal 3B nasa silangang bahagi ng Maragondon, Cavite, 56 kilometrong layo nito mula sa Maynila.</p>

				<p>Ang bucal ay nakuha sa salitang bumubukal, dahil marami sa lugar nito ay bumubukal ang tubig na maiinom at bumubukal ang tubig particular sa tabing ilog na maraming matatagpuan ay pansol at balon na nagsisilbing pangunahing pinagkukunan ng tubig na maiinom at paggamit ng tubig sa araw-araw nilang pamumuhay.</p>

				<p>Ang bucal ay nahahati sa dalawa dahil sumobra ang bilang ng botante noong 1979 at sa bisa ng pagkakaroon ng isang referendum na mapaghiwalay ang barangay na ito mula noon ay nahati ito sa dalawa, ang bucal 3-A at bucal 3-B. Walang naitayang epidemya o kumakalat na sakit sa barangay mula ng ito ay naitatag.</p>						
	</div>	

				<section>
					<div class="text-center">
						<h5 class="font-weight-bold">LEGAL NA BASEHAN ANG PAGKAKATATAG NG BARANGAY</h5>
					</div>
					<hr>	
						<p>Ang simula ng pagkakatatag ng barangay ay mula sa baryo o maging barangay na iniatas ng chief executive.</p>

						<p>Ang Bucal 3-A ay bumubuo ng 180 Households. Ang tanging kabuhayan lng din ng mga mamamayan dito ay ang maghabi samantalang ngayon ay may labing –apat na tindahan na ang nagmamay-ari nito. Mas pinaryoridad ng aming Barangay ang pagpapagawa ng Basketball Court at Barangay Hall para na rin sa aming mga kabarangay.</p>
						

						
						<h5 class="font-weight-bold text-center">MGA PISTA / SELEBRASYON AT PETSA</h5>
				<hr>
						<p>Ang kapistahan ng barangay ay nagaganap tuwing ika 12 at 13 ng Hunyo na kaarawan ng mahal na patron San Antonio De Padua.</p>

	<!-- <p class="text-center">Mahal na araw ------------------------------------ Marso o Abril</p>
	<p class="text-center">Pista ------------------------------------------------- June 12 & 13</p>
	<p class="text-center">Undas ----------------------------------------------- Nobyembre 1</p>
	<p class="text-center">Pasko ------------------------------------------------ Disyembre 25</p>
	<p class="text-center">Bagong Taon --------------------------------------- Enero</p> -->
	
	<!-- <ul>
	    <li>Mahal na araw ------------------------------------ Marso o Abril</li>
	    <li>Mahal na araw ------------------------------------ Marso o Abril</li>
	    <li>Mahal na araw ------------------------------------ Marso o Abril</li>
	    <li>Mahal na araw ------------------------------------ Marso o Abril</li>
	</ul> -->
				</section>

  </div>
<!-- End History Part -->
</div>



      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <section>
    <div class="text-center">
    <h1 class="font-weight-bold">Vision</h1>
  <hr>  
    </div>
    <div class="ml-3 mr-3 text-center">
  <?php 
  $MYsql3 = "SELECT * FROM `brgy_info_tbl` WHERE `barangay_code`=? AND `type`=? ";
$mystmt3 = $db->prepare($MYsql3);
$mystmt3->bind_param('ss',$bcode,$vision);
$mystmt3->execute();
$result3 = $mystmt3->get_result();
$numberv =1 ;
     while ($data = $result3->fetch_assoc())
            
       { ?>
              <!-- <p class="font-italic">“Magkaroon ng pantay- pantay na pagkakataong makamtan ang mga pangunahing pangangailangan sa pamamagitan ng isang mahusay na pamamahalan.”</p> -->
    <p class="font-italic">“<?php echo $data['message']; ?>”</p>
  <?php } ?>
    </div>
  </section>

    

  <section>
    <div class="text-center">
    <h1 class="font-weight-bold">Mission</h1>
  <hr>  
    </div>
    <div class="ml-3 mr-3 text-center">
    <?php $MYsql2 = "SELECT * FROM `brgy_info_tbl` WHERE `barangay_code`=? AND `type`=? ";
      $mystmt2 = $db->prepare($MYsql2);
      $mystmt2->bind_param('ss',$bcode,$mission);
      $mystmt2->execute();
      $result2 = $mystmt2->get_result();

     while ($data = $result2->fetch_assoc())
            { ?>
              <!-- <p class="font-italic">“Isang mapayapa at maunlad na pamayanan na may pananalig at takot sa Diyos. tumatalima sa batas na umiiral, nagtitiwala sa lakas ng pagkakaisa at kumakalinga sa kalikasan.”</p> -->
    <p class="font-italic">“ <?php echo $data['message']; ?>”</p>
  <?php } ?>
    </div>
  </section>

    <section>
        <div class="text-center">
        <h1 class="font-weight-bold">Goal</h1>
      <hr>  
        </div>
        <div class="ml-3 mr-3 text-center">
          <!-- <p class="font-italic">“Maiangat ang antas ng pamumuhay ng mga mamamayan at mapanatili ang isang mapayapang pamayanan.”</p> -->
  <?php 
        $sqlg = "SELECT * FROM `brgy_info_tbl` WHERE `barangay_code`=? AND `type`=? ";
        $stmtg = $db->prepare($sqlg);
        $stmtg->bind_param('ss',$bcode,$goal);
        $stmtg->execute();
        $result = $stmtg->get_result();
          while ($data = $result->fetch_assoc())
                  {
?>            <p class="font-italic">“ <?php echo $data['message']; ?>”</p>
          <?php } ?>
      </div>
    </section>      
      </div>


      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

   <section>
      <div class="text-center">
        <h5 class="font-weight-bold">DEMOGRAPHY</h5>
        <h6 class="font-weight-bold"><p>Population</p></h6>
      </div>
    </section>

    <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="border-0">
      <tr>
        <th>Population size, growth and density</th>
        <th></th>
      </tr>

       <tr>
        <th >Total Population</th>
         <th ><?php echo $total =  getallpopulation($bcode);?></th>
      </tr>
       <tr>
        <th >Total No. Of HH</th>
         <th ><?php echo $totalh = getallhh($bcode);?></th>
      </tr>
    </thead>
  </table>
</div>
</div>

  <section>
    <div class="pull-left">
      <p>Barangay <?= $bname ?> population as of now is placed at <?php echo $total ?> which comprise a total household of <?php echo $totalh ?>.</p>
    </div>
  </section>

  <section>
    <div class="pull-left">
      <h5 class="font-weight-bold"><p>Distribution of Population</p></h5>
    </div>
  </section>

<div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="border-0">
      <tr>
        <th>Sitio Name</th>
        <th colspan="3" class="text-center">Population</th>
        <th class="text-center">No. of HH</th>
      </tr>
  
  <tr>
    <th></th>
        <th class="text-center">Male</th>
        <th class="text-center">Female</th>
        <th class="text-center">Total</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <?php $bsql = "SELECT `street`, COUNT(CASE WHEN gender = 'Male' THEN id END)as m,
COUNT(CASE WHEN gender = 'Female' THEN id END) as f, 
COUNT(Distinct house_no) as th FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY street ";
$bstmt = $db->prepare($bsql);
$bstmt->bind_param('s',$bcode);
$bstmt->execute();
$Result = $bstmt->get_result();
$totalsitiof = 0;
$totalsitiom = 0;
$totalhns = 0;
$totalmf = 0;
$totalgender = 0;
 while ($data = $Result->fetch_assoc())
 { 

  ?>
        <td><?= $data['street']; ?></td>
        <td class="text-center"><?= $data['m'] ?></td>
        <td class="text-center"><?= $data['f'] ?></td>
        <?php  $totalmf = $data['m'] + $data['f'] ?>
        <td class="text-center"><?= $totalmf ?></td>
        <td class="text-center"><?= $data['th'] ?></td>
      </tr>
  <?php  $totalsitiom += $data['m'];
   $totalsitiof += $data['f'];
   $totalhns  += $data['th'];
   $totalgender += $totalmf ; ?>
  <?php 
} ?>
  <tr>
    <td class="font-weight-bold">TOTAL</td>
    <td class="text-center font-weight-bold"><?= $totalsitiom ?></td>
    <td class="text-center font-weight-bold"><?= $totalsitiof ?></td>
    <td class="text-center font-weight-bold"><?= $totalgender ?></td>
    <td class="text-center font-weight-bold"><?= $totalhns ?></td>
  </tr>
  </tbody>
  </table>
</div>
</div>

  <div class="pull-left">
    <p>Based on the Barangay Record as of now, Barangay <?= $bname ?>  has a total population of <?= $totalhns ?>  coming from <?= $totalgender ?> households. The data reveals what the most populated area of barangay has a great population to the least population.</p>
  </div>

  <section>
    <div class="pull-left">
      <h5 class="font-weight-bold"><p>Age and Sex Distribution</p></h5>
    </div>
  </section>

<!--  age group  -->
<div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="border-0">
      <tr>
        <th>AGE GROUP</th>
        <th class="text-center">Both Sexes</th>
        <th class="text-center">Male</th>
        <th class="text-center">Female</th>
      </tr>
  
    </thead>
    <tbody>
<?php 
  $bsql = "SELECT COUNT(CASE WHEN age = 0 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age = 0 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 1 AND age < 18 AND gender = 'Male' THEN id END),
  COUNT(CASE WHEN age >= 1 AND age < 18 AND gender = 'Female' THEN id END),

  COUNT(CASE WHEN age >= 18 AND age <= 30 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 18 AND age <= 30 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 31 AND age <= 45 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 31 AND age <= 45 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 46 AND age <= 60 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 46 AND age <= 60 AND gender = 'Female' THEN id END),

  COUNT(CASE WHEN age >= 61 AND age <= 75 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 61 AND age <= 75 AND gender = 'Female' THEN id END), 

  COUNT(CASE WHEN age >= 76 AND age <= 100 AND gender = 'Male' THEN id END), 
  COUNT(CASE WHEN age >= 76 AND age <= 100 AND gender = 'Female' THEN id END), 

  COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$bcode);
    $bstmt->execute();
    $bstmt->bind_result($a0m,$a0f,$a1m,$a1f,$a2m,$a2f,$a3m,$a3f,$a4m,$a4f,$a5m,$a5f,$a6m,$a6f,$at);
    $bstmt->fetch();
    $bstmt->close();
    $Totalage1 = 0; $Totalage2 = 0; $Totalage3 = 0; $Totalage4 = 0; $Totalage5 = 0; $Totalage6 = 0;
    $Totalage7 = 0; $totalgendersex= 0;
   ?>
   <tr>
      <td>Under 1 yrs old</td>
      <td class="text-center"><?= $a0m  ?></td>
      <td class="text-center"><?= $a0f  ?></td>
      <?php $Totalage1 = $a0m + $a0f; ?>
      <td class="text-center"><?= $Totalage1  ?></td>
   </tr>

    <tr>
      <td>Under 18 yrs old</td>
      <td class="text-center"><?= $a1m  ?></td>
      <td class="text-center"><?= $a1f  ?></td>
      <?php $Totalage2 = $a1m + $a1f; ?>
      <td class="text-center"><?= $Totalage2  ?></td>
   </tr>

    <tr>
      <td>18 - 30 yrs old</td>
      <td class="text-center"><?= $a2m  ?></td>
      <td class="text-center"><?= $a2f  ?></td>
      <?php  $Totalage3 = $a2m + $a2f; ?>
      <td class="text-center"><?= $Totalage3  ?></td>
   </tr>

    <tr>
      <td>31 - 45 yrs old</td>
      <td class="text-center"><?= $a3m  ?></td>
      <td class="text-center"><?= $a3f  ?></td>
      <?php  $Totalage4 = $a3m + $a3f; ?>
      <td class="text-center"><?= $Totalage4  ?></td>
   </tr>

    <tr>
      <td>46 - 60 yrs old</td>
      <td class="text-center"><?= $a4m  ?></td>
      <td class="text-center"><?= $a4f  ?></td>
      <?php   $Totalage5 = $a4m + $a4f;?>
      <td class="text-center"><?= $Totalage5  ?></td>
   </tr>

   <tr>
      <td>61 - 75 yrs old</td>
      <td class="text-center"><?= $a5m  ?></td>
      <td class="text-center"><?= $a5f  ?></td>
      <?php  $Totalage6 = $a5m + $a5f; ?>
      <td class="text-center"><?= $Totalage6  ?></td>
   </tr>

   <tr>
      <td>76 - 100 yrs old</td>
      <td class="text-center"><?= $a6m  ?></td>
      <td class="text-center"><?= $a6f  ?></td>
      <?php  $Totalage7 = $a6m + $a6f; ?>
      <td class="text-center"><?= $Totalage7  ?></td>
   </tr>


   <tr>
      <td class="font-weight-bold">TOTAL</td>
      <?php $totalm = $a0m + $a1m + $a2m + $a3m + $a4m + $a5m + $a6m;
  $totalf = $a0f + $a1f + $a2f + $a3f + $a4f + $a5f + $a6f;
  $totalgendersex = $Totalage1 + $Totalage2 + $Totalage3 + $Totalage4+ $Totalage5+ $Totalage6+ $Totalage7;
   ?>
      <td class="text-center font-weight-bold"><?= $totalm  ?></td>
      <td class="text-center font-weight-bold"><?= $totalf  ?></td>
      <td class="text-center font-weight-bold"><?= $totalgendersex  ?></td>
   </tr>

  </tbody>
  </table>
</div>
</div>
  <section>
  <div class="pull-left">
    <p>Based on the Barangay Record as of now, Barangay <?= $bname ?>  has The total population by age group and sex is placed at <?= $totalgendersex ?>; it comprises of <?= $totalm ?> male and <?= $totalf ?> female,</p>
  </div>
</section>
<!-- End age group  -->


 <!-- marital status -->
   
  <section>
    <div class="pull-left">
      <h5 class="font-weight-bold"><p>Marital Status</p></h5>
    </div>
  </section>
<div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="border-0">
      <tr>
        <th> Civil Status </th>
        <th class="text-center">Population</th> 
        <th class="text-center">%</th>
      </tr>
  
    </thead>
    <tbody>
<?php 
$bsql = "SELECT COUNT(CASE WHEN status = 'Single' THEN id END), 
        COUNT(CASE WHEN status = 'Married' THEN id END), 
        COUNT(CASE WHEN status = 'Widowed' THEN id END), 
        COUNT(CASE WHEN status = 'Divorced' THEN id END), 
        COUNT(CASE WHEN status = 'Separated' THEN id END),
        COUNT(CASE WHEN status = 'Live-in' THEN id END),
        COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
  $bstmt = $db->prepare($bsql);
  $bstmt->bind_param('s',$bcode);
  $bstmt->execute();
  $bstmt->bind_result($s,$m,$w,$d,$sp,$li,$t);
  $bstmt->fetch();
  $bstmt->close();
  $total = 0 ;
  $convert = 0;
  $totalp = 0;
  ?>
 <tr>
  <td>Single</td>
  <?php 
  if($s == 0){
      $total = 0;
    }else{
      $total = $s / $t;
    }
    $convert = $total * 100; ?>
  <td class="text-center"><?= $s ?></td>
  <td class="text-center"><?= number_format($convert ,2) . "%"?></td>
  <?php $totalp = $convert; ?>
  </tr>


  <tr>
  <td>Married</td>
  <?php 
  if($m == 0){
      $total = 0;
    }else{
      $total = $m / $t;
    }
    $convert = $total * 100;
     ?>
  <td class="text-center"><?= $m ?></td>
  <td class="text-center"><?= number_format($convert ,2) . "%"?></td>
  <?php  $totalp = $totalp + $convert; ?>
  </tr>

  <tr>
  <td>Widowed</td>
  <?php 
   if($w == 0){
       $total = 0;
    }else{
       $total = $w / $t;
    }
   $convert = $total * 100;
     ?>
  <td class="text-center"><?= $w ?></td>
  <td class="text-center"><?= number_format($convert ,2) . "%"?></td>
  <?php  $totalp = $totalp + $convert; ?>
  </tr>

   <tr>
  <td>Divorced</td>
  <?php 
    if($d == 0){
         $total = 0;
    }else{
       $total = $d / $t;
    }
   $convert = $total * 100;
     ?>
  <td class="text-center"><?= $d ?></td>
  <td class="text-center"><?= number_format($convert ,2) . "%"?></td>
  <?php  $totalp = $totalp + $convert; ?>
  </tr>

  <tr>
  <td>Separated</td>
  <?php 
      if($sp == 0){
    $total = 0;
    }else{
       $total = $sp / $t;
    }
   $convert = $total * 100;  ?>
  <td class="text-center"><?= $sp ?></td>
  <td class="text-center"><?= number_format($convert,2) . "%" ?></td>
  <?php  $totalp = $totalp + $convert; ?>
  </tr>

   <tr>
  <td>Live-in</td>
  <?php 
     if($li == 0){
        $total = 0;
    }else{
       $total = $li / $t;
    }
   $convert = $total * 100;?>
  <td class="text-center"><?= $li ?></td>
  <td class="text-center"><?= number_format($convert,2) . "%" ?></td>
  <?php  $totalp = $totalp + $convert; ?>
  </tr>

  <tr>
  <td class="text-center font-weight-bold">TOTAL</td>
  <td class="text-center font-weight-bold"><?= $t ?></td>
  <td class="text-center font-weight-bold"><?= number_format($totalp ,2) . "%" ?></td>
  </tr>

  </tbody>
  </table>
</div>
</div>
   <!-- end  marital status -->

  <section>
    <div class="pull-left">
      <h5 class="font-weight-bold"><p>Labor Force</p></h5>
    </div>
  </section>

 <?php 
  $bsql = "SELECT COUNT(DISTINCT CASE WHEN gender = 'Male' THEN house_no END) ,
COUNT(DISTINCT CASE WHEN gender = 'Female' THEN house_no END) , 

COUNT(CASE WHEN job = 'Employed' AND gender = 'Male' THEN id END), 
COUNT(CASE WHEN job = 'Unemployed' AND gender = 'Male'  THEN id END), 
COUNT(CASE WHEN job = 'none' AND gender = 'Male'  THEN id END), 

COUNT(CASE WHEN job = 'Employed' AND gender = 'Female' THEN id END), 
COUNT(CASE WHEN job = 'Unemployed' AND gender = 'Female'  THEN id END), 
COUNT(CASE WHEN job = 'none' AND gender = 'Female'  THEN id END)  
FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$bcode);
    $bstmt->execute();
    $bstmt->bind_result($th,$tn,$em,$uem,$nm,$ef,$uef,$nf);
    $bstmt->fetch();
    $bstmt->close();
    $total = 0;
    $totalpercent = 0;
 ?>

 <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="border-0">
      <tr>
        <th>Sex</th>
        <th class="text-center">Household Population</th> 
        <th class="text-center" colspan="4">IN THE LABOR FORCE</th>
        <th class="text-center">Not in the Labor Force</th>
        <th class="text-center">%</th>
      </tr>
      <tr>
        <th></th>
        <th></th>
        <th>Employed</th>
        <th>%</th> 
        <th>Unemployed</th>
        <th >%</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>Male</td>
        <td class="text-center"><?php echo $th ?></td>
        <td class="text-center"><?php echo $em ?></td>
<?php 
  if($em == 0){
     $total = 0;
  }else {
     $total = $em / $th;
  }
  $totalpercent = $total * 100; 
  ?>
        <td class="text-center"><?php echo number_format($totalpercent,2)."%" ?></td>
        <td class="text-center"><?php echo $uem ?></td>
  <?php if($uem == 0){
     $total = 0;
  }else {
     $total = $uem / $th;
  }
  $totalpercent = $total * 100;
    ?>
        <td class="text-center"><?= number_format($totalpercent,2)."%" ?></td>
        <td class="text-center"><?= $nm ?></td>
  <?php   if($nm == 0){
     $total = 0;
  }else {
     $total = $nm / $th;
  }
  $totalpercent = $total * 100;
  ?>
        <td class="text-center"><?= number_format($totalpercent,2)."%" ?></td>
      </tr>

      <tr>
        <td>Female</td>
        <td class="text-center"><?= $tn ?></td>
        <td class="text-center"><?= $ef ?></td>
  <?php  if($ef == 0){
     $total = 0;
  }else {
     $total = $ef / $tn;
  }
  $totalpercent = $total * 100;?>
        <td class="text-center"><?= number_format($totalpercent,2)."%" ?></td>
        <td class="text-center"><?= $uef ?></td>
        <?php  if($uef == 0){
     $total = 0;
  }else {
     $total = $uef / $tn;
  }
  $totalpercent = $total * 100;
    ?>
        <td class="text-center"><?= number_format($totalpercent,2)."%" ?></td>
        <td class="text-center"><?= $nf ?></td>
<?php 
  if($nf == 0){
     $total = 0;
  }else {
     $total = $nf / $tn;
  }
  $totalpercent = $total * 100;
  ?>
        <td class="text-center"><?= number_format($totalpercent,2)."%" ?></td>
      </tr>

      <tr>
        <td>Both Sex</td>
  <?php $tottalh = 0; $tottale = 0; $tottalu = 0; $tottaln = 0; $tottalt = 0; $tottalprecent = 0;
  $tottalh = $th + $tn; 
   ?>
        <td class="text-center"><?= $tottalh ?> </td>
   <?php 
       $tottale = $em + $ef;
       if($tottale == 0){
           $tottalt = 0;
        }else{
          $tottalt =  $tottale / $tottalh;
        }
         $tottalprecent = $tottalt * 100; ?>
        <td class="text-center"><?= $tottale ?></td>
        <td class="text-center"><?= number_format($tottalprecent,2)."%" ?></td>
  <?php  
     $tottalu = $uem + $uef;
       if($tottalu == 0){
         $tottalt = 0;
       }else{
           $tottalt =  $tottalu / $tottalh;
       }
         $tottalprecent = $tottalt * 100; ?>
        <td class="text-center"><?= $tottalu ?></td>
        <td class="text-center"><?= number_format($tottalprecent,2)."%" ?></td>
  <?php 
   $tottaln = $nm + $nf;
   if($tottaln == 0){
     $tottalt = 0;
  }else{
    $tottalt =  $tottaln / $tottalh;
  }
  $tottalprecent = $tottalt * 100;?>
        <td class="text-center"><?= $tottaln ?></td>
        <td class="text-center"><?= number_format($tottalprecent,2)."%"  ?></td>
      </tr>

 </tbody>
  </table>
</div>
</div>
  <!--- Religion-->
 <section>
    <div class="pull-left">
      <h5 class="font-weight-bold"><p>Religious Affiliation</p></h5>
    </div>
  </section>
<?php 
$bsql = "SELECT `religion`, COUNT(*) FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY religion ";
 $bstmt = $db->prepare($bsql);
 $bstmt->bind_param('s',$bcode);
 $bstmt->execute();
 $row = $bstmt->get_result();
 $total = 0;
 $totalpercent = 0;
 $all = getallreligion($bcode); ?>
  <div class="col-md-12">
 <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="border-0">
      <tr>
        <th>Types of Religion</th>
        <th class="text-center">Population</th> 
        <th class="text-center">%</th>
      </tr>
    </thead>
    <tbody>
<?php while ($data = $row->fetch_assoc())
 { 
 ?>
  <tr>
    <td><?= $data['religion'];  ?></td>
    <td class="text-center"><?= $data['COUNT(*)'];  ?></td>
    <?php 
        $total = $data['COUNT(*)'] / $all;
        $totalpercent = $total * 100;
    ?>
    <td class="text-center"><?= number_format($totalpercent,2)."%"  ?></td>
  </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
<!--- End Religion-->

</div>

<!---end of profile -->

      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      </div>

 
      </div>


    </div>
  </div>
<!-- </div> -->



<style>

@media only screen and (max-width: 375px) {
  .tsimg {
    margin-left: 40px;
  }
}

@media only screen and (max-width: 320px) {
  .tsimg {
    margin-left: 10px;
  }
}
	
</style>

