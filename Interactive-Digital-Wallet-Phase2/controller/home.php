<?php
require "./../model/homeVar.php";

$EmptyFieldCategory = false;
$EmptyFieldPhoneNumber = false;
$EmptyFieldAmount = false;
$EmptyField = false;
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit'])) {

        if (empty($_POST["category"])) {
            $CatError = "Please SELECT a CATEGORY!";
            $EmptyFieldCategory = true;
            $EmptyField = true;
        }
        if (empty($_POST["Amount"])) {
            $AmountError = "You must enter a amount!";
            $EmptyFieldAmount = true;
            $EmptyField = true;
        } 
        if (empty($_POST["PhoneNum"])) {
            $PhoneNumError = "Eenter a Phone Number!";

            $EmptyField = true;
        } 
    }
}
function Test_User_Input($Data)
{
    return trim(htmlspecialchars(stripcslashes($Data)));
}
