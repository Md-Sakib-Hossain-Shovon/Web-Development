<?php
	function getAllUsers(){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM doctor');
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}

	function getUser($doname){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM doctor WHERE docname = ?');
    $sql->bind_param('s', $docname);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}
?>

