<link rel="stylesheet" href="<?=base_url();?>assets/AdminLTE/line_bar/example/assets/css/jquery.rprogessbar.min.css">

<!-- <br> -->
<div class="content-wrapper" style="margin-left: 0px;">
 <!-- Content Header (Page header) -->
<h2>UBAH PASSWORD</h2>
 
<?php $data = $this->session->userdata($data); ?>

        <form action="<?= base_url('member/ganti_password'); ?>" method="POST">
            <hr>

            <br><br>

            <input type="password" name="password" class="form-control" placeholder="password" value="<?= $data['password']; ?>" readonly> <br><br>

            <input type="password" name="pw_baru"  class="form-control" placeholder="password baru">    <br>
            <?= form_error('pw_baru'); ?>

            <br>

            <input type="password" name="cpw_baru"  class="form-control" placeholder="ulangi password baru">  <br>
            <?= form_error('cpw_baru'); ?>

            <br>

            <input type="submit" name="submit" value="Ganti Password">
        </form>
</div>

    
<div class="row justify-content-center">
    <div class="col-6">
        <h1><?php echo $title ?></h1>
        <?php echo form_open('member/user/Ganti_Password', array('id' => 'passwordForm'))?>
            <div class="form-group">
                <input type="password" name="oldpass" id="oldpass" class="form-control" placeholder="Old Password" />
                <?php echo form_error('oldpass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="newpass" id="newpass" class="form-control" placeholder="New Password" />
                <?php echo form_error('newpass', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirm Password" />
                <?php echo form_error('passconf', '<div class="error">', '</div>')?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Change Password</button>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>           


		
	


