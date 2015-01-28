$(document).ready(function() {
    $('#form-register').on('submit', function(e) {
        e.preventDefault();

        var pass1 = $('#pass1').val(),
            pass2 = $('#pass2').val();
        
        if(pass1 == '' || pass2 == '' || pass1 != pass2) {
            $('#registerErrorMsg').text("Passwords do not match");
            return false;
        }
        
        
        $.post(
            $(this).prop('action'),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "username": $('#username').val(),
                "password": pass1,
                "email" : $('#email').val()
            },

            function(resp) {
                if(resp.status){
                    $('#registerErrorMsg').empty();
                    
                    if(resp.errors.username){
                        $('<p>').text('*' + resp.errors.username).appendTo('#registerErrorMsg')
                            .attr('id', 'registerErrorStr');
                    }
                    if(resp.errors.password){
                        $('<p>').text('*' + resp.errors.password).appendTo('#registerErrorMsg')
                                .attr('id', 'registerErrorStr');
                    }
                    if(resp.errors.email) {
                        $('<p>').text('*' + resp.errors.email).appendTo('#registerErrorMsg')
                                .attr('id', 'registerErrorStr');
                    } 
                } else {
		    
		    $('.registerBox').empty();
                    $('.registerSuccess').show();
		    
		    
                }
            },
            'json'
        );


        
        return false;
    });
});