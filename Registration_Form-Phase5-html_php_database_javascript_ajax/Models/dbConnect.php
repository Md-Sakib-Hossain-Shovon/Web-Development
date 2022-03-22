<?php
function connect()
{
    try {
        $connection = new mysqli("localhost", "sakib", "1234", "wtk");
        return $connection;
    } catch (Exception $e) {
        $Message = "Database connection failed ....!!! ";
    }
}
?>
