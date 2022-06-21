<?php 

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$name = $_REQUEST['name'];
$type = 'Admin';

if($id == null || $password == null){
	echo "null username/password...";
}else{
	
	$file = fopen('user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data);
        
		if($id == trim($user[0]) && $password == trim($user[1]) && $type == trim($user[3])) {
            $name = trim([user[2]]);
			setcookie('status', 'true', time()+360, '/');		
			header('location: adminhome.php?name='.$name);
		}else{
            $name = trim([user[2]]);
            setcookie('status', 'true', time()+360, '/');		
			header('location: userhome.php?name='.$name);
        }
	}

	echo "invalid id/password";
}
?>