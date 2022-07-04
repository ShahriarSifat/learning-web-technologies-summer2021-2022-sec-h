<?php 
	if(isset($_COOKIE['status']))
	{
?>

<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
        <fieldset action="profile.php" method="post" enctype="">
            <legend>Change Name</legend>
            New Name: <input type= "text" name = "new" value = ""><br>
            <input type = "submit" name = "submit" value = "Submit">
            <a href= "adminhome.php">Home</a>
        </fieldset>

    </body>
</html>



<?php

    $newname = $_POST['new'];
    // $user = "../user.txt";
    // $data = file_get_contents($user);
    $file = fopen('user.txt', 'a');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data);
    $namechange = str_replace($user[2],$newname, $user[2]);
    //fputs($user,$file); 

    }

?>

<?php 
	}else{
		echo "invalid request!";
	} 
?>