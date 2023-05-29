
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
                    <div class="row my-5">
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
                    <div class="row my-5">
                        <div class="col-6">
                            <div style="display: flex; justify-content: space-between">                        
                                <canvas id="chart3" style="width: 200px; height: 150px;"></canvas>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="display: flex; justify-content: space-between">                        
                                <canvas id="chart4" style="width: 200px; height: 150px;"></canvas>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class=col-6>
                            <label for="yearSelect">Year</label>
                            <select id="yearSelect"></select>
                            <button class="btn btn-primary" id="filterYearButton">Filter</button>
                        </div>  
                    </div>

                    <div class="row my-5">
                        <div class="col-6">
                                <div style="display: flex; justify-content: space-between">                        
                                    <canvas id="chart5" style="width: 200px; height: 150px;"></canvas>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="display: flex; justify-content: space-between">                        
                                    <canvas id="chart6" style="width: 200px; height: 150px;"></canvas>
                                </div>
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

        const ctx3 = document.getElementById('chart3').getContext('2d');
        const chart3 = new Chart(ctx3, {
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
                        text: 'BDRRMF(A) Chart',
                        font: {
                            size: 16
                        }
                    }
                }
            }
        });

        const ctx4 = document.getElementById('chart4').getContext('2d');
        const chart4 = new Chart(ctx4, {
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
                        text: 'BDRRMF(B) Chart',
                        font: {
                            size: 16
                        }
                    }
                }
            }
        });

        const ctx5 = document.getElementById('chart5').getContext('2d');
        const chart5 = new Chart(ctx5, {
            type: 'pie',
            data: {},
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'KP Bucal2 C1',
                        font: {
                                size: 16
                            }
                    }
                }
            }
        });

        const ctx6 = document.getElementById('chart6').getContext('2d');
        const chart6 = new Chart(ctx6, {
            type: 'pie',
            data: {},
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'KP Bucal2 C2',
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
                        fetchData(chart3, `charts/fetch_bdrrmf_a_tbl.php?brgyCode=${brgyCodes[0]}`);
                        fetchData(chart4, `charts/fetch_bdrrmf_b_tbl.php?brgyCode=${brgyCodes[0]}`);
                        fetchData(chart5, `charts/fetch_kp_bucal2_tbl_c1.php?brgyCode=${brgyCodes[0]}&year=${yearSelect.value}`);
                        fetchData(chart6, `charts/fetch_kp_bucal2_tbl_c2.php?brgyCode=${brgyCodes[0]}&year=${yearSelect.value}`);
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
            fetchData(chart3, `charts/fetch_bdrrmf_a_tbl.php?brgyCode=${brgyCode}`);
            fetchData(chart4, `charts/fetch_bdrrmf_b_tbl.php?brgyCode=${brgyCode}`);
            fetchData(chart5, `charts/fetch_kp_bucal2_tbl_c1.php?brgyCode=${brgyCodes[0]}&year=${yearSelect.value}`);
            fetchData(chart6, `charts/fetch_kp_bucal2_tbl_c2.php?brgyCode=${brgyCodes[0]}&year=${yearSelect.value}`);
        });

        const yearSelect = document.getElementById('yearSelect');
        var currentYear = new Date().getFullYear();

        // Set the range of years you want to populate
        var startYear = 1900; // Change this to the desired starting year
        var endYear = currentYear; // Change this to the desired ending year

        // Iterate through the range of years and create options
        for (var year = endYear; year >= startYear; year--) {
            var option = document.createElement('option');
            option.text = year;
            option.value = year;
            yearSelect.add(option);
        }

        document.getElementById('filterYearButton').addEventListener('click', function () { 
            const brgyCode = document.getElementById('brgyCodeSelect').value;           
            fetchData(chart5, `charts/fetch_kp_bucal2_tbl_c1.php?brgyCode=${brgyCode}&year=${yearSelect.value}`);
            fetchData(chart6, `charts/fetch_kp_bucal2_tbl_c2.php?brgyCode=${brgyCode}&year=${yearSelect.value}`);
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
