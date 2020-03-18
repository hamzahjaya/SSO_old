$('#biro').change(function(){

    var id_biro = $("#biro").val()
    var role = $("#role").val()

    if (role > 2 )
    {
        $.ajax({
            type: "POST",
            url: base_url+"master/user/filterBagian",
            data: {id_biro:id_biro},
            dataType: "json",
            cache : false,
            success: function(res)
            {

                    $('#filterBagian').show()
                    $('#filterBagian').html(res.view)


            }

        });
    }
});



$('#role').change(function(){

    var role = $("#role").val()

    if (role === '1')
    {
        $('#filterBiro').hide()
        $('#filterBagian').hide()
        $('#filterSubbag').hide()
    }
    else if (role === '2')
    {
        $('#filterBiro').show()
        $('#filterBagian').hide()
        $('#filterSubbag').hide()
    }
    else if (role === '3')
    {
        $('#filterBiro').show()
        $('#filterBagian').show()
        $('#filterSubbag').hide()
    }
    else if (role === '4')
    {
        $('#filterBiro').show()
        $('#filterBagian').show()
        $('#filterSubbag').show()
    }
    else
    {
        $('#filterBiro').hide()
        $('#filterBagian').hide()
        $('#filterSubbag').hide()
    }
});
