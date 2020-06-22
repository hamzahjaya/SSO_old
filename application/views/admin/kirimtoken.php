<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
       
<<<<<<< HEAD
<h2 class="display-4" style="margin-bottom:25px;"> Kirim Token Aplikasi</h2>
        
                      
=======
<<<<<<< HEAD
<h2 class="display-4" style="margin-bottom:25px;"> Kirim Token Aplikasi</h2>
        
                      
=======
<h2> Kirim Token Aplikasi</h2>
        <div class="content">
		
        <div class="container-fluid">
			<div class="row">
			
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body" >
						<div class="table-responsive">
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
>>>>>>> 50a1bbbd9f3ae23310277f621a8f15d72c4ef7d5
                        <?php
            if ($this->session->flashdata('berhasil')) {
                ?>
                <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('berhasil');?>
                </div>
                <?php
            }
            ?>
            <form class="form-horizontal" action="<?php echo base_url('admin/user/sendtoken'); ?>" method="POST">
		<div class="form-group">
<<<<<<< HEAD
			<div class="col-sm-12">
=======
<<<<<<< HEAD
			<div class="col-sm-12">
=======
			<div class="col-sm-10">
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
>>>>>>> 50a1bbbd9f3ae23310277f621a8f15d72c4ef7d5
            <label for="Email" >Email</label>
			<input type="email" class="form-control" placeholder="Email" name="email"> 
			</div>
		</div>
		<div class="form-group">
<<<<<<< HEAD
			<div class="col-sm-12">
=======
<<<<<<< HEAD
			<div class="col-sm-12">
=======
			<div class="col-sm-10">
>>>>>>> 621239a07995e371facd0f82175f55c621b3624e
>>>>>>> 50a1bbbd9f3ae23310277f621a8f15d72c4ef7d5
            <label for="Nama Aplikasi" >Nama Aplikasi</label>
            <select name="nama_aplikasi" class="form-control" id="nama_aplikasi">
                <option> - Pilih Aplikasi -</option>
                <?php
                    foreach ($user->result() as $baris) {
                        echo "<option value='".$baris->token_aplikasi."'>".$baris->nama_aplikasi."</option>";
                    }
                ?>
            </select>
			</div>
		</div>

        <!-- <div class="form-group">
			<div class="col-sm-10">
            <label for="token aplikasi" >Token aplikasi</label>
            <select name="token_aplikasi" class="form-control" id="token_aplikasi">
                <option> - Pilih Aplikasi -</option>
                <?php
                    foreach ($user->result() as $baris) {
                        echo "<option value='".$baris->token_aplikasi."'>".$baris->token_aplikasi."</option>";
                    }
                ?>
            </select>
			</div>
		</div> -->
		 
		<div class="form-group">
			<div class="col-sm-offset- col-sm-10">
				<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> kirim</button>
				</div>
			</div>
		</form>


                                    </div>
                                </div>
                            </div>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
	