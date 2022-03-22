<?php

require 'dbConnect.php';

function insertUser($doname, $doemail, $dorgan)
{
    $connection = connect();

    $query = "INSERT INTO organ (doname, doemail, dorgan) VALUES (?, ?, ?)";
    $sql = $connection->prepare($query);
    $sql->bind_param("sss", $doname, $doemail, $dorgan);
    return $sql->execute();
}
?>
