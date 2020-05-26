<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-13">
                    <div class="card">
					<h2> Log Aktifitas</h2>
					
					<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
                        <div class="card-body"  style="background-color: white">
						<div class="table-responsive">   
<table class="table table-striped table-bordered">
    <tr>
        <th>username</th>
        <th>waktu</th>
        <th>aplikasi</th>     
  
    </tr>
	<?php foreach($log as $c){ ?>
    <tr>
		
<td><?php echo $c['username']; ?></td>
<td><?php echo $c['waktu']; ?></td>
<td>
<!-- <?php echo $c['aplikasi']; ?> -->
</td>

		
    </tr>
	<?php } ?>
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
