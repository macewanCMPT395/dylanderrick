$(document).ready(function() {
    $('#form-register').on('submit', function() {

        var pass1 = $('input[name="pass1"').val(),
            pass2 = $('input[name="pass2"').val();
        
        if(pass1 == '' || pass2 == '' || pass1 != pass2) {
            $('#passwordErrMsg').text("Passwords do not match");
            return false;
        }
        
        
        $.post(
            $(this).prop('action'),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "username": $('input[name="username"').val(),
                "password": $('input[name="pass1"').val(),
                "email" : $('input[name="email"').val()
            },

            function(resp) {
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