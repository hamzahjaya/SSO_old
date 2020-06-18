
        <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-13">
                    <div class="card">
					<h2> Log permintaan password </h2>
					
					<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                        <div class="card-body"  style="background-color: white">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered"  style="width:100%">
								<thead >
									<tr>
										<th style="text-align:center">ID Request </th>
                                        <th style="text-align:center;width:5%;">ID User</th>
										<th style="text-align:center;width:30%;">Nama User</th>
										
                                        <th style="text-align:center">email</th>
										<th style="text-align:center"> Request Time </th>
									</tr>
								</thead>
								
									<?php foreach ($hasil as $data): ?>
									<tr>
										<td>
											<?php echo $data->id_request ?>
										</td>
                                        <td>
											<?php echo $data->id_user ?>
										</td>
										<td>
											<?php echo $data->username ?>
										</td>
                                        
										<td>
											<?php echo $data->email ?>
										</td>
                                       
										<td>
											<?php echo $data->request_time ?>
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

	
