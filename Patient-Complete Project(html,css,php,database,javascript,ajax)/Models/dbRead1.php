<?php
	function getAllUsers(){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM appointment');
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}

	function getUser($docname){
    $conn = connect();
    $sql = $conn->prepare('SELECT * FROM appointment WHERE docname = ?');
    $sql->bind_param('s', $docname);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
	}
?>

