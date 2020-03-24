<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
        
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-13">
                    <div class="card">
					<h2> Daftar User </h2>
                        <div class="card-body"  style="background-color: white">
						<div class="table-responsive">
							<table class="table table-bordered datatables"  id="book-table" style="width:100%">
								<thead >
									<tr>
										<th style="text-align:center;width:100%;">ID user</th>
										<th style="text-align:center;width:100%;">ID role</th>
										<th style="text-align:center;width:100%;">Username</th>
										<th style="text-align:center;width:100%;">Email</th>
										<th style="text-align:center;width:100%;">password</th>
                                        <th style="text-align:center;width:100%;">token</th>
                                        <th style="text-align:center;width:100%;">last login</th>
                                        <th style="text-align:center;width:100%;">last logout</th>
                                        <th style="text-align:center;width:100%;">Ip addres</th>
                                        <th style="text-align:center;width:100%;">Nama</th>
										<th style="text-align:center;width:100%;">no hp</th>
                                        <th style="text-align:center;width:100%;">No SK</th>
                                        <th style="text-align:center;width:100%;">nik</th>
                                        <th style="text-align:center;width:100%;">nip</th>
                                        <th style="text-align:center;width:100%;">active</th>
										<th style="text-align:center;width:100%;">Action</th>
										
									</tr>
								</thead>
								<tbody style="text-align:justify;width:100%;">
									<?php foreach ($t_user as $user): ?>
									<tr>
										<td width="150">
											<?php echo $user->id_user ?>
										</td>
										<td>
											<?php echo $user->id_role ?>
										</td>
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
											<?php echo $user->token ?>
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
											<?php echo $user->no_hp ?>
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
											<?php echo $user->active ?>
										</td>
										
										<td>
											 <a href="<?php echo site_url('admin/user/edituser/'.$user->id_user) ?>"
											 class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
											  <a href="<?php echo site_url('admin/user/deleteuser/'.$user->id_user) ?>"
											 class="btn btn-small"><i class="fa fa-trash"></i> Hapus</a> 
										</td>
									</tr>
                                                <?php endforeach; ?>

                                            </tbody>
                                        </table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable();
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
	