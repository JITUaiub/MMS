function validate(){
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var password = document.getElementById('password').value;
		var conPassword = document.getElementById('conPassword').value;
		
		var n=0; var e=0; var p=0; var c=0;

		if(name.length == 0){
			n = 1;
			document.getElementById("errorName").innerHTML = "Name cannot be empty.";
		}else{
			document.getElementById("errorName").innerHTML = "";
		}

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

		if(conPassword.length == 0){
			c = 1;
			document.getElementById("errorConPassword").innerHTML = "Confirm password cannot be empty.";
		}else if(conPassword != password){
			c = 1;
			document.getElementById("errorConPassword").innerHTML = "Confirm password doesn't match.";
		}else{
			document.getElementById("errorConPassword").innerHTML = "";
		}

		if(n == 0 && e == 0 && p == 0 && c == 0){
			return true;
		}
		return false;
	}

	function validateEmail(str) {
	    if (str.length == 0) {
            document.getElementById("validEmail").innerHTML = "";
            return;
        }else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("validEmail").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "action/getEmail.php?q=" + str, true);
        xmlhttp.send();
       }
	}