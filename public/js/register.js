$(document).ready(function() {
    $('#form-register').on('submit', function() {

        $.post(
            $(this).prop('action'),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "username": $('#username').val(),
                "password": $('#password').val(),
                "email" : $('#email').val()
            },

            function(resp) {
                console.log(resp);
                if(resp.status){
                    if(resp.errors.username)
                        $('#usernameErrMsg').text(resp.errors.username)

                    if(resp.errors.password)
                        $('#passwordErrMsg').text(resp.errors.password)

                    if(resp.errors.email)
                        $('emailErrMsg').text(resp.errors.password)


                } else {
                    window.location.href = resp.redirect;
                }
            },
            'json'
        );

        return false;
    });
});