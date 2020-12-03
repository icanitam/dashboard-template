<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META SECTION -->
	<title>dashboard-template</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<!-- END META SECTION -->

	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="assets/css/theme-default.css" />
	<!-- EOF CSS INCLUDE -->
</head>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-container page-navigation-top-fixed">

		<!-- START PAGE SIDEBAR -->
		<div class="page-sidebar page-sidebar-fixed scroll">
			<!-- START X-NAVIGATION -->
			<ul class="x-navigation">
				<li class="xn-logo">
					<a href="">dashboard-template</a>
					<a href="#" class="x-navigation-control"></a>
				</li>

				<li class="xn-profile">
					<a href="#" class="profile-mini">
						<img src="assets/img/no-image.jpg" alt="John Doe" />
					</a>
					<div class="profile">
						<div class="profile-image">
							<img src="assets/img/no-image.jpg" alt="John Doe" />
						</div>
						<div class="profile-data">
							<div class="profile-data-name"><?= $user['name'] ?></div>
							<div class="profile-data-title"><?= $user['role'] ?></div>
						</div>
					</div>
				</li>

				<li class="xn-title">Navigation</li>
				
				<li class="active">
					<a href=""><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
				</li>
				
				<?= $html_menu_tree ?>
			</ul>
			<!-- END X-NAVIGATION -->
		</div>
		<!-- END PAGE SIDEBAR -->

		<!-- PAGE CONTENT -->
		<div class="page-content">

			<!-- START X-NAVIGATION VERTICAL -->
			<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
				<!-- TOGGLE NAVIGATION -->
				<li class="xn-icon-button">
					<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
				</li>
				<!-- END TOGGLE NAVIGATION -->

				<!-- SIGN OUT -->
				<li class="xn-icon-button pull-right">
					<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
				</li>
				<!-- END SIGN OUT -->
			</ul>
			<!-- END X-NAVIGATION VERTICAL -->

			<!-- START BREADCRUMB -->
			<ul class="breadcrumb">
				<li>Welcome</li>
			</ul>
			<!-- END BREADCRUMB -->

			<!-- PAGE CONTENT WRAPPER -->
			<div class="page-content-wrap">

				<?= $content ?>

			</div>
			<!-- END PAGE CONTENT WRAPPER -->
		</div>
		<!-- END PAGE CONTENT -->
	</div>
	<!-- END PAGE CONTAINER -->

	<!-- MESSAGE BOX-->
	<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
		<div class="mb-container">
			<div class="mb-middle">
				<div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
				<div class="mb-content">
					<p>Are you sure you want to log out?</p>
					<p>Press No if youwant to continue work. Press Yes to logout current user.</p>
				</div>
				<div class="mb-footer">
					<div class="pull-right">
						<a href="logout" class="btn btn-success btn-lg">Yes</a>
						<button class="btn btn-default btn-lg mb-control-close">No</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MESSAGE BOX-->

	<!-- START PRELOADS -->
	<audio id="audio-alert" src="assets/audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="assets/audio/fail.mp3" preload="auto"></audio>
	<!-- END PRELOADS -->

	<!-- START PLUGINS -->
	<script type="text/javascript" src="assets/js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-select.js"></script>
	<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
	<script type="text/javascript" src="assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/owl/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/jstree/jstree.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/summernote/summernote.js"></script>
	<script type="text/javascript" src="assets/js/plugins/icheck/icheck.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/nvd3/lib/d3.v3.js"></script>
	<script type="text/javascript" src="assets/js/plugins/nvd3/nv.d3.min.js"></script>

	<script type='text/javascript' src='assets/js/plugins/noty/jquery.noty.js'></script>
	<script type='text/javascript' src='assets/js/plugins/noty/layouts/center.js'></script>
	<script type='text/javascript' src='assets/js/plugins/noty/layouts/topRight.js'></script>

	<script type='text/javascript' src='assets/js/plugins/noty/themes/default.js'></script>
	<!-- END PLUGINS -->

	<!-- START TEMPLATE -->
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/actions.js"></script>
	<!-- END TEMPLATE -->
</body>

</html>
