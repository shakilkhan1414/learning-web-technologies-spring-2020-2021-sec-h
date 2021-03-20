<?php
	
	require_once('db.php');

	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from user where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from user where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into user (username,email,password,user_type) values('{$user['username']}','{$user['email']}', '{$user['password']}', '{$user['type']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update user set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type={$user['type']} ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from user where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>