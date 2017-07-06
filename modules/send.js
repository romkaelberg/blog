    function send() {
        var msg   = $('#message_form').serialize();
        $.ajax({
            type: 'POST',
            url: 'modules/add_social.php',
            data: msg,
            success: function(data) {
                $('#modal2').modal('open');
                show();
                // $('#results').html(data);
            },
            error:  function(xhr, str){
                alert('Error: ' + xhr.responseCode);
            }
        });
        document.getElementById('message_form').reset();

    }