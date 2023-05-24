<?php
include "include/login-function/session.php";
include "include/function/config.php";

$sql = "SELECT * FROM `admin_tbl`";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
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
									<h2 class="text-center">ADMIN ACCOUNT</h2>
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
						<!--  <div class="col-lg-1">
                            </div> -->
						<div class="col-lg-12">
							<!-- <a href="add_barangay_info.php" class="btn btn-primary">ADD</a> -->
							<div class="table-responsive table--no-card m-b-30">
								<table class="table table-bordered table-striped table-earning table-wrapper-scroll-y" style="display: table;">
									<thead>
										<tr>
											<th class="text-center">FIRST NAME</th>
											<th class="text-center">LAST NAME</th>
											<th class="text-center" width="60%">USERNAME</th>
											<th class="text-center">EMAIL</th>
											<th class="text-center">UPDATE</th>
										</tr>
									</thead>
									<tbody>


										<?php while ($data = $result->fetch_assoc()) {
												  $id = $data["id"];
												  $first_name = $data["first_name"];
												  $last_name = $data["last_name"];
												  $middle_name = $data["middle_name"];
												  $email = $data["email"];
												  $username = $data["username"];
											  } ?>
										<tr>
											<td class="text-center">
												<?php echo $first_name; ?>
											</td>
											<td class="text-center">
												<?php echo $last_name; ?>
											</td>
											<td class="text-center">
												<?php echo $username; ?>
											</td>
											<td class="text-center">
												<?php echo $email; ?>
											</td>
											<td class="text-center">
												<a href="edit-account.php?edit_account=<?php echo $id; ?>" class="btn btn-primary btn-sm">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update
												</a>
											</td>
										</tr>
									</tbody>
								</table>
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
<!-- Jquery JS-->
<?php include "include/admin/footer.php"; ?>
