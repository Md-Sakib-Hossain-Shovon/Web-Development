
function fetch() {
    const docname = document.getElementById('docname');

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if(this.status === 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", "appointmentvalidation.php");
    xhttp.send();
}

	 
	