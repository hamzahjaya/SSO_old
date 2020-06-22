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
										<th>id aplikasi</th>
										<th>nama aplikasi</th>
										<th>token aplikasi</th>
										
									</tr>
								</thead>
								<tbody>
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
