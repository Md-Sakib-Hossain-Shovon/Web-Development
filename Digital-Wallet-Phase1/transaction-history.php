<?php
$TotalRec = "";
$TransactionCategory = "";
$Amount = "";
$To = "";
$TransferredOn = "";

define("filepath", "data.txt");
$retrievedData = json_decode(file_get_contents(filepath));
$TotalRecords = sizeof($retrievedData);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction History</title>
</head>

<body>
    <h1>Page 2 [Transaction History]</h1>
    <h3>Digital Wallet</h3>

    <span>
        <table>
            <style>
                td {
                    padding-right: 25px;
                }
            </style>
            <tr>
                <td><a href="home.php">1.Home</a></td>
                <td><a href="transaction-history.php">2.Transaction History</a></td>
            </tr>
        </table>
    </span>

    <h3>Total Records: (<?php $TotalRec ?>)</h3>

    <table>
        <tr>
            <th>Transaction Category</th>
            <th>To</th>
            <th>Amount</th>
            <th>Transferred On</th>
        </tr>
        <tr>
            <?php
            if ($retrievedData != null) {
                foreach ($retrievedData as $obj) {
                    echo '<td>' . $obj->{'Type'} . '</td>
                        <td>' . $obj->{'To'} . '</td>
                        <td>' . $obj->{'Amount'} . '</td>
                        <td>' . $obj->{'Time'} . '</td>';
                }
            }
            ?>

        </tr>
    </table>
</body>

</html>