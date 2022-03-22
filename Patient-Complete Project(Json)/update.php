<?php
include 'partials/header.php';
require __DIR__ . '/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

$errors = [
   
    'uname' => "",
    'email' => "",
    'phone' => "",
   
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        header("Location: index.php");
    }
}

?>

<?php include '_form.php' ?><br>
<p align=center>Already Updated?Return To Home Page<br><a href="index.php">Return</a></p>
