<?php 
      include('include/login-function/session.php'); 
      include('include/function/config.php');
      include('include/admin/header.php');  
      //include('include/function/certificate_function.php');
?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php include('include/admin/sidebar.php'); ?>
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
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">BARANGAY INDIGENCY REQUESTING HISTORY</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

              <div class="main-contents m-t-15">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">

        <div class="row "> 
        <div class="col-md-3">
        </div>  
    <div class="col-md-5 mx-auto">
        <form class="form-header" action="" method="POST">
            <input class="au-input au-input--xl form-control" type="text" name="serchindigency" id="serchindigency" placeholder="Search for Residents Full Name...." />
            <input type="hidden" name="brgycode" id="brgycode" value="<?php echo $brgycode ?>" />
            <button class="au-btn--submit btn-primary btn-sm" type="submit">
                <i class="fa fa-refresh" aria-hidden="true"></i>
        </button>
        </form>
    </div>
        <div class="col-md-3">
        </div> 
        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-bordered table-striped table-earning table-wrapper-scroll-y mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center" width="30%">FULL NAME</th>
                            <th class="text-center" width="15%">RESIDENT ID</th>
                            <th class="text-center" width="15%">DATE (Y-M-D)</th>
                            <th class="text-center"  width="50%">PURPOSE</th>
                            <!--<th class="text-center">CERTIFICATE</th>-->
                
                        </tr>
                    </thead>
                    <tbody id="indigencyform">
          

                    </tbody>
                </table>
                                </div>
                            </div>
                        </div>    
               
                                <!-- END DATA TABLE -->
                   <?php include('include/admin/footer2.php'); ?>
                        
                        
                    </div>
                </div>
            </div>
      
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>

<script>
 
    $(document).ready(function() {
       getalldata();
        $('#serchindigency').keyup(function(){
            var serchindigency =  $('#serchindigency').val();
            var brgycodess =  $('#brgycode').val();
        
            $.ajax({
                url:'include/function/barangay_certificate_report_function.php',
                data:{serchindigency:serchindigency,brgycodess:brgycodess},
                type:'POST',
                success:function(data){
                    if(!serchindigency.error)
                        {
                            $('#indigencyform').html(data);
                        }
                    }
            });
        });


    function getalldata()
        {
            var barangaycodeindigency = $('#brgycode').val();
                $.ajax({
                    url:'include/function/barangay_certificate_report_function.php',
                    data:{barangaycodeindigency:barangaycodeindigency},
                    type:'POST',
                    success:function(data)
                        {
                            if(!barangaycodeindigency.error)
                                {
                                    $('#indigencyform').html(data);

                                    // setTimeout(function(){
                                    //     getalldata();
                                    // }, 2000);
                                }
                        }
                });
        }
    });
</script>