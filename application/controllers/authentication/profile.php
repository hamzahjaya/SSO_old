<div class="msg" style="display: none;">
	<?php echo $this->session->flashdata('msg'); ?>
	
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
			<form class="form-horizontal" action="<?php echo base_url('auth/updateProfile') ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $this->session->userdata('username'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $this->session->userdata('email'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">No HP</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="no_hp" name="no_hp" value="<?php echo $this->session->userdata('no_hp'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">No SK</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" placeholder="No SK" name="no_sk" value="<?php echo $this->session->userdata('no_sk'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">NIP</label>
				<div class="col-sm-10">
				<input type="number" class="form-control" placeholder="NIP" name="nip" value="<?php echo $this->session->userdata('nip'); ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Foto</label>
				<div class="col-sm-10">
				<input type="file" class="form-control" placeholder="Foto" name="photo">
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
		<form class="form-horizontal" action="<?php echo base_url('auth/updatePassword') ?>" method="POST">
		<div class="form-group">
			<label for="passLama" class="col-sm-2 control-label">Password Lama</label>
			<div class="col-sm-10">
			<input type="password" class="form-control" placeholder="Password Lama" name="passLama">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			<input type="email" class="form-control" placeholder="Email" name="email">
			</div>
		</div>
		<div class="form-group">
			<label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
			<div class="col-sm-10">
			<input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
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
