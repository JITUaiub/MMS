function validate(){
		var email = document.getElementById('email').value;
		var password = document.getElementById('password').value;
		
		var e=0; var p=0;

		if(email.length == 0){
			e = 1;
			document.getElementById("errorEmail").innerHTML = "Email cannot be empty.";
		}else{
			document.getElementById("errorEmail").innerHTML = "";
		}

		if(password.length == 0){
			p = 1;
			document.getElementById("errorPassword").innerHTML = "Password cannot be empty.";
		}else{
			document.getElementById("errorPassword").innerHTML = "";
		}

		if(e == 0 && p == 0){
			return true;
		}
		return false;
	}