$(document).ready(function() {

	var	editmode = false,
		passedit = false;

/*
	$('input[name=yourlabel]').click(function(e) {

		

	});*/

	$('#form-usersettings').on('submit', function() {
		/*var	dummypass = document.getElementById('dummypass'),
			newnamebox = document.getElementById('uname'),
			passboxes = document.getElementById('upass'),
			editmodebtn = document.getElementById('editbtn');*/

		if((editmode == false)) {
			$('#dummypass').hide();
			//dummypass.style.display = "none";
			//newnamebox.style.visibility = "visible";
			$('#uname').show();
			//passboxes.style.visibility = "visible";
			//$('#upass').show();
			//editmodebtn.value = "Submit Changes";
			$('#editbtn').value = "Submit Changes";
			$('#passbtn').show();
			editmode = true;

			return false;

		}

		/*else {

			dummypass.style.display = "inline";
			newnamebox.style.visibility = "hidden";
			passboxes.style.visibility = "hidden";
			editmodebtn.value = "Edit Username and Password";
			editmode = false;

		}*/

		return true;

	});

	//$('input[name=passbtn]').click(function(e) {
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

});
