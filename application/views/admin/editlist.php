
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
    </head>
        
        
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-13">
                    <div class="card">
					
                            <div class="card-body">
                        Edit data user
						<div class="table-responsive">
                                        
                                 <form  action="<?= base_url('admin/user/updateuser/'.$user[0]['id_user'])?> " method="POST">
								    <?php echo form_open('admin/user/updateuser/'.$_SESSION['id_user']); ?>

                                            <input type="hidden" name="id_user" value="<?= $user[0]['id_user']?>" />

                                            <div class="form-group">
                                                <label for="username">username</label>
                                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                                type="text" name="username" placeholder="username " value="<?= $user[0]['username']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('username') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">password baru</label>
                                                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                                type="text" name="password"  placeholder="password baru" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('password') ?>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control <?php echo form_error('Email') ? 'is-invalid':'' ?>"
                                                type="text" name="email"  placeholder="Email baru" value="<?= $user[0]['email']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('password') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="Nama">Nama</label>
                                                <input class="form-control <?php echo form_error('Nama') ? 'is-invalid':'' ?>"
                                                type="text" name="nama"  placeholder="Nama" value="<?= $user[0]['nama']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('Nama') ?>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label for="no_hp">No hp</label>
                                                <input class="form-control <?php echo form_error('No_hp') ? 'is-invalid':'' ?>"
                                                type="text" name="no_hp"  placeholder="no hp" value="<?= $user[0]['no_hp']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('no_hp') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="no_sk">no_sk</label>
                                                <input class="form-control <?php echo form_error('no_sk') ? 'is-invalid':'' ?>"
                                                type="text" name="no_sk"  placeholder="no_sk" value="<?= $user[0]['no_sk']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('no_sk') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nik">nik</label>
                                                <input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
                                                type="text" name="nik"  placeholder="nik" value="<?= $user[0]['nik']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('nik') ?>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label for="nip">nip</label>
                                                <input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
                                                type="text" name="nip"  placeholder="nip" value="<?= $user[0]['nip']?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('nip') ?>
                                                </div>
                                            </div>
                                            <input class="btn btn-success" type="submit" name="btn" value="Ubah data" />
						</form>

                                    </div>
                                </div>
                            </div>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable();
});
</script>