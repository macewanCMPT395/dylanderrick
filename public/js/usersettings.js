$(document).ready(function() {

	var editmode = false;

	$('#form-usersettings').on('submit', function() {
		var	dummypass = document.getElementById('dummypass'),
			newnamebox = document.getElementById('uname'),
			passboxes = document.getElementById('upass'),
			editmodebtn = document.getElementById('editbtn');

		if((editmode == false)) {

			dummypass.style.display = "none";
			newnamebox.style.visibility = "visible";
			passboxes.style.visibility = "visible";
			editmodebtn.value = "Submit Changes";
			editmode = true;

		}

		else {

			dummypass.style.display = "inline";
			newnamebox.style.visibility = "hidden";
			passboxes.style.visibility = "hidden";
			editmodebtn.value = "Edit Username and Password";
			editmode = false;

		}

		return false;

	});

});
