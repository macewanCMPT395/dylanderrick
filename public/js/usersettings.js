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


	$('#delbtn').click(function(e) {

		$('#delbtn').hide();
		$('#delcancelbtn').show();
		$('#delconf').show();
		
		

	});


	$('#delcancelbtn').click(function(e) {

		$('#delcancelbtn').hide();
		$('#delconf').hide();
		$('#delbtn').show();

	});

});
