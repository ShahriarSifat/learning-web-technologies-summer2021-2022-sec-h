<?php

	require_once('../model/db.php');

function login($id, $pass){
	
	$conn = getconnection();
	$sql = "select * from users where user_id='{$id}' and password='{$pass}' and type = 'admin'";
	$sql1 = "select * from users where user_id='{$id}' and password='{$pass}' and type = 'user'";
	$result = mysqli_query($conn, $sql);
	$result1 = mysqli_query($conn, $sql1);
	// print_r($result1); exit;
	
    if(mysqli_num_rows($result) > 0){
		{
		$row = mysqli_fetch_assoc($result);

		return $row['name'] . '+1';
		}
	}
	else if(mysqli_num_rows($result1) > 0){
		$row1 = mysqli_fetch_assoc($result1);
		return $row1['name'] . '+2';
	}
}


function signup($id,$name,$pass,$gender,$email,$type){
    $conn = getconnection();
	$sql = "INSERT INTO `users` (`user_id`, `name`, `password`, `type`, `gender`,`email`)
			VALUES ('$id', '$name', '$pass', '$type', '$gender', '$email')";
	$result = mysqli_query($conn, $sql);
	//$count = mysqli_num_rows($result);

    if($result){
		return true;
	}else{
		return false;
	}
}

function changepass($newpass,$confpass){
	$conn = getconnection();
	$sql = "";
	$result = mysqli_query($conn, $sql);
	//$count = mysqli_num_rows($result);

    if($result){
		return true;
	}else{
		return false;
	}

}


?>