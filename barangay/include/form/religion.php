<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY RELIGION</h2>
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
                    <th class="text-center">Religion</th>
                   <!--  <th class="text-center">Protestant Christianity</th>
                    <th class="text-center">Islam</th>
                    <th class="text-center">Iglesia ni Cristo</th>
                    <th class="text-center">Others</th> -->
                    <th class="text-center">TOTAL</th>
                </tr>
            </thead>
            <tbody>
<?php 

// $bsql = "SELECT COUNT(CASE WHEN religion = 'Roman Catholic Christianity' THEN id END), 
//         COUNT(CASE WHEN religion = 'Protestant Christianity' THEN id END), 
//         COUNT(CASE WHEN religion = 'Islam' THEN id END), 
//         COUNT(CASE WHEN religion = 'Iglesia ni Cristo' THEN id END), 
//         COUNT(CASE WHEN religion = 'Others' THEN id END),
//         COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
//$brgycode = "BC2";
// $bstmt = $db->prepare($bsql);
// $bstmt->bind_param('s',$brgycode);
// $bstmt->execute();
// $bstmt->bind_result($rc,$pc,$is,$inc,$o,$t);
// $bstmt->fetch();
// $bstmt->close();
         
$bsql = "SELECT `religion`, COUNT(*) FROM `residents_tbl` WHERE `brgy_code`= ? GROUP BY religion ";
 $bstmt = $db->prepare($bsql);
 $bstmt->bind_param('s',$brgycode);
 $bstmt->execute();
 $row = $bstmt->get_result();
 $total = 0;
 $totalpercent = 0;
while ($data = $row->fetch_assoc())
 { 
 ?><tr>
        <td class="text-center"><?php echo $data['religion'] ?></td>
        <td class="text-center"><?php echo $data['COUNT(*)'] ?></td>
    </tr>
<?php } ?>
<!--     <tr>
        <td class="text-center"><?php// echo $rc ?></td>
        <td class="text-center"><?php// echo $pc ?></td>
        <td class="text-center"><?php// echo $is ?></td> 
        <td class="text-center"><?php// echo $inc ?></td>
        <td class="text-center"><?php// echo $o ?></td>
        <td class="text-center"><?php //echo $t ?></td>
    </tr> -->

                </tbody>
                </table>
                        
        </div>
    </div>
</div>    
