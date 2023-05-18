<?php  
    include('include/login-function/session.php'); 
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
                                <div class="au-breadcrumb-content ">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">HELP INFORMATION</h2>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>

 <div class="main-contents m-t-5">
    <div class="section__content section__content--p20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong class="text-center">SYSTEM GUIDE'S</strong>
                        </div>
                        <div class="card-body card-block">
  <dl class="row">
  <dt class="col-sm-3">Home</dt>
  <dd class="col-sm-9">- Home page of the Online Barangay Information System.</dd>
  <dt class="col-sm-3"></dt>
  <dd class="col-sm-9">- View the Popular Land Mark in Maragodnon Cavite.</dd>

  <dt class="col-sm-3">Barangay</dt>
  <dd class="col-sm-9">
    <p>- View the Latest Goal, Mission and vision of The Barangay.</p>
    <p>- User can Add, Delete goal, mission and vision of The Barangay using Button.</p>
  </dd>

  <dt class="col-sm-3">Barangay Officials</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* List of Officials</dt>
      <dd class="col-sm-8"> <p>- User can View the List of Barangay officials of Their Barangay.</p>
        <p>- User can View the Barangay officials Full Information Profile.</p>
        <p>- User can Update the Barangay officials Profile and image.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Organizational Chart</dt>
      <dd class="col-sm-8"> <p>- User can View the List of Barangay officials in Organizational Format.</p>
        <p>- User can Print the Barangay officials in Organizational Format.</p>
      </dd>
    </dl>
  </dd>

  <dt class="col-sm-3">Populations</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* By Age</dt>
      <dd class="col-sm-8"> <p>- User can View Summary of population of resident by Age. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Sitio</dt>
      <dd class="col-sm-8"> <p>- User can View Summary of population of resident by All Sitio in their Barangay. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Sex</dt>
      <dd class="col-sm-8"> <p>- User can View Summary of population of resident by Gender. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Employment</dt>
      <dd class="col-sm-8"> <p>- User can View Summary of population of resident by Employment Status. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Religion</dt>
      <dd class="col-sm-8"> <p>- User can View Summary of population of resident by Religion. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Civil Status</dt>
      <dd class="col-sm-8"> <p>- User can View Summary of population of resident by Civil Status. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Print All</dt>
      <dd class="col-sm-8"> <p>- User can All categories of population into one format.</p>
      </dd>
    </dl>
  </dd>


  <dt class="col-sm-3">Residents Information</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* List of Residents</dt>
      <dd class="col-sm-8"> <p>- User can View the all List of Register Resident in Their Barangay.</p>
        <p>- User can View the Register Resident Full Information.</p>
        <p>- User can Delete and Update the Register Resident Record.</p>
        <p>- User can Print All Residents Record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Add Residents</dt>
      <dd class="col-sm-8"> <p>- User can Add new Residents record data in System.</p>
      </dd>
    </dl>
  </dd>


  <dt class="col-sm-3">Report Management</dt>
  <dd class="col-sm-9">

    <dl class="row">
      <dt class="col-sm-4">* ABKD</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update ABKD Report.</p>
        <p>- User can Filter to Search ABKD Report.</p>
        <p>- User can Print AKBD Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* BDF</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update BDF Report.</p>
        <p>- User can Filter to Search BDF Report.</p>
        <p>- User can Print BDF Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* BDRRMF</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update BDRRMF Report.</p>
        <p>- User can Filter to Search BDRRMF Report.</p>
        <p>- User can Print BDRRMF Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* KP</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update KP Report.</p>
        <p>- User can Filter to Search KP Report.</p>
        <p>- User can Print KP Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* BCPC</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update BCPC Report.</p>
        <p>- User can Filter to Search BCPC Report.</p>
        <p>- User can Print BCPC Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* SC & PWD</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update SC & PWD Report.</p>
        <p>- User can Filter to Search SC & PWD Report.</p>
        <p>- User can Print SC & PWD Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* SK</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update SK Report.</p>
        <p>- User can Filter to Search SK Report.</p>
        <p>- User can Print SK Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* PDP</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update PDP Report.</p>
        <p>- User can Filter to Search PDP Report.</p>
        <p>- User can Print PDP Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* POPS</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update POPS Report.</p>
        <p>- User can Filter to Search POPS Report.</p>
        <p>- User can Print POPS Report.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* MONTHLY</dt>
      <dd class="col-sm-8"><p>- User can Add, Delete And Update MONTHLY Report.</p>
        <p>- User can Filter to Search MONTHLY Report.</p>
        <p>- User can Print MONTHLY Report.</p>
      </dd>
    </dl>

  </dd>

  <dt class="col-sm-3">Sending Report</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Report History</dt>
      <dd class="col-sm-8"> <p>- User can View the History of all Report file sent to Admin DILG.</p>
        <p>- User can Search Individual Record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Upload Report</dt>
      <dd class="col-sm-8"> <p>- User can Sent File Report to Admin.</p>
      </dd>
    </dl>
  </dd>

  <dt class="col-sm-3">SMS Management</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Send to Residents</dt>
      <dd class="col-sm-8"> <p>- User can Send SMS message to all residents register in system.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Send to Barangay Officials</dt>
      <dd class="col-sm-8"> <p>- User can Send SMS message to all barangay official in barangay.</p>
      </dd>
    </dl>
  </dd>

  <dt class="col-sm-3">Barangay Certificate</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Certificate</dt>
      <dd class="col-sm-8"> <p>- User can Create Barangay Certificate Like Clearance, Indigency and Business Permit.</p>
        <p>- User can Search Barangay Residents who are requesting Barangay Certificate.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Barangay Clearance</dt>
      <dd class="col-sm-8"> <p>- User can view and search the transaction of all resident who are requesting Barangay Clearance.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Barangay Indigency</dt>
      <dd class="col-sm-8"> <p>- User can view and search the transaction of all resident who are requesting Barangay Indigency.</p>
      </dd>
    </dl>

     <dl class="row">
      <dt class="col-sm-4">* Barangay Business Permit</dt>
      <dd class="col-sm-8"> <p>- User can view and search the transaction of all resident who are requesting Barangay Business Permit.</p>
      </dd>
    </dl>

  <dt class="col-sm-3">Log out</dt>
  <dd class="col-sm-9">
    <dl class="row">
      
      <dd class="col-sm-8"> <p>- User Log out System.</p>
      </dd>
    </dl>


  </dd>

  </dd>

  
 <!--  <dt class="col-sm-3">Malesuada porta</dt>
  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
    </dl>
  </dd> -->

</dl>
                                    </div>
                                </div>
                            </div> 
                        </div>


                        <!--<div class="row mt-3">-->
                        <!--    <div class="col-md-12 p-0">-->
                        <!--        <div class="copyright bg-light">-->
                        <!--             <p>Copyright © <?php echo date("Y") ?> Maragondon Cavite. All rights reserved.</p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <?php include('include/admin/footer2.php'); ?>

            </div>
        </div>
    </div>


<?php include('include/admin/footer.php'); ?>
