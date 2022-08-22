<?php 
session_start();
require_once('../model/userModel.php');

// $id = $_REQUEST['id'];
// $password = $_REQUEST['password'];

$type = "Admin";
if(isset($_POST['submit'])){
	if(isset($_POST['id'])){
		$username = $_REQUEST['id'];
	}
	if(isset($_POST['pass'])){
		$password = $_REQUEST['pass'];
	}


	if($username == null || $password == null){
		echo "null username/password...";
	}else{
		
		$result  = login($username, $password);
		// echo $result; exit;
		$status = explode('+',$result);
		if($status[1] == 1){
			setcookie('status', 'true', time()+3600, '/');
			$_SESSION['username']=	$status[0];
			header('location: ../view/adminhome.php');
		}
		if($status[1] == 2){
			setcookie('status', 'true', time()+3600, '/');	
			$_SESSION['username']=	$status[0];

			header('location: ../view/userhome.php');
		}
		else{
			echo "invalid username/password";
		}
	}
}
?>