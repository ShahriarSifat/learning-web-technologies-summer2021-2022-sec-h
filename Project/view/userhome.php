<?php 
session_start();
	if(isset($_COOKIE['status']))
	{
?>
<html>
	<head>
		<style>
	.form-control{
                        display: block;
                        width: 100%;
                        padding: .75rem .75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: silver;
                        background-clip: padding-box;
                        border: 1px solid #ced4da;
                        
                        appearance: none;
                        border-radius: .25rem;
                }
                </style>

	</head>
    <body>
        <h1 align="center" class="form-control">Welcome Home, <?php echo $_SESSION['username'];?></h1>

		<fieldset class="form-control">
			
                <button class="form-control" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="userprofile.php">Edit Profile</a></button><br>
                <button class="form-control" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="userchangepassword.php">Change Password</a></button><br>
                <button class="form-control" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="logout.php"> Logout </a></button><br>
		</fieldset>
    </body>

</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>