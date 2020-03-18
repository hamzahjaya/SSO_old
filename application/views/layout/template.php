<!DOCTYPE html>
<html>

<head>
	<title>
		SSO Sytem
	</title>
	<!-- meta -->
	<?php require_once('_meta.php') ;?>

	<!-- css -->
	<?php require_once('_css.php') ;?>
	  <link rel="stylesheet" href="<?php echo base_url();?>/assets/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

	<!-- jQuery 2.2.3 -->
	<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition skin-yellow fixed sidebar-mini">
	<div class="wrapper">
		<!-- header -->
		<?php require_once('_header.php') ;?>
		<!-- sidebar -->
		<?php require_once('_sidebar.php') ;?>
		<!-- content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content">
				<?php echo $contents ;?>
			</section>
		</div>
		<!-- footer -->
		<?php require_once('_footer.php') ;?>

		<div class="control-sidebar-bg"></div>
	</div>
	<!-- js -->
	<?php require_once('_js.php') ;?>
</body>

</html>
