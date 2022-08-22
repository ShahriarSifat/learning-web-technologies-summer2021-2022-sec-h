<?php 
    session_start();
	if(isset($_COOKIE['status']))
	{
    
?>

<html>
    <head>
        <title>Edit Profile</title>
    
		<style>
	.form-control{
                        display: block;
                        width: 90%;
                        padding: .75rem .75rem;
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #212529;
                        background-color: silver;
                        background-clip: padding-box;
                        border: 1px solid black;
                        
                        appearance: none;
                        border-radius: .25rem;
                }
                </style>

	
    </head>
    <body>
        
        <form action="../controller/updatename.php" class="form-control" method="post" enctype="">
            <legend class="form-control">Change Name</legend>
            New Name: <input type= "text" class="form-control" name = "newname" c value = "" placeholder="Enter New Name"><br>
            <input type = "submit" name = "submit" class="form-control" value = "Submit">
            <input type = "hidden" name = "type" value = "1">
            <button class="form-control" style="width:30%; !important; background-color:deepskyblue; color: red;"><a href="adminhome.php">Go Home</a></button>
            </form>

    </body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>