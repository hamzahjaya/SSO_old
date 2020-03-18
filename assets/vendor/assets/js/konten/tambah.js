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

$('#biro').change(function(){

    var id_biro = $("#biro").val()

        $.ajax({
            type: "POST",
            url: base_url+"master/konten/filterBagian",
            data: {id_biro:id_biro},
            dataType: "json",
            cache : false,
            success: function(res)
            {

                $('#filterBagian').show()
                $('#filterBagian').html(res.view)


            }

        });
});
