$('#tampil').hide();
$('#partai').hide();

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
		width: 931,
		height: 200,
		colWidths: [80	, 200,100, 100,110, 60, 60, 100, 60]
	});
	$("#hot-display-license-info").remove();


