     

<h2 class="display-4" style="margin-bottom:25px;" >Pendaftaran Master aplikasi SSO</h2>        

                 <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
	                        	<?= form_open('admin/user/tambahapp') ?>

                                    <div class="form-group has-feedback">
                                        
                                        <input type="text" name="nama_aplikasi" class="form-control" required placeholder="Nama Aplikasi">
                                        <span class="glyphicon glyphicon-th-large  form-control-feedback"></span>
                                        <?php echo form_error('Nama','<div class="text-danger"><small>','</small></div>') ;?>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                                        <?= form_close() ;?>	
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>  
    </div>    