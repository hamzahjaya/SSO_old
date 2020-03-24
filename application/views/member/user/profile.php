<div class="msg" style="display: none;">
	
<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

</div>
<div class="row">
	<div class="col-md-3">
		<!--Progile Image-->
		<div class="box-primary">
			<div class="box-body box-prpfile">
			
				<h3 class="profile-username text-center"><?php echo $this->session->userdata('first_name')?> <?php echo $this->session->userdata('last_name'); ?></h3>
				<p class="text-muted text-center"><?php echo $get_all_userdata[0]['nama'];?></p>
				<ul class="list-group list-group-unbordered">
					<li class="list-group-item" style="text-align:center">
						<b>Username</b><br><a><?php echo $get_all_userdata[0]['username'];?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Tanggal Daftar</b><br><a><?php echo $get_all_userdata[0]['last_login'];?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Terakhir Login</b><br><a><?php echo $get_all_userdata[0]['last_logout'];?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#settings" data-toggle="tab">Ubah Identitas</a></li>
				<li><a href="#password" data-toggle="tab">Ubah Password</a></li>
			</ul>
	<div class="tab-content">
		<div class="active tab-pane" id="settings">
		<form class="form-horizontal" action="<?= base_url('member/user/updateprofile/'.$user[0]['id_user'])?> " method="POST">
			<?php echo form_open('member/user/updateprofile/'.$_SESSION['id_user']); ?>
            
            
			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Username" name="username" value="<?= $user[0]['username']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				<input type="email" class="form-control" placeholder="Email" name="email" value="<?= $user[0]['email']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">No HP</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="no_hp" name="no_hp" value="<?= $user[0]['no_hp']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $user[0]['nama']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">No SK</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" placeholder="No SK" name="no_sk" value="<?= $user[0]['no_sk']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">NIP</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" placeholder="NIP" name="nip" value="<?= $user[0]['nip']?>">
				</div>
			</div>
			 
			<div class="form-group">
				<label class="col-sm-2 control-label">nik</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" placeholder="Nik " name="nik" value="<?= $user[0]['nik']?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Simpan</button>
				</div>
			</div>
			</form>
	</div>
	<div class="tab-pane" id="password">
	
	<form class="form-horizontal" action="<?= base_url('member/user/updatepassword/'.$user[0]['id_user'])?> " method="POST">
			<?php echo form_open('member/user/updatepassword/'.$_SESSION['id_user']); ?>
            
		<div class="form-group">
			<label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
			<div class="col-sm-10">
			<input type="password" class="form-control" placeholder="Password Baru" name="password">
			</div>
		</div>
		<div class="form-group">
			<label for="passKonf" class="col-sm-2 control-label">Konfirmasi Password</label>
			<div class="col-sm-10">
			<input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
			</div>
		</div>
		 
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Simpan</button>
				</div>
			</div>
		</form>

</div>
</div>
