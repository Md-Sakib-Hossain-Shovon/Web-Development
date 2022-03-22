<?php
require "./../model/homeVar.php";
?>
<!DOCTYPE html>
<html>

<head>

    <title>Home - Digital Wallet</title>
</head>

<body>
    <h1>Page 1 [Home]</h1>
    <h3>Digital Wallet</h3>
    <div class="link">
        <a href="home.php">1. Home</a>
        <a href="tran-history.php">2. Transaction History</a>
    </div>

    <h3>Fund Transfer</h3>
    <div>
        <form method="POST" action="./controller/transaction.php" onsubmit="isvalid(); return false;">
            <span>
                <label for="selected_category">Select Category:</label>

                <select name="tran_method" id="tran_method" value="">
                    <option disabled selected default value="default">--Choose a Category--</option>
                    <option id="sMoney" <?php if (isset($_POST['tran_method']) && $_POST['tran_method'] == 'sMoney') echo 'selected'; ?> value="sMoney">Send Money</option>
                    <option id="rMoney" <?php if (isset($_POST['tran_method']) && $_POST['tran_method'] == 'rMoney') echo 'selected'; ?> value="rMoney">Recharge</option>
                    <option id="mPay" <?php if (isset($_POST['tran_method']) && $_POST['tran_method'] == 'mPay') echo 'selected'; ?> value="mPay">Merchent Pay</option>
                </select>
                <label for="errinputCat" style="color: red;" id="errinputCat"><?php echo "<b>$CatError</b>" ?></label>
            </span>

            <span>
                <br>
                <br>
                <label for="PhoneNum">To: </label>
                <input type="text" id="PhoneNum" name="PhoneNum" value="<?php echo $PhoneNum; ?>">
                <label for="errinputPhonenum" id="errinputPhoneNum" style="color: red;"><?php echo "<b>$PhoneNumError</b>" ?></label>
            </span>
            <span>
                <br>
                <br>
                <label for="Amount">Amount: </label>
                <input type="text" id="Amount" name="Amount" value="<?php echo $Amount; ?>">
                <label for="errinputAm" id="errinputAm" style="color: red;"><?php echo "<b>$AmountError</b>" ?></label>
            </span>



            <span>
                <br><br>
                <button type="submit" name="submit">Submit</button>
            </span>
        </form>

        <div id="result">

        </div>
    </div>

    <script type="text/javascript" src="./js/homeValidation.js"></script>
</body>

</html>