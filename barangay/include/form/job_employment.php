<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY JOB EMPLOYMENT</h2>
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
                   <!--  <tr>
                        <th class="text-center">EMPLOYED</th>
                        <th class="text-center">UNEMPLOYED</th>
                        <th class="text-center">NOT IN THE LABOR FORCE</th>
                        <th class="text-center">TOTAL</th>
                    </tr> -->

                    <tr>
                        <th class="text-center">Sex</th>
                        <th class="text-center">HH #</th>
                        <th class="text-center">Employed</th>
                        <th class="text-center">%</th>
                        <th class="text-center">Unemployed</th>
                        <th class="text-center">%</th>
                        <th class="text-center">Not in the Labor Force</th>
                        <th class="text-center">%</th>
                    </tr>
                </thead>
                <tbody>
    <?php 
   // $brgycode = "BC2";
    // $bsql = "SELECT COUNT(CASE WHEN job = 'Employed' THEN id END), COUNT(CASE WHEN job = 'Unemployed' THEN id END), COUNT(CASE WHEN job = 'none' THEN id END), COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
    // $bstmt = $db->prepare($bsql);
    // $bstmt->bind_param('s',$brgycode);
    // $bstmt->execute();
    // $bstmt->bind_result($e,$ue,$ud,$t);
    // $bstmt->fetch();
    // $bstmt->close();


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
    $bstmt->bind_param('s',$brgycode);
    $bstmt->execute();
    $bstmt->bind_result($th,$tn,$em,$uem,$nm,$ef,$uef,$nf);
    $bstmt->fetch();
    $bstmt->close();
    $total = 0;
    $totalpercent = 0;

     ?>
<tr>
    <td>Male</td>
    <td><?php echo $th ?></td>
    <td><?php echo $em ?></td>
    <?php 
    if($em == 0){
     $total = 0;
    }else {
         $total = $em / $th;
    }
    $totalpercent = $total * 100;
   ?>
    <td><?php echo number_format($totalpercent,2)."%" ?></td>
    <td><?php echo $uem ?></td>
    <?php 
    if($uem == 0){
     $total = 0;
    }else {
     $total = $uem / $th;
    }
    $totalpercent = $total * 100;
   ?>
    <td><?php echo number_format($totalpercent,2)."%" ?></td>
    <td><?php echo $nm ?></td>
    <?php 
    if($nm == 0){
     $total = 0;
    }else {
     $total = $nm / $th;
    }
    $totalpercent = $total * 100;
   ?>
   <td><?php echo number_format($totalpercent,2)."%" ?></td>
</tr>

<tr>
    <td>Female</td>
    <td><?php echo $tn ?></td>
    <td><?php echo $ef ?></td>
    <?php 
    if($ef == 0){
     $total = 0;
    }else {
     $total = $ef / $tn;
    }
    $totalpercent = $total * 100;
   ?>
   <td><?php echo number_format($totalpercent,2)."%" ?></td>
   <td><?php echo $uef ?></td>
   <?php 
   if($uef == 0){
     $total = 0;
    }else {
     $total = $uef / $tn;
    }
    $totalpercent = $total * 100;
   ?>
   <td><?php echo number_format($totalpercent,2)."%" ?></td>
   <td><?php echo $nf ?></td>
   <?php 
   if($nf == 0){
     $total = 0;
    }else {
     $total = $nf / $tn;
    }
    $totalpercent = $total * 100;
    ?>
    <td><?php echo number_format($totalpercent,2)."%" ?></td>
</tr>
<tr>
    <td>Both Sex</td>
    <?php $tottalh = 0; $tottale = 0; $tottalu = 0; $tottaln = 0; $tottalt = 0; $tottalprecent = 0;
    $tottalh = $th + $tn;
   ?>
    <td><?php echo $tottalh ?></td>
    <?php 
    $tottale = $em + $ef;
      if($tottale == 0){
         $tottalt = 0;
      }else{
        $tottalt =  $tottale / $tottalh;
      }
      $tottalprecent = $tottalt * 100;
     ?>
     <td><?php echo $tottale ?></td>
     <td><?php echo number_format($tottalprecent,2)."%" ?></td>

     <?php 
     $tottalu = $uem + $uef;
      if($tottalu == 0){
         $tottalt = 0;
      }else{
        $tottalt =  $tottalu / $tottalh;
      }
      $tottalprecent = $tottalt * 100;
   ?>
   <td><?php echo $tottalu ?></td>
   <td><?php echo number_format($tottalprecent,2)."%" ?></td>
   <?php 
   $tottaln = $nm + $nf;
  if($tottaln == 0){
     $tottalt = 0;
  }else{
    $tottalt =  $tottaln / $tottalh;
  }
  $tottalprecent = $tottalt * 100;
   ?>
   <td><?php echo $tottaln ?></td>
   <td><?php echo number_format($tottalprecent,2)."%" ?></td>
</tr>
        <!-- <tr>
            <td class="text-center"><?php// echo $e ?></td>
            <td class="text-center"><?php //echo $ue ?></td>
             <td class="text-center"><?php //echo $ud ?></td>
            <td class="text-center"><?php// echo $t ?></td> 
        </tr> -->
            </tbody>
            </table>
        </div>
    </div>
</div>    

