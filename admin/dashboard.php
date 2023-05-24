
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
                        <div class="col-md-12">
                            <div style="display: flex; justify-content: space-between">                        
                                <canvas id="chart" style="width: 400px; height: 300px;"></canvas>
                                <!-- <canvas id="chart2" style="width: 400px; height: 300px;"></canvas> -->
                            </div>
                            <!-- <div style="display: flex; justify-content: space-between">
                                <canvas id="chart3" style="width: 400px; height: 300px;"></canvas>
                                <canvas id="chart4" style="width: 400px; height: 300px;"></canvas>
                            </div>
                            <div style="display: flex; justify-content: space-between">
                                <canvas id="chart5" style="width: 400px; height: 300px;"></canvas>
                                <canvas id="chart6" style="width: 400px; height: 300px;"></canvas>
                            </div>
                            <div style="display: flex; justify-content: space-between">
                                <canvas id="chart7" style="width: 400px; height: 300px;"></canvas>
                                <canvas id="chart8" style="width: 400px; height: 300px;"></canvas>
                            </div> -->
                        </div>
                    </div>

					<!-- END DATA TABLE -->
					<?php include "include/admin/footer2.php"; ?>


				</div>
			</div>
		</div>
	</div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script>
        // Create the chart
        const ctx = document.getElementById('chart').getContext('2d');
        const chart = new Chart(ctx, {
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

        // Fetch data using AJAX
        function fetchData(brgyCode = '') {
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
            xhr.open('GET', `charts/fetchBCPC.php?brgyCode=${brgyCode}`, true);
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
                        
                        fetchData(brgyCodes[0]);
                    }
                }
            };
            xhr.open('GET', 'charts/fetchBrgyCodes.php', true);
            xhr.send();
        }

        // Event listener for the filter button
        document.getElementById('filterButton').addEventListener('click', function () {
            const brgyCode = document.getElementById('brgyCodeSelect').value;
            fetchData(brgyCode);
        });

        // Load the initial data
        loadBrgyCodes();
        fetchData();
    </script>
<!-- Jquery JS-->
<?php include "include/admin/footer.php"; ?>
