<!DOCTYPE html>
<html>
<body>
		<center>
			<h1>Tambah Aplikasi Baru</h1>
		</center>
		<form action="<?php echo base_url().'aplikasi/tambah_aplikasi' ; ?>" method="post">

				<table style="margin: 20px auto;">
					<tr>	
						<td>ID Aplikasi </td>	
						<td><input type="text" name="id_aplikasi">></td>
					</tr>
					<tr>	
						<td>Nama Aplikasi </td>	
						<td><input type="text" name="id_aplikasi">></td>
					</tr>
					<tr>	
						<td>Token Aplikasi </td>	
						<td><input type="text" name="id_aplikasi">></td>
					</tr>
						<?php foreach ($t_master_aplikasi as $Aplikasi): ?>
									<tr>
										<td>
											<?php echo $Aplikasi->id_aplikasi ?>
										</td>
										<td>
											<?php echo $Aplikasi->nama_aplikasi ?>
										</td>
										<td>
											<?php echo $Aplikasi->token_aplikasi ?>
										</td>
									</tr>
						<?php endforeach; ?>

			</table>

		</form>
</body>
</html>
<!-- <div class="content">

								<tbody>
									
										<td>
											<a href=""
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a 
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
											 <div class="modal fade" id="modal-hapus">
        										<div class="modal-dialog">
									            <div class="modal-content">
									                <div class="modal-header">
									                    <h4 class="modal-title">Hapus User</h4>
									                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									                        <span aria-hidden="true">&times;</span>
									                    </button>
									                </div>
									                <div class="modal-body">
									                    <p>Anda yakin ingin menghapus User ini ?</p>
									                </div>
									                <div class="modal-footer justify-content-between">
									                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
									                    <button type="button" data-hapus="" class="yakin btn btn-primary">Yakin</button>
									                </div>
										            </div>
										            <!-- /.modal-content -->
										        </div>
										        <!-- /.modal-dialog -->
										    </div>
										</td>
									</tr>
									

								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
</div> -->