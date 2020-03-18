
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-13">
                    <div class="card">
					<h2> Daftar Aplikasi </h2>
                        <div class="card-body"  style="background-color: white">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered"  style="width:100%">
								<thead >
									<tr>
										<th style="text-align:center">ID Apps </th>
										<th style="text-align:center;width:100%;">Nama Aplikasi</th>
										<th style="text-align:center">Token Aplikasi</th>
										<th style="text-align:center"> Aksi </th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($t_master_aplikasi as $aplikasi): ?>
									<tr>
										<td>
											<?php echo $aplikasi->id_aplikasi ?>
										</td>
										<td>
											<?php echo $aplikasi->nama_aplikasi ?>
										</td>
                                        <td>
											<?php echo $aplikasi->token_aplikasi ?>
										</td>
										<td>
											 <a href="<?php echo site_url('admin/user/edit/'.$aplikasi->id_aplikasi) ?>"
											 class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
											 <a href="<?php echo site_url('admin/user/deleteapp/'.$aplikasi->id_aplikasi) ?>"
											 class="btn btn-small"><i class="fa fa-trash"></i> Delete</a>
											 
										</td>
										<td>
											<a href="<?php echo base_url().'admin/user/download/'.$aplikasi->id_aplikasi; ?>"> download </a>
										</td>	
									</tr>
                                                <?php endforeach; ?>

                                            </tbody>
                                        </table>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
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

	
