
function fetch() {
    const doname = document.getElementById('doname');

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if(this.status === 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", "organvalidation.php");
    xhttp.send();
}

	 
	