$('#tampil').hide();
$('#partai').hide();
$('#save').hide();

function tampil() {
	var kd_prov 	= $('#provinsi').val();
	var kd_dapil 	= $('#dapilFilter').val();
	var kd_partai	= $('#partaiFilter').val();

	$.ajax({
		type: "POST",
		url: base_url+'/master/anggota/tampilProvinsi',
		data: {kd_prov:kd_prov,kd_dapil:kd_dapil,kd_partai:kd_partai},
		dataType: "html",
		success: function(res)
		{
			$('#list').html(res);
			$('#dapilInfo').html($('#dapilFilter').find(":selected").text());
			$('#partaiInfo').html($('#partaiFilter').find(":selected").text());
		}
	});
}
$('#tampil').click(function(){

	tampil();

});

	$('#provinsi').change(function(){

		var kd_pro = $('#provinsi').val();

		$.ajax({
			type: "POST",
			url: base_url+'/master/dapil/getPusat',
			data: {kd_pro:kd_pro},
			dataType: "html",
			success: function(res)
			{
				$("#list").html(res);
			}
		});

	});



//grid dpr

	var
		$container = $("#dpr"),
		$console = $("#exampleConsole"),
		$parent = $container.parent(),
		autosaveNotification,
		hot;

	hot = new Handsontable($container[0], {
		// columnSorting: true,
		startRows: 100,
		startCols: 6,
		rowHeaders: true,
		// data : dataObject,
		colHeaders: ['No Urut', 'Nama Anggota','Jenis Kelamin' ,'Jumlah Suara','Peringkat Suara','Terpilih','Dilantik','PCT','Aktif'],
		columns: [
			{},
			{},
			{
				type: 'dropdown',
			    source: ['l', 'p']				
			},
			{},
			{},
			{
				type: 'dropdown',
			    source: ['ya', 'tidak']
			},
			{
				type: 'dropdown',
			    source: ['ya', 'tidak']			
			},
			{
		
			},
			{
				type: 'dropdown',
			    source: ['ya', 'tidak']			
			}
		],
		minSpareCols: 0,
		minSpareRows: 1,
		contextMenu: true,
		width: 550,
		height: 200,
		colWidths: [80	, 200,100, 100,110, 60, 60, 100, 60]
	});
	$("#hot-display-license-info").remove();


	$('#save').click(function(){

		var kd_prov 		= $('#provinsi').val();
		var kd_dapil 	= $('#dapilFilter').val();
		var kd_partai	= $('#partaiFilter').val();

		$.ajax({
			url: base_url+"master/anggota/simpanProvinsi",
			data: {data: hot.getData(),kd_prov:kd_prov,kd_dapil:kd_dapil,kd_partai:kd_partai}, // returns all cells' data
			dataType: 'json',
			type: 'POST',
			success: function (res) {
				if (res === 'sukses') {
					alert('Data Berhasil Menyimpan');
					tampil();
					var dataObject = [];
					hot.updateSettings({
						data : dataObject,
						startRows: 10,
					    
					});
					hot.render();
				}
				else {
					alert('Gagal Menyimpan');
				}
			},
			error: function () {
				alert('Gagal Menyimpan');
			}
		});
	});