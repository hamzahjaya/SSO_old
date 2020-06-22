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
            <p class="login-box-msg"><b>Permintaan password baru</b></p>
            <h5>Hello <span><?php echo $username; ?></span>, Silakan isi password baru anda.</h5>   
           
            <?php echo form_open('authen/Lupa/reset_password/token/'.$token); ?>
           
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="password baru">
                    <div class="input-group-append input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="passconf" placeholder="konfirmasi password">
                    <div class="input-group-append input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
			<div class="row">
				
				<div class="col-xs-12 col-sm-6 col-md-6" style="padding-bottom: 5px">
					<button type="submit"name="btnSubmit" value="Reset" class="btn btn-secondary btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Ubah password</button>
				</div>
			</div>

                
      
      
    </form>
    
  </div>
  <div id="myalert">
    <?php echo $this->session->flashdata('alert', true); ?>
  </div>
  <br>
  