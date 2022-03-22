<?php
	function getAllUsers(){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM donor');
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}

	function getUser($doname){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM donor WHERE doname = ?');
    $sql->bind_param('s', $doname);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}
?>

