<?php
$Category = "";
$CategoryErr= "";
$PhoneNum = "";
$PhoneNumErr= "";
$Amount = "";
$AmountErr = "";
$EmptyField = false;

define("filepath", "data.txt");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit'])) {
        $CategoryType = Test_User_Input($_POST['selected_option']);
        if ($CategoryType == "Select a Value") {
            $CategoryErr = "SELECT a CATEGORY!";
            $EmptyField = true;
        }
        if (empty($_POST["amount"])) {
            $AmountErr = "You must enter Amount!";
            $EmptyField = true;
        }
        if (empty($_POST["phoneNumber"])) {
            $PhoneNumberError = "You must enter a Phone Number!";
            $EmptyField = true;
        }
        if ($CategoryType == "Send Money") {
            if (empty($_POST["phoneNum"])) {
                $PhoneNumErr = "You must enter a Phone Number!";
                $EmptyField = true;
            } else {
                $PhoneNumber = Test_User_Input($_POST["phoneNum"]);
                $Type2 = preg_match("/^[0-9]{11}+$/", $PhoneNumber);
                if (!$Type2) {
                    $PhoneNumErr = "Must be valid in Bd Number!";
                    $EmptyField = true;
                }
            }

            if (empty($_POST["amount"])) {
                $AmountErr = "You must enter a Phone Number!";
                $EmptyField = true;
            } else {
                $Amount = Test_User_Input($_POST["amount"]);

                if (!preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $Amount) || (int)$Amount < (int)"0") {
                    $AmountErr = "Must be > 0!";
                    $EmptyField = true;
                }
            }
        } else if ($CategoryType == "Recharge") {
            if (empty($_POST["phoneNum"])) {
                $PhoneNumErr = "You must enter a Phone Nunmer!";
                $EmptyField = true;
            } else {
                $PhoneNum = Test_User_Input($_POST["phoneNum"]);
                $Type2 = preg_match("/^[0-9]{11}+$/", $PhoneNum);
                if (!$Type2) {
                    $PhoneNumErr = "Must be valid in Bd Number!";
                    $EmptyField = true;
                }
            }

            if (empty($_POST["amount"])) {
                $AmountErr = "You must enter a Phone Number!";
                $EmptyField = true;
            } else {
                $Amount = Test_User_Input($_POST["amount"]);
                if (!preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $Amount) || (int)$Amount < (int)"0") {
                    $AmountErr = "Must be > 0!";
                    $EmptyField = true;
                }
            }
        } elseif ($CategoryType == "Merchent Pay") {
            if (empty($_POST["phoneNum"])) {
                $PhoneNumErr = "You must enter a Phone Num!";
                $EmptyField = true;
            } else {
                $PhoneNum = Test_User_Input($_POST["phoneNum"]);
                $Type2 = preg_match("/^[0-9]{11}+$/", $PhoneNum);
                if (!$Type1 || !$Type2) {
                    if (!preg_match()) {
                        $PhoneNumErr = "Must be valid in Bd Number!";
                        $EmptyField = true;
                    }
                }

                if (empty($_POST["amount"])) {
                    $AmountErr = "You must enter a Phone Number!";
                    $EmptyField = true;
                } else {
                    $Amount = Test_User_Input($_POST["amount"]);
                    if (!preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $Amount) || (int)$Amount < (int)"0") {
                        $AmountErr = "Must be > 0!";
                        $EmptyField = true;
                    }
                }
            }
        }

        if (!$EmptyField) {
            $d = strtotime("today");
            $data = array(
                "Type" => $Category, "To:" => $PhoneNum, "Amount" => $Amount, "Time" => date("Y-m-d h:i:sa", $d)
            );

            if (file_get_contents(filepath) != null) {

                $retrievedData = json_decode(file_get_contents(filepath));
                $retrievedData[] = $data;
                $result = file_put_contents(filepath, json_encode($retrievedData, JSON_PRETTY_PRINT));
                if ($result) {
                    $SuccessfulMessage = "Successfully Saved!";
                } else {
                    $SuccessfulMessage = " Error Saving Information!";
                }
            } else {
                $retrievedData[] = $data;
                $result = file_put_contents(filepath, json_encode($retrievedData, JSON_PRETTY_PRINT));
                if ($result) {
                    $SuccessfulMessage = "Successfully Saved!";
                } else {
                    $SuccessfulMessage = "Error Saving Information!";
                }
            }
        }
    }
}
function Test_User_Input($Data)
{
    return trim(htmlspecialchars(stripcslashes($Data)));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Digital Wallet</title>
</head>

<body>
    <h1>Page 1 [Home]</h1>
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

    <h3>Fund Transfer</h3>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <span>
                <label for="selected_category">Select Catergory:</label>

                <select name="selected_option" id="selected_category" value="">
                    <option default>Select a Value</option>
                    <option name="option_sendMoney">Send Money</option>
                    <option name="option_rechargeMoney">Recharge</option>
                    <option name="option_payMarchent">Merchant Pay</option>
                </select>
                <label for="error_inputCategory" style="color: red;"><?php echo "<b>$CategoryErr</b>" ?></label>
            </span>

            <span>
                <br>
                <br>
                <label for="input_phone">To: </label>
                <input type="text" id="input_phone" name="phoneNum" value="<?php echo $PhoneNum; ?>">
                <label for="error_inputPhone" style="color: red;"><?php echo "<b>$PhoneNumErr</b>" ?></label>
            </span>
            <span>
                <br>
                <br>
                <label for="input_amount">Amount: </label>
                <input type="text" id="input_amount" name="amount" value="<?php echo $Amount; ?>">
                <label for="error_inputAmmount" style="color: red;"><?php echo "<b>$AmountErr</b>" ?></label>
            </span>



            <span>
                <br><br>
                <input type="submit" name="submit"> &nbsp;&nbsp;
                <input type="reset" value="Reset">
            </span>
        </form>
    </div>
</body>

</html>