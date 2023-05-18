<?php  
    include('include/login-function/session.php');
    include('include/function/config.php');  
    include('include/function/bdrrmf_function.php');  


// if (!isset($_GET['urecorda']) && !isset($_GET['urecordb']))
//     {
//         header("Location: bdrrmf_record.php");
//     }
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
                               <!--  <a href="#">
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
                                      <h2 class="text-cente text-uppercase">bdrrmf Update Form</h2>
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

<?php 
if (isset($_GET['urecorda']))
{
        //  case "urecorda":
            include("include/form/bddrmfa.php");
  
}
if (isset($_GET['urecordb']))
{
     // case "urecordb":
            include("include/form/bddrmfb.php");

}
 ?>
                              
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

    $("#pservice,#mooe,#capital,#totala,#totalb").on("keypress keyup blur",function (event) {
    //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g,''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
        }
        });
    }); 

</script>
