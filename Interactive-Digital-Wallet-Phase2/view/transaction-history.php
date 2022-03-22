<!DOCTYPE html>
<html>

<head>

    <title>Transaction History</title>

</head>

<body>
    <h1>Page 2 [Transaction History]</h1>
    <h3>Digital Wallet</h3>

    <div class="link">

        <a href="home.php">1. Home</a></td>
        <a href="tran-history.php">2. Transaction History</a></td>

    </div>

    <div>
        <input type="date" name="date" id="date" value="">
        <input type="time" name="time" id="time" step="1">
        <button type="submit" onclick="search();">Search</button>
    </div>

    <div id="search-result">

    </div>

    <script src="./js/tran-history.js"></script>
</body>

</html>