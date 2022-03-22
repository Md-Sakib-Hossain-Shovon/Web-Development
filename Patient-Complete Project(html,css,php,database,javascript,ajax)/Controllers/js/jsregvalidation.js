
		function isvalid() {
			var flag = true;
			var fnameErr = document.getElementById("fnameErr");
			var lnameErr = document.getElementById("lnameErr");
			var genderErr = document.getElementById("genderErr");
			var dobErr = document.getElementById("dobErr");
			var religionErr = document.getElementById("religionErr");
			var emailErr = document.getElementById("emailErr");
			var unameErr = document.getElementById("unameErr");
			var passErr = document.getElementById("passErr");
			
			var fname = document.forms["registrationform"]["fname"].value;
			var lname = document.forms["registrationform"]["lname"].value;
			var gender = document.forms["registrationform"]["gender"].value;
			var dob = document.forms["registrationform"]["dob"].value;
			var religion = document.forms["registrationform"]["religion"].value;
			var email = document.forms["registrationform"]["email"].value;
			var uname = document.forms["registrationform"]["uname"].value;
			var pass = document.forms["registrationform"]["pass"].value;
			
			fnameErr.innerHTML= "";
			lnameErr.innerHTML = "";
			genderErr.innerHTML = "";
			dobErr.innerHTML = "";
			religionErr.innerHTML = "";
			emailErr.innerHTML = "";
			unameErr.innerHTML = "";
			passErr.innerHTML = "";

			if(fname === ""){
				flag = false;
				fnameErr.innerHTML= "Please fill up the first name";
			}
			if(lname=== "") {
				flag = false;
				lnameErr.innerHTML = "please fill up the last name";
			}
			if(gender=== "") {
				flag = false;
				genderErr.innerHTML = "please fill up the gender name";
			}
			if(dob=== "") {
				flag = false;
				dobErr.innerHTML = "please fill up the dob name";
			}
			if(religion=== "") {
				flag = false;
				religionErr.innerHTML = "please fill up the religion name";
			}
			if(email=== "") {
				flag = false;
				emailErr.innerHTML = "please fill up the email";
			}
			if(uname=== "") {
				flag = false;
				unameErr.innerHTML = "please fill up the user name";
			}
			if(pass=== "") {
				flag = false;
				passErr.innerHTML = "please fill up the password";
			}
			console.log("abc "+ flag)
			return flag;
		}
