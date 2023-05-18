<?php    
        include('include/login-function/session.php');
        include('include/admin/header.php');
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
                               <!--  <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
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
                                      <h2 class="text-center">GOOGLE MAP OF MARAGONDON</h2>
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
                                    <div class="google-map px-0 mx-0 mb-4">
                                        <div class="container google mx-auto">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>                    
                                <!-- END DATA TABLE -->
            <?php include('include/admin/footer2.php'); ?>

                    </div>
                </div>
            </div>
    </div>
    <style>
#map {
  height: 100%;
  width: 100%;
  margin-rig
  margin-left: 0;
  margin-top: 5px;
  margin-bottom: 30px;
  border: 1px solid black;
  padding:0;
  }

.google{
    height: 500px;
    padding:0;
    margin:0;
}
    </style>
<script src="include/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhhO03arke8SaUe0i-iceBFdjxw944RJ8&callback=loadMap"></script>
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>