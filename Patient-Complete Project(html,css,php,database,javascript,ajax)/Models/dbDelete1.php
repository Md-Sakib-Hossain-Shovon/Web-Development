<?php

function removeUser($id, $docname)
{
    $connection = connect();
    $sql = $connection->prepare("DELETE FROM appointment WHERE id = ? and docname = ?");
    $sql->bind_param("is", $id, $docname);
    return $sql->execute();

}
?>
