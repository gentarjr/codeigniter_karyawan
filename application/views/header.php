<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SISTEM KARYAWAN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/design/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/design/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/cetak/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/design/css/datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/design/css/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/design/css/rowReorder.dataTables.min.css">
	<link rel="stylesheet" type="text/css" src="<?php echo base_url(); ?>assets/design/plugins/datetimepicker/datetimepicker.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/design/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/design/css/styles_ide.css">
	<style>
		@media screen and (-ms-high-contrast: active),
		(-ms-high-contrast: none) {
			.fscreen {
				visibility: hidden;
			}
		}

		.form-control, .dropdown-menu, .btn, body{
			font-size: 12px;
		}
		body.modal-open-noscroll
		{
			margin-right: 0!important;
			overflow: hidden;
		}
		.modal-open-noscroll .navbar-fixed-top, .modal-open .navbar-fixed-bottom
		{
			margin-right: 0!important;
		}

		.excel-mcs-dialog {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
		}

		.excel-mcs-content {
			height: auto;
			min-height: 100%;
			border-radius: 0;
		}
	</style>
</head>
<body>
	<?php
	$this->load->view('view_modal/modal_alert');
	?>
	<div class="content-wrapper">
		<header id="header" class="affix">
			<div class="top-left">
			</div>
			<ul class="notification-bar list-inline pull-right">
				<li class="fscreen"><a href="javascript:;" role="button" class="fullscreen-toggle"><i class="fa fa-arrows-alt"></i></a></li>
				<li><a class="sidebar-switch"><span class="fa fa-outdent"></span></a></li>
				<li class="dropdown">
					<a id="" type="button" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-angle-down ml-5" id="user-login"></i></a>
					<div role="menu" aria-labelledby="mdenu1" class="dropdown-menu dropdown-menu-right">
						<ul class="media-list">
							<li><a href="" data-toggle='modal' data-target='#modal-profil-login'><i class="fa fa-user"></i> Profile Saya</a></li>
							<li id="btn-log-out"><a href="<?php echo site_url('Controller_login/logout'); ?>"><i class="fa fa-lock"></i> Log Out</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</header>
		<aside id="sidebar" class="sidebar affix" role="complementary">
			<div class="sidebar-container">
				<div class="user-info">
					<h4 id="menu-parent">SISTEM KARYAWAN</h4>
				</div>
				<div class="sidebar-scrollpane">
					<div class="sidebar-content">
						<nav class="main-nav">
							<ul class="sidebar-nav" id="sidebar-nav">
								<li><a class ="menu-alias" href="<?php echo site_url('Controller_home');?>" id="menu-home">HOME</a></li>
								<li><a class ="menu-alias" id="menu-dedup" href="<?php echo base_url('Controller_admin') ?>">ADMIN</a></li>
								<li><a class ="menu-alias" id="menu-dedup" href="<?php echo base_url('Controller_user') ?>">USER</a></li>
							</ul>
							<!-- sidebar-nav -->
						</nav>
					</div>
				</div>
			</div>
		</aside>
		<!-- sidebar -->

		<!-- Willy 5/5/2020 -->
		<input type="hidden" id="base_url" value=<?php echo base_url(); ?> >