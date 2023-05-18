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

  <dt class="col-sm-3">Maragondon</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Barangay</dt>
      <dd class="col-sm-8"> <p>- Admin can View the List of Barangay in Maragondon.</p>
        <p>- User can Edit or Update the the every Barangay Name and Address.</p>
        <p>- User can View the list of Account that Created by Barangay. and Also Admin can update the password and Update the Status of account user in Active or deactivate. lastly can remove permanently the account.</p>
<!--         <p>- User can Create new Account for secretary of every Barangay, by using ID of secretary to use for their Barangay.</p> -->
        <p>- User can View the Organizational Chart. and also can print as well.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Barangay Residents</dt>
      <dd class="col-sm-8"> <p>- Admin can access the all resident record of every barangay in their residents record. and can search individually</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Elected Officials</dt>
      <dd class="col-sm-8"> <p>- Admin can access the Maragondon Lelected Officials record </p>
        <p>- Admin can access the Maragondon Lelected Officials record to update the information individually </p>
      <p>- Admin can access the Maragondon Lelected Officials record to update the image profile individually </p>
      </dd>
      
    </dl>
  </dd>

  <dt class="col-sm-3">Account Management</dt>
  <dd class="col-sm-9">

    <dl class="row">
      <dt class="col-sm-4">* Create Account</dt>
      <dd class="col-sm-8"> <p>- Admin can create account for selected barangay.</p>
      </dd>
    </dl>


    <dl class="row">
      <dt class="col-sm-4">* User Account List</dt>
      <dd class="col-sm-8"> <p>- Admin Can view the all account that created in all each Barangay.</p>
      </dd>
    </dl>
  </dd>


  <dt class="col-sm-3">Populations</dt>
  <dd class="col-sm-9">

     <dl class="row">
      <dt class="col-sm-4">* By Age</dt>
      <dd class="col-sm-8"> <p>- Admin can View Summary of population of resident by Age of all barangay. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Sex</dt>
      <dd class="col-sm-8"> <p>- Admin can View Summary of population of resident by Gender of all barangay. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Employment</dt>
      <dd class="col-sm-8"> <p>- Admin can View Summary of population of resident by Employment Status of all barangay. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Religion</dt>
      <dd class="col-sm-8"> <p>- Admin can View Summary of population of resident by Religion of all barangay. and also user can print the summary record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* By Civil Status</dt>
      <dd class="col-sm-8"> <p>- Admin can View Summary of population of resident by Civil Status. and also user can print the summary record.</p>
      </dd>
    </dl>

    
  </dd>


  <dt class="col-sm-3">Report Management</dt>
  <dd class="col-sm-9">

    <dl class="row">
      <dt class="col-sm-4">* Report Recieve</dt>
      <dd class="col-sm-8"><p>- Admin can View the all report file that sent to him by all barangay.</p>
        <p>- Admin can Filter or Search individual Report File.</p>
        <p>- Admin can Download or Remove the File Report.</p>
      </dd>
    </dl>

  </dd>

  <dt class="col-sm-3">SMS Management</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Send SMS to Barangay Official</dt>
      <dd class="col-sm-8"> <p>- Admin can form and send SMS Message to all barangay officials in every Barangay.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Send SMS to Barangay Secretary</dt>
      <dd class="col-sm-8"> <p>- Admin can form and send SMS Message to all barangay Secretary in all Barangay.</p>
      </dd>
    </dl>
  </dd>

  <dt class="col-sm-3">News Management</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* News List</dt>
      <dd class="col-sm-8"> <p>- Admin can view the all News and Announcement Added in Record. and Search individually record</p>
        <p>- Admin can Remove and Update the every news & announcement Record.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Add News</dt>
      <dd class="col-sm-8"> <p>- Admin can add new news and announcement to show in front Website of System.</p>
      </dd>
    </dl>
  </dd>

  <dt class="col-sm-3">Documents</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Add Document</dt>
      <dd class="col-sm-8"> <p>- Admin can Add new File to upload in System.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Document List</dt>
      <dd class="col-sm-8"> <p>- Admin can view the all record file list uploaded file.</p>
        <p>- Admin can search the uploaded file.</p>
         <p>- Admin can download the Every File and Also Remove them.</p>
      </dd>
    </dl>

  </dd>

  <dt class="col-sm-3">Map</dt>
  <dd class="col-sm-9">- Admin can view the location of every barangay in google map.</dd>
  <dt class="col-sm-3"></dt>
 <dd class="col-sm-9">- Admin can view and print the summary population record of every barangay.</dd>


<dt class="col-sm-3">Account</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">* Log Out</dt>
      <dd class="col-sm-8"> <p>- Admin Log out System.</p>
      </dd>
    </dl>

    <dl class="row">
      <dt class="col-sm-4">* Account</dt>
      <dd class="col-sm-8"> <p>- Admin can access the full information of admin account..</p>
        <p>- Admin can Update the all of her account information.</p>
      </dd>
    </dl>

  </dd>
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
