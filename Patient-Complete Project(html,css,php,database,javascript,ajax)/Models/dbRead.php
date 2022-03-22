<?php
	function getAllUsers(){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM users');
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}

	function getUser($uname){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM users WHERE uname = ?');
    $sql->bind_param('s', $uname);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}
?>

