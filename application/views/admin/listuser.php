<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> -->
 <!-- <section class="content"> -->
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
       
        <!-- <div class="content"> -->
		<h2 class="display-4" style="margin-bottom:25px;"> Daftar User </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-15">
                    <div >
                        <div   style="background-color: orange">
						<div class="table-responsive">
							<table class="table table-bordered datatables"  id="book-table" style="width:100%">
								<thead >
									<tr>
										<th>no</th>	
										<th>role</th>
										<th>Username</th>
										<th>Email</th>
                                        <th>Nama</th>
										<th>no hp</th>
                                        <th>nik</th>
                                        <th>nip</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody style="text-align:justify;width:100%;">
									<?php 
									$i = 1;
									foreach ($t_user as $user): ?>
									<tr>
									
									<td>
											<?php echo $i ?>
										</td>
										<td>
											<?php echo $user->role ?>
										</td>
                                        <td>
											<?php echo $user->username ?>
										</td>
                                        <td>
											<?php echo $user->email ?>
										</td>
                                        
                                        
                                        
                                        <td>
											<?php echo $user->nama ?>
										</td>
										<td>
											<?php echo $user->no_hp ?>
										</td>
                                        
                                        <td>
											<?php echo $user->nik ?>
										</td>
                                        <td>
											<?php echo $user->nip ?>
										</td>
                                       										
										<td>
											 <a href="<?php echo site_url('admin/user/edituser/'.$user->id_user) ?>"
											 > 
											 <button class="btn btn-success" type="button"  title="Edit"><i class="fa fa-edit"></i>
											 </button></a>
											  <a href="<?php echo site_url('admin/user/deleteuser/'.$user->id_user) ?>"
											 ><button class="btn btn-danger" type="button"  title="Delete"><i class="fa fa-trash"></i></button></a> 
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
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
	