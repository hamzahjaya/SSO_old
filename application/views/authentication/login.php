<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SSO KPU RI | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        .login-box, .register-box {
    width: 400px;
    margin: 6% auto;
}
    </style>
</head>
<body class="hold-transition login-page" style="background-image:url(assets/vendor/assets/images/gedung.jpg); background-repeat: no-repeat;background-size: cover;">
<div class="login-box" >
    <div class="login-logo">
        <!-- <img src="<?= base_url() ?>/assets/dist/img/gedung.png"> -->

    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <div class="login-logo">
        <img src="<?= base_url() ?>assets/vendor/assets/dist/img/logo.png">
        </div>
            <p class="login-box-msg"><b>Single Sign On (SSO)</b></p>
            <p class="login-box-msg"><b>Komisi Pemilihan Umum Republik Indonesia</b></p>
            <p class="login-box-msg"><b>Silahkan Masuk</b></p>
            <?php
            if ($this->session->flashdata('login')) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('login'); ?>
                </div>
                <?php
            }
            ?>
            <form action="<?php echo base_url('auth/login'); ?>" role="login" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email" placeholder="email">
                    <div class="input-group-append input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
			<div class="row">
				
				<div class="col-xs-12 col-sm-6 col-md-6" style="padding-bottom: 5px">
					<button type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>
				</div>
			</div>
			<a href="<?php echo base_url('authen/lupa'); ?>"> Lupa Kata Sandi?</a><br>
			
			
		</form>
		
	</div>
	<div id="myalert">
		<?php echo $this->session->flashdata('alert', true); ?>
	</div>
	<br>
	<!-- <div class="box box-solid box-info">
		<div class="box-header">
				<h3 class="box-title">User Login</h3>
		</div>
		<div class="box-body">
			<b>E-mail</b> : admin@mail.com (administrator) <br>
			<b>E-mail</b> : member@mail.com (member)<br>
			<b>Password</b> : password
	</div> 
</div> -->


<script>
	$(function() {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
	$('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
</script>
