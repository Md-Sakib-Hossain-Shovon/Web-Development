<?php
session_start();
if (empty($_SESSION['id'])) {
    header("Location: ./login.php");
}
$user = $_SESSION['id'];
?>

<head>
    <title>Welcome Page</title>
</head>

<body>
    <h1>Welcome<span style="color: green;"><?php echo $user ?></span> </h1>
    <div>
        <label for="sUser">Search User</label>
        <input type="text" id="uname" placeholder="Enter Name" name="uname">
        <label for="sUser_err" id="sUser_err"></label>
        <button onclick="fetch()" id="search" value="search" name="search">Search</button>
    </div>
    <div id="result"></div>
    <script src="./Controllers//js/js-search-user.js"></script>
</body>

</html>