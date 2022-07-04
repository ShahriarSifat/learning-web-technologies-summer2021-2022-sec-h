<?php 
	if(isset($_COOKIE['status']))
	{
?>
<html>
    <body>
        <h1 align="center" >Welcome Home, <?php echo $_GET['name'];?></h1>
		
		<fieldset>
			<a href="adminprofile.php">Edit Profile</a><br>
			<a href="adminchangepassword.php">Change Password</a><br>
			<a href="userlist.php">View Users</a><br>
			<a href="logout.php"> Logout </a>
		</fieldset>
    </body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>