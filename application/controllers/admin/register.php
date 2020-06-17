     


                 <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

		<h2 class="login-box-msg">Pendaftaran Akun SSO</h2>
        
		<?= form_open('admin/user/register') ?>

        <div class="form-group has-feedback">
			<input type="text" name="username" class="form-control" required placeholder="Username">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<?php echo form_error('Username','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
				
        <div class="form-group has-feedback">
			<input type="email" name="email" class="form-control" required placeholder="Email">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<?php echo form_error('email','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
		<div class="form-group has-feedback">
			<input type="password" name="password" class="form-control" required placeholder="Password">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<?php echo form_error('password','<div class="text-danger"><small>','</small></div>') ;?>
		</div>

		<div class="form-group has-feedback">
			<input type="password" name="password2" class="form-control" required placeholder="Konfirmasi password">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<?php echo form_error('Konfirmasi password','<div class="text-danger"><small>','</small></div>') ;?>
		</div>

        <div class="form-group has-feedback">
			<input type="text" name="nama" class="form-control" required placeholder="Nama">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
			<?php echo form_error('Nama','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
        
		
        <div class="form-group has-feedback">
			<input type="text" name="no_hp" class="form-control" required placeholder="No hp">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
			<?php echo form_error('No_hp','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
        

        <div class="form-group has-feedback">
			<input type="text" name="no_sk" class="form-control" required placeholder="no SK">
			<span class="glyphicon glyphicon-book form-control-feedback"></span>
			<?php echo form_error('no_sk','<div class="text-danger"><small>','</small></div>') ;?>
		</div>

        
        <div class="form-group has-feedback">
			<input type="text" name="nik" class="form-control" required placeholder="nik">
			<span class="glyphicon glyphicon-book form-control-feedback"></span>
			<?php echo form_error('nik','<div class="text-danger"><small>','</small></div>') ;?>
		</div>

        
        <div class="form-group has-feedback">
			<input type="text" name="nip" class="form-control" required placeholder="nip">
			<span class="glyphicon glyphicon-book form-control-feedback"></span>
			<?php echo form_error('nip','<div class="text-danger"><small>','</small></div>') ;?>
		</div>
		<div class="form-group has-feedback"> Role
			<select id="role" name="role">
			<option value="admin">admin</option>
			<option value="user">user</option>
			</select>
			<?php echo form_error('Username','<div class="text-danger"><small>','</small></div>') ;?>
		</div>

		<div class="row">
			<div class="col-xs-4">
		      <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
		      <?= form_close() ;?>	
			</div>
		</div>
