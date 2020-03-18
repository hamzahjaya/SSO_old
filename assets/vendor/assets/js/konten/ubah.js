$('#tambah').click(function(){

    $.ajax({
        type: "POST",
        url: base_url+"master/konten/tambahFile",
        dataType: "json",
        cache : false,
        success: function(res)
        {

            $("#file_upload").append(res)
        }

    });

});

$('.hapus').click(function(){
    var id = $(this).attr('data-unik')

    $.ajax({
        type: "POST",
        data: {'id':id},
        url: base_url+"master/konten/hapusFile",
        dataType: "json",
        cache : false,
        success: function(res)
        {
            if (res === 'sukses')
            {
                $("#"+id).hide(255)
            }
            else
            {
                alert('Terjadi Kesalahan Cobalah Beberapa Saat Lagi')
            }
        }

    });

});

$('.upload').change(function(){


    var data    = new FormData();
    var id      = $(this).attr('id')

    data.append('file', $('.upload')[0].files[0]);
    data.append('id',$(this).attr('id'))
    data.append('id_publikasi',$(this).attr('data-publikasi'))
    data.append('id_format',$('#format-'+id).val())

    $.ajax({
        type: "POST",
        url: base_url+"master/konten/ubahUpload",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        dataType: "json",
        success: function(res)
        {
            alert(res.response)
            if (res.response === 'sukses')
            {
                location.reload()
            }

        }
    });

});