<?php 

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];

$type = 'Admin';

if($id == null || $password == null){
	echo "null username/password...";
}else{
	
	$file = fopen('user.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data);
        
		if($id == trim($user[0]) && $password == trim($user[1]) && $type == trim($user[3])) {
            $n = trim($user[2]);
			
			setcookie('status', 'true', time()+360, '/');		
			header('location: adminhome.php?name='.$n);
		}elseif($id == trim($user[0]) && $password == trim($user[1]) && $type != trim($user[3])){
            $n = trim($user[2]);
			
            setcookie('status', 'true', time()+360, '/');	
			header('location: userhome.php?name='.$n);
        }else{
			echo "invalid id/password";
	}

	}

}
?>