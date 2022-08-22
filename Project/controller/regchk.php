<?php 

include '../model/userModel.php';
// require '../view/registration.php';


// if($_SERVER["REQUEST_METHOD"] == "POST"){


// 	if(empty($_POST["name"])){
// 		$err_name = "name Requird";
// 		$hasError = true;
// 	}
	
// 	else if(strlen($_POST["name"]) <=3){
// 		$err_name="name Must be greater than 3 character";
// 		$hasError = true;
// 	}
// 	else{
// 		$name = $_POST["name"];
// 	}
	if(isset($_POST['Signup']))
	{
	if(isset($_POST['id']))
	{
	$id = $_POST['id'];
	echo $id;
	}
	if(isset($_POST['name']))
	{
	$name = $_POST['name'];
	}
	if(isset($_POST['pass']))
	{
	$pass = $_POST['pass'];
	}
	if(isset($_POST['email']))
	{
	$email = $_POST['email'];
	}
	if(isset($_POST['gender']))
	{
	$gender = $_POST['gender'];
	}
	if(isset($_POST['user']))
	{
	$type = $_POST['user'];
	}
	if(!empty($id)&&!empty($name)&&!empty($pass)&&!empty($email)&&!empty($type))
	{
	$result=signup($id,$name,$pass,$gender,$email,$type);
	// if(is_null($result)){
	// nullAlert($result);
	// }
	if($result){
		header("Location: ../view/login.php");
		}
	}else{
		echo "Empty Fields are not accepted";
	}
	}

	
	
// if($id == null || $password == null || $name == null){
// 	echo "null username/password/id...";
// }e
// lse{
//         if($type == "user"){
//             $newUserType = "User";
//         }else{
//             $newUserType = "Admin";
//         }
// 		$user = $id."|".$password."|".$name."|".$newUserType."\r\n";
// 		$file = fopen('user.txt', 'a');
// 		fwrite($file, $user);
// 		if($fname == 'signup'){
// 			header('location: ../view/login.php');
// 		}else{
// 			echo "Invalid user information.";
// 		}

// }

?>
