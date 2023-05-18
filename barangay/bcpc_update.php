<?php 
    include('include/login-function/session.php');
    include('include/function/config.php');   
    include('include/function/bcpc_function.php');
    // if(!isset($_GET['records']))
    //     {
    //         echo "<script>window.location.href = 'bcpc_record.php'; </script>";
    //         header("Location: bcpc_record.php");
    //     }
include('include/admin/header.php'); 
?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php 
    include('include/admin/sidebar.php'); 

    if(isset($_GET['records']))
    {
        $key =$_GET['records'];
        $MYsql = "SELECT * FROM `bcpc_tbl` WHERE `id` = ?";
        $Mystmt = $db->prepare($MYsql);
        $Mystmt->bind_param('i',$key);
        $Mystmt->execute();
        $Mystmt->bind_result($id,$aipcode,$program,$implemetingoffice,$quarter1,$quarter2,
            $quarter3,$quarter4,$year,$brgycode);
        $Mystmt->fetch();
        $Mystmt->close();
         // while ($data = $Result->fetch_assoc())
         //    {
         //        $id = $data['id'];
         //        $aipcode = $data['aipcode'];
         //        $program = $data['program'];
         //        $implemetingoffice = $data['implemetingoffice'];
         //        $quarter1 = $data['quarter1'];
         //        $quarter2 = $data['quarter2'];
         //        $quarter3 = $data['quarter3'];
         //        $quarter4 = $data['quarter4'];
         //        $year = $data['year'];
         //    }
    }

    ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <!-- <a href="#">
                                    <img src="bimages/icon/logo-white.png" alt="CoolAdmin" />
                                </a> -->
                            </div>
                                <div class="header-button-item mr-0 js-sidebar-btn d-lg-none">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>

             <?php include('include/admin/sidebar2.php'); ?>
            <!-- END HEADER DESKTOP-->

            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center text-uppercase">bcpc Update Form</h2>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-offset-2">-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </section>

             <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>BCPC Information</strong>
                                    </div>
<div class="card-body card-block">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <label for="referencecode" class="form-control-label">AIP REFERENCE CODE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="referencecode" name="referencecode"  class="form-control" value="<?php echo $aipcode ?>" maxlength="50">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="program" class=" form-control-label">PROGRAM/PROJECT/ACTIVITY DECRIPTION</label>
            </div>
            <div class="col-12 col-md-8">
                <!-- <input type="text" id="program" name="program"  class="form-control" > -->
               <textarea name="program" class="form-control" id="program" rows="5"><?php echo 
               $program ?></textarea>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTING OFFICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing"  class="form-control" 
                value="<?php echo $implemetingoffice ?>" maxlength="30">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="quarter1" class=" form-control-label">1st QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="quarter1" name="quarter1"  class="form-control" 
                value="<?php echo $quarter1 ?>" maxlength="10">
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="quarter2" class=" form-control-label">2nd QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="quarter2" name="quarter2"  class="form-control" 
                value="<?php echo $quarter2 ?>" maxlength="10">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="quarter3" class=" form-control-label">3rd QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="quarter3" name="quarter3"  class="form-control" 
                value="<?php echo $quarter3 ?>" maxlength="10">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="quarter4" class="form-control-label">4th QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="quarter4" name="quarter4"  class="form-control" 
                value="<?php echo $quarter4 ?>" maxlength="10">
            </div>
        </div>
    
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required="required">
                <option value="<?php echo $year ?>" ><?php echo $year ?></option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
               </select>               
            </div>
        </div>
       
        <div class="card-footer">
		    <button type="submit" class="btn btn-primary btn-sm" name="updatebcpc">
		        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> UPDATE
		    </button>
    	</div>
</form>
    </div>
</div>
</div>                  


                    </div>
            <?php include('include/admin/footer2.php'); ?>
                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?> 

<script type="text/javascript">

    $(document).ready(function (){

    $("#quarter1,#quarter2,#quarter3,#quarter4").on("keypress keyup blur",function (event) {
    //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g,''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
        }
        });
    }); 

</script>
