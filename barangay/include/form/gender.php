<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY GENDER</h2>
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
                    <tr>
                        <th class="text-center">MALE</th>
                        <th class="text-center">FEMALE</th>
                        <th class="text-center">TOTAL</th>
                        <th class="text-center">TOTAL HOUSEHOLD</th>
                        <th class="text-center">TOTAL FAMILIES</th>
                    </tr>
                </thead>
                <tbody>
    <?php 
   // $brgycode = "BC2";
    $bsql = "SELECT COUNT(CASE WHEN gender = 'Male' THEN id END), COUNT(CASE WHEN gender = 'Female' THEN id END), COUNT(*)  FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$brgycode);
    $bstmt->execute();
    $bstmt->bind_result($m,$f,$t);
    $bstmt->fetch();
    $bstmt->close();

    $hsql = "SELECT COUNT(Distinct house_no) as house_no FROM `residents_tbl` WHERE `brgy_code`= ?";
    $hstmt = $db->prepare($hsql);
    $hstmt->bind_param('s',$brgycode);
    $hstmt->execute();
    $hstmt->bind_result($h);
    $hstmt->fetch();
    $hstmt->close();

    
     ?>

        <tr>
            <td class="text-center"><?php echo $m ?></td>
            <td class="text-center"><?php echo $f ?></td>
            <td class="text-center"><?php echo $t ?></td> 
            <td class="text-center"><?php echo $h ?></td> 
            <td class="text-center"><?php echo $h ?></td> 
        </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>    

<!-- <div class="row">
    <div class="col-md-12">
        <div class="card-footer">
            <a href="include/print-function/gender-report.php?print=gender" target="_blank" class="btn btn-primary"><i class="zmdi zmdi-print"></i>Print</a>
        </div>
    </div>
</div> -->

<script>
    function printtable(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
     exit();
}
</script>