$('.client_status').on('change', function () {
    let id  = $(this).data("html")
    let val = $(this).val()
    let url = $(this).data("url")

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $.ajax({
        url: url,
        data: {id: id, val: val, _method: 'put'},
        type: 'POST',
        dataType: "json",
        success: function (res) {
            if (res.status === 200){
                $('#success_status_message').fadeIn()
                function fadeOut(){
                    $('#success_status_message').fadeOut()
                }
                setTimeout(fadeOut, 3000);
            }
        }
    })
})
