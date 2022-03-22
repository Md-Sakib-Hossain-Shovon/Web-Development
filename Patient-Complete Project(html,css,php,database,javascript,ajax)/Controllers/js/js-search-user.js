/*function fetch() {
    const uname = document.getElementById('uname');

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if(this.status === 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", "./Controllers/welcomevalidation.php?uname=" + uname.value);
    xhttp.send();
}*/

function getData(pForm){
	var xhttp = new XMLHttpRequest();
	xhttp.onload = function() {
		document.getElementById('result').innerHTML = this.responseText;
		   
	}
	  
	xhttp.open("GET",pForm.action + "?uname=" + pForm.uname.value,true );
	xhttp.send();
	
}
	  
		  
	 
	