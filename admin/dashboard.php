
<?php
include "include/login-function/session.php";
include "include/function/config.php";


include "include/admin/header.php";
?>
<div class="page-wrapper">
	<!-- MENU SIDEBAR-->
	<?php include "include/admin/sidebar.php"; ?>
	<!-- END MENU SIDEBAR-->

	<!-- PAGE CONTAINER-->
	<div class="page-container2">
		<!-- HEADER DESKTOP-->
		<header class="header-desktop2">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="header-wrap2">
						<div class="logo d-block d-lg-none">
							<!--   <a href="#">
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

		<?php include "include/admin/sidebar2.php"; ?>
		<!-- END HEADER DESKTOP-->

		<section class="au-breadcrumb m-t-75">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="au-breadcrumb-content">
								<div class="au-breadcrumb-left mx-auto">
									<h2 class="text-center">DASHBOARD</h2>


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
                        <div class=col-6>
                            <label for="brgyCodeSelect">Brgy. Code </label>
                            <select id="brgyCodeSelect"></select>
                            <button class="btn btn-primary" id="filterButton">Filter</button>
                        </div>  
                    </div>
                <div class="row">
                        <div class="col-6">
                            <div style="display: flex; justify-content: space-between">                        
                                <canvas id="chart1" style="width: 200px; height: 150px;"></canvas>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="display: flex; justify-content: space-between">                        
                                <canvas id="chart2" style="width: 200px; height: 150px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        
                    </div> -->

					<!-- END DATA TABLE -->
					<?php include "include/admin/footer2.php"; ?>


				</div>
			</div>
		</div>
	</div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script>
        // Create the first chart
        const ctx1 = document.getElementById('chart1').getContext('2d');
        const chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: [],
                datasets: []
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'BCPC RECORD',
                        font: {
                            size: 16
                        }
                    }
                }
            }
        });

        // Create the second chart
        const ctx2 = document.getElementById('chart2').getContext('2d');
        const chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: [],
                datasets: []
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'BDF Chart',
                        font: {
                            size: 16
                        }
                    }
                }
            }
        });

        // Fetch data for a specific chart
        function fetchData(chart, url) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    const responseData = JSON.parse(this.responseText);
                    const { labels, datasets } = responseData;

                    // Update the chart with the fetched data
                    chart.data.labels = labels;
                    chart.data.datasets = datasets;
                    chart.update();
                }
            };
            xhr.open('GET', url, true);
            xhr.send();
        }

        // Load the unique brgy_code values and populate the select options
        function loadBrgyCodes() {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    const brgyCodes = JSON.parse(this.responseText);

                    // Populate the select options
                    const select = document.getElementById('brgyCodeSelect');
                    select.innerHTML = '';
                    brgyCodes.forEach(brgyCode => {
                        const option = document.createElement('option');
                        option.value = brgyCode;
                        option.textContent = brgyCode;
                        select.appendChild(option);
                    });

                    if(brgyCodes.length > 0){
                        
                        fetchData(chart1, `charts/fetchBCPC.php?brgyCode=${brgyCodes[0]}`);
                        fetchData(chart2, `charts/fetchBDF.php?brgyCode=${brgyCodes[0]}`);
                    }
                }
            };
            xhr.open('GET', 'charts/fetchBrgyCodes.php', true);
            xhr.send();
        }

        // Event listener for the filter button
        document.getElementById('filterButton').addEventListener('click', function () {
            const brgyCode = document.getElementById('brgyCodeSelect').value;
            fetchData(chart1, `charts/fetchBCPC.php?brgyCode=${brgyCode}`);
            fetchData(chart2, `charts/fetchBDF.php?brgyCode=${brgyCode}`);
        });

        // Load the initial data
        loadBrgyCodes();

        // Load data for the first chart
        // fetchData(chart1, 'charts/fetchBCPC.php'); // Replace 'fetchData.php' with the actual URL

        // // Load data for the second chart after a delay (adjust the delay time as needed)
        // setTimeout(() => {
        //     fetchData(chart2, 'charts/fetchBDF.php'); // Replace 'fetchSecondData.php' with the actual URL
        // }, 2000); // Example: Load the second dataset after 2 seconds
    </script>
<!-- Jquery JS-->
<?php include "include/admin/footer.php"; ?>
