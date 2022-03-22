<?php
require "./../model/dbConnect.php";
require "./../model/dbAdd.php";
require "home.php";

$set = true;

if (isset($_POST['category'])) {
    $category = $_POST['category'];
} else {
    $set = false;
}
if (isset($_POST['PhoneNum'])) {
    $phoneNum = $_POST['PhoneNum'];
} else {
    $set = false;
}
if (isset($_POST['Amount'])) {
    $Amount = $_POST['Amount'];
} else {
    $set = false;
}

 else {
    $yes = true;
    if ($EmptyFieldCategory || $EmptyFieldAmount || $EmptyFieldCategory) {
        if ($EmptyFieldCategory) {
            echo $CatError . "<br>";
           
        }
        if ($EmptyFieldAmount) {
            echo $PhoneNumError . "<br>";
            
        }
        if ($EmptyFieldAmount) {
            echo $AmountError . "<br>";
       
        }
    } else {
        if ($category === 'default') {
            $CatError = "Provide Category";
            $yes = false;
        }
        if (empty($PhoneNum)) {
            $PhoneNumError = "Provide Recipient Number!";
            $yes = false;
        }
        if (empty($Amount)) {
            $AmountError = "Enter an Amount!";
            $yes = false;
        }

        if ($yes) {
            if (insertTransaction($category, $PhoneNum, $Amount)) {
                echo "Successful!";
            } else {
                echo "Unsuccessful";
            }
        }
    }
}
