<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY CIVIL STATUS</h2>
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
        <table class="table table-bordered table-striped table-earning">
            <thead class="bg-dark text-white" style="font-size: 15px;">
                <!-- <tr>
                    <th class="text-center">Single</th>
                    <th class="text-center">Married</th>
                    <th class="text-center">Widowed</th>
                    <th class="text-center">Divorced</th>
                    <th class="text-center">Separated</th>
                    <th class="text-center">Live-in</th>
                    <th class="text-center">TOTAL</th>
                </tr> -->
                <tr>
                    <th class="text-center">Civil Status</th>
                    <th class="text-center">Population</th>
                    <th class="text-center">%</th>
                </tr>
            </thead>
            <tbody>
<?php 

// $bsql = "SELECT COUNT(CASE WHEN status = 'Single' THEN id END), 
//         COUNT(CASE WHEN status = 'Married' THEN id END), 
//         COUNT(CASE WHEN status = 'Widowed' THEN id END), 
//         COUNT(CASE WHEN status = 'Divorced' THEN id END), 
//         COUNT(CASE WHEN status = 'Separated' THEN id END),
//         COUNT(CASE WHEN status = 'Live-in' THEN id END),
//         COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
// $bstmt = $db->prepare($bsql);
// $bstmt->bind_param('s',$brgycode);
// $bstmt->execute();
// $bstmt->bind_result($s,$m,$w,$d,$sp,$li,$t);
// $bstmt->fetch();
// $bstmt->close();
$bsql = "SELECT COUNT(CASE WHEN status = 'Single' THEN id END), 
        COUNT(CASE WHEN status = 'Married' THEN id END), 
        COUNT(CASE WHEN status = 'Widowed' THEN id END), 
        COUNT(CASE WHEN status = 'Divorced' THEN id END), 
        COUNT(CASE WHEN status = 'Separated' THEN id END),
        COUNT(CASE WHEN status = 'Live-in' THEN id END),
        COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
  $bstmt = $db->prepare($bsql);
  $bstmt->bind_param('s',$brgycode);
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
    <td><?php echo $s ?></td>
    <?php 
    if($s == 0){
    $total = 0;
      }else{
        $total = $s / $t;
      }
     $convert = $total * 100;
     ?>
     <td><?php echo number_format($convert,2) . "%" ?></td>
     <?php $totalp = $convert; ?>
</tr>

<tr>
    <td>Married</td>
    <td><?php echo $m ?></td>
    <?php
     if($m == 0){
    $total = 0;
      }else{
         $total = $m / $t;
      }
     $convert = $total * 100;
  ?>
    <td><?php echo number_format($convert,2) . "%" ?></td>
    <?php $totalp = $totalp + $convert; ?>
</tr>

<tr>
    <td>Widowed</td>
    <td><?php echo $w ?></td>
    <?php 
    if($w == 0){
    $total = 0;
  }else{
     $total = $w / $t;
  }
 $convert = $total * 100;
     ?>
     <td><?php echo number_format($convert,2) . "%" ?></td>
     <?php $totalp = $totalp + $convert; ?>
</tr>

<tr>
    <td>Divorced</td>
    <td><?php echo $d ?></td>
    <?php 
    if($d == 0){
    $total = 0;
  }else{
     $total = $d / $t;
  }
 $convert = $total * 100;
     ?>
     <td><?php echo number_format($convert,2) . "%" ?></td>
     <?php $totalp = $totalp + $convert; ?>
</tr>

<tr>
    <td>Separated</td>
    <td><?php echo $sp ?></td>
    <?php 
    if($sp == 0){
    $total = 0;
      }else{
         $total = $sp / $t;
      }
     $convert = $total * 100;
  ?>
  <td><?php echo number_format($convert,2)."%" ?></td>
  <?php $totalp = $totalp + $convert; ?>
</tr>

<tr>
    <td>Live-in</td>
    <td><?php echo $li ?></td>
    <?php 
    if($li == 0){
    $total = 0;
  }else{
     $total = $li / $t;
  }
 $convert = $total * 100;
  ?>
  <td><?php echo number_format($convert,2)."%" ?></td>
  <?php  $totalp = $totalp + $convert; ?>
</tr>

<tr class="font-weight-bold">
    <td>Total</td>
    <td><?php echo $t ?></td>
    <td><?php echo number_format($totalp,2)."%" ?></td>
</tr>
    <!-- <tr>
        <td class="text-center"><?php// echo $s ?></td>
        <td class="text-center"><?php// echo $m ?></td>
        <td class="text-center"><?php// echo $w ?></td> 
        <td class="text-center"><?php// echo $d ?></td>
        <td class="text-center"><?php// echo $sp ?></td>
        <td class="text-center"><?php// echo $li ?></td>
        <td class="text-center"><?php// echo $t ?></td>
    </tr> -->

                </tbody>
                </table>
                        
        </div>
    </div>
</div>    

<!-- <div class="row">
    <div class="col-md-12">
        <div class="card-footer">
            <a href="include/print-function/status-report.php?print=status" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"></i> Print</a>
        </div>
    </div>
</div> -->

