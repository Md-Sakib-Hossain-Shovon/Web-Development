<?php
function insertTransaction($category, $recipient, $Amount)
{
    $date = date("Y-m-d", time());
    $time = date("h:i");
    $connection = connect();

    $query = "INSERT INTO transaction_details (transaction_category, recipient, Amount, date, time) VALUES (?, ?, ?, ?, ?)";
    $sql = $connection->prepare($query);

    $sql->bind_param("sssss", $category, $recipient, $Amount, $date, $time);
    return $sql->execute();
}
