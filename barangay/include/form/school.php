<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left mx-auto">
                          <h2 class="text-center">POPULATION OF BARANGAY BY LITERACY</h2>
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
                        <th class="text-center">Grade Completed</th>
                        <th class="text-center">MALE</th>
                        <th class="text-center">FEMALE</th>
                        <th class="text-center">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
    <?php 
  $bsql = "SELECT 
COUNT(CASE WHEN elementary = 'None' AND highschool = 'None' AND college = 'None' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN elementary = 'None' AND highschool = 'None' AND college = 'None' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN elementary = 'Elementary Level' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN elementary = 'Elementary Level' AND gender = 'Female' THEN id END), 

COUNT(CASE WHEN elementary = 'Elementary Graduate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN elementary = 'Elementary Graduate' AND gender = 'Female' THEN id END), 

COUNT(CASE WHEN highschool = 'High School Level' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN highschool = 'High School Level' AND gender = 'Female' THEN id END), 

COUNT(CASE WHEN highschool = 'High School Graduate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN highschool = 'High School Graduate' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'Vocational' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'Vocational' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'College Undergraduate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'College Undergraduate' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'Academic Degree Holder' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'Academic Degree Holder' AND gender = 'Female' THEN id END),

COUNT(CASE WHEN college = 'Post Baccalaureate' AND gender = 'Male' THEN id END),
COUNT(CASE WHEN college = 'Post Baccalaureate' AND gender = 'Female' THEN id END)
         FROM `residents_tbl` WHERE `brgy_code`= ? ";
    $bstmt = $db->prepare($bsql);
    $bstmt->bind_param('s',$brgycode);
    $bstmt->execute();
    $bstmt->bind_result($ngm1,$ngf1,$elm1,$elf1,$egm1,$egf1,$hlm1,$hlf1,$hgm1,$hgf1,$cvm1,$cvf1,$cugm1,$cugf1,$cdm1,$cdf1,$cbm1,$cbf1);
    $bstmt->fetch();
    $bstmt->close();
    $total1 = 0;$total2 = 0;$total3 = 0;$total4 = 0;$total5 = 0;$total7 = 0;$total8 = 0;
    $total9 = 0;$total10 = 0;$total11 = 0;$total12 = 0;$total13 = 0;$total14 = 0;$total15 = 0;
    $total16 = 0;$total17 = 0;$total18 = 0;

     ?>

        <tr>
            <td class="text-center">No grade completed</td>
            <td class="text-center"><?php echo $ngm1 ?></td>
            <td class="text-center"><?php echo $ngf1 ?></td>
            <?php  $total1 = $ngm1 + $ngf1; ?>
            <td class="text-center"><?php echo $total1 ?></td>
        </tr>
        <tr>
            <td class="text-center">Elementary Level</td>
            <td class="text-center"><?php echo $elm1 ?></td>
            <td class="text-center"><?php echo $elf1 ?></td>
            <?php  $total2 = $elm1 + $elf1; ?>
             <td class="text-center"><?php echo $total2 ?></td>
        </tr>
        <tr>
            <td class="text-center">Elementary Graduate</td> 
            <td class="text-center"><?php echo $egm1 ?></td>
            <td class="text-center"><?php echo $egf1 ?></td>
            <?php  $total3 = $egm1 + $egf1; ?>
            <td class="text-center"><?php echo $total3 ?></td>
        </tr>
        <tr>
            <td class="text-center">High School Level</td>
            <td class="text-center"><?php echo $hlm1 ?></td>
            <td class="text-center"><?php echo $hlf1 ?></td>
            <?php  $total4 = $hlm1 + $hlf1; ?>
            <td class="text-center"><?php echo $total4 ?></td>
        </tr>
        <tr>
            <td class="text-center">High School Graduate</td>
            <td class="text-center"><?php echo $hgm1 ?></td>
            <td class="text-center"><?php echo $hgf1 ?></td>
            <?php  $total5 = $hgm1 + $hgf1; ?>
            <td class="text-center"><?php echo $total5 ?></td>
        </tr>
        <tr>
            <td class="text-center">Vocational</td> 
            <td class="text-center"><?php echo $cvm1 ?></td>
            <td class="text-center"><?php echo $cvf1 ?></td>
            <?php  $total6 = $cvm1 + $cvf1; ?>
            <td class="text-center"><?php echo $total6 ?></td>
        </tr>
        <tr>
            <td class="text-center">College Undergraduate</td>
            <td class="text-center"><?php echo $cugm1 ?></td>
            <td class="text-center"><?php echo $cugf1 ?></td>
            <?php  $total7 = $cugm1 + $cugf1; ?>
            <td class="text-center"><?php echo $total7 ?></td>
        </tr>
        <tr>
            <td class="text-center">Academic Degree Holder</td>
            <td class="text-center"><?php echo $cdm1 ?></td>
            <td class="text-center"><?php echo $cdf1 ?></td>
            <?php  $total8 = $cdm1 + $cdf1; ?>
            <td class="text-center"><?php echo $total8 ?></td>
        </tr>
        <tr>
            <td class="text-center">Post Baccalaureate</td> 
            <td class="text-center"><?php echo $cbm1 ?></td> 
            <td class="text-center"><?php echo $cbf1 ?></td> 
            <?php  $total9 = $cbm1 + $cbf1; ?>
            <td class="text-center"><?php echo $total9 ?></td>
        </tr>
        <tr>
            <td class="text-center font-weight-bold">TOTAL</td>
            <?php 
                $total10 = $ngm1 + $elm1 + $egm1 + $hlm1 + $hgm1 + $cvm1 + $cugm1 + 
                $cdm1 + $cbm1 ;

                $total11 = $ngf1 + $elf1 + $egf1 + $hlf1 + $hgf1 + $cvf1 + $cugf1 + 
                $cdf1 + $cbf1 ;

                $total12 = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + 
                $total8 + $total9 ;
             ?>
            <td class="text-center"><?php echo $total10 ?></td> 
            <td class="text-center"><?php echo $total11 ?></td>
            <td class="text-center"><?php echo $total12 ?></td>  
        </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>    

