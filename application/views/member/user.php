<div class="content">
	<div class="container-fluid">
		<div class="card">
					<div class="card-header">
						<a href="<?php echo site_url('member/add') ?>" class="btn btn-primary btn-sm">Tambah Baru</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped tabel" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr class="table-success">
										<th>username</th>
										<th>email </th>
										<th>password</th>
										<th>last login</th>
										<th>last logout</th>
										<th>ip</th>
										<th>nama</th>
										<th>no sk</th>
										<th>nik</th>
										<th>nip</th>
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
											<?php echo $user->password ?>
										</td>
										<td>
											<?php echo $user->last_login ?>
										</td>
										<td>
											<?php echo $user->last_logout ?>
										</td>
										<td>
											<?php echo $user->ip ?>
										</td>
										<td>
											<?php echo $user->nama ?>
										</td>
										<td>
											<?php echo $user->no_sk ?>
										</td>
										<td>
											<?php echo $user->nik ?>
										</td>
										<td>
											<?php echo $user->nip ?>
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