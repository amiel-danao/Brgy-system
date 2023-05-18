    <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#" class="ml-4">
            <img src="bimages/icon/OBISH6.png" class="img-fluid"  alt="Admin"/>
                </a>
            </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <!--<div class="text-center mb-0">-->
            <!--    <img src="logoimg/<?php// echo $brgycode ?>.png" class="img-fluid"  alt="Admin" style="height: 110px; width: 200px;">-->
            <!--</div>-->
                <div class="account2">
                    <h4> WELCOME SECRETARY </h4>
                    <h5><?php echo $brgyname ?></h5>
                </div>
    <nav class="navbar-sidebar2">
        <ul class="list-unstyled navbar__list">
       <!--      <li class="has-sub">
                <a class="js-arrow" href="#">
                   Barangay
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="admin.php">
                            About Barangay</a>
                    </li>
                    <li>
                        <a href="admin.php">
                            Quick facts</a>
                    </li>
                    <li>
                        <a href="admin.php">
                            Vision & Mission
                        </a>
                    </li>
                </ul>
            </li> -->
    <li>
                <a href="profile.php">
                   Home</a>
            </li>
             <li>
                <a href="barangay_goal_mission_vission.php">
                   Barangay</a>
            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    Barangay Officials
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="barangay_official_list.php">
                           List of Official</a>
                    </li>
                    <!-- <li>
                        <a href="barangay_official_list.php">
                        Add Official</a>
                    </li> -->
                    <li>
                        <a href="organizational.php">
                            Organizational Chart</a>
                    </li>
                </ul>
            </li>
			
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    Populations
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                     <li>
                        <a href="population.php?by=age">
                            by Age</a>
                    </li>

                    <li>
                        <a href="population.php?by=sitio">
                            by Sitio</a>
                    </li>
                    <li>
                        <a href="population.php?by=gender">
                            by Gender</a>
                    </li>
                     <li>
                        <a href="population.php?by=jobemployment">
                            by Employment</a>
                    </li>
                     <li>
                        <a href="population.php?by=school">
                            by Literacy</a>
                    </li>
                    <li>
                        <a href="population.php?by=religion">
                            by Religion</a>
                    </li>
					<li>
                        <a href="population.php?by=civil-status">
                            by Civil Status</a>
                    </li>
                    <li>
                <a href="include/print_function/print-all-population.php?barangay=<?php echo $brgycode ?>&barangayname=<?php echo $brgyname ?>" target="_blank">
                    Print All</a>
                    </li>
                </ul>
            </li>
						
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    Residents Information
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="barangay_residents.php">
                            Residents List</a>
                    </li>
                    <li>
                        <a href="add_barangay_residents.php">
                            Add Residents</a>
                    </li>
                </ul>
            </li>
			
			 <li class="has-sub">
                <a class="js-arrow" href="#">
                    Report Management 
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">

                    <li>
                        <a href="abkd_list.php">
                        ABKD
                        </a>
                    </li>
                    <li>
                        <a href="bdf_record.php">
                           BDF</a>
                    </li>
                    <li>
                        <a href="bdrrmf_record.php">
                           BDRRMF</a>
                    </li>
                    <li>
                        <a href="kp_record.php">
                           KP</a>
                    </li>
                    <li>
                        <a href="bcpc_record.php">
                           BCPC</a>
                    </li>
				<!-- 	<li>
                        <a href="#">
                            BGPMS</a>
                    </li> -->
					<!--<li>-->
     <!--                   <a href="gad_record.php">-->
     <!--                      GAD</a>-->
     <!--               </li>-->
                    <li>
                        <a href="sc_pwd_record.php">
                            SC & PWD</a>
                    </li>
                    <li>
                        <a href="sk_record.php">
                            SK</a>
                    </li>
                   <!--  <li>
                        <a href="#">
                            BDC</a>
                    </li> -->
                    <li>
                        <a href="priority_dev_project_record.php">
                            PDP</a>
                    </li>
                    <li>
                        <a href="pops_record.php">
                            POPS</a>
                    </li>
                      <li>
                        <a href="monthly_record.php">
                            MONTHLY</a>
                    </li>
                </ul>
            </li>
			
			<li class="has-sub">
                <a class="js-arrow" href="#">
                    Sending Report
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="report_history.php">
                        Report history</a>
                    </li>
                    <li>
                        <a href="report.php">
                        Upload Report</a>
                    </li>
                </ul>
            </li>
					
			<li class="has-sub">
                <a class="js-arrow" href="#">
                    </i>SMS Management
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="sms_residents.php">
                        Send to Residents</a>
                    </li>
					<li>
                        <a href="sms_official.php">
                            Send to Officials</a>
                    </li>
                </ul>
            </li>

               <li class="has-sub">
                <a class="js-arrow" href="#">
                    </i>Barangay Certificate
                    <span class="arrow">
                        <i class="fas fa-angle-down"></i>
                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="certificate.php">
                        Certificate</a>
                    </li>
                    <li>
                        <a href="barangay_clearance.php">
                            Barangay Clearance</a>
                    </li>
                     <li>
                        <a href="barangay_indigency.php">
                            Barangay Indigency</a>
                    </li>
                     <li>
                        <a href="barangay_business_permit.php">
                            Barangay Business permit</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="Help.php">
                    Help</a>
            </li>
                <li>
                <a href="include/login-function/logout.php">
                    Log Out</a>
            </li>
        </ul>
        
    </nav>

        </div>
    </aside>