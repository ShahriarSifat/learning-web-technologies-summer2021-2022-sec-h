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
                        border-color : black;
                }
                </style>

	</head>
    <body>
        <div  class="form-controll"><h1 align="center"  style="background-color:deepskyblue; color: dimgray ">Change Your Password</h1></div>
        <form action="../controller/updatepass.php" class="form-control" method="post">
            <table>
                <tr>
                    <td>ID:</td><td><input type="text" name="id" class="form-control" value="" placeholder="Enter Your ID"></td>
                </tr>
                <tr>
                    <td>New Password:</td><td><input type="text" class="form-control" name="newpass" value="" placeholder="Enter New Password"></td>
                </tr>
                <tr>
                    <td>Confirm New Password:</td><td><input type="text" name="confpass" class="form-control" value="" placeholder="Enter New Password Again"></td>
                
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="form-control" value="submit"></td>
                
                </tr>
                <input type="hidden" name="type" class="form-control" value="2">
            </table>
        </form>
        <button class="form-control" align="center" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="userhome.php">Home</a></button>

    </body>
</html>


<?php 
	}else{
		echo "invalid request!";
	} 
?>
