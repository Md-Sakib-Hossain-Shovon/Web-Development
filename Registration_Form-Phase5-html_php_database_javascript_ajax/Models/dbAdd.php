<?php

require 'dbConnect.php';

function insertUser($fname, $lname, $gender, $dob, $religion, $padress, $peadress, $phone, $email, $pweblink, $uname, $pass)
{
    $connection = connect();

    $query = "INSERT INTO users (fname, lname, gender, dob, religion, padress, peadress, phone, email, pweblink, uname, pass) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $sql = $connection->prepare($query);
    $sql->bind_param("ssssssssssss", $fname, $lname, $gender, $dob, $religion, $padress, $peadress, $phone, $email, $pweblink, $uname, $pass);
    return $sql->execute();
}
?>
