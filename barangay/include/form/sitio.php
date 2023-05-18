<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY SITIO</h2>
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
            <thead class="bg-dark text-white" style="font-size: 15px;">

              <tr>
                <th class="text-center">Sitio Name</th>
                <th class="text-center">Male</th>
                <th class="text-center">Female</th>
                <th class="text-center">Total</th>
                <th class="text-center">Total HH</th>
              </tr>
              <!--   <tr> -->
<?php 
// $ssql = "SELECT `street` FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY street ORDER BY street";
// $sstmt = $db->prepare($ssql);
// $sstmt->bind_param('s',$brgycode);
// $sstmt->execute();
// $sstmt->get_result();
// $sstmt->execute();
// $Result = $sstmt->get_result();
//  while ($data = $Result->fetch_assoc())
//  {
?>       
            <!--  <th class="text-center"><?php //echo $data['street']; ?></th> -->      
<?php// } ?>
    <!-- <th class="text-center">TOTAL</th>
    </tr> -->

            </thead>

<?php 
$bsql = "SELECT `street`, COUNT(CASE WHEN gender = 'Male' THEN id END)as m,
COUNT(CASE WHEN gender = 'Female' THEN id END) as f, 
COUNT(Distinct house_no) as th FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY street ";
$bstmt = $db->prepare($bsql);
$bstmt->bind_param('s',$brgycode);
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
      <tbody>
          <tr>
            <td><?php echo $data['street']; ?></td>
            <td><?php echo $data['m']; ?></td>
            <td><?php echo $data['f']; ?></td>
            <?php  $totalmf = $data['m'] + $data['f']; ?>
            <td><?php echo $totalmf ?></td>
            <td><?php echo $data['th']; ?></td>
          </tr>

<?php 
}
// $bsql = "SELECT `street`, COUNT(*) FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY street ORDER BY street";
// $bstmt = $db->prepare($bsql);
// $bstmt->bind_param('s',$brgycode);
// $bstmt->execute();
// $Result = $bstmt->get_result();
//  while ($data = $Result->fetch_assoc())
//  {      
 ?>
       <!--  <td class="text-center"><?php// echo $data['COUNT(*)']; ?></td> -->
<?php
// } 
?>

<?php 
// $tsql = "SELECT COUNT(street) FROM `residents_tbl` WHERE `brgy_code`= ? ORDER BY street";
// $tstmt = $db->prepare($tsql);
// $tstmt->bind_param('s',$brgycode);
// $tstmt->execute();
// $tstmt->bind_result($t); 
// $tstmt->fetch();
// $tstmt->close();
?>
<!-- <td><?php //echo $t ?></td> -->
<!-- </tr> -->


                </tbody>
                </table>
                        
        </div>
    </div>
</div>    
