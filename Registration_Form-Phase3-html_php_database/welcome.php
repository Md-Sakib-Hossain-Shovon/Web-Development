<?php
session_start();

$user = $_SESSION['id'];
?>

<!DOCTYPE html>

<head>
    <title>Welcome Everyone</title>
</head>

<body>
    <h1>Welcome Everyone<span style="color: green;"><?php echo $user ?></span> </h1>
</body>

</html>