
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
						<a href="<?php echo site_url('admin/user/listapp') ?>"><i class="fa fa-arrow-left"></i>
							Back</a>
                            <div class="card-body">
						<div class="table-responsive">
                        
                        <form  action="<?= base_url('admin/user/updatetoken/'.$aplikasi[0]['id_aplikasi'])?> " method="POST">
								    <?php echo form_open('admin/user/updatetoken/'.$_SESSION['id_user']); ?>
                                    <input type="hidden" name="id_aplikasi" value="<?= $aplikasi[0]['id_aplikasi']?>" />
       
                                            <div class="form-group">
                                                <label for="token_aplikasi">Token Lama aplikasi</label>
                                                <input class="form-control <?php echo form_error('token_aplikasi') ? 'is-invalid':'' ?>"
                                                type="text" name="token_aplikasi"  placeholder="token_aplikasi" value="<?= $aplikasi[0]['token_aplikasi']?>" disabled/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('token_aplikasi') ?>
                                                </div>
                                            </div>


                                            <input class="btn btn-success" type="submit" name="btn" value="Ubah token baru" />
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