	<script>
		function isvalid() {
			var flag = true;
			
			var unameErr = document.getElementById("unameErr");
			var passErr = document.getElementById("passErr");
			
			
			var uname = document.forms["login"]["uname"].value;
			var pass = document.forms["login"]["pass"].value;
			
			unameErr.innerHTML = "";
			passErr.innerHTML = "";

		
			if(uname=== "") {
				flag = false;
				unameErr.innerHTML = "please fill up the user name";
			}
			if(pass=== "") {
				flag = false;
				passErr.innerHTML = "please fill up the password";
			}
			return flag;
		}
	</script> 
