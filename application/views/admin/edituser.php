
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
    </head>
        
        
    <div class="row">
	<div class="col-md-3">
		<!--Progile Image-->
			<div class="box-body box-prpfile">
			
				<h3 class="profile-username text-center"><?php echo $this->session->userdata('first_name')?> <?php echo $this->session->userdata('last_name'); ?></h3>
				<p class="text-muted text-center"><?php echo $get_all_userdata[0]['nama'];?></p>
				<ul class="list-group list-group-unbordered">
					<li class="list-group-item" style="text-align:center">
						<b>Username</b><br><a><?php echo $get_all_userdata[0]['username'];?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>Terakhir login</b><br><a><?php echo $get_all_userdata[0]['last_login'];?></a>
					</li>
					<li class="list-group-item" style="text-align:center">
						<b>terakhir daftar</b><br><a><?php echo $get_all_userdata[0]['last_logout'];?></a>
					</li>
				</ul>
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
		<form class="form-horizontal" action="<?= base_url('admin/user/updateadmin/'.$user[0]['id_user'])?> " method="POST">
			<?php echo form_open('admin/user/updateadmin/'.$_SESSION['id_user']); ?>
            
            <input type="hidden" name="id_aplikasi" value="<?= $user[0]['id_user']?>" />
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
				<input type="text" class="form-control" placeholder="No SK" name="no_sk" value="<?= $user[0]['no_sk']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">NIP</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="NIP" name="nip" value="<?= $user[0]['nip']?>">
				</div>
			</div>
            <div class="form-group">
				<label class="col-sm-2 control-label">NIK</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="nik" name="nik" value="<?= $user[0]['nik']?>">
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
    <form class="form-horizontal" action="<?= base_url('admin/user/updatepassword/'.$user[0]['id_user'])?> " method="POST">
			<?php echo form_open('admin/user/updatepassword/'.$_SESSION['id_user']); ?>
            
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
        

    <script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable();
});
</script>