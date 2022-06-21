<?php 
	if(isset($_COOKIE['status']))
	{
?>
<html>
    <body>
        <h1 align="center">Welcome Home</h1>
		<a href="profile.php">Profile</a><br>
		<a href="changepassword.php">Change Password</a><br>
        <a href="logout.php"> Logout </a>
    </body>

</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>