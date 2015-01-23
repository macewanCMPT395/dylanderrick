$(document).ready(function() {
    $('#form-login').on('submit', function() {

        $.post(
            $(this).prop('action'),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "email" : $('#email').val(),
                "password": $('#password').val()
            },

            function(resp) {
                if(resp.status){
                    if(resp.error)
                        $('.loginBox #errorMsg').text(resp.error)
                } else {
                    window.location.href = resp.redirect;
                }
            },
            'json'
        );

        return false;
    });
    

});