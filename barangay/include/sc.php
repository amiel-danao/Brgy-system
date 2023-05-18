<?php  
    include('include/function/config.php');  
?>
<?php include('include/admin/header.php'); ?>
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
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
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

            <section class="au-breadcrumb m-t-100">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-offset-2">
                            </div>
                            <div class="col-md-8">
                                <div class="au-breadcrumb-content mx-auto">
                                    <div class="au-breadcrumb-left">
                                      <h2 class="text-center">Add Form</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-offset-2">
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
                                <div class="card">
                                    <div class="card-header">
                                        <strong>SC Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="include/function/abkd_function.php" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="reference-code" class="form-control-label">AIP REFERENCE CODE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="reference-code" name="reference-code"  class="form-control" >
            </div>
        </div>
       
         <div class="row form-group">
            <div class="col col-md-4">
                <label for="program" class=" form-control-label">PROGRAM/PROJECT/ACTIVITY DECRIPTION</label>
            </div>
            <div class="col-12 col-md-8">
                <!-- <input type="text" id="program" name="program"  class="form-control" > -->
               <textarea name="program" class="form-control" id="program" rows="5"></textarea>
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="implementing" class=" form-control-label">IMPLEMENTING OFFICE</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="text" id="implementing" name="implementing"  class="form-control" >
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="1quarter" class=" form-control-label">1st QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="1quarter" name="1quarter"  class="form-control" >
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="2quarter" class=" form-control-label">2nd QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="2quarter" name="2quarter"  class="form-control" >
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="3quarter" class=" form-control-label">3rd QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="3quarter" name="3quarter"  class="form-control" >
               
            </div>
        </div>

          <div class="row form-group">
            <div class="col col-md-4">
                <label for="4quarter" class=" form-control-label">4th QUARTER</label>
            </div>
            <div class="col-12 col-md-8">
                <input type="number" id="4quarter" name="4quarter"  class="form-control" >
               
            </div>
        </div>
    
        <div class="row form-group">
            <div class="col col-md-4">
                <label for="year" class=" form-control-label">Year</label>
            </div>
            <div class="col-12 col-md-8">
               <select name="year" id="year" class="form-control-md form-control" required>
                <option value="" selected="true" disabled="disabled">Please select Year</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
               </select>               
            </div>
</div>

        
       
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" name="addabkd" value="ADD">
                <i class="fa fa-dot-circle-o"></i> ADD
            </button>
        </div>
    </form>
                                    </div>
                                </div>
                            </div>                  
                    </div>
                </div>
            </div>
    </div>

    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?> 
