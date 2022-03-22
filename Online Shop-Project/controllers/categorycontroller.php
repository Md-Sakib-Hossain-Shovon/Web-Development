<?php
	require_once "models/db_config.php";
	if(isset($_POST["add_category"]))
	{
		addCategory($_POST["name"]);
		header("Location:allcategories.php");
	}
	function addCategory($name){
		$query="insert into categories values(NULL,'$name')";
		execute($query);
		header("Location:allcategories.php");
	}
	function getCategory($id){
		$query="select * from categories where ID='$id'";
		$result=get($query);
		if(count($result)>0){
			return $result[0];
		}
		return false;
	}
	function getAllCategories(){
		$query="select * from categories";
		$result=get($query);
		return $result;
	}
?>