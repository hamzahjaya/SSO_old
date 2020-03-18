<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('member/aplikasi/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('member/aplikasi/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="username">username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" placeholder="username" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_sk">no sk</label>
								<textarea class="form-control <?php echo form_error('no_sk') ? 'is-invalid':'' ?>"
								 name="no_sk" placeholder="no sk"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('no_sk') ?>
								</div>
							</div>

								<div class="form-group">
								<label for="nik">nik</label>
								<textarea class="form-control <?php echo 
								form_error('nik') ? 'is-invalid':'' ?>"
								 name="nik" placeholder="nik"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('nik') ?>
								</div>
							</div>


								<div class="form-group">
								<label for="nip">nip</label>
								<textarea class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
								 name="nip" placeholder="nip"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('nip') ?>
								</div>
							</div>

							

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
