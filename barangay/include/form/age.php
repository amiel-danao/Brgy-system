<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY AGE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-contents m-t-30">
<div class="section__content section__content--p20">
    <div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30 ta">
            <table class="table table-bordered table-striped table-earning ">
                <thead>
                    <!-- <tr>
                        <th class="text-center">UNDER 0 YRS OLD</th>
                        <th class="text-center">UNDER 18</th>
                        <th class="text-center">18 - 30</th>
                        <th class="text-center">31 - 45</th>
                        <th class="text-center">46 - 60</th>
                        <th class="text-center">61 - 75</th>
                        <th class="text-center">76 - 100</th>
                        <th class="text-center">TOTAL</th>
                    </tr> -->
                    <tr>
                        <th class="text-center">Age</th>
                        <th class="text-center">Male</th>
                        <th class="text-center">Female</th>
                        <th class="text-center">Both Sex</th>
                    </tr>
                </thead>
                <tbody>
    <?php 
  // $bsql = "SELECT COUNT(CASE WHEN age = 0 THEN id END), COUNT(CASE WHEN age >= 1 AND age < 18 THEN id END), COUNT(CASE WHEN age >= 18 AND age <= 30 THEN id END), COUNT(CASE WHEN age >= 31 AND age <= 45 THEN id END), COUNT(CASE WHEN age >= 46 AND age <= 60 THEN id END), COUNT(CASE WHEN age >= 61 AND age <= 75 THEN id END), COUNT(CASE WHEN age >= 76 AND age <= 100 THEN id END), COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
  //   $bstmt = $db->prepare($bsql);
  //   $bstmt->bind_param('s',$brgycode);
  //   $bstmt->execute();
  //   $bstmt->bind_result($a0,$a1,$a2,$a3,$a4,$a5,$a6,$at);
  //   $bstmt->fetch();
  //   $bstmt->close();
$totalm = 0;
 $totalf = 0;
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
    $bstmt->bind_param('s',$brgycode);
    $bstmt->execute();
    $bstmt->bind_result($a0m,$a0f,$a1m,$a1f,$a2m,$a2f,$a3m,$a3f,$a4m,$a4f,$a5m,$a5f,$a6m,$a6f,$at);
    $bstmt->fetch();
    $bstmt->close();
    $Totalage1 = 0; $Totalage2 = 0; $Totalage3 = 0; $Totalage4 = 0; $Totalage5 = 0; $Totalage6 = 0;
    $Totalage7 = 0; $totalgendersex= 0;
     ?>
<tr>
    <td>Under 1 yrs old</td>
    <td><?php echo $a0m ?></td>
    <td><?php echo $a0f ?></td>
    <?php $Totalage1 = $a0m + $a0f; ?>
    <td><?php echo $Totalage1 ?></td>
</tr>

<tr>
    <td>Under 18 yrs old</td>
    <td><?php echo $a1m ?></td>
    <td><?php echo $a1f ?></td>
    <?php  $Totalage2 = $a1m + $a1f; ?>
    <td><?php echo $Totalage2 ?></td>
</tr>

<tr>
    <td>18 - 30 yrs old</td>
    <td><?php echo $a2m ?></td>
    <td><?php echo $a2f ?></td>
    <?php $Totalage3 = $a2m + $a2f; ?>
    <td><?php echo $Totalage3 ?></td>
</tr>

<tr>
    <td>31 - 45 yrs old</td>
    <td><?php echo $a3m ?></td>
    <td><?php echo $a3f ?></td>
    <?php $Totalage4 = $a3m + $a3f; ?>
    <td><?php echo $Totalage4 ?></td>
</tr>

<tr>
    <td>46 - 60 yrs old</td>
    <td><?php echo $a4m ?></td>
    <td><?php echo $a4f ?></td>
    <?php $Totalage5 = $a4m + $a4f; ?>
    <td><?php echo $Totalage5 ?></td>
</tr>

<tr>
    <td>61 - 75 yrs old</td>
    <td><?php echo $a5m ?></td>
    <td><?php echo $a5f ?></td>
    <?php $Totalage6 = $a5m + $a5f; ?>
    <td><?php echo $Totalage6 ?></td>
</tr>

<tr>
    <td>76 - 100 yrs old</td>
    <td><?php echo $a6m ?></td>
    <td><?php echo $a6f ?></td>
    <?php $Totalage7 = $a6m + $a6f; ?>
    <td><?php echo $Totalage7 ?></td>
</tr>

<tr class="font-weight-bold">
    <td>Total</td>
    <?php 
    $totalm = $a0m + $a1m + $a2m + $a3m + $a4m + $a5m + $a6m;
  $totalf = $a0f + $a1f + $a2f + $a3f + $a4f + $a5f + $a6f;
  $totalgendersex = $Totalage1 +$Totalage2 +$Totalage3 +$Totalage4+$Totalage5+$Totalage6+$Totalage7;
     ?>
    <td><?php echo $totalm ?></td>
    <td><?php echo $totalf ?></td>
    <td><?php echo $totalgendersex ?></td>
</tr>
       <!--  <tr>
            <td class="text-center"><?php// echo $a0 ?></td>
            <td class="text-center"><?php// echo $a1 ?></td>
            <td class="text-center"><?php// echo $a2 ?></td> 
            <td class="text-center"><?php// echo $a3 ?></td>
            <td class="text-center"><?php// echo $a4 ?></td>
            <td class="text-center"><?php// echo $a5 ?></td> 
            <td class="text-center"><?php// echo $a6 ?></td>
            <td class="text-center"><?php// echo $at ?></td> 
        </tr> -->

            </tbody>
            </table>
        </div>
    </div>
</div>    

