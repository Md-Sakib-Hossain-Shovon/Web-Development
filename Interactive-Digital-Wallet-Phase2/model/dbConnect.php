<?php
function connect()
{
    try {
        $connection = new mysqli("localhost", "sakib", "1234", "digital-wallet");
        return $connection;
    } catch (Exception $e) {
        $Message = "Database Connection Failed!!! ";
    }
}
