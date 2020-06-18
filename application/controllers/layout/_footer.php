<footer class="main-footer">
	<div class="pull-right hidden-xs">
		DATIN KPU RI
	</div>
	<strong>Copyright &copy; <?php echo date('Y'); ?> SSO SYSTEM KPU RI</strong> All rights reserved.
	<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>


<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<script src="<?= base_url() ?>/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
<!-- page script -->
<script src="<?= base_url() ?>/assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>/assets/plugins/select2/js/select2.full.min.js"></script>
<script>
		var base_url = '<?=base_url();?>';

	</script>
<script>
	$(function () {
		$('.editor').summernote()
	})
	$('.datepicker').datepicker({
		format: "dd-mm-yyyy",
	});
    $('.select2').select2()
	// $(function () {
    //     $('.datatables').DataTable({
    //         "paging": true,
    //         "searching": true,
    //         "info": true,
    //         "autoWidth": true,
    //         "scrollX": true
    //     });
	// });
    $("#tabel").DataTable();
    $(function () {
        $('.tabel').DataTable({
            "ordering": false,
            "searching":false,
            "bLengthChange": false,
            "paging":true,
            "autoWidth": true,
            "scrollX": true
        });
    });
	$(document).ready(function() {
		$('#tablebutton').DataTable( {
			ordering: false,
			lengthChange: true,
			dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
			"<'row'<'col-sm-12'B>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				'excel', 'pdf', 'print'
			]
		} );
	} );
</script>
</body>
</html>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
