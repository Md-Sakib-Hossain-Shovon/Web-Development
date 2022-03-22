<?php
require 'dbConnect.php';

function getUser($uname, $pass)
{
    $connection = connect();

    $query = "SELECT * FROM users WHERE uname = ? AND pass = ?";
    $sql = $connection->prepare($query);
    $sql->bind_param("ss", $uname, $pass);
    $sql->execute();
    $res = $sql->get_result();
    return $res->num_rows === 1;
}
?>
