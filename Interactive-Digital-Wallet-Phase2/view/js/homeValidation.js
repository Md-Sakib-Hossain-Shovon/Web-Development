const catagory = document.getElementById('selected_category');
const PhoneNum = document.getElementById('PhoneNum');
const Amount = document.getElementById('Amount');

const CatError = document.getElementById('errinputCat');
const PhoneNumError = document.getElementById('errinputPhoneNum');
const AmountError = document.getElementById('errinputAm');

function isvalid() {
    var Phone = checkPhoneNumber();
    var Amount = checkAmount();
    var inputCategory = checkCaterogry();
    console.log(Amount);
    console.log(PhoneNum);
    console.log(Category);
    if(Phone && Category &&  Amount) {
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function() {    
            if(this.status === 200) {
                
                document.getElementById('result').innerHTML = this.responseText;
            }               
        }
        xhttp.open('POST', "./../controller/transaction.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("category=" + category.options[category.selectedIndex].value + "&PhoneNum="+ PhoneNum.value + "&Amount=" + Amount.value);
    }
}


function checkCaterogry() {
    if(category.options[category.selectedIndex].value === 'default') {
        CatError.innerHTML = "Please Select a Category";
        return false;
    } else {
        CatError.innerHTML = '';
        return true;
    }
}

function checkPhoneNumber() {
    console.log(PhoneNum.value);
    if(PhoneNum.value != '') {
        if(validatePhoneNum(PhoneNum.value)) {
            PhoneNumError.innerHTML = '';
            return true;
        } else {
            PhoneNumError.innerHTML = "Please Enter Phone Number!!!";
            return false;
        }
    } else {
        PhoneNumError.innerHTML = 'Please Enter  Phone Number!!!';
        return false;
    }

}

function checkAmount() {

    if(Amount.value != '') {
        if(Amount.value > 0) {
            AmountError.innerHTML = '';
            return true;
        } else{
            AmountError.innerHTML = "Must Be > 0!";
            return false;
        }
    } else {
        AmountError.innerHTML = 'Enter Amount!!!';
        return false;
    }
}


