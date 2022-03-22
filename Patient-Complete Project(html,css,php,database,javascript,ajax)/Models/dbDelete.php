<?php

function removeUser($id, $uname)
{
    $connection = connect();
    $sql = $connection->prepare("DELETE FROM users WHERE id = ? and uname = ?");
    $sql->bind_param("is", $id, $uname);
    return $sql->execute();

}
?>
