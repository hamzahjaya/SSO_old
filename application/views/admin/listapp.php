<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    
<h2 class="display-4" style="margin-bottom:25px;"> Daftar Aplikasi </h2>

        <div class="container">
            <div class="row">
                <div class="col-md-15">
                    <div class="card">
=======
 <section class="content">
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
					<h2> Daftar Aplikasi </h2>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-15">
                    <div class="card">
					
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
					<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                        <div class="card-body"  style="background-color: orange">
						<div class="table-responsive">
<<<<<<< HEAD
							<table class="table table-bordered datatables"  id="book-table" style="width:100%">
=======
							<table id="example" class="table table-striped table-bordered">
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
								<thead >
									<tr>
										<th>No</th>
										<th >Nama Aplikasi</th>
										<th >Token Aplikasi</th>
<<<<<<< HEAD
										<th> Aksi </th>
=======
										<th colspan="2"> Aksi </th>
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
									</tr>
								</thead>
								<tbody>
									<?php 
									$i = 1;
									foreach ($t_master_aplikasi as $aplikasi): ?>
									<tr>
										<td>
											<?php echo $i ?>
										</td>
										<td>
											<?php echo $aplikasi->nama_aplikasi ?>
										</td>
                                        <td>
											<?php echo $aplikasi->token_aplikasi ?>
										</td>
										<td>
											 <a href="<?php echo site_url('admin/user/edit/'.$aplikasi->id_aplikasi) ?>"
											 class="btn btn-small"><button class="btn btn-success" type="button"  title="Edit"><i class="fa fa-edit"></i>
											 </button></a>
											 <a href="<?php echo site_url('admin/user/deleteapp/'.$aplikasi->id_aplikasi) ?>"
<<<<<<< HEAD
											 class="btn btn-small"><button class="btn btn-danger" type="button"  title="Delete"><i class="fa fa-trash"></i></button></a>
=======
											 class="btn btn-small"><i class="fa fa-trash"></i> Delete</a>
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
										</td>
									</tr>
											<?php 
											$i++;
											endforeach; ?>
                                            </tbody>
                                        </table>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
        $('.datatables').DataTable();
$('.hapus').click(function(){
    idHapus = $(this).attr('id');
});
</script>       
                                    </div>
                                </div>
                            </div>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>

	
