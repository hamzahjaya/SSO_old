
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
						<!-- <a href="<?php echo site_url('admin/user/listapp') ?>"><i class="fa fa-arrow-left"></i>
							Back</a> -->
                            <div class="card-body">
                            Edit data admin
						<div class="table-responsive">
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
                                            oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

                                            <input type="hidden" name="id_user" value="<?php echo $t_user->id_user?>" />

                                            <div class="form-group">
                                                <label for="username">username</label>
                                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                                type="text" name="username" placeholder="username " value="<?php echo $t_user->username ?>"/>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('username') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">password lama</label>
                                                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                                type="text" name="password"  placeholder="password lama" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('password') ?>
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