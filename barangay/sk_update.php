<?php    
    include('include/login-function/session.php');
    include('include/function/config.php');   
    include('include/function/sk_function.php');
    
 // if(!isset($_GET['sk_record']) || $_GET['sk_record'] == null)
 //        {
 //            header("Location: sk_record.php");
 //        }

include('include/admin/header.php'); 
?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php include('include/admin/sidebar.php'); 

    if(isset($_GET['sk_record']))
        {
            $key = $_GET['sk_record'];
            $MYsql = "SELECT * FROM `sk_tbl` WHERE `id` = ?";
            $MYstmt = $db->prepare($MYsql);
            $MYstmt->bind_param('i',$key);
            $MYstmt->execute();
            $MYstmt->bind_result($id,$gap,$pad,$result,$amount,$source,$implementation,
                $year,$budget,$brgycode);
            $MYstmt->fetch();
            $MYstmt->close();
            // while ($data = $Result->fetch_assoc())
            //     {
            //         $id = $data['id'];
            //         $gap = $data['gap_issues'];
            //         $pad = $data['p_a_d']; 
            //         $result = $data['result_target'];
            //         $amount = $data['amount'];
            //         $source = $data['source'];
            //         $implementation = $data['implementantion'];
            //         $year = $data['year'];
            //         $budget = $data['total_budget'];
            //     }   
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
                                      <h2 class="text-center text-uppercase">sk update Form</h2>
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
                                        <strong>SK Fund Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" id="id" name="id"  class="form-control" value="<?php echo $id ?>">
<input type="hidden" id="bcode" name="bcode" class="form-control" value="<?php echo $brgycode ?>">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="gap" class="form-control-label">GAP/ISSUES</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="gap" name="gap" class="form-control" value="<?php echo $gap ?>" maxlength="100">
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="program" class=" form-control-label">PROGRAMS/PROJECTS/ACTIVITIES</label>
            </div>
            <div class="col-12 col-md-8">
                <!-- <input type="text" id="program" name="program"  class="form-control" > -->
               <textarea name="program" class="form-control" id="program" rows="5"><?php echo $pad ?> </textarea>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="result" class=" form-control-label">RESULT TARGET/BENEFICIARIES</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="result" name="result" class="form-control" value="<?php echo 
                $result ?>" maxlength="80">
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="amount" class=" form-control-label">AMOUNT</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="amount" name="amount" class="form-control" 
                value="<?php echo $amount ?>" maxlength="10">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="source" class=" form-control-label">SOURCE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="source" name="source"  class="form-control" value="<?php echo 
                $source  ?>" maxlength="30">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="period" class=" form-control-label">PERIOD OF IMPLEMENTATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="period" name="period" class="form-control" value="<?php echo 
                $implementation ?>" maxlength="50">
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-4">
                <label for="budget" class=" form-control-label">TOTAL BUDGET ALLOCATION</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="budget" name="budget" class="form-control" value="<?php echo 
                $budget ?>" maxlength="10">
            </div>
        </div>
    
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required="required">
                <option value="<?php echo $year ?>"><?php echo $year ?></option>
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
		    <button type="submit" class="btn btn-primary btn-sm" name="updatesk">
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

    $("#amount,#budget").on("keypress keyup blur",function (event) {
    //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g,''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
        }
        });
    }); 

</script>
