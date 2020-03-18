
$('.hapus').click(function(){

    var id = $(this).attr('id')
    $('.yakin').attr('data-hapus',id)


 });

$('.yakin').click(function(){

    var id = $(this).attr('data-hapus')

    $.ajax({
        type: "POST",
        url: base_url+"master/user/hapus",
        data: {id:id},
        dataType: "json",
        cache : false,
        success: function(res)
        {
            if (res === "sukses")
            {
                alert("User berhasil dihapus")
                location.reload()
            }
            else
            {
                alert("Maaf terjadi kesalahan, cobalah beberapa saat lagi")

            }
        }

    });
});
