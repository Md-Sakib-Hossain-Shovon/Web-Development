const inputdate = document.getElementById('date');
const inputtime = document.getElementById('time');

function search() {
    var date = checkinputdate();
    var time = checkinputtime();

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if(this.status === 200) {
            document.getElementById('search-result').innerHTML = this.responseText;
        }
    }

    if(date && time) {
        xhttp.open('GET', "./../controller/tran-history.php?date=" + date.value +"&time=" + time.value);
        xhttp.send();
    }
    else if(date){
        xhttp.open('GET', "./../controller/tran-history.php?date=" + date.value);
        xhttp.send();
    } else if(time) {
        xhttp.open('GET', "./../controller/tran-history.php?time=" + time.value);
        xhttp.send();
    } else {
        document.getElementById('search-result').innerHTML = "<h3>Provide Information</h3>"
    }
}

function checkinputtime() {
    if(time.value !=null) {
        return true;
    } return false;
}

function checkinputdate() {
    if(date.value != null) {
        return true;
    } return false;
}