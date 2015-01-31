$(document).ready(function() { 
        var changeMsg = ["No changes to save.", "There are changes to be saved."];
        var nameChanged = false;
        var passChanged = false;

        var updateLabelColors = function() {
            if(nameChanged) $('label[for=namechange]').css('color', 'green');
            else $('label[for=namechange]').css('color', '');
            
            
            if(passChanged) {
                $('label[for=newPassword]').css('color', 'green');
                $('label[for=confirmPassword]').css('color', 'green');
            } else {
                $('label[for=newPassword]').css('color', '');
                $('label[for=confirmPassword]').css('color', '');    
            }
        };
    
        
    
        var updateMessage = function() {
            if(passChanged == -1) $('#changeNotice').empty();
            else if(passChanged || nameChanged) $('#changeNotice').text(changeMsg[1]);
            else $('#changeNotice').text(changeMsg[0]);
            
            updateLabelColors();
        }
        
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
                $('#passwdErr').empty();
                return 0;
            } else if(pass1 != pass2) {
                $('#passwdErr').text("Passwords do not match");
                return -1;
            } else {
                $('#passwdErr').empty();
                return 1;
            }         
        };
    
        var updateSubmitButton = function() {
            passChanged = checkPasswords();
          if(passChanged || nameChanged) {
              if(passChanged >= 0) submitButton.enable();
              else if(passChanged) submitButton.disable();
              else submitButton.enable();
          } else {
              submitButton.disable();
          }
            
            updateMessage();
        };

    

        var originalUserName = $('#namechange').val();
        submitButton.disable();
    
        $('#changeNotice').text(changeMsg[0]);
    
        $('#namechange').on('change keyup paste', function(e) {
            if($('#namechange').val() != originalUserName) {
                nameChanged = true;
            } else {
                nameChanged = false;
            }
            updateSubmitButton();
        });
    
        $('#newPassword').on('change keyup paste', function(e) {
            updateSubmitButton();
        });
    
        $('#confirmPassword').on('change keyup paste', function(e) {
            updateSubmitButton();
        });
    
    
        var confirmBox = LightBox.init();
        var confirmBoxHTML =$('<div></div>')
                            .load(' #deletePopup .popupBox');
    
	$('#delbtn').click(function(e) {
		confirmBox.width('600px').height('200px');
                confirmBox.show(confirmBoxHTML.html());
	});

});
