$(document).ready(function() { 
        var changeMsg = ["No changes to save.", "There are changes to be saved."];
        var nameChanged = false;
    
        var submitButton = {
            enable: function() {
                $('input[type=submit]').removeAttr('disabled');
            },
            disable: function() {
                $('input[type=submit]').attr('disabled', 'disabled');
            }
        };
            
        var checkPasswords = function() {
            var pass1 = $('#newPassword').val(),
                pass2 = $('#confirmPassword').val();

            
            if(pass1 == '' && pass2 == '') {
                if(nameChanged == false){
                    $('#changeNotice').text(changeMsg[0]);
                    $('#passwdErr').empty();
                    submitButton.disable();
                }
            
            } else if(pass1 != pass2) {
                $('#passwdErr').text("Passwords do not match");
                submitButton.disable();
                $('#changeNotice').empty();
                //return false;
            } else {
                submitButton.enable();
                $('#passwdErr').empty();
                $('#changeNotice').text(changeMsg[1]);
            }         
        };
    
    
    
        var originalUserName = $('#namechange').val();
        submitButton.disable();
    
        $('#changeNotice').text(changeMsg[0]);
    
        $('#namechange').on('change keyup paste', function(e) {
            if($('#namechange').val() != originalUserName) {
                submitButton.enable();
                $('#changeNotice').text(changeMsg[1]);
            } else {
                $('#changeNotice').text(changeMsg[0]);
                submitButton.disable();
            }
        });
    
        $('#newPassword').on('change keyup paste', function(e) {
            checkPasswords();
        });
    
        $('#confirmPassword').on('change keyup paste', function(e) {
            checkPasswords();
        });
    
    
        var confirmBox = LightBox.init();
        var confirmBoxHTML =$('<div></div>')
                            .load(' #deletePopup .popupBox');
    
	$('#delbtn').click(function(e) {
		confirmBox.width('600px').height('200px');
                confirmBox.show(confirmBoxHTML.html());
	});

});
