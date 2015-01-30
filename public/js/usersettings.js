$(document).ready(function() {    
	var	editmode = false,
		passedit = false;


	$('#form-usersettings').on('submit', function() {

		if((editmode == false)) {

			$('#dummypass').hide();
			$('#uname').show();
			$('#editbtn').prop('value', 'Submit Changes');
			$('#passbtn').show();
			editmode = true;

			return false;

		}

		return true;

	});


	$('#passbtn').click(function(e) {

		if(passedit == false)
		{

			passedit = true;
			$('#upass').show();
			return false;

		}

		passedit = false;
		$('#npass').value = '';
		$('#ncpass').value = '';
		$('#upass').hide();
		

	});


    
    
        var confirmBox = LightBox.init();
        var confirmBoxHTML =$('<div></div>')
                            .load(' #deletePopup .popupBox');
    
	$('#delbtn').click(function(e) {
		confirmBox.width('600px').height('300px');
                confirmBox.show(confirmBoxHTML.html());
	});

});
