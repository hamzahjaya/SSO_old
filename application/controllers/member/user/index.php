<?php
$this->load->view('layout/header');
$this->load->view('layout/navbar');
$this->load->view('layout/sidebar');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Manajemen User</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data User
                            <a href="<?= base_url('master/user/tambah') ?>" class="btn btn-warning" style="float: right"> <i class="fas fa-plus"></i> Tambah User</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                            $data=$this->session->flashdata('success');
                            if($data!=""){ ?>
                                <div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
                                <br>
                            <?php } ?>
                            <table class="table table-bordered" id="tabel">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Role</th>
                                    <th>Biro</th>
                                    <th>Bagian</th>
                                    <th>Sub Bagian</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($user as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value['nama'] ?></td>
                                            <td><?= $value['role'] ?></td>
                                            <td><?= $value['nama_biro'] ?></td>
                                            <td><?= $value['nama_bagian'] ?></td>
                                            <td><?= $value['nama_subbag'] ?></td>
                                            <td>
                                               <button class="btn btn-sm btn-primary" ><i class="fas fa-edit"></i></button>
                                               <button class="btn btn-sm btn-danger hapus" id="<?= $value['id_admin'] ?>" data-toggle="modal" data-target="#modal-hapus"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                        ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
    <div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus User ini ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="button" data-hapus="" class="yakin btn btn-primary">Yakin</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<!-- /.content-wrapper -->
    <script src="<?= base_url() ?>assets/js/user/index.js"></script>
<?php
$this->load->view('layout/footer');
?>