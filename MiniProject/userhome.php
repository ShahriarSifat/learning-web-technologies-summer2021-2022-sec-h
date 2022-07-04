<?php 
	if(isset($_COOKIE['status']))
	{
?>
<html>
    <body>
        <h1 align="center">Welcome Home, <?php echo $_GET['name'];?></h1>

		<fieldset>
			
				<a href="userprofile.php">Edit Profile</a><br>
				<a href="userchangepassword.php">Change Password</a><br>
				<a href="logout.php"> Logout </a>
		</fieldset>
    </body>

</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>