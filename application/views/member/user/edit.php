<link rel="stylesheet" href="<?=base_url();?>assets/AdminLTE/line_bar/example/assets/css/jquery.rprogessbar.min.css">

<!-- <br> -->
<div class="content-wrapper" style="margin-left: 0px;">
    <!-- Content Header (Page header) -->
<h2>UBAH DATA DIRI</h2>
 
                    
                                <form class="form-horizontal" action="<?= base_url('member/user/update/'.$user[0]['id_user'])?> " method="POST">
								<?php echo form_open('member/user/update/'.$_SESSION['id_user']); ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="id_user" name="username" value="<?= $user[0]['username']?>" placeholder="username" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $user[0]['email']?>" placeholder="email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">No HP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $user[0]['no_hp']?>" placeholder="no_hp" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user[0]['nama']?>" placeholder="nama" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">No SK</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="no_sk" name="no_sk" value="<?= $user[0]['no_sk']?>" placeholder="no_sk" autocomplete="off">
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">NIK</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nik" name="nik" value="<?= $user[0]['nik']?>" placeholder="nik" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">NIP</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nip" name="nip" value="<?= $user[0]['nip']?>" placeholder="nip" autocomplete="off">
                                        </div>
                                    </div>
									  <button type="submit" class="btn btn-primary" >Simpan</button>


                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <br><br> -->


		
	


