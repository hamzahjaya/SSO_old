<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div class="content">
	<div class="container-fluid">
		<div class="card-body" >
					<!-- <div class="card-header">
						<a href="<?php echo site_url('member/user/add') 
						?>" class="btn btn-primary btn-sm">Tambah Baru</a>
					</div> -->

					<div class="card-body" style="background-color: white">
						<div class="table-responsive">
							<table class="table table-bordered datatables"  id="tabel">
								<thead>
									<tr class="table-success">
										<th>username</th>
										<th>email</th>
										<th>no_hp</th>
										<th>last login</th>
										<th>last logout</th>
										<th>nama</th>
										<th>no sk</th>
										<th>nik</th>
										<th>nip</th>
										<!-- <th>aksi</th> -->
									</tr>
								</thead>
								<tbody>
									<?php foreach ($t_user as $user): ?>
									<tr>
										<td>
											<?php echo $user['username'] ?>
										</td>
										<td>
											<?php echo $user['email'] ?>
										</td>
										<td>
											<?php echo $user['no_hp'] ?>
										</td>
										<td>
											<?php echo $user['last_login'] ?>
										</td>
										<td>
											<?php echo $user['last_logout'] ?>
										</td>
										<td>
											<?php echo $user['nama'] ?>
										</td>
										<td>
											<?php echo $user['no_sk'] ?>
										</td>
										<td>
											<?php echo $user['nik'] ?>
										</td>
										<td>
											<?php echo $user['nip'] ?>
										</td>
										<!-- <td> -->
											<!-- <a href="<?php echo site_url('member/user/edit/'.$user->id_user) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('member/user/delete/'.$user->id_user) ?>')"
											 href="#!" cclass="hap us" data-target=".bd-example-modal-lg"><i class="fas fa-trash" style="color: red "></i> Hapus</a> -->

											  
										<!-- </td> -->
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
		$('.datatables').DataTable();
$('.hapus').click(function(){
	idHapus = $(this).attr('id');
});

$('#iya').click(function(){
	$.ajax({
		type: "POST",
		url: base_url+'maember/user/delete',
		data: {id_user},
		dataType: "html",
		success: function(res)
		{
			$('.modal').modal('toggle');
			$('#list').html(res);
		}
	});	
});	
</script>		
						
					
		</div>	
	</div>
</div>
