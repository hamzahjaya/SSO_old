<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
       
<h2 class="display-4" style="margin-bottom:25px;"> Kirim Token Aplikasi</h2>
        
                      
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
			<div class="col-sm-12">
            <label for="Email" >Email</label>
			<input type="email" class="form-control" placeholder="Email" name="email"> 
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-12">
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
	