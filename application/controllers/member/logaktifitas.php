<section class="content">
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-13">
        <div class="card">
                <h2> Log Aktifitas </h2>
                    <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>
                   <div class="card-body" style="background-color: orange">
                        <div class="table-responsive">
                            <table class="table table-bordered datatables"  id="book-table" style="width:100%">
                                <thead>
                                    <tr class="table-success">
                                        <th>no</th>
                                        <th >username </th>
                                        <th >Waktu</th>
                                        <th>Aplikasi</th>
                                       
                                    </tr>
                                </thead>
                                <tbody style="text-align:justify;width:100%;">
                                    <?php  
                                    $i = 1;
                                    foreach ($log as $data): ?>
                                    <tr>
                                        <td>
                                         <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $data->username ?>
                                        </td>
                                        <td>
                                            <?php echo $data->waktu ?>
                                        </td>
                                        <td>
                                            <?php echo $data->nama_aplikasi ?>
                                        </td>
                                        </tr>
                                    <?php $i++; endforeach; ?>

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

    
