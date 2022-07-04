<?php 
	if(isset($_COOKIE['status']))
	{
?>


<html>
    <body>
        <form action="userchangepassword.php" method="post" enctype="">
            <table>
                <tr>
                    <td>New Password:</td><td><input type="text" name="newpass" value="" placeholder="Enter New Password"></td>
                </tr>
                <tr>
                    <td>Confirm New Password:</td><td><input type="text" name="confpass" value="" placeholder="Enter New Password Again"></td>
                
                </tr>
            </table>
        </form>
        <a href="userhome.php">Home</a>

    </body>
</html>


<?php 
	}else{
		echo "invalid request!";
	} 
?>
