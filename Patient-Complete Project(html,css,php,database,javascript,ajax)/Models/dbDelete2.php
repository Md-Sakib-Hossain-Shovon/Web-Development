<?php

function removeUser($id, $doname)
{
    $connection = connect();
    $sql = $connection->prepare("DELETE FROM organ WHERE id = ? and doname = ?");
    $sql->bind_param("is", $id, $doname);
    return $sql->execute();

}
?>
