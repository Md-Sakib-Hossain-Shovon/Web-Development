<?php

require 'dbConnect.php';

function insertUser($docname, $specializedin, $availabletime)
{
    $connection = connect();

    $query = "INSERT INTO appointment (docname, specializedin, availabletime) VALUES (?, ?, ?)";
    $sql = $connection->prepare($query);
    $sql->bind_param("sss", $docname, $specializedin, $availabletime);
    return $sql->execute();
}
?>
