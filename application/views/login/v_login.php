<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN PETUGAS</title>

	<!-- Global stylesheets -->
	<link rel="stylesheet" media="all" href="<?php echo base_url()?>bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
	<link href="<?php echo base_url('bootstrap/assets/css/icons/icomoon/styles.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('bootstrap/assets/css/minified/core.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('bootstrap/assets/css/minified/components.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('bootstrap/assets/css/minified/colors.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js'); ?>"></script>
  <!-- /core JS files -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/app.js'); ?>"></script>

</head>

<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/bb.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
 </style>";
 ?>

<body>
      <h4><marquee> <font color='#6699ff'>-System Pengambilan Nomor Antrian Online Di Pukesmas-</font></marquee></h4>
 <br><br><br>
	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="<?php echo site_url('Login/signin'); ?>" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">LOGIN PETUGAS</h5>
							</div>
							<?php 
							$data=$this->session->flashdata('sukses');
							if($data!=""){ ?>
							<div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
							<?php } ?>
							<?php 
							$data2=$this->session->flashdata('error');
							if($data2!=""){ ?>
							<div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
							<?php } ?>
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="username" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>
						</div>
					</form>
					<div class="footer text-muted">
						&copy; Antrian Online.2018.
					</div>
					<!-- /footer -->
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
