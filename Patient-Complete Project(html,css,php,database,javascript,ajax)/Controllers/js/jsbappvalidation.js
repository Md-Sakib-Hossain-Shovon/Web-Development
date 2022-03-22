
		function isvalid() {
			var flag = true;
			var docnameErr = document.getElementById("docnameErr");
			var specializedinErr = document.getElementById("specializedinErr");
			var availabletimeErr = document.getElementById("availabletimeErr");

			
			var docname = document.forms["bookappointmentform"]["fname"].value;
			var specializedin = document.forms["bookappointmentform"]["gender"].value;
			var availabletime = document.forms["bookappointmentform"]["dob"].value;
			
			docnameErr.innerHTML= "";
			specializedinErr.innerHTML = "";
			availabletimeErr.innerHTML = "";

			if(docname === ""){
				flag = false;
				docnameErr.innerHTML= "Please fill up the doctor name";
			}
			if(specializedin=== "") {
				flag = false;
				specializedinErr.innerHTML = "please fill up the specialization field";
			}
			if(availabletime=== "") {
				flag = false;
				availabletimeErr.innerHTML = "please fill up the time field";
			}
			
			console.log("abc "+ flag)
			return flag;
		}
