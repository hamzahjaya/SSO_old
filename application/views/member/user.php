<div class="content">
	<div class="container-fluid">
		<div class="card">
					<!-- <div class="card-header">
						<a href="<?php echo site_url('member/add') ?>" class="btn btn-primary btn-sm">Tambah Baru</a>
					</div> -->
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped tabel" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr class="table-success">
										<th>username</th>
										<th>email </th>
										<th>last login</th>
										<th>last logout</th>
										<th>nama</th>
										<th>Aplikasi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($t_user as $user): ?>
									<tr>
										<td>
											<?php echo $user->username ?>
										</td>
										<td>
											<?php echo $user->email ?>
										</td>
										<td>
											<?php echo $user->last_login ?>
										</td>
										<td>
											<?php echo $user->last_logout ?>
										</td>
										<td>
											<?php echo $user->nama ?>
										</td>
										<td>
											<?php echo $user->aplikasi ?>
										</td>
										
										<td>
											<a href="<?php echo site_url('member/edit/'.$user->id_user) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('member/delete/'.$user->id_user) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
</div>