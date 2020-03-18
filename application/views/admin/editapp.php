
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
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                                            oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

                                            <input type="hidden" name="id_aplikasi" value="<?php echo $t_master_aplikasi->id_aplikasi?>" />

                                            <div class="form-group">
                                                <label for="nama_aplikasi">Nama Aplikasi</label>
                                                <input class="form-control <?php echo form_error('nama_aplikasi') ? 'is-invalid':'' ?>"
                                                type="text" name="nama_aplikasi" placeholder="nama aplikasi" value="<?php echo $t_master_aplikasi->nama_aplikasi ?>" disabled/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('nama_aplikasi') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="token_aplikasi">Token Lama aplikasi</label>
                                                <input class="form-control <?php echo form_error('token_aplikasi') ? 'is-invalid':'' ?>"
                                                type="text" name="token_aplikasi"  placeholder="token_aplikasi" value="<?php echo $t_master_aplikasi->token_aplikasi?>" disabled/>
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